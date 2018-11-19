@extends('admin-dashboard.layouts.app')

@section('content')
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-dashboard"></i>
    </div>
    <div class="header-title">
        <h1>iPlayFootball Admin Dashboard</h1>
        <small></small>
    </div>
</section>
@endsection

<!-- Main content -->
@section('maincontent')
<section class="content">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div id="cardbox1">
                <div class="statistic-box">
                    <i class="fa fa-user-plus fa-3x"></i>
                    <div class="counter-number pull-right">
                        <span class="count-number">11</span>
                        <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                        </span>
                    </div>
                    <h3> Active Admins</h3>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div id="cardbox2">
                <div class="statistic-box">
                    <i class="fa fa-user fa-3x"></i>
                    <div class="counter-number pull-right">
                        <span class="count-number">4</span>
                        <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                        </span>
                    </div>
                    <h3> Total Players</h3>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div id="cardbox3">
                <div class="statistic-box">
                    <i class="fa fa-user fa-3x"></i>
                    <div class="counter-number pull-right">
                        <span class="count-number">965</span>
                        <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                        </span>
                    </div>
                    <h3> Total Scouts</h3>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div id="cardbox4">
                <div class="statistic-box">
                    <i class="fa fa-check-square-o fa-3x"></i>
                    <div class="counter-number pull-right">
                        <span class="count-number">11</span>
                        <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                        </span>
                    </div>
                    <h3> Pending Verifications</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-bd lobidisable">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Latest From Notice Board</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="work-touchpoint">
                        <div class="work-touchpoint-date">
                            <span class="day">28</span>
                            <span class="month">Apr</span>
                        </div>
                    </div>
                    <div class="detailswork">
                        <span class="label-custom label label-default pull-right">Everyone</span>
                        <a href="#" title="headings">Marketing policy</a> <br>
                        <p>Stadium Road - Port Harcourt,Rivers</p>
                    </div>
                    <div class="work-touchpoint">
                        <div class="work-touchpoint-date">
                            <span class="day">2</span>
                            <span class="month">Apr</span>
                        </div>
                    </div>
                    <div class="detailswork">
                        <span class="label-custom label label-default pull-right">Admin</span>
                        <a href="#" title="headings">Accounting policy</a> <br>
                        <p>Uyo, Akwa Ibom</p>
                    </div>
                    <div class="work-touchpoint">
                        <div class="work-touchpoint-date2">
                            <span class="day">17</span>
                            <span class="month">Mrc</span>
                        </div>
                    </div>
                    <div class="detailswork">
                        <span class="label-custom label label-default pull-right">Player</span>
                        <a href="#" title="headings">Marketing policy</a> <br>
                        <p>Ikeja - Lagos</p>
                    </div>
                    <div class="work-touchpoint">
                        <div class="work-touchpoint-date2">
                            <span class="day">3</span>
                            <span class="month">jan</span>
                        </div>
                    </div>
                    <div class="detailswork">
                        <span class="label-custom label label-default pull-right">Scout</span>
                        <a href="#" title="headings">Finance policy</a> <br>
                        <p>F.C.T - Abuja</p>
                    </div>
                    <div class="work-touchpoint">
                        <div class="work-touchpoint-date2">
                            <span class="day">3</span>
                            <span class="month">jan</span>
                        </div>
                    </div>
                    <div class="detailswork">
                        <span class="label-custom label label-default pull-right">Teams</span>
                        <a href="#" title="headings">Finance policy</a> <br>
                        <p>F.C.T - Abuja</p>
                    </div>
                    <div class="work-touchpoint">
                        <div class="work-touchpoint-date2">
                            <span class="day">3</span>
                            <span class="month">jan</span>
                        </div>
                    </div>
                    <div class="detailswork">
                        <span class="label-custom label label-default pull-right">Academies</span>
                        <a href="#" title="headings">Finance policy</a> <br>
                        <p>F.C.T - Abuja</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="panel panel-bd lobidisable">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Verifications</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="Pendingwork">
                        <span class="label-warning label label-default pull-right">pending</span>
                        <i class="fa fa-ban"></i>
                        <a href="#">Welbeck</a>
                        <div class="upworkdate">
                            <p>Jul 25, 2017 for Silver Package</p>
                        </div>
                    </div>
                    <div class="Pendingwork">
                        <span class="label-success label label-default pull-right">Verified</span>
                        <i class="fa fa-ban"></i>
                        <a href="#">Kompany</a>
                        <div class="upworkdate">
                            <p>Jul 25, 2017 for Gold Package</p>
                        </div>
                    </div>
                    <div class="Pendingwork">
                        <span class="label-danger label label-default pull-right">Unverified</span>
                        <i class="fa fa-ban"></i>
                        <a href="#">Paulinho</a>
                        <div class="upworkdate">
                            <p>Feb 25, 2017 for Bronze Package</p>
                        </div>
                    </div>
                    <div class="Pendingwork">
                        <span class="label-warning label label-default pull-right">pending</span>
                        <i class="fa fa-ban"></i>
                        <a href="#">Milito</a>
                        <div class="upworkdate">
                            <p>apr 25, 2017 for Bronze Package</p>
                        </div>
                    </div>
                    <div class="Pendingwork">
                        <span class="label-success label label-default pull-right">Verified</span>
                        <i class="fa fa-ban"></i>
                        <a href="#">Iheanacho</a>
                        <div class="upworkdate">
                            <p>jun 25, 2017 for Gold Package</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="panel panel-bd lobidisable">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Latest Sign-ups</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="Workslist">
                        <div class="worklistdate">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Player Name</th>
                                        <th>Sign-Up Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="info">
                                        <th scope="row">Morata</th>
                                        <td>Feb 25,2017</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ramos</th>
                                        <td>jun 05,2017</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Moses</th>
                                        <td>Feb 05,2017</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Davis</th>
                                        <td>jun 25,2017</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Konte</th>
                                        <td>Jul 15,2017</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
function dash() {
    // single bar chart
    var ctx = document.getElementById("singelBarChart");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
            datasets: [{
                label: "My First dataset",
                data: [40, 55, 75, 81, 56, 55, 40],
                borderColor: "rgba(0, 150, 136, 0.8)",
                width: "1",
                borderWidth: "0",
                backgroundColor: "rgba(0, 150, 136, 0.8)"
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    //monthly calender
    $('#m_calendar').monthly({
        mode: 'event',
        //jsonUrl: 'events.json',
        //dataType: 'json'
        xmlUrl: 'events.xml'
    });

    //bar chart
    var ctx = document.getElementById("barChart");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "august", "september", "october", "Nobemver", "December"],
            datasets: [{
                label: "My First dataset",
                data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56],
                borderColor: "rgba(0, 150, 136, 0.8)",
                width: "1",
                borderWidth: "0",
                backgroundColor: "rgba(0, 150, 136, 0.8)"
            }, {
                label: "My Second dataset",
                data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86],
                borderColor: "rgba(51, 51, 51, 0.55)",
                width: "1",
                borderWidth: "0",
                backgroundColor: "rgba(51, 51, 51, 0.55)"
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    //counter
    $('.count-number').counterUp({
        delay: 10,
        time: 5000
    });
}
dash();
</script>
@endsection
