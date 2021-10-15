@extends('backends.layouts.master')

@section('content')
    <style>
        .col-md-2,.col-md-10,.col-md-12{
            float: left;
        }
        p{
          padding: 0 0 0 0;
            margin-block-start: 0;
            margin-block-end: 0;
        }
    </style>
    <div class="wraper-job-detail-header" style="margin-left: 100px">
        <section class="page-job-detail-header">
                <div class="box box-md" style="padding: 0 0 0 0 ">
                    <div class="row">
                        <div class="col-md-2 col-logo" style="width: 150px">
                            <span class="center-block text-center logo-wrapper">
                           <img src="{{asset('storage/'.$company->logo)}}" alt="" style="width: 150px">
                            </span>
                        </div>

                        <div class="col-md-10 col-content-wrapper" style="margin-left: 10px">
                            <div class="row">
                                <div>
                                    <h1>
                                        {{$company->name}}
                                    </h1>
                                </div>
                                <div class="col-md-12">
                                <p>   Company size: {{' '.$company->company_size}} </p>
                                </div>

                                <div class="col-md-12">
                                    <p> Industry: {{' '.$company->industry}} </p>
                                </div>

                                <div class="col-md-12">
                                    <p> Address: {{' '.$company->address}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section>
            <div style="margin-top: 20px">
                <h2>
                    LIST JOB
                </h2>
            </div>
        </section>

        <section>
            <div style="margin-top: 20px">
                <h2>
                    DESCRIPTION
                </h2>
            </div>
        </section>

        <section>
            <div style="margin-top: 20px">
                <h2>
                   PHOTO DESCRIPTION
                </h2>
            </div>
        </section>
    </div>
@endsection
