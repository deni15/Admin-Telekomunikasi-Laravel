<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <title>dashboard</title>
</head>

<body>
    <div class="jumbotron">
        <nav id="nav_1" class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
            <div class="container">
                <a class="navbar-brand" id="vendor" style="display: none;" href="#">Selnet Optima</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact US</a>
                        </li>
                        <li class="nav-item">
                            <a href="#ab" id="gets" style="display: none;" class="badge bg-info mt-2 text-white rounded-pill">GET STARTED</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="jumbotron mb-0 p-5">
        <div class="row p-3">
            <div class="col-lg-6 col-md-6 col-ms-12 text-center align-center item-center pt-5 pb-4" id="s2">
                <h1 style="display: none;" id="judul1" class="card-title mt-4">PT.Selnet Optima</h1>
                <p style="display: none;" id="isi1" class="card-text mr-3 fs-5">We are your trusted Telecommunication Contractor, with Multi-Vendor and Multi-Technology capability</p>
                <a id="btn1" href="#ab" class="btn btn-info mt-4 text-white rounded-pill">GET STARTED</a>
            </div>
            <div class="col-lg-6 col-md-6 col-ms-11 text-center mt-5 align-center item-center ms-auto" id="s2">
                <img id="pict1" style="display: none;" src="{{asset('/assets/img/web1.png')}}" width="70%" alt="" srcset="">
            </div>
        </div>
    </div>
    <div class="container px-5">
        <div class="container-fluid item-center text-center align-center">
            <h2 class="card-title mt-2" id="ab" style="display: none;">ABOUT US &nbsp;<span style="display:none;" id="up1" class="fa fa-angle-up"></span><span id="down1" class="fa fa-angle-down"></h2>
        </div>
        <div class="container-fluid">
            <div class="container">
                <p class="card-text mt-5 fs-5" id="warna1" style="display: none;">
                    Our company established on 2005, by professional who has extensive background in Telecommunication and IT Industry. We have worked closely with telecom operator, regulator and tower provider, providing state-of-the-art telecommunication product and services which put us on the forefront of the industry.
                </p>
            </div>
            <div class="container mt-3" id="about" style="display: none;">
                <p class="card-text fs-5">
                    Backed up with highly skilled and experienced workforce, we successfully completed many nation wide projects for major telco operator in indonesia with more than 20.000 sites has been implemented on yearly average. Our coverage of service including Jabodetabek, West Java, Central Java, East Java, Bali Lombok, South Sumatra, Kalimantan, and Sulawesi. We have experience in deploying BTS, MW Transmission, Optical Network, Access & Datacomm Network as well as datacenters for our clients.
                </p>
                <p class="card-text fs-5" id="s2">
                    In financial terms, the company has multiplied by leaps and bounds from its humble beginning, started from only covering Jabodetabek and West Java region into a Nationwide service coverage with 6 more branches, providing services to major Telco Operator and ISP throughout Indonesia. We have stood the test of time for the past fifteen years of operation, from having an exponential growth of more then 59% CAGR and also surviving the bad economic recession
                </p>
                <p class="card-text fs-5" id="s2">
                    We are proud of our fine tradition which gives us strength to keep rising and keeping an excellent support to our clients by living our operational motto "OPTIMA":
                </p>
                <ul id="s2">
                    <li>
                        <p class="card-text fs-5">O - Operation Excellence</p>
                    </li>
                    <li>
                        <p class="card-text fs-5">P - Productive and Efficient</p>
                    </li>
                    <li>
                        <p class="card-text fs-5">T - Team Work and Collaboration</p>
                    </li>
                    <li>
                        <p class="card-text fs-5">I - Innovation and Continuous Learning</p>
                    </li>
                    <li>
                        <p class="card-text fs-5">M - Massive Growth</p>
                    </li>
                    <li>
                        <p class="card-text fs-5">A - Adaptive</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="jumbotron mb-0 p-5" id="test" style="display: none;">
        <div class="row p-3">
            <div class="col-lg-6 col-md-6 col-ms-11 text-center align-center item-center ms-auto">
                <img id="hover" src="{{asset('/assets/img/web3.png')}}" width="70%" alt="" srcset="">
            </div>
            <div class="col-lg-6 col-md-6 col-ms-12 text-center align-center item-center pt-5 pb-4">
                <h1 class="card-title mt-4">PT.Selnet Optima</h1>
                <p class="card-text mr-3 fs-5">We are your trusted Telecommunication Contractor, with Multi-Vendor and Multi-Technology capability</p>
                <a href="" class="btn btn-info mt-4 text-white rounded-pill">GET STARTED</a>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="jumbotron mb-0 p-5 shadow">
        <div class="row">
            <div class="col-ms-12 col-md-4 col-lg-4">
                <ul>
                    <li>
                        Alamat : Kotawisata
                    </li>
                    <li>
                        email : selnetoptima@gmail.com
                    </li>
                    <li>
                        No Telpon : 021924393
                    </li>
                </ul>
            </div>
            <div class="col-ms-12 col-md-4 col-lg-4">

            </div>
            <div class="col-ms-12 col-md-4 col-lg-4">

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // pengaturan
            $("#navbarNav").show(1000);
            $("#gets").show(800);
            $("#vendor").show(1500);
            $("#judul1").slideDown(1000);
            $("#isi1").slideDown(2000);
            $("#btn1").animate({
                top: '50px',
                opacity: '0.5',
                height: '40px',
                width: '180px'

            });
            $("#pict1").fadeIn(7000);
            $("#warna1").slideDown(2000);
            $("#ab").slideDown(1000);

            //about
            $("#down1").click(function() {
                $("#down1").hide();
                $("#up1").show();
                $("#about").slideDown(1300);
            });
            $("#btn1").click(function() {
                $("#down1").hide();
                $("#up1").show();
                $("#about").slideDown(1300);
            });
            $("#gets").click(function() {
                $("#down1").hide();
                $("#up1").show();
                $("#about").slideDown(1300);
            });
            $("#up1").click(function() {
                $("#down1").toggle();
                $("#up1").toggle();
                $("#about").slideUp(1300);
            });

            // dibawah about
            $("body").scrollTop(function() {
                $("#test").show(4000);
            });

            // smoove

            $('#s2').smoove({
                offset: '40%'
            });
        });
    </script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>