<?php

namespace App\Http\Controllers;

use App\Country;
use App\SchedulePickup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSchedulePickup;
use App\States;

use Auth;

class SchedulePickupController extends Controller
{
    public function ajex(Request $request)
    {
        $data = array($request);
        $schedule_package = SchedulePickup::find(1);
        $this->sendEmailPickup($schedule_package);
        return response()->json([ 'error'=>'0', 'name'=>$request->name]);
    }

    public function mail()
    {
        return view('email.schedule-pickup');
    }

    public function index()
    {
        $countries = Country::orderBy('name','asc')->get();
        $states = States::orderBy('name','asc')->get();
        return view('schedule-pickup.schedule-pickup')->with(['countries'=>$countries,'states'=>$states]);
    }

    public function submit(Request $request)
    {
        $special_items = "";
        $body = $request->all();
        unset($body['_token']);
        $schedule_package = new SchedulePickup($body);
        if($request->home_made)
        {
            $special_items = $special_items.$request->home_made.",";
        }
        if($request->branded_food_items)
        {
            $special_items = $special_items.$request->branded_food_items.",";
        }
        if($request->liquid_items)
        {
            $special_items = $special_items.$request->liquid_items.",";
        }
        if($request->medicine_items)
        {
            $special_items = $special_items.$request->medicine_items.",";
        }
        if($request->electronics)
        {
            $special_items = $special_items.$request->electronics.",";
        }
        if($request->other)
        {
            $special_items = $special_items.$request->other.",";
        }

        $schedule_package->special_items = $special_items;

        $schedule_package->save();

        $this->sendEmailSchedulePickup($schedule_package);

        return redirect(route('schedulePickup.confirmPickup'));
    }

    public function sendEmailPickup($schedule_package)
    {
        Mail::to($schedule_package->email)->bcc('vikas.kumar@shoppre.com')->send(new EmailSchedulePickup($schedule_package));
    }

     public function sendEmailSchedulePickup($schedule_package)
    {             
        Mail::to($schedule_package->email)->bcc('support@shoppre.com')->send(new EmailSchedulePickup($schedule_package));
    }

    public function confirm()
    {
        return view('schedule-pickup.confirm-pickup');
    }
}
