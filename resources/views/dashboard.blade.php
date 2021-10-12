<x-app-layout>
  <div class="container">
    
  @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 15px;">
                        {{ session()->get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
  @endif

  <table class="table" style="text-align:center; margin-top: 50px;">
  <thead class="table-dark">
  <tr>
      <th scope="col">Year</th>
      <th scope="col">Date</th>
      <th scope="col">Month</th>
      <th scope="col">Day</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
   @foreach($events as $event)
      <tr>
        <td>{{$event->id}}</td>
        <td>{{$event->date}}</td>
        <td>{{$event->month->eng_month}}</td>
        <td>{{$event->day->eng_day}}</td>
        <td style="text-align: center;">
          <a href="{{url('show', $event->id)}}" class="btn btn-primary">View</a>
           <a href="{{url('update_view', $event->id)}}" class="btn btn-warning">Update</a> 
          <a href="{{url('delete', $event->id)}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
    {{ $events->links() }}
</div>
</x-app-layout>
