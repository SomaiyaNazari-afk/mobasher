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
                        <h5 class="title">User Profile</h5>
                    </div>
                    <div class="card-body">
                <div class="form-group col-md-12 row">
                    <small class="has-error text-danger">{{ __('first_name') }}</small>
                    <div class="col-md-8">
                        <strong>{{$user->first_name}}</strong>
                    </div>
                </div>

                <div class="form-group col-md-12 row">
                    <label class="col-md-4 col-form-label text-md-right">{{ __('Last Name: ') }}</label>

                    <div class="col-md-8">
                        <strong>{{$user->last_name}}</strong>
                    </div>
                </div>
                <div class="form-group col-md-12 row">
                    <label class="col-md-4 col-form-label text-md-right">{{ __('Phone: ') }}</label>

                    <div class="col-md-8">
                        <strong>{{$user->phone}}</strong>
                    </div>
                </div>
                <div class="form-group col-md-12 row">
                    <label class="col-md-4 col-form-label text-md-right">{{ __('Email: ') }}</label>

                    <div class="col-md-8">
                        <strong>{{$user->email}}</strong>
                    </div>
                </div>
{{--                <div class="form-group col-md-12 row">--}}
{{--                    <label class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth: ') }}</label>--}}

{{--                    <div class="col-md-8">--}}
{{--                        <strong>{{$user->dob}}</strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-12 row">--}}
{{--                    <label class="col-md-4 col-form-label text-md-right">{{ __('Province: ') }}</label>--}}

{{--                    <div class="col-md-8">--}}
{{--                        <strong>{{$user->province}}</strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group col-md-12 row">--}}
{{--                    <label class="col-md-4 col-form-label text-md-right">{{ __('Country: ') }}</label>--}}

{{--                    <div class="col-md-8">--}}
{{--                        <strong>{{$user->country}}</strong>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div align="right">
                    <a href="{{ route('users.list') }}" class="btn btn-secondary" style="float: right;">Back</a>
                </div></div></div>
        </div> </div>
</div>
@endsection

@section('scripts')

@endsection
