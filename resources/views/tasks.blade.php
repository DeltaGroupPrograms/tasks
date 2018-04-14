<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <!-- //css files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    {{--<link rel="stylesheet" href="css/font-awesome.css">--}}
    {{--<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">--}}
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/bootstrap-reset.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/style-bootstrap.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <!-- //web-fonts -->
    <link href="css/app.css" rel="stylesheet"  />
</head>
<body>

<section id="container" class="">
    <!--header start-->
@include('header')
    <!--header end-->
    <!--sidebar start-->
    <aside>
@include('menu_admin')
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--state overview start-->
            <div class="row state-overview">
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">

                    </section>
                </div>

            </div>
            <!--state overview end-->

            <div class="row">
                {{--<div class="col-lg-4">--}}
                   {{--ddddddddd--}}
                {{--</div>--}}
                {{--<div class="col-lg-8">--}}
                {{--eeeeeeeeeee--}}
                {{--</div>--}}

                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
            <div class="row">
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </section>
    </section>
    <!--main content end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<script src="js/jquery.customSelect.min.js" ></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<!--script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>

<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>
