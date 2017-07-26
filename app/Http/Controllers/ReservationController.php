<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Validator;

class ReservationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        //$clients = auth()->user()->oauthClients()->get();
        $clients = $request->user()->oauthClients()->get();

        /*echo '<pre>';
        foreach ($clients as $key => $value) {
            echo 'Key: '. $key.' , value: '.$value;
            echo '<br />';
        }
        print_r($clients);
        echo '</pre>';
        die;*/

        /*echo '<pre>';
        print_r(auth()->user());
        print_r(auth()->user()->reservations()->with('users')->latestFirst()->get());

        return auth()->user()->reservations()->with('users')->latestFirst()->get();
        echo '</pre>';*/

        return view('reservation.index')->with(['clients' => $clients]);
        /*->with(['user' => $user,
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
            'user_id' => auth()->user()->id,
            'client_id' =>1,
            'information' => $request->information,
        ]);
        if(! $reservation)
            return response()->json(['result' => 'fail', 'errors' => 'Reservation creation failed.']);
        else
            return response()->json(['result' => 'success']);

        //$request->user()->reservations->associate($this->reservation);

    }

    public function show(Request $request){
        $clients = auth()->user()->oauthClients()->get();



        return view('reservation.show')->with(['clients' => $clients]);
        /*->with(['user' => $user,
                                                    'owner' => $owner,
                                                'nation' => $nation['name']['common']]);*/

    }

}
