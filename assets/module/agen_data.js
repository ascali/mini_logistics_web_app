
var btnSubmitCabang;
$(document).ready(function() { 
    btnSubmitCabang = 'edit'; 
    show_kota_agen(id_provinsi);
    console.log(id_cabang);
    $.ajax({
        url: `${base_url}/agen/read_json?id=${id_agen}`,
        type: 'GET',
        success: function(res) {
            $('#id_agen').val(res.data.id_agen);
            $('input[name="email_agen"]').val(res.data.email_agen);
            $('input[name="password_agen"]').val(res.data.password_agen);
            $('select[name="ID_KOTA_AGEN"] option[value="'+res.data.ID_KOTA+'"]').prop('selected', true);
            $('#id_agen_agen').val(res.data.id_agen);
            $('#id_kota_agen').val(res.data.ID_KOTA);
            $('#nama_kota_agen').val(res.data.NAMA_KOTA);

            $('input[name="nama_agen"]').val(res.data.nama_agen);
            $('textarea[name="alamat_agen"]').text(res.data.alamat_agen);
            $('input[name="no_telp_agen"]').val(res.data.no_telp_agen);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('jqXHR.responseJSON '+btnSubmitCabang, jqXHR.responseJSON);
        }
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
        $.ajax({
            url: `${base_url}/agen/update_json`,
            type: 'POST',
            data: $('#form_agen').serialize(),
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