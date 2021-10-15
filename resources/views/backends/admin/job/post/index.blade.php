@extends('backends.layouts.master')
@section('content')
    <style>

        .job-item {
            border: 1px solid #E2E2E2;
            padding: 0.5em 0.5em 1em 0.5em;
            border-radius: 1em;

            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;

            display: inline-block;
            text-align: center;
            background: #6dddf5;
            width: 18%;

        }
        .edit-job,.delete-job{
            width: 80px;
            border: 1px solid #E2E2E2;
            margin-bottom: 10px;
            border-radius: 0.3em;
        }
    </style>

    <div class="wraper-job-detail-header" style="margin-left: 100px">
        <div>
            <h2>
                LIST JOB
            </h2>
        </div>

        <div>
            <p><a class="btn btn-success btn-lg" href="{{route('jobs.create')}}">create job</a></p>
        </div>
        <section class="page-job-detail-header">
            <div class="box box-md" style="padding: 0 0 0 0 ">
                <div style="margin:0" class="row">
                    @foreach($jobs as $job)

                        <div class="job-item" style="" id="job-{{$job->id}}">
                            <a style="text-decoration: none"  href="{{route('job.detail',$job->id)}}">
                                <img width="150px" height="150px" src="{{asset('storage/'.$job->company_logo)}}" alt="{{asset('storage/'.$job->company_logo)}}">

                                <div>
                                    <h3>{{$job->title}}</h3>
                                </div>
                                <div>
                                    <h3>{{$job->level}}</h3>
                                </div>
                                <div>
                                    <h3>{{$job->type}}</h3>
                                </div>
                                <div>
                                    <h3>{{$job->salary}}</h3>
                                </div>
                            </a>
                            <div>
                                <button class="btn-warning edit-job"><a style="text-decoration: none" href="{{route('job.edit',$job)}}" >EDIT</a></button>

                            </div>
                            <div>
                                <button type="button" data-id="{{$job->id}}" class="btn-danger destroy delete-job">DELETE</button>
                            </div>
                        </div>

                    @endforeach
                </div>

            </div>
        </section>
</div>
  {{-- <div class="heading-section" style="padding: 0 12.5%;clear: both;">

       <div class="out-stading-jobs">
           <div class="swiper-container">
               <div class="swiper-wrapper" style=";margin-right: 10px;">

                   <div class="job-image">
                       <a href="">
                           <div class="logo-company">
                               <img style="border: 2px solid blueviolet;border-radius: 1em;width: 150px;height: 150px" src="{{asset('storage/'.$job->company_logo)}}" alt="{{asset('storage/'.$job->company_logo)}}">
                               <h3>
                                   {{$job->company}} COMPANY
                               </h3>
                           </div>

                           --}}{{-- <div style="">
                                <img src="" alt="image-2">
                            </div>--}}{{--
                       </a>
                   </div>
                   <div class="content">
                       <div class="job-desc">
                           <div class="heading">
                               <p>
                                   {{$job->title}}
                               </p>
                           </div>
                           <div class="content-item-company-name">
                               <p> Company: {{$job->company}}</p>
                           </div>
                           <div class="content-item-location">
                               <p> Working Location: {{$job->working_location}}</p>
                           </div>
                           <div class="content-item-salary">
                               <p> Salary: {{$job->salary}}</p>
                           </div>
                           <div class="content-time">
                               <p> Deadline for submission: {{$job->deadline_for_submission}}</p>
                           </div>
                           <div>
                               <p> Contact Person: {{$job->contact_person}}</p>
                           </div>
                           <div>
                               <p> Job Description: {{$job->description}}</p>
                           </div>
                           <div>
                               <p> Job Requirement: {{$job->requirements}}</p>
                           </div>
                           <div>
                               <button><a href="{{route('job.detail',$job)}}">DETAIL</a></button>
                           </div>

                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
--}}

@endsection
