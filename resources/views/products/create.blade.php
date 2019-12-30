@extends('layouts.master')

@section('title')
    Product Registration
@endsection

@section('content')

<div class="content">
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h5 class="title">Product Registration</h5>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('products.store') }}" >
                {{csrf_field()}}

                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label> Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Product name" value="">
                        </div>
                        @if($errors->has('name'))
                            <small class="has-error text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>
                    <div class="col-md-6 px-1">
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" name="type" id="type" class="form-control" placeholder="Product Type" value="">
                        </div>
                        @if($errors->has('type'))
                            <small class="has-error text-danger">{{ $errors->first('type') }}</small>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label>File No.</label>
                            <input type="text" name="file_no" id="file_no" class="form-control" placeholder="File Number" value="">
                        </div>
                        @if($errors->has('file_no'))
                            <small class="has-error text-danger">{{ $errors->first('file_no') }}</small>
                        @endif
                    </div>
                    <div class="col-md-6 px-1">
                        <div class="form-group">
                            <label>Production Date</label>
                            <input type="date" name="production" id="production" class="form-control" placeholder="Production Date" value="">
                        </div>
                        @if($errors->has('production'))
                            <small class="has-error text-danger">{{ $errors->first('production') }}</small>
                                    @endif
                                </div>

                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Expiry Date</label>
                                <input type="date" name="expiration" id="expiration" placeholder="Expiration Date" class="form-control" value="">
                            </div>
                            @if($errors->has('expiration'))
                                <small class="has-error text-danger">{{ $errors->first('expiration') }}</small>
                            @endif
                        </div>
                        <div class="col-md-6 px-1">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="price" id="price" placeholder="67.6" class="form-control" value="">
                            </div>
                            @if($errors->has('price'))
                                <small class="has-error text-danger">{{ $errors->first('price') }}</small>
                            @endif
                        </div>

                        <div class="col-md-6 pr-1 ">
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" name="company" id="company" placeholder="Company" class="form-control" value="">
                            </div>
                            @if($errors->has('company'))
                                <small class="has-error text-danger">{{ $errors->first('company') }}</small>
                            @endif
                        </div>
                        <div class="col-md-6 px-1">
                            <div class="form-group">
                                <label>Currency</label>
                                <input type="text" name="currency" id="currency" placeholder="Currency" class="form-control" value="">
                            </div>
                            @if($errors->has('currency'))
                                <small class="has-error text-danger">{{ $errors->first('currency') }}</small>
                            @endif
                        </div>
                    <div class="col-md-6 px-1">
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="float: right;" >Add</button>
                        <input class="btn btn-danger" type="reset" style="float: right;" value="Reset">
                        <a href="{{ route('products.list') }}" class="btn btn-secondary" style="float: right;">Back</a>
                        </div>
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


