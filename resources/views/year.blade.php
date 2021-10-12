<x-app-layout>
    <div class="container" style="padding-left: 15%; padding-right: 15%;">
         @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 15px;">
                        {{ session()->get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
         @endif
        <form action="{{route('create_year')}}" method="post" enctype="multipart/form-data" style="margin-bottom:10%;">
                @csrf
                <div class="mb-10" style="margin-top: 8%;">
                    <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">གནམ་ལོ།</h3></label>
                    <input type="text" name="dzo_year" class="form-control" id="exampleFormControlInput1" placeholder="གནམ་ལོ།" required>
                </div>

                <div class="mb-10" style="margin-top: 3%;">
                    <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">ལོ་རྟག</h3></label>
                    <input type="text" name="dzo_year_type" class="form-control" id="exampleFormControlInput1" placeholder="ལོ་རྟག" required>
                </div>

                <div class="mb-10" style="margin-top: 3%;">
                    <label for="exampleFormControlInput1" class="form-label"><h4>Year Sign</h4></label>
                    <input type="text" name="eng_year_type" class="form-control" id="exampleFormControlInput1" placeholder="Year Sign" required>
                </div>
                <div class="mb-10" style="margin-top: 5%; display: flex; justify-content: center; text-align:center;">
                    <button type="submit" style="width: 550px;" class="btn btn-primary"><span style="font-size: 16px; font-weight: bolder;">+</span> ADD</button>
                </div>
        </form>
    </div>
    <hr>
    <div class="container" style="padding-left: 15%; padding-right: 15%; margin-bottom:10%;">
    <table class="table" style="text-align:center; margin-top: 50px;">
        <thead class="table-dark">
        <tr>
            <th scope="col">Year</th>
            <th scope="col">Dzongkha Year Type</th>
            <th scope="col">English Year Type</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($years as $year)
            <tr>
                <td>{{$year->dzo_year}}</td>
                <td>{{$year->dzo_year_type}}</td>
                <td>{{$year->eng_year_type}}</td>
                <td style="text-align: center;">
                <a href="delete_year/{{$year->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        {{ $years->links() }}
    </div>
</x-app-layout>
