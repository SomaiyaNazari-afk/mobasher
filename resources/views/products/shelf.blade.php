@extends('layouts.master')


@section('title')
    Dashboard | Netlinks interns
@endsection



@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <h4 class="card-title"> Shelf Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>ID</th>
                            <th>Name</th>
                            </thead>
                            <span class="float-right">
                    @include('products.create')
                    </span>
                            <tbody>
                            <tr>
                            @foreach($products as $key => $product)
                                <tr>
                                    <td>{{ +$ID }}</td>
                                    <td>{{ $product->name }}</td>
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
        </div>


@endsection


@section('scripts')


@endsection
