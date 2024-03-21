<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function userDetails()
    {
        $user = Auth::user();
        $userDetails = UserDetails::where('user_id', $user->id)->first();
        return view('userDetails', compact('userDetails'));
    }

    public function addUserDetails(Request $request)
    {
        $user = Auth::user();
        $userDetails = UserDetails::updateOrCreate(
        [ 'user_id' => $user->id],
        [
            'user_id' => $user->id,
            'full_name' => $request->full_name,
            'address' => $request->address,
            'date_of_birth' => $request->date_of_birth,
            'phone_number' => $request->phone_number,
            'type_of_disability' => $request->type_of_disability,
            'ndis_number' => $request->ndis_number,
            'support_coordinator' => $request->support_coordinator,
        ]);
        return redirect()->route('index');
    }

}
