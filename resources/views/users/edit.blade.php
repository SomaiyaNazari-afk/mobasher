@extends('layouts.master')

@section('title')
   Edit User Profile
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
                        <form method="POST" action="{{ route('users.update', $user->id )}}" >

                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" id="first_name" value="{{ $user->first_name }}" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6 px-1">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" id="last_name" value="{{ $user->last_name }}" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" id="phone" value="{{ $user->phone }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 px-1">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" id="email" value="{{ $user->email }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" name="dob" id="dob" value="{{ $user->dob }}" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6 px-1">
                                    <label>Gender</label>
                                    <div class="form-group">
                                        <input type="radio" name="gender" id="gender"/><label>Male</label>
                                        <input type="radio" name="gender" id="gender" /><label>Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label for="id_select" value=""> User Country </label>
                                        <select id="country" name="country" class="form-control input-lg dynamic" data-dependent="province" onchange="getAfghanistanProvinces()">
                                            <option value="">Select a country</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 px-1">
                                    <div class="form-group">
                                        <label for="province" value=""> User Province </label>
                                        <select name="province" id="province" class="form-control">
                                            <option value="">Select a province</option>
                                        </select>
                                        <input class="form-control" placeholder="Type province name" type="tex" id="city" style="display: none" name="city"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label> User Address </label>
                                        <input type="text" value="{{ $user->address  ? $user->address : 'NA' }}"  class="form-control" id="address" name="address" />
                                    </div>
                                </div>
                                <div class="col-md-6 px-1">
                                    <div class="form-group">
                                        <label> User Type </label>
                                        <input type="text" value="{{ $user->user_type ? $user->user_type : 'Not Admin'}}" class="form-control" id="type" name="type"  />
                                    </div>
                                </div>
                            </div>
                            <center>
                                <button type="reset" class="btn btn-info" data-dismiss="modal" style="float: right;">Cancel</button>
                                <button type="submit" class="btn btn-success" style="float: right;">Save changes</button>
                                <a href="{{ route('users.list') }}" class="btn btn-secondary" style="float: right;">Back</a>
                            </center>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="{{URL::asset('assets/img/bg5.jpg')}}" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3CIw5UGiSVZmbY8eskArTjUjcUy0z1miIkKfa1qtdNozjp9G4iA&s" alt="...">
                                <h6>{{ $user->full_name }}</h6>
                            </a>
                            <p class="description">
                            <br>

                            <p>Phone: <td>{{ $user->phone }}</td></p>
                            <p>Email: <td>{{ $user->email }}</td></p>

                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="button-container">
                        <a href="https://en-gb.facebook.com/login" class="btn btn-neutral btn-icon btn-round btn-lg">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/login?lang=en" class="btn btn-neutral btn-icon btn-round btn-lg">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://accounts.google.com" class="btn btn-neutral btn-icon btn-round btn-lg">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection

<script src="{!!url('../assets/js/core/jquery.min.js')!!}"></script>
<script type="text/javascript" src="{{asset('js/pharmacyRegForm.js')}}"></script>
<script type="text/javascript" src="{{asset('js/countryProvince.js')}}"></script>
