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
                        <a href="{{url('products/create')}}" class="btn btn-primary">Create</a>
                    </span>
                    <h4 class="card-title"> Products List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            @if(isset($products))
                                <thead class=" text-primary">
                                <th>No.</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Expiration</th>
                                <th>Price</th>
                                <th>Company</th>
                                <th>Currency</th>
                                <th width="400px">Action</th>
                                </thead>
                                <tbody>
                                <tr>
                                @foreach($products as $key => $product)
                                <tr>
                                    <td>{{ $product->file_no  }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->type }}</td>
                                    <td>{{ $product->expiration }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->company }}</td>
                                    <td>{{ $product->currency }}</td>

                                    <td>
                                        <a href="{{ route('products.edit', $product->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>

                                        <a href="{{ route('products.show', $product->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>

                                        <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$product->id}})"
                                           data-target="#deleteModal_{{$product->id}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                </tr>
                                @include('products.delete')
                                </tbody>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    {{$products->links()}}--}}
@endsection

@section('scripts')

@endsection
