<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function userDetails()
    {
        return view('userDetails');
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
            'age' => $request->age,
            'type_of_disability' => $request->type_of_disability,
            'ndis_nominee' => $request->ndis_nominee,
            'support_coordinator' => $request->support_coordinator,
        ]);
        return redirect()->route('index');
    }

}
