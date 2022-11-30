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
    <title>Namaste</title>

    <!-- Icons font CSS-->
    <link href="/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Consultant Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('consultant.store')}}">
                        @csrf
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name" value="{{ old('first_name') }}">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name" value="{{ old('last_name') }}">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Mobile</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="mobile" value="{{ old('mobile') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-1">
                            <label class="label label--block">Gender</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Male
                                    <input type="radio" checked="checked" name="gender" value="male">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender" value="female">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-4">
                                        <div class="name">Password</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="password">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="name" style="width: 200px">Confirm Password</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="password_confirmation">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-4">
                                        <div class="name">House No</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="house_no" value="{{ old('house_no') }}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="name">Area</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area" value="{{ old('area') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-4">
                                        <div class="name">Landmark</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="landmark" value="{{ old('landmark') }}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="name">City</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="city" value="{{ old('city') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-4">
                                        <div class="name">State</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="state" value="{{ old('state') }}">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="name">Country</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="country" value="{{ old('country') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-4">
                                        <div class="name">Pincode</div>
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code" value="{{ old('area_code') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="/vendor/select2/select2.min.js"></script>
    <script src="/vendor/datepicker/moment.min.js"></script>
    <script src="/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->