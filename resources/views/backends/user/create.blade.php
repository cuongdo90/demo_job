@extends('backends.layouts.master')
@section('content')

    <style>
        .input-group{
            padding: 20px 0 20px 0;
        }
    </style>

    <div>
        <h3>CREATE USER</h3>
    </div>

    <form action="">
    <div class="input-group">
        <div id="job_detail">
            <span class="" >
                FULL NAME :
            </span>
        </div>
        <div class="row col-sm-9">
            <input type="text" name="full_name" placeholder="Nguyễn Văn A">
        </div>
    </div>

    <div class="input-group">
        <div id="job_detail">
            <span class="" >
                Date of birth
            </span>
        </div>
        <div class="row col-sm-9">
            <input type="date" name="age" >
        </div>
    </div>

    <div class="input-group">
        <div id="job_detail">
            <span class="" >
                GENDER :
            </span>
        </div>
        <div class="row col-sm-9">
            <select name="gender" id="">
                <option value="">select please</option>
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
            </select>
        </div>
    </div>

    <div class="input-group">
        <div id="job_detail">
            <span class="" >
                MARITAL STATUS :
            </span>
        </div>
        <div class="row col-sm-9">
            <select name="marital_status" id="">
                <option value="">Select please...</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
            </select>
        </div>
    </div>

    <div class="input-group">
        <div id="job_detail">
            <span class="" >
                COUNTRY :
            </span>
        </div>
        <div class="row col-sm-9">
            <select name="country" class="field_list field_list_w" id="cbxProvince">
                <option value="" selected="">select please...</option>
                <option value="Việt Nam">Việt Nam</option>
                <option value="other">Other</option>

            </select>
        </div>
    </div>

    <div class="input-group">
        <div id="job_detail">
            <span class="" >
                CITY :
            </span>
        </div>
        <div class="row col-sm-9">
            <select name="city" class="field_list field_list_w" id="cbxProvince">
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

    <div class="input-group">
        <div id="job_detail">
            <span class="" >
                ADDRESS :
            </span>
        </div>
        <div class="row col-sm-9">
            <input type="text" name="address" placeholder="X number,X street,..">
        </div>
    </div>

    <div class="input-group">
        <div id="job_detail">
            <span class="" >
                PHONE :
            </span>
        </div>
        <div class="row col-sm-9">
            <input type="text" name="phone" placeholder="0123456789">
        </div>
    </div>

    <div class="input-group">
        <div id="job_detail">
            <span class="" >
                EMAIL :
            </span>
        </div>
        <div class="row col-sm-9">
            <input type="email" name="email" placeholder="example@email.com">
        </div>
    </div>
<div style="margin-left: 190px;" >
        <button class="btn-success" type="submit" style="">ADD</button>
</div>
    </form>


@endsection
