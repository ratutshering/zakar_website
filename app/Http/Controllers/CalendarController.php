<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Month;
use App\Models\Calendar;

class CalendarController extends Controller
{
    public function index(){
        $months = month::all();
        $calendars = calendar::all();
        return view('calendar')->with('months', $months)
                                ->with('calendars', $calendars);
      }
    
      public function create(Request $request) {
           $request->validate([
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           ]);

           $fileName = $request->photo . '.' . $request->file('photo')->extension();

           $res = Calendar::where("month_id","=", $request->month_id)->exists();
           $res2 = Calendar::select('limit')->where("month_id","=", $request->month_id)->pluck('limit');
           if($res == "true"){
             if($res2[0] == 1){
              return redirect()->back()->with('error', 'Please Delete selected months calendar first!!'); 
              } else {
                $imageUrl = $this->storeImage($request);

                $data=new calendar;
                $data->month_id=$request->month_id;
                $data->photo=$imageUrl;
                $data->save();
                return redirect()->back()->with('message', 'Added Successfully!');
              }
          } else {
            $imageUrl = $this->storeImage($request);

            $data=new calendar;
            $data->month_id=$request->month_id;
            $data->photo=$imageUrl;
            $data->save();
            return redirect()->back()->with('message', 'Added Successfully!');
          }
      }

      protected function storeImage(Request $request) {
        $path = $request->file('photo')->store('public/calendar');
        return substr($path, strlen('public/'));
      }

      public function delete_calendar($id) {
        $calendar = calendar::find($id);
        unlink("storage/".$calendar->photo);
        $calendar -> delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
      }

      //for API

      public function get_calendar($month){
        $calendar = calendar::where('month_id','=', $month)->get();
        return $calendar;
      }
}
