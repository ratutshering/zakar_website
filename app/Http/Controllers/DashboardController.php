<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Year;
use App\Models\Month;
use App\Models\Event;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index() {
      $events = event::paginate(35);
      return view('dashboard')->with('events', $events);                
  }

  public function destroy($id) {
    $event = event::find($id);
    $event -> delete();
    return redirect()->back()->with('message', 'Deleted Successfully!');
  }

  public function show($id) {
    $event = event::find($id);
    return view('show')->with('event', $event);
  }

  public function update_view($id) {
    $event = event::find($id);
    $months = month::all();
    $days = day::all();
    return view('update')->with('event', $event)
                         ->with('months', $months)
                         ->with('days', $days);
  }

  public function update(Request $request, $id) {

      $data= event::find($id);
      $data->month_id=$request->month_id;
      $data->day_id=$request->day_id;
      $data->date=$request->date;
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

      return redirect()->back()->with('message', 'Updated Successfully!');
  }
}
