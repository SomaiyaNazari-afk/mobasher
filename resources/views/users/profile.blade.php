@extends('layouts.master')


@section('title')
    User Edit Profile

@endsection

@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                  <form method="POST" action="{{ route('users.profile', $user->id ) }}">
                      @method('PUT')
                      @csrf
                      <div class="modal-body">
                          <div class="card-body">
                              <div class="form-group col-md-18 row">
                                  <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name: ') }}</label>

                                  <div class="col-md-8">
                                      <input id="first_name" value="{{ $user->first_name }}"  type="text" class="form-control" name="first_name">
                                  </div>
                              </div>
                              <div class="form-group col-md-18 row">
                                  <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name: ') }}</label>

                                  <div class="col-md-8">
                                      <input id="last_name" value="{{ $user->last_name }}" type="text" class="form-control" name="last_name" >
                                  </div>
                              </div>
                              <div class="form-group col-md-18 row">
                                  <label for="phone" class="col-md-4 col-form-label text-md-right">{{__('Phone:')}}</label>
                                  <div class="col-md-8">
                                      <input id="phone" value="{{ $user->phone }}" type="text" class="form-control" name="phone" >
                                  </div>
                              </div>
                              <div class="form-group col-md-18 row">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{__('Email:')}}</label>
                                  <div class="col-md-8">
                                      <input id="email" value="{{ $user->email }}" type="text" class="form-control" name="email" >
                                  </div>
                              </div>
                              <div class="form-group col-md-18 row">
                                  <label for="country" class="col-md-4 col-form-label text-md-right">{{__('Country:')}}</label>
                                  <div class="col-md-8">
                                      <input id="country" value="{{ $user->country }}" type="text" class="form-control" name="country">
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <center>
                                      <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                      <button type="submit" class="btn btn-success">Save changes</button>
                                  </center>
                              </div>
                          </div></div>
                  </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                    <h5 class="title">Mike Andrew</h5>
                  </a>
                  <p class="description">
                    michael24
                  </p>
                </div>
                <p class="description text-center">
                  "Lamborghini Mercy
                  <br> Your chick she so thirsty
                  <br> I'm in that two seat Lambo"
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
          </div></div></footer>
              @endsection

              <script src="{!!url('../assets/js/core/jquery.min.js')!!}"></script>
