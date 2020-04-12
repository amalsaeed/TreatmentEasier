

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

<title>Dashboard Template for Bootstrap</title>

<link href="https:\\maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /*
 * Base structure
 */

        /* Move down content because we have a fixed navbar that is 50px tall */
        body {
            padding-top: 50px;
        }


        /*
         * Global add-ons
         */

        .sub-header {
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        /*
         * Top navigation
         * Hide default border to remove 1px line.
         */
        .navbar-fixed-top {
            border: 0;
        }

        /*
         * Sidebar
         */

        /* Hide for mobile, show later */
        .sidebar {
            display: none;
        }

        @media (min-width: 768px) {
            .sidebar {
                position: fixed;
                top: 51px;
                bottom: 0;
                left: 0;
                z-index: 1000;
                display: block;
                padding: 20px;
                overflow-x: hidden;
                overflow-y: auto;
                /* Scrollable contents if viewport is shorter than content. */
                background-color: #f5f5f5;
                border-right: 1px solid #eee;
            }
        }

        /* Sidebar navigation */
        .nav-sidebar {
            margin-right: -21px;
            /* 20px padding + 1px border */
            margin-bottom: 20px;
            margin-left: -20px;
        }

        .nav-sidebar>li>a {
            padding-right: 20px;
            padding-left: 20px;
        }

        .nav-sidebar>.active>a,
        .nav-sidebar>.active>a:hover,
        .nav-sidebar>.active>a:focus {
            color: #fff;
            background-color: #428bca;
        }


        /*
         * Main content
         */

        .main {
            padding: 20px;
        }

        @media (min-width: 768px) {
            .main {
                padding-right: 40px;
                padding-left: 40px;
            }
        }

        .main .page-header {
            margin-top: 0;
        }


        /*
         * Placeholder dashboard ideas
         */

        .placeholders {
            margin-bottom: 30px;
            text-align: center;
        }

        .placeholders h4 {
            margin-bottom: 0;
        }

        .placeholder {
            margin-bottom: 20px;
        }

        .placeholder img {
            display: inline-block;
            border-radius: 50%;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                    <li><a href="#"></a></li>

                    <li ><a href="/messages">Communications ( <span style="color:red;">
                                @include('messenger.unread-count') </span>)</a></li>

                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Dashboard</h1>

                <h2 class="sub-header">Coming Appointments</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Clinic</th>
                                <th>Message</th>
                                <th>Prescription</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse($newReservations as $reservation)
                            <tr>
                                <td>{{$reservation->user->name}}</td>
                                <td>{{$reservation->user->profile->mobile}}</td>
                                <td>{{$reservation->user->email}}</td>
                                <td>{{$reservation->date}}</td>
                                <td>{{$reservation->clinic->name}}</td>
                                <td><a href="{{route('messages.create',$reservation->user->id)}}">Send a Message</a></td>
                                <td><a href="{{route('prescription.show',$reservation->prescription->id)}}">View</a></td>

                            </tr>

                            @empty
                            <tr>
                                <td colspan="5" class="text-danger text-center">

                                    There are no appointments to show
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Dashboard</h1>

                <h2 class="sub-header">Canceled Appointments</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Clinic</th>
                                <th>Message</th>
                                <th>Prescription</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($canceledReservations as $reservation)
                            <tr>
                                <td>{{$reservation->user->name}}</td>
                                <td>{{$reservation->user->profile->mobile}}</td>
                                <td>{{$reservation->user->email}}</td>
                                <td>{{$reservation->date}}</td>
                                <td>{{$reservation->clinic->name}}</td>
                            <td><a href="{{route('messages.create',$reservation->user->id)}}">Send a Message</a></td>
                            <!-- Button trigger modal -->

                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-danger text-center">
                                    There are no appointments to show
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>



</body>
<script src="https:\\maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>




</html>
