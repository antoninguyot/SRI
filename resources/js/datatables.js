import 'datatables';
import './datatables/bootstrap';

$(() => {
    $('.datatable').dataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
        }
    });
});
