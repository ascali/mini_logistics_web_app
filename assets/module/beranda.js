/* globals Chart:false, feather:false */
(function () {
  'use strict'
  // Graphs
  // var ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  // var myChart = new Chart(ctx, {
  //   type: 'line',
  //   data: {
  //     labels: [
  //       'Sunday',
  //       'Monday',
  //       'Tuesday',
  //       'Wednesday',
  //       'Thursday',
  //       'Friday',
  //       'Saturday'
  //     ],
  //     datasets: [{
  //       data: [
  //         15339,
  //         21345,
  //         18483,
  //         24003,
  //         23489,
  //         24092,
  //         12034
  //       ],
  //       lineTension: 0,
  //       backgroundColor: 'transparent',
  //       borderColor: '#007bff',
  //       borderWidth: 4,
  //       pointBackgroundColor: '#007bff'
  //     }]
  //   },
  //   options: {
  //     scales: {
  //       yAxes: [{
  //         ticks: {
  //           beginAtZero: false
  //         }
  //       }]
  //     },
  //     legend: {
  //       display: false
  //     }
  //   }
  // })
}())
var table;
$(document).ready(function() { 
    table = $('#dataTable').DataTable({
        "language": lang_indo_datatables,
        "deferRender": true,
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
        }]
    });

} );