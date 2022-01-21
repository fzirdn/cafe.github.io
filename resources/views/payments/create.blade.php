@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Employee Payment</h2>
        </div>
       
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('payments.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="empName" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="text" class="form-control" name="date" placeholder="Date">
        </div>
        </div>

        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
        <strong>Day:</strong>
            <select class="form-control" name="day_id">
                <option value="">-- Choose Day --</option>
                @foreach ($days as $id => $name)
                    <option
                        value="{{$id}}" {{ (isset($payment['day_id']) && $payment['day_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select>
        </div>
        <br>        
        <br>
        </div>
        <br>

        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Payment:</strong>
                <input type="text" class="form-control" name="pay" placeholder="Payment">
        </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Bonus:</strong>
                <input type="text" class="form-control" name="bonus" placeholder="Bonus">
        </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Total Payment:</strong>
                <input type="text" name="total" class="form-control" placeholder="Total Payment">
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('payments.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection