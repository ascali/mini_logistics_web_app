var tableData;
var tableDataProvinsi;
var btnSubmit;
var btnSubmitKota;
$(document).ready(function(){
    /*Provinsi*/
        tableDataProvinsi = $('#dataTableProvinsi').DataTable({"destroy": true});

        $('#btnLihatProvinsi').on('click keypress', function() {
            $('#modalLihatProvinsi').modal('show');
            show_provinsi();
        });

        $('#btnTambahProvinsi').on('click keypress', function() {
            btnSubmit = 'tambah';
            $("form").trigger('reset');
            $('#modalTambahProvinsi').modal('show');
        });

        action_provinsi();

    /*Provinsi*/

    /*Kota*/

        $('#btnTambahKota').on('click keypress', () => {
            btnSubmitKota = 'tambah';
            $('#modalTambahKota').modal('show');
            $("form").trigger('reset');
            init();
        });

        tableData = $('#dataTable').DataTable({
          "language": lang_indo_datatables,
          "processing": true,
          "ajax": {
              "url": `${base_url}/kota/read_json`,
              "type": "GET",
          },
          "aoColumns": [{
              "data": "nama_provinsi",
          }, {
              "data": "nama_kota"
          }, {
              "data": null,
              "mRender": function(r){
                  var btnAct = `<a href="javascript:void(0)" onclick="edit_kota(${r.id_kota})">Edit</a> &nbsp | &nbsp`;
                  btnAct += `<a href="javascript:void(0)" onclick="hapus_kota(${r.id_kota})">Hapus</a>`;
                  return btnAct;
              }
          }]
        });

        action_kota();

    /*Kota*/
});

/*Provinsi*/

    function show_provinsi(){
            tableDataProvinsi.clear().destroy();
            tableDataProvinsi = $('#dataTableProvinsi').DataTable({
              "language": lang_indo_datatables,
              "processing": true,
              "ajax": {
                  "url": `${base_url}/provinsi/read_json`,
                  "type": "GET",
              },
              "aoColumns": [{
                  "data": "NAMA_PROVINSI",
              }, {
                  "data": null,
                  "mRender": function(r){
                      var btnAct = `<a href="javascript:void(0)" onclick="edit_provinsi(${r.ID_PROVINSI})">Edit</a> &nbsp | &nbsp`;
                      btnAct += `<a href="javascript:void(0)" onclick="hapus_provinsi(${r.ID_PROVINSI})">Hapus</a>`;
                      return btnAct;
                  }
              }]
            });
    }

    function action_provinsi(){
        $("#form_provinsi").submit(function( event ) {
            event.preventDefault();
            btnSubmit = btnSubmit!='edit'?'create_json':'update_json';
            $.ajax({
                url: `${base_url}/provinsi/${btnSubmit}`,
                type: 'POST',
                data: $('#form_provinsi').serialize(),
                success: function(res) {
                    alert('Berhasil submit data!');
                    $('#modalTambahProvinsi').modal('hide');
                    tableDataProvinsi.ajax.reload(null, false);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Gagal submit data!');
                    tableDataProvinsi.ajax.reload(null, false);
                    console.log('jqXHR.responseJSON '+btnSubmit, jqXHR.responseJSON);
                }
            });
        });
    }

    function edit_provinsi(id){
        btnSubmit = 'edit';
        $("form").trigger('reset');
        $('#modalTambahProvinsi').modal('show');
        $.ajax({
            url: `${base_url}/provinsi/read_json?id=${id}`,
            type: 'GET',
            success: function(res) {
                $('#id_provinsi').val(res.data.ID_PROVINSI);
                $('#nama_provinsi').val(res.data.NAMA_PROVINSI);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('jqXHR.responseJSON '+btnSubmit, jqXHR.responseJSON);
            }
        });
    }

    function hapus_provinsi(id){
        if (confirm('Hapus data ini ?')) {
          $.ajax({
            url: `${base_url}/provinsi/delete_json`,
            type: 'POST',
            data: `id=${id}`,
            success: function(res) {
                alert('Berhasil hapus data!');
                tableDataProvinsi.ajax.reload(null, false);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('jqXHR.responseJSON '+btnSubmit, jqXHR.responseJSON);
            }
          });
        }
    }

/*Provinsi*/


/*Kota*/

function init(){
    $('select[name="id_provinsi"]').html('');
    $.getJSON(`${base_url}/provinsi/read_json`, function(res){
        var $select = $('select[name="id_provinsi"]');
        $select.append('<option selected disabled value="">-- Pilih Provinsi --</option>');
        res.data.map(function(option) {
          var $option = $('<option>');
          $option
            .val(option.ID_PROVINSI)
            .text(option.NAMA_PROVINSI);
          $select.append($option);
        });
    });
}

function action_kota(){

    $("#form_kota").submit(function( event ) {
        event.preventDefault();
        btnSubmitKota = btnSubmitKota!='edit'?'create_json':'update_json';
        $.ajax({
            url: `${base_url}/kota/${btnSubmitKota}`,
            type: 'POST',
            data: $('#form_kota').serialize(),
            success: function(res) {
                alert('Berhasil submit data!');
                $('#modalTambahKota').modal('hide');
                tableData.ajax.reload(null, false);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Gagal submit data!');
                tableData.ajax.reload(null, false);
                console.log('jqXHR.responseJSON '+btnSubmitKota, jqXHR.responseJSON);
            }
        });
    });
}

function edit_kota(id){
    btnSubmitKota = 'edit';
    $("form").trigger('reset');
    init();
    $('#modalTambahKota').modal('show'); 
    $.ajax({
        url: `${base_url}/kota/read_json?id=${id}`,
        type: 'GET',
        success: function(res) {
            $('input[name="id_kota"]').val(res.data.id_kota);
            // $('input[name="id_provinsi"]').val(res.data.id_provinsi);
            $('option[value="'+res.data.id_provinsi+'"]').prop('selected', true);
            $('input[name="nama_kota"]').val(res.data.nama_kota);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('jqXHR.responseJSON '+btnSubmitKota, jqXHR.responseJSON);
        }
    });
}

function hapus_kota(id){
    if (confirm('Hapus data ini ?')) {
      $.ajax({
        url: `${base_url}/kota/delete_json`,
        type: 'POST',
        data: 'id='+id,
        success: function(res) {
            alert('Berhasil hapus data!');
            tableData.ajax.reload(null, false);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('jqXHR.responseJSON '+btnSubmit, jqXHR.responseJSON);
        }
      });
    }
}
/*Kota*/