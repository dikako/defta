<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Real-QuickCunt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8000/assets/plugins/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8000/assets/plugins/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8000/assets/plugins/headereffects/css/component.css">
    <link rel="stylesheet" type="text/css" href="http://localhost:8000/assets/plugins/headereffects/css/normalize.css" />
    <link href="http://localhost:8000/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css"
        media="screen" />
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="http://localhost:8000/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost:8000/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet"
        type="text/css" />
    <link href="http://localhost:8000/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
    <!-- BEGIN CSS TEMPLATE -->
    <link href="http://localhost:8000/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost:8000/assets/css/magic_space.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost:8000/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost:8000/assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<body>
    <div class="main-wrapper">
        <div role="navigation" class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="compressed">
                    <div class="navbar-header">
                        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                            type="button">
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                                class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                        <a href="http://localhost:8000/#" class="navbar-brand compressed">
                            <img src="http://localhost:8000/assets/img/logo_condensed.png" alt="" data-src="http://localhost:8000/assets/img/logo_condensed.png"
                                data-src-retina="assets/img/logo2x.png" width="119" height="22" /></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="http://localhost:8000/index">Home</a></li>
                            <li><a href="http://localhost:8000/tour">Tour</a></li>
                            <li><a href="http://localhost:8000/pricing">Pricing</a></li>
                            <li><a href="http://localhost:8000/portfolio">Portfolio</a></li>
                            <li><a href="http://localhost:8000/login">Login</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
       
<br><br><br><br><br><br><br>
        <!-- Add Your Content Inside -->
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Data</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('data.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="provinsi">Provinsi:</label>
                    <input <?php
$cek = Session::get('level');
        if ($cek == '10' ) {
          
           }
          elseif ($cek == '11') {
             echo " disabled='disabled' ";
          }
          ?> 
          type="text" class="form-control" id="provinsi" name="provinsi" value="{{ $datas->provinsi }}">
                </div>
                <div class="form-group">
                    <label for="paslon1">paslon 1:</label>
                    <input <?php
$cek = Session::get('level');
        if ($cek == '10' ) {
           echo " disabled='disabled' ";
           }
          elseif ($cek == '11') {
          }
          ?> 
          type="text" class="form-control" id="paslon1" name="paslon1" value="{{ $datas->paslon1 }}">
                </div>
                <div class="form-group">
                    <label for="paslon2">paslon 2:</label>
                    <input <?php
$cek = Session::get('level');
        if ($cek == '10' ) {
           echo " disabled='disabled' ";
           }
          elseif ($cek == '11') {
          }
          ?>  type="text" class="form-control" id="paslon2" name="paslon2" value="{{ $datas->paslon2 }}">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input  <?php
$cek = Session::get('level');
        if ($cek == '10' ) {
          
           }
          elseif ($cek == '11') {
             echo " disabled='disabled' ";
          }
          ?> type="text" class="form-control" id="jumlah" name="jumlah" value="{{ $datas->jumlah }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>


        <div class="section black contact-details green-icons">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="services-box-3">
                            <i class="fa fa-phone"></i>
                            <div class="content">
                                <p>
                                    Phone</p>
                                <h3>
                                    +1 555 666 9999</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="services-box-3">
                            <i class="fa fa-envelope"></i>
                            <div class="content">
                                <p>
                                    E-mail</p>
                                <h3>
                                    letstalk@thempleite.com</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="services-box-3">
                            <i class="fa fa-map-marker "></i>
                            <div class="content">
                                <p>
                                    Postal</p>
                                <h3>
                                    32-Grey Suite, NY</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="services-box-3">
                            <i class="fa fa-pinterest-square"></i>
                            <div class="content">
                                <p>
                                    Pinterest</p>
                                <h3>
                                    pinterest.com/frittt</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section white footer">
            <div class="container">
                <div class="p-t-30 p-b-50">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 xs-m-b-20">
                            <img src="http://localhost:8000/assets/img/logo_condensed.png" alt="" data-src="http://localhost:8000/assets/img/logo_condensed.png"
                                data-src-retina="assets/img/logo2x.png" width="119" height="22" />
                            <br />
                            <br />
                            © Frittt Templates.
                            <br />
                            All Rights Reserved.
                        </div>
                        <div class="col-md-4 col-lg-3 col-sm-4  col-xs-12 xs-m-b-20">
                            <address class="xs-no-padding  col-md-6 col-lg-6 col-sm-6  col-xs-12">
                                32 - Grey Suite<br>
                                Odd Street,<br>
                                NY, USA.
                            </address>
                            <div class="xs-no-padding col-md-6 col-lg-6 col-sm-6">
                                <div>
                                    (1) 555 666 9999</div>
                                <a href="http://localhost:8000/javascript:">letstalk@thempleite.com</a>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 xs-m-b-20">
                            <div class="bold">
                                We Are Hiring</div>
                            Send you resume at <a href="http://localhost:8000/javascript:">careers@thempleite.com</a>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 ">
                            <div class="bold">
                                FOLLOW US</div>
                            <br />
                            <a href="http://localhost:8000/javascript:"><i class="fa fa-facebook fa-2x"></i></a>&nbsp; <a href="http://localhost:8000/javascript:">
                                <i class="fa fa-twitter fa-2x"></i></a>&nbsp; <a href="http://localhost:8000/javascript:"><i class="fa fa-youtube-play  fa-2x">
                                </i></a>&nbsp; <a href="http://localhost:8000/javascript:"><i class="fa fa-github fa-2x"></i></a>&nbsp;
                            <a href="http://localhost:8000/javascript:"><i class="fa fa-dribbble fa-2x"></i></a>&nbsp; <a href="http://localhost:8000/javascript:">
                                <i class="fa fa-pinterest fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN CORE JS FRAMEWORK -->
    <script type="text/javascript" src="http://localhost:8000/assets/plugins/jquery-1.8.3.min.js"></script>
    <script src="http://localhost:8000/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- END CORE JS FRAMEWORK -->
    <!-- BEGIN JS PLUGIN -->
    <script src="http://localhost:8000/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="http://localhost:8000/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="http://localhost:8000/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="http://localhost:8000/assets/plugins/waypoints.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://localhost:8000/assets/plugins/jquery-nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="http://localhost:8000/assets/plugins/jquery-isotope/jquery.isotope.js"></script>
    <!-- END JS PLUGIN -->
    <script type="text/javascript" src="http://localhost:8000/assets/js/core.js"></script>
</body>
</html>
