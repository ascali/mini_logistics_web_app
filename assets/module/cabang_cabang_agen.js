var tableDataAgen;
var btnSubmitAgen;
$(document).ready(function() { 
    console.log(id_cabang);
    console.log(id_kota);
    console.log(id_provinsi);


    $('#btnTambahAgen').click(function(){
        $("form").trigger('reset');
        $('#myModalAgen').modal('show');
        btnSubmitAgen = 'add';
        show_kota_agen(id_provinsi);
        // console.log(id_kota_cabang);
        // $('option[value="'+id_kota_cabang+'"]').prop('selected', true);
        $('#id_cabang_agen').val(id_cabang);
        // $('#id_kota_agen').val(id_kota);
        // $('#nama_kota_agen').val(nama_kota);

    });
    
    tableDataAgen = $('#dataTable').DataTable({
        "language": lang_indo_datatables,
        "processing": true,
        "ajax": {
            "url": `${url}/agen/read_json?id_cabang=${id_cabang}`,
            "type": "GET"
        },
        "aoColumns": [{
            "data": "nama_agen",
        },{
            "data": "email_agen",
        }, {
            "data": "no_telp_agen",
        }, {
            "data": "NAMA_PROVINSI"
        }, {
            "data": "NAMA_KOTA"
        }, {
            "data": "alamat_agen"
        }, {
            "data": null,
            "mRender": function(r){
                var Edit = `<a href="javascript:void(0)" onclick="edit_agen(${r.id_agen}, ${id_provinsi})">Edit</a>`;
                var Hapus = `<a href="javascript:void(0)" onclick="hapus_agen(${r.id_agen})">Hapus</a>`;
                return `${Edit} | ${Hapus}`;
            }
        }]
    });
    
    init();

});

function init(){
    action_agen();
}

function show_kota_agen(id){
    $.getJSON(`${url}/kota/read_provinsi_json?id=${id}`, function(res){
        $('#id_kota_agen').html('');
        var data = res.data;
        data.map(function(r){
            var opt = `<option value="${r.id_kota}">${r.nama_kota}</option>`;
            $('#id_kota_agen').append(opt);
        })
    });
}

function action_agen(){
    $("#form_agen").submit(function( event ) {
        event.preventDefault();
        btnSubmitAgen = btnSubmitAgen!='edit'?'create_json':'update_json';
        $.ajax({
            url: `${base_url}/agen/${btnSubmitAgen}`,
            type: 'POST',
            data: $('#form_agen').serialize(),
            success: function(res) {

                // if (res.status==1) {
                    alert('Berhasil submit data!');
                    $('#myModalAgen').modal('hide');
                    if (btnSubmitAgen==='update_json') {
                        tableDataAgen.ajax.reload(null, false);
                    }
                    tableDataAgen.ajax.reload(null, false);
                /*} else {
                    for (var i=0; i < res.inputerror.length; i++) {
                        $('[name="'+res.inputerror[i]+'"]').addClass('is-invalid');
                        $('[name="'+res.inputerror[i]+'"]').next().text(res.error_string[i]);
                    }
                }*/
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Gagal submit data!');
                tableDataAgen.ajax.reload(null, false);
                console.log('jqXHR.responseJSON '+btnSubmitAgen, jqXHR.responseJSON);
            }
        });
    });
}

function edit_agen(id,id_provinsi){
    btnSubmitAgen = 'edit';
    $('#myModalAgen').modal('show');
    show_kota_agen(id_provinsi)
    $.ajax({
        url: `${base_url}/agen/read_json?id=${id}`,
        type: 'GET',
        success: function(res) {
            $('#id_agen').val(res.data.id_agen);
            $('input[name="email_agen"]').val(res.data.email_agen);
            $('input[name="password_agen"]').val(res.data.password_agen);
            // $('select[name="ID_KOTA_AGEN"] option[value="'+res.data.ID_KOTA+'"]').prop('selected', true);
            $('#id_cabang_agen').val(res.data.id_cabang);
            $('#id_kota_agen').val(res.data.ID_KOTA);
            $('#nama_kota_agen').val(res.data.NAMA_KOTA);

            $('input[name="nama_agen"]').val(res.data.nama_agen);
            $('textarea[name="alamat_agen"]').text(res.data.alamat_agen);
            $('input[name="no_telp_agen"]').val(res.data.no_telp_agen);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('jqXHR.responseJSON '+btnSubmitAgen, jqXHR.responseJSON);
        }
    });
}

function hapus_agen(id){
    if (confirm('Hapus data ini ?')) {
      $.ajax({
        url: `${base_url}/agen/delete_json`,
        type: 'POST',
        data: `id_agen=${id}`,
        success: function(res) {
            alert('Berhasil hapus data!');
            tableDataAgen.ajax.reload(null, false);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('jqXHR.responseJSON '+btnSubmit, jqXHR.responseJSON);
        }
      });
    }
}