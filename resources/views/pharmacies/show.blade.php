@extends('layouts.master')

@section('title')
    User Profile
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Pharmacy Profile</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group col-md-12 row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Pharmacy Name: ') }}</label>

                            <div class="col-md-8">
                                <strong>{{$pharmacy->name}}</strong>
                            </div>
                        </div>

                        <div class="form-group col-md-12 row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Pharmacy Owner: ') }}</label>

                            <div class="col-md-8">
                                <strong>{{$pharmacy->user ? $pharmacy->user->first_name. ' '. $pharmacy->user->last_name  : ''}}</strong>
                            </div>
                        </div>
                        <div class="form-group col-md-12 row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Country: ') }}</label>

                            <div class="col-md-8">
                                <strong>{{$pharmacy->country->name}}</strong>
                            </div>
                        </div>
                        <div class="form-group col-md-12 row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Province: ') }}</label>

                            <div class="col-md-8">
                                <strong>{{ $pharmacy->province }}</strong>
                            </div>
                        </div>

                        <div align="right">
                            <a href="{{ route('pharmacies.list') }}" class="btn btn-secondary" style="float: right;">Back</a>
                        </div></div></div>
            </div> </div>
    </div>
@endsection

@section('scripts')

@endsection
