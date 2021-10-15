<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('crud')){
            abort(403);
        };
        $users=User::all();

        $roles=Role::all();

        return view('backends.admin.users.index',compact('users','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Gate::allows('crud')){
            abort(403);
        };
        $user=User::findOrFail($id);
        $roles=Role::all();

        return view('backends.admin.users.edit',compact('user','roles'));
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

        $user=User::findOrFail($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->company_id=$request->company;
        $user->role_id=$request->role;
        $user->save();

        session('success','successfully!');
        return redirect()->action([UserController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        if (!Gate::allows('crud')){
            abort(403);
        };

        $user=User::findOrFail($id);
        $user->delete();
        return response()->json(['message'=>'delete successfully']);
    }
}
