import 'datatables';
import './dt-bs4';

$(() => {
    $('.datatable').dataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
        }
    });
});
