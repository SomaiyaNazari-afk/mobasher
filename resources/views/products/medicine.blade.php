@extends('layouts.master')


@section('title')
    Dashboard | Netlinks interns
@endsection



@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <h4 class="card-title"> Medicine Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>No.</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>File-No</th>
                            <th>Production Date</th>
                            <th>Expiry Date</th>
                            <th>Price</th>
                            <th>Company Name</th>
                            <th>Currency</th>
                            </thead>
                            <span class="float-right">
                    @include('products.create')
                    </span>
                            <tbody>
                            <tr>
                            @foreach($products as $key => $product)
                                <tr>
                                    <td>{{ +$key }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->type }}</td>
                                    <td>{{ $product->file_no }}</td>
                                    <td>{{ $product->production_date }}</td>
                                    <td>{{ $product->expiry_date }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->company_name }}</td>
                                    <td>{{ $product->currency}}</td>
                                    <td>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
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
