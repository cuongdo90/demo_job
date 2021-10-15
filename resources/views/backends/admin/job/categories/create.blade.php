@extends('backends.layouts.master')
@section('title','create category')
@section('content')

    <div>
        <div style="margin-top: 20px">
            <h2>
                CREATE JOB
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

                        <input type="text" class="form-control @error('') is-invalid @enderror" name="name" placeholder="">

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
                                Image :
                            </span>
                    </div>
                    <input type="file" class="form-control @error('') is-invalid @enderror" name="image"   placeholder="">


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
                                Quantity :
                            </span>
                    </div>
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="quantity" placeholder="">
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection


