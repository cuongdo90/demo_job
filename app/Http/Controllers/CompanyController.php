<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
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
        $companies=Company::all();
        return view('backends.admin.company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('backends.admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request,Company $company)
    {
        $company->name=$request->name;
        $company->company_size=$request->company_size;
        $company->address=$request->address;
        $company->industry=$request->industry;
        $company->benefits=$request->benefits;

        if($request->hasFile('logo')){
            $logo=$request->file('logo');
            $path=$logo->store('logos','public');
            $company->logo=$path;
        }


        if ($request->hasFile('photo_description')){
            $photo_description=$request->file('photo_description');
            $path=$photo_description->store('photo_description','public');
            $company->photo_description=$path;
        }
        $company->video_description=$request->video_description;

        $company->save();
        session('success', 'create success');
        return redirect()->action([CompanyController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $company=Company::findOrFail($id);
        return view('backends.admin.company.detail',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company=Company::findOrFail($id);
        return view('backends.admin.company.edit',compact('company'));
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
        $company=Company::findOrFail($id);
        if($request->hasFile('photo_description')){
            $currentImg = $company->photo_description;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            $photo_description = $request->file('photo_description');
            $path = $photo_description->store('photo_descriptions', 'public');
            $company->photo_description = $path;
        }
        if($request->hasFile('logo')){
            $currentImg = $company->logo;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            $logo = $request->file('logo');
            $path = $logo->store('logos', 'public');
            $company->logo = $path;
        }
        $company->name=$request->name;
        $company->company_size=$request->company_size;
        $company->address=$request->address;
        $company->industry=$request->industry;
        $company->benefits=$request->benefits;
        $company->video_description=$request->video_description;

        $company->save();
        session('success', 'update success');
        return redirect()->action([CompanyController::class, 'index']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $company=Company::findOrFail($id);
        $company->delete();
        session('success', 'delete success');
        return response()->json(['message','delete successfully']);

       /* return redirect()->action([CompanyController::class, 'index']);*/
    }
}
