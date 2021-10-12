<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Year;

class YearController extends Controller
{
    public function index() {
        $years = year::paginate(2);
        return view('year')->with('years', $years);
    }
    public function create_year(Request $request)
    {
        $data=new year;
        $data->dzo_year=$request->dzo_year;
        $data->dzo_year_type=$request->dzo_year_type;
        $data->eng_year_type=$request->eng_year_type;

        $data->save();

        return redirect()->back()->with('message', 'Added Successfully!');
    }

    public function delete_year($id){
        $year = year::find($id);
        $year -> delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
