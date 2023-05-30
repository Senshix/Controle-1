<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class ControlEvent extends Controller
{
    public function createTask(){
        return view('welcome');
    }
    public function postcreateTask(Request $request){
        $request->validate([
            'title'=>'required|min:5',
        ]);

        $event = new Event();

        $event->title = $request->title;

        $event->description = $request->description;

        $event->Start_Date = $request->Start_Date;

        $event->End_date = $request->End_date;

        $event->Price = $request->Price;

        $event->save();
        return redirect()->route('route-all-task');
    }
}
