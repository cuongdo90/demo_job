<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{

    public function index()
    {
        // if (!Gate::allows('crud')) {
        //     abort(403);
        // };
        $companies = Company::all();
        $jobs = Job::all();
        return view('backends.admin.job.post.index', compact('jobs', 'companies'));
    }


    public function create()
    {
        // if (!Gate::allows('crud')) {
        //     abort(403);
        // };
        $companies = Company::all();
        $categories = Category::all();
        return view('backends.admin.job.post.create', compact('categories', 'companies'));
    }


    public function store(Request $request)
    {
        // if (!Gate::allows('crud')) {
        //     abort(403);
        // };

        /*$job->title = $request->title;
        $job->level = $request->level;
        $job->type = $request->type;
        $job->working_location = $request->working_location;
        $job->description = $request->description;
        $job->requirements = $request->requirements;
        $job->salary = $request->salary;
        $job->use_language_for_applications = $request->use_language_for_application;
        $job->contact_person = $request->contact_person;
        $job->email_for_applications = $request->email_for_applications;
        $job->recruitment_date = $request->recruitment_date;
        $job->deadline_for_submission = $request->deadline_for_submission;
        $job->company = $request->company;
        $job->category_id = $request->category_id;
        $job->user_create_post = $request->user_create_post;
        $job->user_id = $request->user_id;*/
        $job=new Job();
        $job->fill($request->all());
        if ($request->hasFile('company_logo')) {
            $company_logo = $request->file('company_logo');
            $path = $company_logo->store('logos', 'public');
            $job->company_logo = $path;
        }
        $job->save();




        return redirect()->action([JobController::class, 'index']);
    }


    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('backends.admin.job.post.detail', compact('job'));
    }


    public function edit($id)
    {
        // if (!Gate::allows('crud')) {
        //     abort(403);
        // };
        $categories = Category::all();
        $job = Job::findOrFail($id);
        return view('backends.admin.job.post.edit', compact('job', 'categories'));
    }


    public function update(Request $request, $id)
    {
        // if (!Gate::allows('crud')) {
        //     abort(403);
        // };
        $job = Job::findOrFail($id);

        $job->title = $request->title;
        $job->level = $request->level;
        $job->type = $request->type;
        $job->working_location = $request->working_location;
        $job->description = $request->description;
        $job->requirements = $request->requirements;
        $job->salary = $request->salary;
        $job->use_language_for_applications = $request->use_language_for_application;
        $job->contact_person = $request->contact_person;
        $job->email_for_applications = $request->email_for_applications;
        $job->recruitment_date = $request->recruitment_date;
        $job->deadline_for_submission = $request->deadline_for_submission;
        $job->company = $request->company;

        if ($request->hasFile('company_logo')) {
            $company_logo = $request->file('company_logo');
            $path = $company_logo->store('logos', 'public');
            $job->company_logo = $path;
        }

        $job->category_id = $request->category_id;
        $job->user_create_post = $request->user_create_post;
        $job->user_id = $request->user_id;

        $job->save();

        return redirect()->action([JobController::class, 'index']);
    }


    public function destroy($id)
    {
        if (!Gate::allows('crud')) {
            abort(403);
        };
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect()->action([JobController::class, 'index']);
    }

    public function search(Request $request)
    {
        $jobSearch = $request->search;
        $jobs = Job::where('title', 'LIKE', "%$jobSearch%")/*->orWhere('company', 'LIKE', "%$jobSearch%")*/->get();
        return view('backends.page.home',compact('jobs'));
    }
}
