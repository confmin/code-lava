<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title> Register </title>

    <!-- Icons font CSS-->
    <link href="{{url('resources/front/register')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="{{url('resources/front/register')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{url('resources/front/register')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{url('resources/front/register')}}/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('resources/front/register')}}/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
       
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Register</h2>
                    
                    <form method="POST" action="{{url('register/store')}}">
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Họ và tên</label>
                                    <input class="input--style-4" type="text" name="fullname">
                                </div>
                            </div>
                           
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Năm sinh</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birth">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Giới tính</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Nam
                                            <input type="radio" checked="checked" value="male" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Nữ
                                            <input type="radio"  value="female" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mật Khẩu</label>
                                    <input class="input--style-4" type="password" name="pass">
                                </div>
                            </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                        @include('layout.alert')
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{url('resources/front/register')}}/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="{{url('resources/front/register')}}/vendor/select2/select2.min.js"></script>
    <script src="{{url('resources/front/register')}}/vendor/datepicker/moment.min.js"></script>
    <script src="{{url('resources/front/register')}}/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="{{url('resources/front/register')}}/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->