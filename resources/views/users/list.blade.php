@extends('layouts.master')


@section('title')
    Dashboard | Netlinks interns
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
                        <a href="{{url('users/create')}}" class="btn btn-primary">Create</a>
                    </span>
                    <h4 class="card-title"> Users List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            @if(isset($users))
                            <thead class=" text-primary">
                            <th>No.</th>
                            <th>Full Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Province</th>
                            <th width="300px">Action</th>
                            </thead>
                            <tbody>
                            <tr>
                            @foreach($users as $key => $user)
                            <tr>
                            <td>{{++$key }}</td>
                            <td>{{ $user->full_name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                                @if($user->country != null)
                                    <td>{{ $user->country->name }}</td>
                                @else
                                    <td>No country</td>
                                @endif

                            @if($user->province != null)
                                <td>{{ $user->province->name }}</td>
                            @else
                                <td>No province</td>
                            @endif
                            <td>
                                <a href="{{ route('users.edit', $user->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>

                                <a href="{{ route('users.show', $user->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>

                                <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$user->id}})"
                                   data-target="#deleteModal_{{$user->id}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                            </tr>
                            @include('users.delete')
                            </tbody>
                            @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{$users->links()}}
@endsection

@section('scripts')

@endsection

<script type="text/javascript" src="{{asset('js/deleteUser.js')}}"></script>





