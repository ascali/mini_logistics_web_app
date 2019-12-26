
var btnSubmitCabang;
$(document).ready(function() { 
    btnSubmitCabang = 'edit'; 
    show_kota_cabang(id_provinsi);
    console.log(id_cabang);
    $.ajax({
        url: `${base_url}/cabang/read_json?id=${id_cabang}`,
        type: 'GET',
        success: function(res) {
            $('#id_cabang').val(res.data.id_cabang);
            $('input[name="email_cabang"]').val(res.data.email_cabang);
            $('input[name="password_cabang"]').val(res.data.password_cabang);
            $('select[name="ID_KOTA"] option[value="'+res.data.ID_KOTA+'"]').prop('selected', true);
            $('#id_cabang_cabang').val(res.data.id_cabang);
            $('#id_kota_cabang').val(res.data.ID_KOTA);
            $('#nama_kota_cabang').val(res.data.NAMA_KOTA);

            $('input[name="nama_cabang"]').val(res.data.nama_cabang);
            $('textarea[name="alamat_cabang"]').text(res.data.alamat_cabang);
            $('input[name="no_telp_cabang"]').val(res.data.no_telp_cabang);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('jqXHR.responseJSON '+btnSubmitCabang, jqXHR.responseJSON);
        }
    });    

    init();

});

function init(){
    action_cabang();
}

function show_kota_cabang(id){
    $.getJSON(`${url}/kota/read_provinsi_json?id=${id}`, function(res){
        $('#id_kota_cabang').html('');
        var data = res.data;
        data.map(function(r){
            var opt = `<option value="${r.id_kota}">${r.nama_kota}</option>`;
            $('#id_kota_cabang').append(opt);
        })
    });
}
function action_cabang(){
    $("#form_cabang").submit(function( event ) {
        event.preventDefault(); 
        $.ajax({
            url: `${base_url}/cabang/update_json`,
            type: 'POST',
            data: $('#form_cabang').serialize(),
            success: function(res) {

                // if (res.status==1) {
                    alert('Berhasil submit data!');
                    window.location.reload()
                /*} else {
                    for (var i=0; i < res.inputerror.length; i++) {
                        $('[name="'+res.inputerror[i]+'"]').addClass('is-invalid');
                        $('[name="'+res.inputerror[i]+'"]').next().text(res.error_string[i]);
                    }
                }*/
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Gagal submit data!');
                console.log('jqXHR.responseJSON '+btnSubmitCabang, jqXHR.responseJSON);
            }
        });
    });
}