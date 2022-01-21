@extends('layouts.template')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Schedule</h2>
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
  
    <form action="{{ route('schedules.update',$schedule->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="empName" value="{{ $schedule->empName }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Position:</strong>
                    <input type="text" name="position" value="{{ $schedule->position }}" class="form-control" placeholder="Position">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date:</strong>
                    <input type="text" class="form-control" name="date" value="{{ $schedule->date }}" placeholder="Date"></input>
                </div>

        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
        <strong>Day:</strong>
            <select class="form-control" name="day_id">
                <option value="">-- Choose Day --</option>
                @foreach ($days as $id => $name)
                    <option
                        value="{{$id}}" {{ (isset($schedule['day_id']) && $schedule['day_id'] == $id) ? ' selected' : '' }}>{{$name}}</option>
                @endforeach
            </select>
        </div>
        <br>        
        <br>
        </div>
        <br>
        <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Start Time:</strong>
                    <input type="text" name="time_from" class="form-control" value="{{ $schedule->start_time }}" placeholder="Start Time">
                </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Off Time:</strong>
                    <input type="text" name="time_to" class="form-control" value="{{ $schedule->off_time }}"placeholder="Off Time">
                </div>
        </div>
        <br>
        <br>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('schedules.index') }}"> Back</a>
            </div>
        </div>
   
    </form>
@endsection