@extends('layouts.master')


@section('title')
    Pharmacy Registration
@endsection

@section('content')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Create
    </button>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Pharmacy Registration</h5>
                    </div>
                    <div class="card-body">
                        <form id="register_pharmacy" action="{{ action('UserController@store') }}" method="post">
                            {{csrf_field()}}
                            <section id="owner-details">
                                <p>Pharmacy Owner Details</p>
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
                                </div>
                            </section>
                            <section id="pharmacy-details">
                                <p>Pharmacy Details</p>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Pharmacy Name</label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Pharmacy Address..." />
                                        </div>
                                        @if($errors->has('address'))
                                            <small class="has-error text-danger">{{ $errors->first('address') }}</small>
                                        @endif
                                    </div>
                                    <div class="col-md-6 px-1">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" style="float: right;" >Add</button>
                                            <input type="reset" class="btn btn-danger" style="float: right;" value="Reset"/>
                                            <button type="button" class="btn btn-secondary" style="float: right;">Back</button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div></div></div>
@endsection
