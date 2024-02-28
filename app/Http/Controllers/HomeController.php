<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;

use App\Models\Booking;

use App\Models\Contact;

class HomeController extends Controller
{
    public function room_details($id)
    {
        $room = Room::find($id);

        return view('home.room_detils',compact('room'));
    }


    public function add_booking(Request $request , $id)
    {
        $data = new Booking;

        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'date|after:startDate',
        ]);

        $data->room_id = $id;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;



        $startDate = $request->startDate;
        $endDate = $request->endDate;

        $isBooked = Booking::where('room_id',$id)
        ->where('start_date','<=',$endDate)
        ->where('end_date','>=',$startDate)->exists();

        if($isBooked)
        {
            return redirect()->back()->with('message','Room is allrady booked !');
        }

        else{

            $data->start_date = $request->startDate;
            $data->end_date = $request->endDate;

            $data->save();

            return redirect()->back()->with('message','Room booked successfully!');

        }

    }

    public function contact(Request $request)
    {
        $contact = new contact;

        $contact->name = $request->name;

        $contact->email = $request->email;

        $contact->phone = $request->phone;

        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('message','Message sent successfully!');
    }
}
