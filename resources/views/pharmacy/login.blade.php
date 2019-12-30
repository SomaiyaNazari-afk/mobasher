@extends('layouts')

{{--@section('content')--}}

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Login
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Login</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Enter Email</label>
                        <input type="email" name="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="password" class="form-control" />
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="login" class="btn btn-primary" value="login" />
            </div>
            </form>
        </div>
    </div>
</div>

{{--@endsection--}}
