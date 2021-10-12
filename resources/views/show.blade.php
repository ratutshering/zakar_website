<x-app-layout>
    <style>
        .row {
            border: 1px solid black;

        }
        .col {
            border: 1px solid black;
        }
        h5{
            font-weight: bolder;
        }
        </style>

    <div class="container" style="padding-left: 15%; padding-right: 15%; margin-bottom:10%;">
        <br>
        <h3 style="text-align: center;">Dzongkha</h3>
        <hr>
        <div style="text-align: center;">
            <div class="row">
                <div class="col">
                <h5>སྐར་མ།</h5>
                </div>
                <div class="col">
                <h5>{{$event->dzo_star}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <h5>ཉིནམ།</h5>
                </div>
                <div class="col">
                <h5>{{$event->dzo_cyclic_animal}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <h5>རྟེན་འབྲེལ།</h5>
                </div>
                <div class="col">
                <h5>{{$event->tendrel}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <h5>འཕྲོད་སྦྱོར།</h5>
                </div>
                <div class="col">
                <h5>{{$event->dzo_elemental_combination}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <h5>འབད་བཏུབ།</h5>
                </div>
                <div class="col">
                <h5>{{$event->dzo_good_day}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <h5>འབད་མ་བཏུབ།</h5>
                </div>
                <div class="col">
                <h5>{{$event->dzo_bad_day}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <h5>དུས་ཚོད་བཟང་པོ།</h5>
                </div>
                <div class="col">
                <h5>{{$event->dzo_good_time}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <h5>བགེགས་ཀྱི་རྒྱུ་ལམ།</h5>
                </div>
                <div class="col">
                <h5>{{$event->dzo_hindrance}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <h5>མཁའ་འགྲོའི་རྒྱུ་ལམ།</h5>
                </div>
                <div class="col">
                <h5>{{$event->dzo_dakini}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <h5>ཕྱོགས་བཟང་པོ།</h5>
                </div>
                <div class="col">
                <h5>{{$event->dzo_good_direction}}</h5>
                </div>
            </div>

        <br>
        <h3 style="text-align: center;">English</h3>
        <hr>
            <div class="row">
                <div class="col">
                    Star
                </div>
                <div class="col">
                    {{$event->eng_star}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Cyclic Animal
                </div>
                <div class="col">
                    {{$event->eng_cyclic_animal}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Elemental Combination
                </div>
                <div class="col">
                    {{$event->eng_elemental_combination}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Good Day
                </div>
                <div class="col">
                    {{$event->eng_good_day}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Bad Day
                </div>
                <div class="col">
                    {{$event->eng_bad_day}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Good Time
                </div>
                <div class="col">
                    {{$event->eng_good_time}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Hindrance Avenue
                </div>
                <div class="col">
                    {{$event->eng_hindrance}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Dakini's Avenue
                </div>
                <div class="col">
                    {{$event->eng_dakini}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Good Direction
                </div>
                <div class="col">
                    {{$event->eng_good_direction}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
