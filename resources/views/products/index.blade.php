@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('product/create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <?php $i = 1; ?>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $product->name}}</td>
        <td>{{ $product->details}}</td>
        <td>
            <a class="btn btn-info" href="{{ url('') }}">Show</a>
            <a class="btn btn-primary" href="{{ url('product/'.$product->id.'/edit') }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','url' => ['product/'.$product->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $products->render() !!}
@endsection