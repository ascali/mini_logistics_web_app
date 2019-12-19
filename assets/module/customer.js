var table;
$(document).ready(function() { 
    table = $('#dataTable').DataTable({
        "language": lang_indo_datatables,
        /*"deferRender": true,
        "ajax": {
            "url": `${url}/customer/read_json`,
            "type": "GET"
        },
        "aoColumns": [{
            "data": "nama_cust",
        },{
            "data": "email_cust",
        }, {
            "data": "no_telp_cust",
        }, {
            "data": "perusahaan_cust"
        }, {
            "data": "kota_cust"
        }]*/
    });

} );