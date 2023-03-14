<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Title Page-->
    <title>Register Biddabd</title>

    <!-- Icons font CSS-->
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link rel="icon" type="image/x-icon" href="assets/images/logo/biddhabd-white-logo.jpg">

    <!-- Main CSS-->
    <link href="assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading">
                    <a href="index.php">
                        <center><img src="assets/images/logo/biddhabd-white-logo.jpg" style="height: 50px; width:60px; margin-top: 0px"></center>
                    </a>
                </div>
                <div class="input-group" style=""><center><h1>Registration Form</h1></center></div>
                <div class="card-body" style="margin-top: -50px;">
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Father's Name" name="f_name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Mother's Name" name="m_name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="address">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Institute Name" name="Institute">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Subjectes" name="sub">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="BIRTHDATE" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="class">
                                            <option disabled="disabled" selected="selected">CLASS</option>
                                            <option>Class 1</option>
                                            <option>Class 2</option>
                                            <option>Class 3</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                        <input class="input--style-1" type="text" placeholder="Age" name="age">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="class">
                                            <option disabled="disabled" selected="selected">Zila</option>
                                            <option>Dhaka</option>
                                            <option>Class 2</option>
                                            <option>Class 3</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="class">
                                            <option disabled="disabled" selected="selected">Divisions</option>
                                            <option>Dhaka</option>
                                            <option>Chattogram</option>
                                            <option>Barishal</option>
                                            <option>Khulna</option>
                                            <option>Rajshahi</option>
                                            <option>Rangpur</option>
                                            <option>Mymensingh</option>
                                            <option>Sylhet</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Mobile" name="phn">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="Image" name="image">
                        </div>
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/vendor/datepicker/moment.min.js"></script>
    <script src="assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
