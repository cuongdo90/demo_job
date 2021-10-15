@extends('backends.layouts.master')
@section('content')
    <div>
        <div style="margin-top: 20px">
            <h2>
                LIST USER
            </h2>
        </div>
      {{--  <p><a class="btn btn-success btn-lg" href="{{route('users.create')}}">add users</a></p>--}}
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table border="2px" class="table">
            <thead>
            <tr>
                <th scope="col">id</th>

                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">company</th>

                <th scope="col">role</th>

                <th scope="col" colspan="2">action</th>
            </tr>
            </thead>
            @foreach($users as $user)
                <tbody>
                <tr id="user-{{$user->id}}">
                    <th scope="row">{{$user->id}}</th>
                    <th> {{$user->name}}</th>
                    <th> {{$user->email}}</th>
                    <th> {{$user->company_id}}</th>
                    <th> {{$user->role_id}}</th>



                   {{-- <th><button class="btn-success profile"> <a href="{{route('user.profile',$userProfile)}}" >PROFILE</a></button></th>--}}
                    <th><button class="btn-warning edit"> <a href="{{route('users.edit',$user)}}" >EDIT</a></button></th>
                    <th><button type="button" class="btn-danger destroy delete-user" data-id="{{$user->id}}">DELETE</button></th>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>




@endsection
