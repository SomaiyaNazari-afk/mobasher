<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register New User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Register new user
</button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">Register new user</h5>
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
                                <label for="first_name">First Name:</label>
                                <input type="text" class="form-control" name="first_name"/>
                            </div>
                                <div class="form-group">
                                <label for="last_name">Last Name:</label>
                                <input type="text" class="form-control" name="last_name"/>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address:</label>
                                    <input type="text" class="form-control" name="email"/>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="text" class="form-control" name="phone"/>
                                </div>
                            <div class="form-group">
                                <label for="country">Country :</label>
                                <input type="text" class="form-control" name="country"/>
                            </div>
                            <div class="form-group">
                                <label for="city">City:</label>
                                <input type="text" class="form-control" name="city"/>
                            </div>
                                <div class="form-group">
                                    <label for="gender">Date of Birth:</label>
                                    <input type="date" class="form-control" name="dob"/>
                                </div>
                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <div class="form-group">
                                    <input type="radio" name="gender" /> <label>Male</label>
                                    <input type="radio" name="gender" /> <label>Female</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" style="height:100px;" name="address"/>
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
