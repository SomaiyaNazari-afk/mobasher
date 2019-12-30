<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register New Medicine</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<!-- Button trigger modal -->


<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
    Register new medicine
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">Register new medicine</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card uper">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <form action="{{ route('products.store') }}" method="post">
                            <div class="form-group">
                                @csrf
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name"/>
                            </div>
                            <div class="form-group">
                                <label for="type">Type:</label>
                                <input type="text" class="form-control" placeholder="Type" name="type"/>
                            </div>
                            <div class="form-group">
                                <label for="file_no">File_No:</label>
                                <input type="text" class="form-control" name="file_no"/>
                            </div>
                            <div class="form-group">
                                <label for="production_date">Production_Date:</label>
                                <input type="date" class="form-control" name="production_date"/>
                            </div>
                            <div class="form-group">
                                <label for="expiry_date">Expiry_Date :</label>
                                <input type="date" class="form-control" name="expiry_date"/>
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="text" class="form-control" name="price"/>
                            </div>
                            <div class="form-group">
                                <label for="company_name">Company_Name:</label>
                                <input type="text" class="form-control" name="company_name"/>
                            </div>
                            <div class="form-group">
                                <label for="currency">Currency:</label>
                                <input type="text" class="form-control" name="currency"/>
                            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>

    </div>
    </form>
</div>
</body>
</html>
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


{{----}}
@section('scripts')
@endsection
