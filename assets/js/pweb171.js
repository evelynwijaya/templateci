/*menampilkan daftar user pada halaman listmhs tabel #userlist */
$('#listuser').DataTable( {
    "ajax": {
                "url" : "/api/listmhs",
                "type": "POST",
                "data" : []
            },
    "sAjaxDataProp": "data",
    "columns": [ { "data": "namamhs"},
                 { "data": "email" }
              ]
} );
