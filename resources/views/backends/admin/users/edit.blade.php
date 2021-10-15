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
                                name :
                            </span>
                </div>

                <input type="text" class="form-control @error('') is-invalid @enderror" name="name" placeholder="" value="{{$user->name}}">

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
                                email :
                            </span>
                </div>
                <div>
                    <input type="email" class="form-control @error('') is-invalid @enderror" name="email" placeholder="" value="{{$user->email}}">

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
                                role :
                            </span>
                </div>
                @foreach($roles as $role)
                <input type="checkbox" id="role" name="role" value="{{$role->id}}">
                <label for="role">{{$role->name}}</label>
                    @endforeach
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
