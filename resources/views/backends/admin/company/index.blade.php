@extends('backends.layouts.master')
@section('content')
    <style>

        .company-item {
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
        .edit-company,.delete-company{
            width: 80px;
            border: 1px solid #E2E2E2;
            margin-bottom: 10px;
            border-radius: 0.3em;
        }
    </style>
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
        <p><a class="btn btn-success btn-lg" href="{{route('companies.create')}}">add companies</a></p>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif


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
                    <div>
                        <button class="btn-warning edit-company"><a style="text-decoration: none" href="{{route('companies.edit',$company)}}" >EDIT</a></button>

                    </div>
                    <div>
                        <button type="button" data-id="{{$company->id}}" class="btn-danger destroy delete-company">DELETE</button>
                    </div>

                </div>

            @endforeach
        </div>

    </div>


@endsection
