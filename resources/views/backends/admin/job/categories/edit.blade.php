@extends('backends.layouts.master')
@section('title','edit')
@section('content')

    <div>
        <div style="margin-top: 20px">
            <h2>

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

                    <input type="text" class="form-control @error('') is-invalid @enderror" name="name" placeholder="" value="{{$category->name}}">

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
                    <div>
                        <input type="file" class="form-control @error('') is-invalid @enderror" name="image" placeholder="" value="{{asset('storage/'.$category->image)}}">
                        <img src="{{asset('storage/'.$category->image)}}" style="width: 100px; height: 100px" alt="">
                    </div>
                    <div>

                    </div>
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
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="quantity" placeholder="" value="{{$category->quantity}}">
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>



                <button style="margin-left: 41px" type="submit" class="btn btn-primary">UPDATE</button>
            </form>
        </div>
    </div>
@endsection

