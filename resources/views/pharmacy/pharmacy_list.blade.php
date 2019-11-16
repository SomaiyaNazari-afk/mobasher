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
                    @include('pharmacy.create_pharmacy')
                    </span>
                    <h4 class="card-title"> Pharmacy List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>Pharmacy Name</th>
                            <th>Pharmacy Owner</th>
                            <th>Country</th>
                            <th>Province</th>
                            <th>Address</th>
                            </thead>
                            <tbody>
                            @foreach($pharmacies as $pharmacy)
                            <tr>
                            <td>{{+$key }}</td>
                            <td>{{$pharmacy->name}}</td>
                            <td>{{$pharmacy->owner_id}}</td>
                            <td>{{$pharmacy->country_id}}</td>
                            <td>{{$pharmacy->provine_id}}</td>
                            <td>{{$pharmacy->address}}</td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                        {!! $pharmacies->links() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection


@section('scripts')


@endsection
