var tableData;
var tableDataAgen;
var btnSubmit;
var btnSubmitAgen;
$(document).ready(function() { 

    tableDataAgen = $('#dataTableAgen').DataTable({"destroy": true});
    
    tableData = $('#dataTable').DataTable({
        "language": lang_indo_datatables,
        "processing": true,
        "ajax": {
            "url": `${url}/cabang/read_json`,
            "type": "GET"
        },
        "aoColumns": [{
            "data": "nama_cabang",
        },{
            "data": "email_cabang",
        }, {
            "data": "no_telp_cabang",
        }, {
            "data": "NAMA_PROVINSI"
        }, {
            "data": "NAMA_KOTA"
        }, {
            "data": "alamat_cabang"
        }, {
            "data": null,
            "mRender": function(r){
                var Agen  = `<a href="javascript:void(0)" onclick="show_agen(${r.id_cabang}, '${r.nama_cabang}', ${r.ID_KOTA}, '${r.NAMA_KOTA}')">Agen</a>`;
                var Edit = `<a href="javascript:void(0)" onclick="edit_cabang(${r.id_cabang})">Edit</a>`;
                var Hapus = `<a href="javascript:void(0)" onclick="hapus_cabang(${r.id_cabang})">Hapus</a>`;
                return `${Agen} | ${Edit} | ${Hapus}`;
            }
        }]
    });
    
    init_cabang();
    action_cabang();

});


function init_cabang(){

    $("form").trigger('reset');
    $('input').removeClass('is-invalid');
    $('input').next().text('');

    $('#btnTambah').click(function(){
        $("form").trigger('reset');
        $('#myModal').modal('show');
        btnSubmit = 'add';
        show_kota();
    });

}

function show_kota(){
    $.getJSON(`${url}/kota/read_json`, function(res){
        $('#id_kota').html('');
        var data = res.data;
        data.map(function(r){
            var opt = `<option value="${r.id_kota}">${r.nama_kota}</option>`;
            $('#id_kota').append(opt);
        })
    });
}

function show_kota_agen(){
    $.getJSON(`${url}/kota/read_json`, function(res){
        $('#id_kota_agen').html('');
        var data = res.data;
        data.map(function(r){
            var opt = `<option value="${r.id_kota}">${r.nama_kota}</option>`;
            $('#id_kota_agen').append(opt);
        })
    });
}

function action_cabang(){
    $("#form_cabang").submit(function( event ) {
        event.preventDefault();
        btnSubmit = btnSubmit!='edit'?'create_json':'update_json';
        $.ajax({
            url: `${base_url}/cabang/${btnSubmit}`,
            type: 'POST',
            data: $('#form_cabang').serialize(),
            success: function(res) {

                // if (res.status==1) {
                    alert('Berhasil submit data!');
                    $('#myModal').modal('hide');
                    if (btnSubmit==='update_json') {
                        tableData.ajax.reload(null, false);
                    }
                    tableData.ajax.reload(null, false);
                /*} else {
                    for (var i=0; i < res.inputerror.length; i++) {
                        $('[name="'+res.inputerror[i]+'"]').addClass('is-invalid');
                        $('[name="'+res.inputerror[i]+'"]').next().text(res.error_string[i]);
                    }
                }*/
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Gagal submit data!');
                tableData.ajax.reload(null, false);
                console.log('jqXHR.responseJSON '+btnSubmit, jqXHR.responseJSON);
            }
        });
    });
}

function edit_cabang(id){
    btnSubmit = 'edit';
    $('#myModal').modal('show');
    show_kota()
    $.ajax({
        url: `${base_url}/cabang/read_json?id=${id}`,
        type: 'GET',
        success: function(res) {
            $('#id_cabang').val(res.data.id_cabang);
            $('input[name="email_cabang"]').val(res.data.email_cabang);
            $('input[name="password_cabang"]').val(res.data.password_cabang);
            $('option[value="'+res.data.ID_KOTA+'"]').prop('selected', true);
            $('input[name="nama_cabang"]').val(res.data.nama_cabang);
            $('textarea[name="alamat_cabang"]').text(res.data.alamat_cabang);
            $('input[name="no_telp_cabang"]').val(res.data.no_telp_cabang);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('jqXHR.responseJSON '+btnSubmit, jqXHR.responseJSON);
        }
    });
}

function hapus_cabang(id){
    if (confirm('Hapus data ini ?')) {
      $.ajax({
        url: `${base_url}/cabang/delete_json`,
        type: 'POST',
        data: `id_cabang=${id}`,
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

/* END Cabang*/

/*START AGEN*/
function show_agen(id_cabang, cabang, id_kota_cabang, nama_kota){
    $('#titleCabang').html(cabang+', Kota: '+nama_kota);
    $('#modalAgen').modal('show');

    $('#btnTambahAgen').click(function(){
        $("form").trigger('reset');
        $('#myModalAgen').modal('show');
        btnSubmitAgen = 'add';
        show_kota_agen();
        // console.log(id_kota_cabang);
        // $('option[value="'+id_kota_cabang+'"]').prop('selected', true);
        $('#id_cabang_agen').val(id_cabang);
        $('#id_kota_agen').val(id_kota_cabang);
        $('#nama_kota_agen').val(nama_kota);

    });

    action_agen();

    tableDataAgen.clear().destroy();
    tableDataAgen = $('#dataTableAgen').DataTable({
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
                var Edit = `<a href="javascript:void(0)" onclick="edit_agen(${r.id_agen})">Edit</a>`;
                var Hapus = `<a href="javascript:void(0)" onclick="hapus_agen(${r.id_agen})">Hapus</a>`;
                return `${Edit} | ${Hapus}`;
            }
        }]
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
                tableData.ajax.reload(null, false);
                console.log('jqXHR.responseJSON '+btnSubmitAgen, jqXHR.responseJSON);
            }
        });
    });
}

function edit_agen(id){
    btnSubmitAgen = 'edit';
    $('#myModalAgen').modal('show');
    show_kota_agen()
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