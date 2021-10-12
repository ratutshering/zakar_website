<x-app-layout>
    <div class="container" style="padding-left: 15%; padding-right: 15%;">

        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 15px;">
                        {{ session()->get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
         @endif

        <form action="{{route('create_event')}}" method="post" enctype="multipart/form-data" style="margin-bottom:10%;">
            @csrf
            <div class="mb-10" style="margin-top: 5%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">གནམ་ལོ།</h3></label>
                <select class="form-control" id="exampleFormControlInput1" name="year_id" required>
                <option value="">Select Year</option>
                    @foreach($years as $year)
                        <option class="form-control" value="{{$year->id}}">{{$year->dzo_year}}, {{$year->dzo_year_type}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-10" style="margin-top: 3%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">Month</h3></label>
                <select class="form-control" id="exampleFormControlInput1" name="month_id" required>
                <option value="">Select Month</option>
                    @foreach($months as $month)
                        <option class="form-control" value="{{$month->id}}">{{$month->dzo_month}}, {{$month->eng_month}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-10" style="margin-top: 3%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">Day</h3></label>
                <select class="form-control" id="exampleFormControlInput1" name="day_id" required>
                <option value="">Select Day</option>
                   @foreach($days as $day)
                        <option class="form-control" value="{{$day->id}}">{{$day->eng_day}}, {{$day->dzo_day}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-10" style="margin-top: 3%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">Date</h3></label>
                <input type="date" name="date" class="form-control" id="exampleFormControlInput1" placeholder="Date" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">ཚེས།</h3></label>
                <input type="text" name="dzo_date" class="form-control" id="exampleFormControlInput1" placeholder="ཚེས།།" required>
            </div>

            <hr>
            <h3 style="text-align:center; font-weight:bolder;">རྫོང་ཁ། (Dzongkha)</h3>
            <hr>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">སྐར་མ།</h3></label>
                <input type="text" name="dzo_star" class="form-control" id="exampleFormControlInput1" placeholder="སྐར་མ།" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">ཉིནམ།</h3></label>
                <input type="text" name="dzo_cyclic_animal" class="form-control" id="exampleFormControlInput1" placeholder="ཉིནམ།" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">རྟེན་འབྲེལ།</h3></label>
                <input type="text" name="tendrel" class="form-control" id="exampleFormControlInput1" placeholder="རྟེན་འབྲེལ།" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">འཕྲོད་སྦྱོར།</h3></label>
                <input type="text" name="dzo_elemental_combination" class="form-control" id="exampleFormControlInput1" placeholder="འཕྲོད་སྦྱོར།" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">འབད་བཏུབ།</h3></label>
                <input type="text" name="dzo_good_day" class="form-control" id="exampleFormControlInput1" placeholder="འབད་བཏུབ།" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">འབད་མ་བཏུབ།</h3></label>
                <input type="text" name="dzo_bad_day" class="form-control" id="exampleFormControlInput1" placeholder="འབད་མ་བཏུབ།" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">དུས་ཚོད་བཟང་པོ།</h3></label>
                <input type="text" name="dzo_good_time" class="form-control" id="exampleFormControlInput1" placeholder="དུས་ཚོད་བཟང་པོ།" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">བགེགས་ཀྱི་རྒྱུ་ལམ།</h3></label>
                <input type="text" name="dzo_hindrance" class="form-control" id="exampleFormControlInput1" placeholder="བགེགས་ཀྱི་རྒྱུ་ལམ།" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">མཁའ་འགྲོའི་རྒྱུ་ལམ།</h3></label>
                <input type="text" name="dzo_dakini" class="form-control" id="exampleFormControlInput1" placeholder="མཁའ་འགྲོའི་རྒྱུ་ལམ།" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">ཕྱོགས་བཟང་པོ།</h3></label>
                <input type="text" name="dzo_good_direction" class="form-control" id="exampleFormControlInput1" placeholder="ཕྱོགས་བཟང་པོ།" required>
            </div>

            <hr>
            <h3 style="text-align:center; font-weight:bolder;">English</h3>
            <hr>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">Star</h3></label>
                <input type="text" name="eng_star" class="form-control" id="exampleFormControlInput1" placeholder="Star" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">Cyclic Animal</h3></label>
                <input type="text" name="eng_cyclic_animal" class="form-control" id="exampleFormControlInput1" placeholder="Cyclic Animal" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">Elemental Combination</h3></label>
                <input type="text" name="eng_elemental_combination" class="form-control" id="exampleFormControlInput1" placeholder="Elemental Combination" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">Good Day</h3></label>
                <input type="text" name="eng_good_day" class="form-control" id="exampleFormControlInput1" placeholder="Good Day" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">Bad Day</h3></label>
                <input type="text" name="eng_bad_day" class="form-control" id="exampleFormControlInput1" placeholder="Bad Day" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">Good Time</h3></label>
                <input type="text" name="eng_good_time" class="form-control" id="exampleFormControlInput1" placeholder="Good Time" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">Hindrance Avenue</h3></label>
                <input type="text" name="eng_hindrance" class="form-control" id="exampleFormControlInput1" placeholder="Hindrance Avenue" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">Dakini's Avenue</h3></label>
                <input type="text" name="eng_dakini" class="form-control" id="exampleFormControlInput1" placeholder="Dakini's Avenue" required>
            </div>

            <div class="mb-10" style="margin-top: 2%;">
                <label for="exampleFormControlInput1" class="form-label"><h3 style="font-weight: bolder;">Good Direction</h3></label>
                <input type="text" name="eng_good_direction" class="form-control" id="exampleFormControlInput1" placeholder="Good Direction" required>
            </div>

            <div class="mb-10" style="margin-top: 5%; display: flex; justify-content: center; text-align:center;">
                <button type="submit" style="width: 550px;" class="btn btn-primary"><span style="font-size: 16px; font-weight: bolder;">+</span> ADD</button>
            </div>
        </form>
    </div>
</x-app-layout>
