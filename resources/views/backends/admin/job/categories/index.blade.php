@extends('backends.layouts.master')
@section('content')


    <style>

        .category-item {
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
        .edit-category,.delete-category{
            width: 80px;
            border: 1px solid #E2E2E2;
            margin-bottom: 10px;
            border-radius: 0.3em;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('.category-item').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll:3
            });
        });
    </script>

    <div>
        <div style="margin-top: 15px">
            <h2>
                LIST CATEGORY
            </h2>
        </div>
        <p><a class="btn btn-success btn-lg" href="{{route('categories.create')}}">add categories</a></p>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div style="margin:0" class="row ">
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
                                <div>
                                    <button class="btn-warning edit-category"><a style="text-decoration: none" href="{{route('categories.edit',$category)}}" >EDIT</a></button>

                                </div>
                                <div>
                                    <button type="button" data-id="{{$category->id}}" class="btn-danger destroy delete-category">DELETE</button>
                                </div>

                            </div>

                    @endforeach
                </div>

        </div>




@endsection
