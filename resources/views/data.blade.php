<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Real-QuickCunt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/headereffects/css/component.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/headereffects/css/normalize.css" />
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css"
        media="screen" />
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
    <!-- BEGIN CSS TEMPLATE -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/magic_space.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" />
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
                        <a href="#" class="navbar-brand compressed">
                            <img src="assets/img/logo_condensed.png" alt="" data-src="assets/img/logo_condensed.png"
                                data-src-retina="assets/img/logo2x.png" width="119" height="22" /></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index">Home</a></li>
                            <li><a href="tour">Tour</a></li>
                            <li><a href="pricing">Pricing</a></li>
                            <li><a href="portfolio">Portfolio</a></li>
                            <li><a href="logout">Logout</a></li>
                        </ul>
                    </div>
                <br><br><br>

<section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Table Data</h1>

            <a href="/data/create" class=" btn btn-sm btn-primary">input</a> 
            <a href="{{url('register')}}" class="btn btn-md btn-warning">Add new User</a>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Provinsi</th>
                    <th>Paslon 1</th>
                    <th>Paslon 2</th>
                    <th>Golput </th>
                     <th>Jumlah </th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->provinsi }}</td>
                        <td>{{ $datas->paslon1 }}</td>
                        <td>{{ $datas->paslon2 }}</td>
                        <td><?php $a=$datas->paslon2; $b=$datas->paslon1; $c=$a+$b; $g=  $datas->jumlah - $c; echo $g;    ?></td>
                        <td>{{ $datas->jumlah }}</td>
                        <td>
                            <form action="{{ route('data.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('data.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>


                
        </div>
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
                            <img src="assets/img/logo_condensed.png" alt="" data-src="assets/img/logo_condensed.png"
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
                                <a href="javascript:">letstalk@thempleite.com</a>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 xs-m-b-20">
                            <div class="bold">
                                We Are Hiring</div>
                            Send you resume at <a href="javascript:">careers@thempleite.com</a>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 ">
                            <div class="bold">
                                FOLLOW US</div>
                            <br />
                            <a href="javascript:"><i class="fa fa-facebook fa-2x"></i></a>&nbsp; <a href="javascript:">
                                <i class="fa fa-twitter fa-2x"></i></a>&nbsp; <a href="javascript:"><i class="fa fa-youtube-play  fa-2x">
                                </i></a>&nbsp; <a href="javascript:"><i class="fa fa-github fa-2x"></i></a>&nbsp;
                            <a href="javascript:"><i class="fa fa-dribbble fa-2x"></i></a>&nbsp; <a href="javascript:">
                                <i class="fa fa-pinterest fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN CORE JS FRAMEWORK -->
    <script type="text/javascript" src="assets/plugins/jquery-1.8.3.min.js"></script>
    <script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- END CORE JS FRAMEWORK -->
    <!-- BEGIN JS PLUGIN -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/plugins/waypoints.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/plugins/parrallax/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-nicescroll/jquery.nicescroll.min.js"></script>
    <!-- END JS PLUGIN -->
    <script type="text/javascript" src="assets/js/core.js"></script>
</body>
</html>
