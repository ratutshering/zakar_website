<x-app-layout>
    <div class="container" style="padding-left: 5%; padding-right: 5%;">
        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 15px;">
                        {{ session()->get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
         @endif
         @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 15px;">
                        {{ session()->get('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
         @endif
  <div style="float: right; margin-top: 10px; margin-bottom: 20px;">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add + </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Calendar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="insert" method="post" enctype="multipart/form-data">
            @csrf
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Select Month</label>
                <select class="form-control" name="month_id">
                  @foreach($months as $month)
                    <option class="form-control" value="{{$month->id}}">{{$month->eng_month}}</option>
                  @endforeach
              </select>
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Calendar Upload:</label>
                <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file" required></input>
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Add Calendar</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>

  <table class="table" style=" clear:both; text-align:center;">
  <thead class="table-dark">
  <tr>
      <th scope="col">English Month</th>
      <th scope="col">Dzongkha Month</th>
      <th scope="col">Monthly Calendar Images</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($calendars as $calendar)
      <tr>
        <td>{{$calendar->month->eng_month}}</td>
        <td>{{$calendar->month->dzo_month}}</td>
        <td style="text-align:center;"><img style="width:100px;" src="{{asset('storage/'.$calendar->photo)}}" class="card-img-top"></td>
        <td><a class="btn btn-danger" href="delete_calendar/{{$calendar->id}}">Delete</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
    </div>
</x-app-layout>
