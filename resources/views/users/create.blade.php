@extends('layouts.master')

@section('title')
    User Registration
@endsection

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">User Registration</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('users.save') }}" >
                            {{csrf_field()}}

                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="first name" value="">
                                        </div>
                                        @if($errors->has('first_name'))
                                            <small class="has-error text-danger">{{ $errors->first('first_name') }}</small>
                                        @endif
                                    </div>
                                    <div class="col-md-6 px-1">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="last name" value="">
                                        </div>
                                        @if($errors->has('last_name'))
                                            <small class="has-error text-danger">{{ $errors->first('last_name') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="+93770000000" value="">
                                        </div>
                                        @if($errors->has('phone'))
                                            <small class="has-error text-danger">{{ $errors->first('phone') }}</small>
                                        @endif
                                    </div>
                                    <div class="col-md-6 px-1">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" id="email" class="form-control" placeholder="you@example.com" value="">
                                        </div>
                                        @if($errors->has('email'))
                                            <small class="has-error text-danger">{{ $errors->first('email') }}</small>
                                        @endif
                                    </div>

                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" name="dob" id="dob" class="form-control" value="">
                                        </div>
                                        @if($errors->has('dob'))
                                            <small class="has-error text-danger">{{ $errors->first('dob') }}</small>
                                        @endif
                                    </div>
                                    <div class="col-md-6 px-1">
                                        <label>Gender</label>
                                        <div class="form-group">
                                            <input type="radio" name="gender" id="gender"/><label>Male</label>
                                            <input type="radio" name="gender" id="gender" /><label>Female</label>
                                        </div>
                                        @if($errors->has('gender'))
                                            <small class="has-error text-danger">{{ $errors->first('gender') }}</small>
                                        @endif
                                    </div>

                                    <div class="col-md-6 px-1">
                                        <div class="form-group">
                                            <label for="id_select" value=""> User Country </label>
                                            <select id="country" name="country" class="form-control input-lg dynamic" data-dependent="province" onchange="getAfghanistanProvinces()">
                                                <option value="">Select a country</option>
                                            </select>
                                        </div>
                                    @if($errors->has('countries'))
                                        <small class="has-error text-danger">{{ $errors->first('countries') }}</small>
                                    @endif
                                </div>
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label for="province" value=""> User Province </label>
                                            <select name="province" id="province" class="form-control">
                                                <option value="">Select a province</option>
                                            </select>
                                            <input class="form-control" placeholder="Type province name" type="tex" id="city" style="display: none" name="city"/>
                                        </div>
                                        @if($errors->has('provinces'))
                                            <small class="has-error text-danger">{{ $errors->first('provinces') }}</small>
                                        @endif
                                    </div>

                                    <div class="col-md-6 px-1">
                                        <div class="form-group">
                                            <label> User Address </label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Pharmacy Address..." />
                                        </div>
                                        @if($errors->has('address'))
                                            <small class="has-error text-danger">{{ $errors->first('address') }}</small>
                                        @endif
                                    </div>
                                        <div class="col-md-6 px-1">
                                            <div class="form-group">
                                                <label> User Type </label>
                                                <input type="text" class="form-control" id="type" name="type" placeholder="Admin/Pharmacy Owner..." />
                                            </div>
                                            @if($errors->has('address'))
                                                <small class="has-error text-danger">{{ $errors->first('address') }}</small>
                                            @endif
                                        </div>
                                    <div class="col-md-6 px-1">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" style="float: right;" >Add</button>
                                            <input class="btn btn-danger" type="reset" style="float: right;" value="Reset">
                                            <a href="{{ route('users.list') }}" class="btn btn-secondary" style="float: right;">Back</a>                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div></div>

@endsection

<script src="{!!url('../assets/js/core/jquery.min.js')!!}"></script>
<script type="text/javascript" src="{{asset('js/pharmacyRegForm.js')}}"></script>
<script type="text/javascript" src="{{asset('js/countryProvince.js')}}"></script>
<script type="text/javascript" src="{{asset('./js/fileUpload.js')}}"></script>
<link rel="stylesheet" href="{{ asset('css/pharmacyRegDesign.css') }}" />


