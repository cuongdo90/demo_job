@extends('backends.layouts.master')
@section('title','edit')
@section('content')

    <div>
        <div style="margin-top: 20px">
            <h2>
                EDIT COMPANY
            </h2>
        </div>
        <div>
            <form method="post" action="" enctype="multipart/form-data">
                @csrf

                <div class="input-group">
                    <div  id="job_detail">
                        <span class="" >
                                Name :
                            </span>
                    </div>

                    <input type="text" class="form-control @error('') is-invalid @enderror" name="name" value="{{$company->name}}" placeholder="">

                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">
                    <div id="job_detail">
                        <span class="" >
                                Company size :
                            </span>
                    </div>
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="company_size" value="{{$company->company_size}}"  placeholder="">


                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>


                <div class="input-group">
                    <div id="job_detail">
                        <span class="" >
                                Address :
                            </span>
                    </div>
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="address" value="{{$company->address}}" placeholder="">
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">
                    <div id="job_detail">
                        <span class="" >
                                Industry :
                            </span>
                    </div>
                    <input type="text" class="form-control @error('') is-invalid @enderror" value="{{$company->industry}}" name="industry" placeholder="">
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">
                    <div id="job_detail">
                        <span class="" >
                                benefits :
                            </span>
                    </div>
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="benefits" value="{{$company->benefits}}" placeholder="">
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">
                    <div id="job_detail">
                        <span class="" >
                                Logo :
                            </span>
                    </div>
                    <div>
                    <input id="input-company-logo" type="file" class="form-control @error('') is-invalid @enderror" name="logo" value="{{asset('storage/'.$company->logo)}}" placeholder="">
                        <img id="old-company-logo" src="{{asset('storage/'.$company->logo)}}" style="width: 100px; height: 100px" alt="">

                </div>
                    <div>

                    </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">
                    <div id="job_detail">
                        <span class="" >
                                Photo description :
                            </span>
                    </div>
                    <div>
                    <input type="file" class="form-control @error('') is-invalid @enderror" name="photo_description" value="{{asset('storage/'.$company->photo_description)}}" placeholder="">
                    <img src="{{asset('storage/'.$company->photo_description)}}" style="width: 100px; height: 100px" alt="">
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">
                    <div id="job_detail">
                        <span class="" >
                                video description :
                            </span>
                    </div>
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="video_description" value="{{$company->video_description}}" placeholder="">
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>


                <button type="submit" class="btn btn-primary">Submit</button>


            </div>
                </div>
            </form>

        </div>
    </div>
@endsection






