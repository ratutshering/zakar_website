<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Year;
use App\Models\Month;
use App\Models\Day;
use App\Models\Event;


class EventController extends Controller
{
    public function index(){
        $days = day::all();
        $years = year::all();
        $months = month::all();
        return view('event')->with('days', $days)
                            ->with('years', $years)
                            ->with('months', $months);
    }

    public function create_event(Request $request)
    {
        $request->validate([
            'day_id' => 'required',
            'month_id' => 'required',
            'year_id' => 'required'
        ]);

        $data=new event;
        $data->month_id=$request->month_id;
        $data->year_id=$request->year_id;
        $data->day_id=$request->day_id;
        $data->date=$request->date;
        $data->dzo_date=$request->dzo_date;
        $data->dzo_star=$request->dzo_star;
        $data->dzo_cyclic_animal=$request->dzo_cyclic_animal;
        $data->tendrel=$request->tendrel;
        $data->dzo_elemental_combination=$request->dzo_elemental_combination;
        $data->dzo_good_day=$request->dzo_good_day;
        $data->dzo_bad_day=$request->dzo_bad_day;
        $data->dzo_good_time=$request->dzo_good_time;
        $data->dzo_cyclic_animal=$request->dzo_cyclic_animal;
        $data->dzo_hindrance=$request->dzo_hindrance;
        $data->dzo_dakini=$request->dzo_dakini;
        $data->dzo_good_direction=$request->dzo_good_direction;
        $data->eng_star=$request->eng_star;
        $data->eng_cyclic_animal=$request->eng_cyclic_animal;
        $data->dzo_elemental_combination=$request->dzo_elemental_combination;
        $data->eng_elemental_combination=$request->eng_elemental_combination;
        $data->eng_good_day=$request->eng_good_day;
        $data->eng_bad_day=$request->eng_bad_day;
        $data->eng_good_time=$request->eng_good_time;
        $data->eng_hindrance=$request->eng_hindrance;
        $data->eng_dakini=$request->eng_dakini;
        $data->eng_good_direction=$request->eng_good_direction;
        $data->save();

        return redirect()->back()->with('message', 'Added Successfully!');
    }


    //for API

    public function get_event($date){
        $event = event::join('years', 'years.id', '=', 'events.year_id')
                        ->join('months', 'months.id', '=', 'events.month_id')
                        ->join('days', 'days.id', '=', 'events.day_id')
                        ->where('date','=', $date)->get();
        return $event;
      } 
}
