<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0,maximum-scale=1.0, user-scalable=no" />
    <title>iPlayfootball</title>
    <link rel="shortcut icon" href="{{asset('img/iLOGO.png')}}" type="image/gif">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/custom/style.css')}}">
    <script defer="defer" src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
        crossorigin="anonymous"></script>
    <style type="text/css">
        .error-div {
            height: 100vh;
            background-color: #fff;
        }

        .error-div a {
            text-decoration: none;
            color: #007bff
        }

        .error-bg {
            height: 100vh;
            background-image: url('/img/bg_purple.png');

            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            overflow: hidden;
            /* position: absolute;
    top: 0;
    left: 50%;
    z-index: 1000;
    clip-path: polygon( 30% 0,  left top 
    100% 0,  right top 
    100% 100%,  right bottom 
    0 100% left bottom 
    ); */
        }

        @-moz-keyframes rocket-movement {
            100% {
                -moz-transform: translate(1200px, -600px);
            }
        }

        @-webkit-keyframes rocket-movement {
            100% {
                -webkit-transform: translate(1200px, -600px);
            }
        }

        @keyframes rocket-movement {
            100% {
                transform: translate(1200px, -600px);
            }
        }

        @-moz-keyframes spin-earth {
            100% {
                -moz-transform: rotate(-360deg);
                transition: transform 20s;
            }
        }

        @-webkit-keyframes spin-earth {
            100% {
                -webkit-transform: rotate(-360deg);
                transition: transform 20s;
            }
        }

        @keyframes spin-earth {
            100% {
                -webkit-transform: rotate(-360deg);
                transform: rotate(-360deg);
                transition: transform 20s;
            }
        }

        @-moz-keyframes move-astronaut {
            100% {
                -moz-transform: translate(-160px, -160px);
            }
        }

        @-webkit-keyframes move-astronaut {
            100% {
                -webkit-transform: translate(-160px, -160px);
            }
        }

        @keyframes move-astronaut {
            100% {
                -webkit-transform: translate(-160px, -160px);
                transform: translate(-160px, -160px);
            }
        }

        @-moz-keyframes rotate-astronaut {
            100% {
                -moz-transform: rotate(-720deg);
            }
        }

        @-webkit-keyframes rotate-astronaut {
            100% {
                -webkit-transform: rotate(-720deg);
            }
        }

        @keyframes rotate-astronaut {
            100% {
                -webkit-transform: rotate(-720deg);
                transform: rotate(-720deg);
            }
        }

        @-moz-keyframes glow-star {
            40% {
                -moz-opacity: 0.3;
            }
            90%,
            100% {
                -moz-opacity: 1;
                -moz-transform: scale(1.2);
            }
        }

        @-webkit-keyframes glow-star {
            40% {
                -webkit-opacity: 0.3;
            }
            90%,
            100% {
                -webkit-opacity: 1;
                -webkit-transform: scale(1.2);
            }
        }

        @keyframes glow-star {
            40% {
                -webkit-opacity: 0.3;
                opacity: 0.3;
            }
            90%,
            100% {
                -webkit-opacity: 1;
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
                border-radius: 999999px;
            }
        }

        .spin-earth-on-hover {
            transition: ease 200s !important;
            transform: rotate(-3600deg) !important;
        }

        .central-body {
            /*    width: 100%;*/
            padding: 17% 5% 10% 5%;
            text-align: center;
        }

        .objects img {
            z-index: 90;
            pointer-events: none;
        }

        .object_rocket {
            z-index: 95;
            position: absolute;
            transform: translateX(-50px);
            top: 75%;
            pointer-events: none;
            animation: rocket-movement 200s linear infinite both running;
        }

        .object_earth {
            position: absolute;
            top: 20%;
            left: 15%;
            z-index: 90;
            /*    animation: spin-earth 100s infinite linear both;*/
        }

        .object_moon {
            position: absolute;
            top: 12%;
            left: 25%;
            /*
    transform: rotate(0deg);
    transition: transform ease-in 99999999999s;
*/
        }

        .earth-moon {}

        .object_astronaut {
            animation: rotate-astronaut 200s infinite linear both alternate;
        }

        .box_astronaut {
            z-index: 110 !important;
            position: absolute;
            top: 60%;
            right: 20%;
            will-change: transform;
            animation: move-astronaut 50s infinite linear both alternate;
        }

        .image-404 {
            position: relative;
            z-index: 100;
            pointer-events: none;
        }

        .stars {
            background: url('/img/overlay_stars.svg');
        background-repeat: repeat;
        background-size: contain;
        background-position: left top;
        }

        .glowing_stars .star {
            position: absolute;
            border-radius: 100%;
            background-color: #fff;
            width: 3px;
            height: 3px;
            opacity: 0.3;
            will-change: opacity;
        }

        .glowing_stars .star:nth-child(1) {
            top: 80%;
            left: 25%;
            animation: glow-star 2s infinite ease-in-out alternate 1s;
        }

        .glowing_stars .star:nth-child(2) {
            top: 20%;
            left: 40%;
            animation: glow-star 2s infinite ease-in-out alternate 3s;
        }

        .glowing_stars .star:nth-child(3) {
            top: 25%;
            left: 25%;
            animation: glow-star 2s infinite ease-in-out alternate 5s;
        }

        .glowing_stars .star:nth-child(4) {
            top: 75%;
            left: 80%;
            animation: glow-star 2s infinite ease-in-out alternate 7s;
        }

        .glowing_stars .star:nth-child(5) {
            top: 90%;
            left: 50%;
            animation: glow-star 2s infinite ease-in-out alternate 9s;
        }

        @media only screen and (max-width: 600px) {
            .navbar-links {
                display: none;
            }
            .custom-navbar {
                text-align: center;
            }
            .brand-logo img {
                width: 120px;
            }
            .box_astronaut {
                top: 70%;
            }
            .central-body {
                padding-top: 25%;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 error-div">
                <div class="row justify-content-md-center">
                    <div class="col-12 p-2">
                        <a href="/" class="text-dark"><img src="{{asset('img/back-arrow.png')}}" class="img-fluid m-1" width="30" height="30"> Return Home</a>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="col-12 row justify-content-center">
                            <img src="{{asset('img/iLOGO.png')}}" class="img-fluid" alt="iPlayfootball logo">
                        </div>
                        <h1 class="text-center text-danger mt-5">4.0.4</h1>
                        <h1 class="col-12 text-center">The page you're looking for does not exist.</h1>
                        <div class="col-12 row">
                            <a href="/" class="btn btn-success btn-bdr p-2 m-auto text-white">Return Home</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-7 error-bg">
                <div class="stars">
                    <div class="objects">
                        <img class="object_rocket" src="{{asset('img/rocket.svg')}}" width="40px">
                        <div class="earth-moon">
                            <img class="object_earth" src="{{asset('img/earth.svg')}}" width="100px">
                            <img class="object_moon" src="{{asset('img/moon.svg')}}" width="80px">
                        </div>
                        <div class="box_astronaut">
                            <img class="object_astronaut" src="{{asset('img/astronaut.svg')}}" width="140px">
                        </div>
                    </div>
                    <div class="glowing_stars">
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>