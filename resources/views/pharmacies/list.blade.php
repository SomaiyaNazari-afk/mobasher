@extends('layouts.master')


@section('title')
    Register new pharmacy
@endsection

@section('content')
    <div id="app">
        @include('flashMessage')
        @yield('content')
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="float-right">
                        <a href="{{url('pharmacies/create')}}" class="btn btn-primary">Create</a>
                    </span>
                    <h4 class="card-title"> Pharmacy List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>No.</th>
                            <th>Name</th>
                            <th>Owner</th>
                            <th>Country</th>
                            <th>Province</th>
                            <th>Address</th>
                            <th width="300px">Action</th>
                            </thead>
                            <tbody>
                            @foreach($pharmacies as $key=> $pharmacy)
                            <tr>
                            <td>{{++$key }}</td>
                            <td>{{$pharmacy->name}}</td>
                            <td>{{$pharmacy->user ? $pharmacy->user->first_name. ' '. $pharmacy->user->last_name  : ''}}</td>
                            <td>{{$pharmacy->country->name}}</td>
                                @if($pharmacy->province != null)
                                    <td>{{ $pharmacy->province->name }}</td>
                                @else
                                    <td>No province</td>
                                @endif
                            <td>{{$pharmacy->address}}</td>

                            <td>
                                <a href="{{ route('pharmacies.edit', $pharmacy->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>

                                <a href="{{ route('pharmacies.show', $pharmacy->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>

                                <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$pharmacy->id}})"
                                   data-target="#deleteModal_{{$pharmacy->id}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                            </tr>
                            @include('pharmacies.delete')
{{--                            @include('pharmacies.show')--}}
                            </tbody>
                            @endforeach
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
{{$pharmacies->links()}}
@endsection


@section('scripts')


@endsection

<script type="text/javascript" src="{{asset('js/deletePharmacy.js')}}"></script>
