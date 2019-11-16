<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register New Pharmacy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Register new pharmacy
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">Register new pharmacy</h5>
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
                        <form action="{{ route('pharmacy.store') }}" method="post">
                            <div class="form-group">
                                @csrf
                                <label for="first_name">Pharmacy Name:</label>
                                <input type="text" class="form-control" name="name"/>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Pharmacy Owner:</label>
                                <input type="" class="form-control" name="owner_id"/>
                            </div>
                            <div class="form-group">
                                <label for="email">Country:</label>
                                <input type="" class="form-control" name="country_id"/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Province:</label>
                                <input type="" class="form-control" name="province_id"/>
                            </div>
                            <div class="form-group">
                                <label for="country">Address :</label>
                                <input type="text" class="form-control" name="country"/>
                            </div>
                    </div>
                </div>
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

@section('scripts')
@endsection
