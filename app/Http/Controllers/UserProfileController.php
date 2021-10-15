<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('backends.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request,UserProfile $userProfile)
    {
        $userProfile->full_name = $request->full_name;
        $userProfile->age = $request->age;
        $userProfile->gender = $request->gender;
        $userProfile->marital_status = $request->marital_status;
        $userProfile->country = $request->country;
        $userProfile->city = $request->city;
        $userProfile->address = $request->address;
        $userProfile->phone = $request->phone;
        $userProfile->email = $request->email;

        $userProfile->save();
        session('success','successfully!');
        return redirect()->action([UserProfileController::class,'profile']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function profile($id)
    {
        if(auth()->user()->id) {
            $profile = UserProfile::findOrFail($id);
            return view('backends.user.profile',compact('profile'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userProfile=UserProfile::findOrFail($id);
        return view('backends.user.edit',compact('userProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $userProfile=UserProfile::findOrFail($id);

        $userProfile->full_name = $request->full_name;
        $userProfile->age = $request->age;
        $userProfile->gender = $request->gender;
        $userProfile->marital_status = $request->marital_status;
        $userProfile->country = $request->country;
        $userProfile->city = $request->city;
        $userProfile->address = $request->address;
        $userProfile->phone = $request->phone;
        $userProfile->email = $request->email;

        $userProfile->save();
        session('success','successfully!');
        return redirect()->action([UserProfileController::class,'profile']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
