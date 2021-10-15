@extends('backends.layouts.master')
@section('title','create job')
@section('content')
<script src="{!! asset('ckeditor-dev/ckeditor.js') !!}"></script>
<script>
    CKEditor.replace('editor');
</script>


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
                                Title :
                            </span>
                    </div>
                    <div class="row col-sm-9">
                        <input type="text" class="form-control @error('') is-invalid @enderror" name="title" placeholder="">
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
                                Level :
                            </span>
                    </div>
                    <div class="row col-sm-9">
                    <select name="level" id="">
                        <option value="">Vui lòng chọn</option>
                        <option value="Thực tập sinh - sinh viên">Thực tập sinh - sinh viên</option>
                        <option value="Mới tốt nghiệp">Mới tốt nghiệp</option>
                        <option value="Nhân viên">Nhân viên</option>
                        <option value="Trưởng phòng">Trưởng phòng</option>
                        <option value="Giám đốc và cấp cao hơn">Giám đốc và cấp cao hơn</option>
                    </select>
                    </div>
                   {{-- <input type="text" class="form-control @error('') is-invalid @enderror" name="level" placeholder="">--}}
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">
                    <div id="job_detail">
                        <span class="col-sm-3" >
                                Type :
                            </span>
                    </div>
                    <div class="row col-sm-9">
                        <select name="type" id="">
                            <option value="">Vui lòng chọn</option>
                            <option value="Toàn thời gian">Toàn thời gian</option>
                            <option value="Bán thời gian">Bán thời gian</option>
                            <option value="Thực tập">Thực tập</option>
                            <option value="Nghề tự do">Nghề tự do</option>
                            <option value="Hợp đồng thời vụ">Hợp đồng thời vụ</option>
                            <option value="Khác">Khác</option>
                        </select>
                    </div>
                  {{--  <input type="text" class="form-control @error('') is-invalid @enderror" name="type" placeholder="">--}}

                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                    </div>
                <hr>

                <div class="input-group">
                    <div id="job_detail">
                        <span class="col-sm-3" >
                                Working Location :
                            </span>
                    </div>
                <div class="row col-sm-9">
                    <select name="working_location" class="field_list field_list_w" id="cbxProvince">
                        <option value="" selected="">select please...</option>
                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="ĐBSCL">ĐBSCL</option>
                        <option value="An Giang">An Giang</option>
                        <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                        <option value="Bắc Kạn">Bắc Kạn</option>
                        <option value="Bắc Giang">Bắc Giang</option>
                        <option value="Bạc Liêu">Bạc Liêu</option>
                        <option value="Bắc Ninh">Bắc Ninh</option>
                        <option value="Bến Tre">Bến Tre</option>
                        <option value="Biên Hòa">Biên Hòa</option>
                        <option value="Bình Định">Bình Định</option>
                        <option value="Bình Dương">Bình Dương</option>
                        <option value="Bình Phước">Bình Phước</option>
                        <option value="Bình Thuận">Bình Thuận</option>
                        <option value="Cà Mau">Cà Mau</option>
                        <option value="Cần Thơ">Cần Thơ</option>
                        <option value="Cao Bằng">Cao Bằng</option>
                        <option value="Đắk Lắk">Đắk Lắk</option>
                        <option value="Điện Biên">Điện Biên</option>
                        <option value="Đồng Nai">Đồng Nai</option>
                        <option value="Đồng Tháp">Đồng Tháp</option>
                        <option value="Gia Lai">Gia Lai</option>
                        <option value="Hà Giang">Hà Giang</option>
                        <option value="Hà Nam">Hà Nam</option>
                        <option value="Hà Tây">Hà Tây</option>
                        <option value="Hà Tĩnh">Hà Tĩnh</option>
                        <option value="Hải Dương">Hải Dương</option>
                        <option value="Hải Phòng">Hải Phòng</option>
                        <option value="Hòa Bình">Hòa Bình</option>
                        <option value="Huế">Huế</option>
                        <option value="Hưng Yên">Hưng Yên</option>
                        <option value="Khánh Hòa">Khánh Hòa</option>
                        <option value="Kon Tum">Kon Tum</option>
                        <option value="Lai Châu">Lai Châu</option>
                        <option value="Lâm Đồng">Lâm Đồng</option>
                        <option value="Lạng Sơn">Lạng Sơn</option>
                        <option value="Lào Cai">Lào Cai</option>
                        <option value="Long An">Long An</option>
                        <option value="Nam Định">Nam Định</option>
                        <option value="Nghệ An">Nghệ An</option>
                        <option value="Ninh Bình">Ninh Bình</option>
                        <option value="Ninh Thuận">Ninh Thuận</option>
                        <option value="Phú Thọ">Phú Thọ</option>
                        <option value="Phú Yên">Phú Yên</option>
                        <option value="Quảng Bình">Quảng Bình</option>
                        <option value="Quảng Nam">Quảng Nam</option>
                        <option value="Quảng Ngãi">Quảng Ngãi</option>
                        <option value="Quảng Ninh">Quảng Ninh</option>
                        <option value="Quảng Trị">Quảng Trị</option>
                        <option value="Sóc Trăng">Sóc Trăng</option>
                        <option value="Sơn La">Sơn La</option>
                        <option value="Tây Ninh">Tây Ninh</option>
                        <option value="Thái Bình">Thái Bình</option>
                        <option value="Thái Nguyên">Thái Nguyên</option>
                        <option value="Thanh Hóa">Thanh Hóa</option>
                        <option value="Thừa Thiên-Huế">Thừa Thiên-Huế</option>
                        <option value="Tiền Giang">Tiền Giang</option>
                        <option value="Trà Vinh">Trà Vinh</option>
                        <option value="Tuyên Quang">Tuyên Quang</option>
                        <option value="Kiên Giang">Kiên Giang</option>
                        <option value="Vĩnh Long">Vĩnh Long</option>
                        <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                        <option value="Yên Bái">Yên Bái</option>
                        <option value="Hậu Giang">Hậu Giang</option>
                        <option value="Đắk Nông">Đắk Nông</option>
                        <option value="Khác">Khác</option>
                        <option value="Quốc tế">Quốc tế</option>

                    </select>

                </div>
                    </div>
     {{--
        <div id="address-map-container" style="width:100%;height:400px; ">
            <div style="width: 100%; height: 100%" id="address-map"></div>
        </div>--}}

                    {{--<input type="text" class="form-control @error('') is-invalid @enderror" name="working_location" placeholder="">--}}


                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">
                    <div id="job_detail">
                        <span class="" >
                                Description :
                            </span>
                    </div>
                    <div class="row col-sm-9">
                    <textarea class="form-control @error('') is-invalid @enderror" name="description" id="" rows="4"></textarea>

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
                                Requirement :
                            </span>
                    </div>
                    <div class="row col-sm-9">
                    <textarea class="form-control @error('') is-invalid @enderror" name="requirements" id="" rows="4"></textarea>

                    {{-- <script src="{!! asset('ckeditor-dev/ckeditor.js') !!}"></script>
                    <script>
                        CKEditor.replace('editor');
                    </script>
                    <textarea name="editor" class="ckeditor" id="editor"></textarea> --}}
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
                                Salary :
                            </span>
                    </div>
                    <div class="row col-sm-9">
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="salary" placeholder="">

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
                                Use language for applications :
                            </span>
                    </div>
                    <div style="margin-top: 20px" class="row col-sm-9">
                    <select name="use_language_for_applications" id="" style="height: 30px;">
                        <option value="any">any</option>
                        <option value="english">english</option>
                        <option value="vietnamese">vietnamese</option>
                    </select>
                    </div>
                   {{-- <input type="text" class="form-control @error('') is-invalid @enderror" name="use_language_for_applications" placeholder="">--}}

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
                                Contact Person :
                            </span>
                    </div>
                    <div class="row col-sm-9">
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="contact_person" placeholder="">

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
                                Email For Applications :
                            </span>
                    </div>
                    <div class="row col-sm-9">
                    <input type="email" class="form-control @error('') is-invalid @enderror" name="email_for_applications" placeholder="">
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
                               Recruitment date:
                            </span>
                    </div>
                    <div class="row col-sm-9">
                        <input type="date" class="form-control @error('') is-invalid @enderror" name="recruitment_date" placeholder="">
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
                               Deadline for submission:
                        </span>
                    </div>


                    <div class="row col-sm-9">
                            <input type="date" class="form-control @error('') is-invalid @enderror" name="deadline_for_submission" placeholder="">
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
                                Category :
                            </span>
                    </div>


                        <div class="row col-sm-9">

                            <select name="category_id" id="caregory">
                                @foreach($categories as $category)
                                <option  value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>

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
                                Company :
                        </span>
                    </div>
                    <div class="row col-sm-9">

                    <input type="text" class="form-control @error('') is-invalid @enderror" name="company" placeholder="">

                    </div>
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>

                <div class="input-group">
                    <div  id="job_detail">
                        <span class="" >
                                Company Logo :
                        </span>
                    </div>
                    <div class="row col-sm-9">
                        <input type="file" class="form-control @error('') is-invalid @enderror" name="company_logo" placeholder="">
                    </div>
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <hr>


                    <div class="input-group w3-hide" style="">
                    <div id="job_detail">
                        <span class="" >
                                Người đăng thông báo :
                        </span>
                    </div>
                    <div class="row col-sm-9">
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="user_create_post" value="{{auth()->user()->name}}" placeholder="">
                </div>
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>


                <div class="input-group w3-hide">
                    <div id="job_detail">
                        <span class="" >
                               ID Người đăng:
                            </span>
                    </div>
                    <div class="row col-sm-9">
                    <input type="text" class="form-control @error('') is-invalid @enderror" name="user_id" value="{{auth()->user()->id}}" placeholder="">
                </div>
                </div>
                <div class="alert_error">
                    @error('')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">CREATE</button>
            </form>
        </div>
    </div>



@endsection


