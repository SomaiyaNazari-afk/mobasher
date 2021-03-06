<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<!-- Modal delete-->

    <div class="modal fade text-danger" id="deleteModal_{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ">
            <!-- Modal content-->
            <form action="" id="deleteForm" method="post">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
                    </div>
                    <div class="modal-body">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <p class="text-center">Are You Sure Want To Delete User?</p>
                    </div>
                    <div class="modal-footer">
                        <center>
                            <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script type="text/javascript">
    function deleteData(id)
    {
        var id = id;
        var url = '{{ route("users.destroy", ":id") }}';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function formSubmit()
    {
        $("#deleteForm").submit();
    }
</script>
