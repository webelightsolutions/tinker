@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Customer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('product/create') }}"> Add New Customer</a>
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
            <th>Email</th>
            <th>Contact_number</th>
            <th>Address</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $product->name}}</td>
        <td>{{ $product->email}}</td>
        <td>{{ $product->contact_number}}</td>
        <td>{{ $product->address}}</td>
        <td>
            <a class="btn btn-info" href="{{ url('customer/'.$customer->id.'/show') }}">Show</a>
            <a class="btn btn-primary" href="{{ url('customer/'.$customer->id.'/edit') }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','url' => ['customer/'.$customer->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $customer->render() !!}
@endsection