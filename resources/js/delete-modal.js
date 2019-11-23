$('#delete-modal').on('show.bs.modal', function (event) {
    let button = $(event.relatedTarget);
    let name = button.data('delete');
    let id = button.data('id');

    let form = $(this).find('form');
    let action = form.attr('action');
    form.attr('action', action + '/' + name + '/' + id);
});
