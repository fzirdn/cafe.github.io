@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Employee</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employees.create') }}"> Add New Employee</a>
            </div>
        </div>
    </div>
    <br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>IC Number</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Position</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employee as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->empName }}</td>
            <td>{{ $s->empEmail }}</td>
            <td>{{ $s->empIC }}</td>
            <td>{{ $s->empPhone }}</td>
            <td>{{ $s->empAddress }}</td>
            <td>{{ $s->position }}</td>
            <td>
                <form action="{{ route('employees.destroy',$s->id) }}" method="POST">

                  <a class="btn btn-info" href="{{ route('employees.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('employees.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    @endsection