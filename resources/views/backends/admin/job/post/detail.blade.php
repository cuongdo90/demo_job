<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tuyển dụng việc làm tại WorksWeb</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('mycss/detail_style.css')}}">
    <script src="{{asset('myjs/my.js')}}"></script>

</head>


<body>
    <nav>
        <div class="sb-sidenav-menu-heading">
            <ul>
                <li>
                    <div align="center">
                        <a class="navbar-brand ps-3" href="{{route('page.home')}}">WorksWeb</a>
                    </div>
                </li>
                <li>
                    <div align="center" class="menu-2">
                        <a class="navbar-brand ps-3" href="{{route('companies.index')}}">Company</a>
                    </div>
                </li>
                <li>
                    <div align="center">
                        <a class="navbar-brand ps-3" href="{{route('jobs.index')}}">Job</a>
                    </div>
                </li>
            </ul>
            <div class="sb-sidenav-menu-heading-v2">
                <ul>
                    <li>
                        <div class="menu-v2-1">
                            <a href="">Nhà tuyển dụng</a>
                        </div>

                    </li>
                    <li>
                        <a href="">
                            <svg style="" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bell" viewBox="0 0 16 16">
                                <path
                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                            </svg>
                        </a>
                    </li>
                </ul>

            </div>
        </div>

        <div class="sb-sidenav-menu">
            <div style="width: 12.5%">
                <a href="{{route('page.home')}}">
                    <img height="90px" width="190px" src="{{asset('storage/logos/111.png')}}" alt="">
                </a>
            </div>

            <div class="search-box">
                <div class="search-box-background" style="">
                    <div class="search-box-wrapper" style=";position: relative;width: 70%">
                        <svg style="padding-left: 20px;padding-top: 9px;" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                        <input placeholder="search..." class="box-input"
                            style="margin-left: 10px;width: 90%;font-size: 18px;height: 30px;border-style: none;padding: 0;outline: none;background: #c2c1c1"
                            type="text" tabindex="0">
                    </div>
                    <div class="icon-delete" style="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </div>
                    <span class="separator"
                        style="width: 1px;height: 32px;background: #27272a;margin-left: 10px"></span>
                    <div style="margin-left: 10px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </div>
                    <div class="search-by-address" style="width: 25%;">

                        <select name="searchAddress" id="searchAddress"
                            style="font-size: 18px;width: 100%;height: 30px;border-style: none;padding: 0;outline: none;background: #c2c1c1">

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

                    <div class="icon-search">

                        <button type="submit"
                            style="background: #9999de;border-radius: 7px;border-style: none;height: 38px">
                            <svg style=";border-radius: 3px" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>

                    </div>
                </div>

            </div>
            <div style="margin-left: 20px;height: 44px">
                <button style="height: 44px;border-radius: 9px;width: 120px;border: solid 2px orange">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-file-richtext" viewBox="0 0 16 16">
                        <path
                            d="M7 4.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V7.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V7s1.54-1.274 1.639-1.208zM5 9a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                        <path
                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                    </svg>
                    <a href="https://topdev.vn/users/my-cv/edit/de818450-2518-11ec-8907-55227cb9c5d0"
                        style="text-decoration: none;font-size: 16px;color: black">
                        Mẫu CV
                    </a>
                </button>
            </div>
            <div class="icon-avatar">
                <button
                    style="text-align: center;height: 44px;border-radius: 9px;width: 200px;border: solid 2px orange;margin-left: 50px">

                    <svg style="" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>

                    @if(auth()->user())
                    <span style="margin-left: 5px;font-size: 22px"> {{ auth()->user()->name}}</span>
                    @endif
                </button>
            </div>

        </div>

    </nav>
    <div class="main-content">
        <div class="stickWithHeader" style="height: 42px;background: #9e9ec0">
            <div class="block_style" style="padding-left: 12.5%;">
                <div class="container-fluid" style="height: 42px;">
                    <div class="">
                        <div class="" style="padding-top: 14px">
                            <a class="text-1" href="{{route('jobs.index')}}">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                        class="bi bi-briefcase" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                </span>
                                <span style="padding-left: 3px">
                                    Jobs
                                </span>
                            </a>

                            <a class="text-2" href="{{route('categories.index')}}">
                                <span style="padding-left: 20px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                        class="bi bi-person-badge" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path
                                            d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
                                    </svg>
                                </span>
                                <span>
                                    Management Jobs
                                </span>
                            </a>

                            <a class="text-3" href="{{route('companies.index')}}">
                                <span style="padding-left: 20px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                        class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                                        <path
                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                                        <path
                                            d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z" />
                                    </svg>
                                </span>
                                <span>
                                    Companies
                                </span>
                            </a>

                            <a class="text-4" href="https://topdev.vn/users/my-cv/edit/de818450-2518-11ec-8907-55227cb9c5d0">
                                <span style="padding-left: 20px">
                                    <i class="bi bi-layout-text-window"></i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layout-text-window" viewBox="0 0 16 16">
                                        <path d="M3 6.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v1H1V2a1 1 0 0 1 1-1h12zm1 3v10a1 1 0 0 1-1 1h-2V4h3zm-4 0v11H2a1 1 0 0 1-1-1V4h10z"/>
                                      </svg>
                                </span>
                                <span>
                                    My CV
                                </span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-result" style="">
            <div class="" style="width: 12.5%;float: left;height: 40px">
                <span></span>
            </div>


            <div class="heading-section" style="padding: 0 12.5%;clear: both;">
                <div class="out-stading-jobs">
                    <div class="swiper-container">
                        <div class="swiper-wrapper" style=";margin-right: 10px;">
                            <div class="job-image">
                                <a href="">
                                    <div class="logo-company">
                                        <img style="border: 2px solid blueviolet;border-radius: 1em;width: 150px;height: 150px"
                                            src="{{asset('storage/'.$job->company_logo)}}"
                                            alt="{{asset('storage/'.$job->company_logo)}}">
                                        <h3>
                                            {{$job->company}} COMPANY
                                        </h3>
                                    </div>

                                    {{-- <div style="">
                                        <img src="" alt="image-2">
                                    </div>--}}
                                </a>
                            </div>
                            <div class="content">
                                <div class="job-desc">
                                    <div class="heading">
                                        <p>
                                            {{$job->title}}
                                        </p>
                                    </div>
                                    <div class="content-item-company-name">
                                        <p> Company: {{$job->company}}</p>
                                    </div>
                                    <div class="content-item-location">
                                        <p> Working Location: {{$job->working_location}}</p>
                                    </div>
                                    <div class="content-item-salary">
                                        <p> Salary: {{$job->salary}}</p>
                                    </div>
                                    <div class="content-time">
                                        <p> Deadline for submission: {{$job->deadline_for_submission}}</p>
                                    </div>
                                    <div>
                                        <p> Contact Person: {{$job->contact_person}}</p>
                                    </div>
                                    <div>
                                        <p> Job Description: {{$job->description}}</p>
                                    </div>
                                    <div>
                                        <p> Job Requirement: {{$job->requirements}}</p>
                                    </div>

                                    <div>
                                        <!-- Modal -->
                                        <button class='btn'>Apply Now</button>
                                        <div class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <div class="modal-header">
                                                    <h3><span>You are applying for</span> <span
                                                            style="color: #0a53be">{{$job->title}}</span></h3>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="resume-header">
                                                        <div class="row" style="border: 1px solid black;display: flex">
                                                            <div class="col-sm-3 col-xs-4 user-pic">
                                                                <div style="">
                                                                    <img style="margin: 0;padding: 0;border:1px solid black;width: 100px;height: 100px"
                                                                        src="{{asset('storage/'.$job->company_logo)}}"
                                                                        alt="img-user">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-9 col-xs-8"
                                                                style="border: 1px solid black">
                                                                <div style="padding-left: 10px;">
                                                                    {{ auth()->user()->name}}
                                                                </div>

                                                                <div style="padding-left: 10px;">
                                                                    {{ auth()->user()->email}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <form action="" method="get" enctype="multipart/form-data">
                                                        <div class="input-group">
                                                            <div id="job_detail">
                                                                <span class="">
                                                                    Upload new CV
                                                                </span>
                                                            </div>
                                                            <input type="file"
                                                                class="form-control @error('') is-invalid @enderror"
                                                                name="file" placeholder="">
                                                        </div>
                                                        <div>
                                                            <p>You can only attach .doc, .docx, and .pdf files that are
                                                                less than 3072KB in size.</p>
                                                        </div>
                                                        <hr>
                                                        <div>
                                                            <button class=""
                                                                style="height: 40px;border-radius: 5px;background: #f6a511"
                                                                type="submit">Send application</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <main role="main">
                <div class="container-fluid">
                    <div class="row no-margin-responsive">
                        <div class="col-12 col-lg-9 no-padding-responsive">

                        </div>
                    </div>
                </div>

                <div class="job-head" style="margin-top: 0;height: 69px;background: #0dcaf0;padding: 0 12.5%">
                    <div class="container-fluid">
                        <div class="job-alerts-wrapper row">
                            <div class="col-10 col-md-5 col-lg-7">
                                <span class="animated fadeIn">
                                    <h3>
                                        <div class="job-matched">
                                            <span class="no-of-jobs">
                                                <strong></strong>
                                            </span>
                                            <span></span>
                                        </div>
                                        <div class="job-criteria">

                                            <strong class="criterion">

                                            </strong>
                                        </div>
                                    </h3>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


</body>

<script>


    $(document).ready(function () {
        var modal = $('.modal');
        var btn = $('.btn');
        var span = $('.close');

        btn.click(function () {
            modal.show();
        });

        span.click(function () {
            modal.hide();
        });

        $(window).on('click', function (e) {
            if ($(e.target).is('.modal')) {
                modal.hide();
            }
        });
        $(".search-box-background").on("mouseover", function () {
            $(".search-box-background").css("border", "3px solid orange");
        });

        $(".search-box-background").on("mouseout", function () {
            $(".search-box-background").css("border", "none");
        });

        $(".search-by-address").on("mouseover", function () {
            $("#searchAddress").css("color", "#0a58ca");
        });

        $(".search-by-address").on("mouseout", function () {
            $("#searchAddress").css("color", "black");
        });

        $(".text-1").on("mouseover", function () {
            $(".text-1").css("color", "#0a58ca");
        })
        $(".text-1").on("mouseout", function () {
            $(".text-1").css("color", "black");
        })
        $(".text-2").on("mouseover", function () {
            $(".text-2").css("color", "#0a58ca");
        })
        $(".text-2").on("mouseout", function () {
            $(".text-2").css("color", "black");
        })
        $(".text-3").on("mouseover", function () {
            $(".text-3").css("color", "#0a58ca");
        })
        $(".text-3").on("mouseout", function () {
            $(".text-3").css("color", "black");
        })
        $(".text-4").on("mouseover", function () {
            $(".text-4").css("color", "#0a58ca");
        })
        $(".text-4").on("mouseout", function () {
            $(".text-4").css("color", "black");
        })


    });
</script>

</html>
