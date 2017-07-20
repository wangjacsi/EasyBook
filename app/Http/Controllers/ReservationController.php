<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Validator;

class ReservationController extends Controller
{
    public function __invoke(){
        return Reservation::all();
    }


    public function index(Request $request){

        /*echo '<pre>';
        print_r($request->user());
        print_r($request->user()->reservations()->with('users')->get());

        return $request->user()->reservations()->with('users')->get();


        echo '</pre>';
*/
        return view('reservation.index');/*->with(['user' => $user,
                                                    'owner' => $owner,
                                                'nation' => $nation['name']['common']]);*/


    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'start_daytime' => 'required|date_format:Y-m-d H:i:s',
            'end_daytime' => 'required|date_format:Y-m-d H:i:s',
        ]);
        if ($validator->fails()) {
            return response()->json(['result' => 'fail', 'errors' => $validator->messages()], 200);
        }

        // create new reservation
        $reservation = Reservation::create([
            'title' => $request->title,
            'start_daytime' => $request->start_daytime,
            'end_daytime' => $request->end_daytime,
            'user_id' => 1,
            'client_id' =>1,
            'information' => $request->information,
        ]);
        if(! $reservation)
            return response()->json(['result' => 'fail', 'errors' => 'Reservation creation failed.']);
        else
            return response()->json(['result' => 'success']);

        //$request->user()->reservations->associate($this->reservation);

    }
}
