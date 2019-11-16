@extends('layouts.master')


@section('title')
    Dashboard | Netlinks interns
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="float-right">
                    @include('pharmacy.create')
                    </span>
                    <h4 class="card-title"> Users List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>Firs Name</th>
                            <th>Last Name</th>
                            <th>phone</th>
                            <th>Email</th>
                            <th>Country</th>

                            </thead>
                            <tbody>
                            <tr>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


@endsection


@section('scripts')


@endsection
