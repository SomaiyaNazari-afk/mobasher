

table.on('click', '.delete', function () {

    $tr = $(this).closest('tr');
    if($($tr).hasClass('child')){
        $tr = $tr.prev('.parent');
    }

    var data = table.row($tr).data();
    console.log(data);

    $('#delete_form').attr('action', '/user'+data[0]); //data is the var declared above
    $('#deleteModal').modal('show');
});
