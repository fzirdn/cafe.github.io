@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Employee Schedule</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('schedules.create') }}"> Add New Schedule</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Position</th>
            <th>Date</th>
            <th>Day</th>
            <th>Start Time</th>
            <th>Off Time</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($schedule as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->empName }}</td>
            <td>{{ $s->position }}</td>
            <td>{{ $s->date }}</td>
            <td>{{ $s->day_id }}</td>
            <td>{{ $s->start_time }}</td>
            <td>{{ $s->off_time }}</td>
            <td>
                <form action="{{ route('schedules.destroy',$s->id) }}" method="POST">

                  <a class="btn btn-info" href="{{ route('schedules.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('schedules.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    @endsection