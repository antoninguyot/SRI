import 'datatables.net';

// Extensions
import 'datatables.net-bs4';
import JSZip from 'jszip';
window.JSZip = JSZip;
import 'datatables.net-buttons/js/buttons.html5.min';

$(() => {
    $('.datatable').dataTable({
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
        }
    });

    let table = $('.datatable-export');
    table.dataTable({
        paging: false,
        dom: "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        buttons: [
            {
                extend: 'copy',
                text: 'Copier',
                className: 'btn btn-primary',
                exportOptions: {
                    columns: 'thead th:not(.noExport)'
                }
            },
            {
                extend: 'excel',
                text: 'Excel',
                className: 'btn btn-primary',
                title: table.data('export-name'),
                exportOptions: {
                    columns: 'thead th:not(.noExport)'
                }
            },
            {
                extend: 'csv',
                text: 'CSV',
                className: 'btn btn-primary',
                title: table.data('export-name'),
                exportOptions: {
                    columns: 'thead th:not(.noExport)'
                }
            }
        ],
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
        }
    });

});
