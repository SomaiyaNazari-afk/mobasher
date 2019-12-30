@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                @include('products.create')
                <h2>Pharmacy Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>s

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>File_No</th>
            <th>Production_Date</th>
            <th>Expiry_Date</th>
            <th>Price</th>
            <th>Company_Name</th>
            <th>Currency</th>


            <th width="280px">Action</th>
        </tr>
        @foreach ($errors as $product)
            <tr>
{{--                'name', 'type','file_no','production_date','expiry_date','price','company_name','currency'--}}
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->type }}</td>
                <td>{{ $product->file_no }}</td>
                <td>{{ $product->production_date }}</td>
                <td>{{ $product->exiry_date }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->company_name }}</td>
                <td>{{ $product->currency}}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $errors->links() !!}

@endsection
