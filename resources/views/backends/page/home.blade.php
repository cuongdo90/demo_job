@extends('backends.layouts.master')
@section('content')

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    {{--list job--}}



    <div class="wraper-job-detail-header" style="margin-left: 100px">
        <div>
            <h2>
                LIST JOB
            </h2>
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

                            {{--  <div>
                                  <button class="btn-warning edit-job"><a style="text-decoration: none" href="{{route('job.edit',$job)}}" >EDIT</a></button>

                              </div>
                              <div>
                                  <button type="button" data-id="{{$job->id}}" class="btn-danger destroy delete-job">DELETE</button>
                              </div>--}}

                        </div>

                    @endforeach
                </div>

                <div>
                    <h3>
                        Quantity : {{$jobs_count}}
                    </h3>
                </div>

            </div>
        </section>


        {{--list company--}}

        <script>
            $(document).ready(function(){
                $('.company-item').slick({
                    infinite: true,
                    slidesToShow: 18,
                    slidesToScroll: 18
                });
            });
        </script>

        <div>
            <div style="margin-top: 20px">
                <h2>
                    LIST COMPANY
                </h2>
            </div>



            <div style="margin:0" class="row">
                @foreach($companies as $company)

                    <div class="company-item" style="" id="company-{{$company->id}}">
                        <a style="text-decoration: none"  href="{{route('page.home')}}">
                            <img width="150px" height="150px" src="{{asset('storage/'.$company->logo)}}" alt="">

                            <div>
                                <h3>{{$company->name}}</h3>
                            </div>
                            <div>
                                <h3>{{$company->company_size}} people </h3>
                            </div>
                            <div>
                                <h3>{{$company->industry}}</h3>
                            </div>
                            <div>
                                <h3>{{$company->address}} </h3>
                            </div>

                        </a>
                      {{--  <div>
                            <button class="btn-warning edit-company"><a style="text-decoration: none" href="{{route('companies.edit',$company)}}" >EDIT</a></button>

                        </div>
                        <div>
                            <button type="button" data-id="{{$company->id}}" class="btn-danger destroy delete-company">DELETE</button>
                        </div>
--}}
                    </div>

                @endforeach
            </div>
            <div>
                <h3>
                    Quantity : {{$companies_count}}
                </h3>
            </div>

        </div>

    {{--list category--}}

        <script>
            $(document).ready(function(){
                $('.category-item').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 3
                });
            });
        </script>

        <div>
            <div style="margin-top: 15px">
                <h2>
                    LIST CATEGORY
                </h2>
            </div>


            <div style="margin:0" class="row">
                @foreach($categories as $category)

                    <div class="category-item" style="" id="category-{{$category->id}}">
                        <a style="text-decoration: none"  href="{{route('page.home')}}">
                            <img width="150px" height="150px" src="{{asset('storage/'.$category->image)}}" alt="">

                            <div>
                                <h3>{{$category->name}}</h3>
                            </div>
                            <div>
                                <h3>{{$category->quantity}} works </h3>
                            </div>
                        </a>
                      {{--  <div>
                            <button class="btn-warning edit-category"><a style="text-decoration: none" href="{{route('categories.edit',$category)}}" >EDIT</a></button>

                        </div>
                        <div>
                            <button type="button" data-id="{{$category->id}}" class="btn-danger destroy delete-category">DELETE</button>
                        </div>--}}

                    </div>

                @endforeach
            </div>
            <div>
                <h3>
                    Quantity : {{$categories_count}}
                </h3>
            </div>


        </div>



@endsection
