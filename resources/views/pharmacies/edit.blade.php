@extends('layouts.master')

@section('title')
    Edit Pharmacy Data
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Edit Pharmacy Data</h5>
                </div>
                <div class="card-body">
                <form method="POST" action="{{ route('pharmacies.update', $pharmacy->id )}}">
                    @csrf
                    @method('PUT')

                    <section id="pharmacy-details">
                        <p><strong>Edit Pharmacy Details</strong></p>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Pharmacy Name</label>
                                    <input type="text" name="name" id="name" value="{{ $pharmacy->name }}" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6 px-1">
                                <div class="form-group">
                                    <label for="id_select" value=""> Pharmacy Country </label>
                                    <select id="country" name="country" class="form-control input-lg dynamic" data-dependent="province" onchange="getAfghanistanProvinces()">
                                        <option value="">Select a country</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="province" value=""> Pharmacy Province </label>
                                    <select name="province" id="province" class="form-control">
                                        <option value="">Select a province</option>
                                    </select>
                                    <input class="form-control" placeholder="Type province name" type="text" id="city" style="display: none" name="city"/>
                                </div>
                            </div>
                            <div class="col-md-6 px-1">
                                <div class="form-group">
                                    <label> Pharmacy Address </label>
                                    <input type="text" class="form-control" id="address" value="{{ $pharmacy->address }}" name="address" />
                                </div>
                            </div>
                            <div class="col-md-6 px-1">
                                <label> Pharmacy Logo </label>
                                <input type="file" id="logo" name="logo" value="" class="form-control" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                        </div>
                        <center>
                            <button type="reset" class="btn btn-info" data-dismiss="modal" style="float: right;">Cancel</button>
                            <button type="submit" class="btn btn-success" style="float: right;">Save changes</button>
                            <a href="{{ route('pharmacies.list') }}" class="btn btn-secondary" style="float: right;">Back</a>
                        </center>
                    </section>
            </form>
        </div> </div>
        </div></div></div>

@endsection

@section('scripts')
@endsection

<script src="{!!url('../assets/js/core/jquery.min.js')!!}"></script>
<script type="text/javascript" src="{{asset('js/pharmacyRegForm.js')}}"></script>
<script type="text/javascript" src="{{asset('js/countryProvince.js')}}"></script>


{{--<section id="owner-details">--}}
{{--                        <p><strong>Edit Pharmacy Owner Details</strong></p>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6 pr-1">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>First Name</label>--}}
{{--                                    <input type="text" name="first_name" id="first_name" value="{{ $pharmacy->user->first_name }}" class="form-control" >--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 px-1">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Last Name</label>--}}
{{--                                    <input type="text" name="last_name" id="last_name" value="{{ $pharmacy->user->last_name }}" class="form-control" >--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6 pr-1">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Phone</label>--}}
{{--                                    <input type="text" name="phone" id="phone" value="{{ $pharmacy->user->phone }}" class="form-control" >--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 px-1">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Email</label>--}}
{{--                                    <input type="text" name="email" id="email" value="{{ $pharmacy->user->email }}" class="form-control" >--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </section>--}}
