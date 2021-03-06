<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Treatment Easier | Admin</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        h1.page-header {
            margin-top: -5px;
        }

        .sidebar {
            padding-left: 0;
        }

        .main-container {
            background: #FFF;
        }

        .footer {
            width: 100%;
        }

        :focus {
            outline: none;
        }

        .side-menu {
            position: relative;
            width: 100%;
            height: 100%;
            background-color: #f8f8f8;
            border-right: 1px solid #e7e7e7;
        }
        .side-menu .navbar {
            border: none;
        }
        .side-menu .navbar-header {
            width: 100%;
            border-bottom: 1px solid #e7e7e7;
        }
        .side-menu .navbar-nav .active a {
            background-color: transparent;
            margin-right: -1px;
            border-right: 5px solid #e7e7e7;
        }
        .side-menu .navbar-nav li {
            display: block;
            width: 100%;
            border-bottom: 1px solid #e7e7e7;
        }
        .side-menu .navbar-nav li a {
            padding: 15px;
        }
        .side-menu .navbar-nav li a .glyphicon {
            padding-right: 10px;
        }
        .side-menu #dropdown {
            border: 0;
            margin-bottom: 0;
            border-radius: 0;
            background-color: transparent;
            box-shadow: none;
        }
        .side-menu #dropdown .caret {
            float: right;
            margin: 9px 5px 0;
        }
        .side-menu #dropdown .indicator {
            float: right;
        }
        .side-menu #dropdown > a {
            border-bottom: 1px solid #e7e7e7;
        }
        .side-menu #dropdown .panel-body {
            padding: 0;
            background-color: #f3f3f3;
        }
        .side-menu #dropdown .panel-body .navbar-nav {
            width: 100%;
        }
        .side-menu #dropdown .panel-body .navbar-nav li {
            padding-left: 15px;
            border-bottom: 1px solid #e7e7e7;
        }
        .side-menu #dropdown .panel-body .navbar-nav li:last-child {
            border-bottom: none;
        }
        .side-menu #dropdown .panel-body .panel > a {
            margin-left: -20px;
            padding-left: 35px;
        }
        .side-menu #dropdown .panel-body .panel-body {
            margin-left: -15px;
        }
        .side-menu #dropdown .panel-body .panel-body li {
            padding-left: 30px;
        }
        .side-menu #dropdown .panel-body .panel-body li:last-child {
            border-bottom: 1px solid #e7e7e7;
        }
        .side-menu #search-trigger {
            background-color: #f3f3f3;
            border: 0;
            border-radius: 0;
            position: absolute;
            top: 0;
            right: 0;
            padding: 15px 18px;
        }
        .side-menu .brand-name-wrapper {
            min-height: 50px;
        }
        .side-menu .brand-name-wrapper .navbar-brand {
            display: block;
        }
        .side-menu #search {
            position: relative;
            z-index: 1000;
        }
        .side-menu #search .panel-body {
            padding: 0;
        }
        .side-menu #search .panel-body .navbar-form {
            padding: 0;
            padding-right: 50px;
            width: 100%;
            margin: 0;
            position: relative;
            border-top: 1px solid #e7e7e7;
        }
        .side-menu #search .panel-body .navbar-form .form-group {
            width: 100%;
            position: relative;
        }
        .side-menu #search .panel-body .navbar-form input {
            border: 0;
            border-radius: 0;
            box-shadow: none;
            width: 100%;
            height: 50px;
        }
        .side-menu #search .panel-body .navbar-form .btn {
            position: absolute;
            right: 0;
            top: 0;
            border: 0;
            border-radius: 0;
            background-color: #f3f3f3;
            padding: 15px 18px;
        }
        /* Main body section */
        .side-body {
            margin-left: 310px;
        }
        /* small screen */
        @media (max-width: 768px) {
            .side-menu {
                position: relative;
                width: 100%;
                height: 0;
                border-right: 0;
            }

            .side-menu .navbar {
                z-index: 999;
                position: relative;
                height: 0;
                min-height: 0;
                background-color:none !important;
                border-color: none !important;
            }
            .side-menu .brand-name-wrapper .navbar-brand {
                display: inline-block;
            }
            /* Slide in animation */
            @-moz-keyframes slidein {
                0% {
                    left: -300px;
                }
                100% {
                    left: 10px;
                }
            }
            @-webkit-keyframes slidein {
                0% {
                    left: -300px;
                }
                100% {
                    left: 10px;
                }
            }
            @keyframes slidein {
                0% {
                    left: -300px;
                }
                100% {
                    left: 10px;
                }
            }
            @-moz-keyframes slideout {
                0% {
                    left: 0;
                }
                100% {
                    left: -300px;
                }
            }
            @-webkit-keyframes slideout {
                0% {
                    left: 0;
                }
                100% {
                    left: -300px;
                }
            }
            @keyframes slideout {
                0% {
                    left: 0;
                }
                100% {
                    left: -300px;
                }
            }
            /* Slide side menu*/
            /* Add .absolute-wrapper.slide-in for scrollable menu -> see top comment */
            .side-menu-container > .navbar-nav.slide-in {
                -moz-animation: slidein 300ms forwards;
                -o-animation: slidein 300ms forwards;
                -webkit-animation: slidein 300ms forwards;
                animation: slidein 300ms forwards;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }
            .side-menu-container > .navbar-nav {
                /* Add position:absolute for scrollable menu -> see top comment */
                position: fixed;
                left: -300px;
                width: 300px;
                top: 43px;
                height: 100%;
                border-right: 1px solid #e7e7e7;
                background-color: #f8f8f8;
                overflow: auto;
                -moz-animation: slideout 300ms forwards;
                -o-animation: slideout 300ms forwards;
                -webkit-animation: slideout 300ms forwards;
                animation: slideout 300ms forwards;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }
            @-moz-keyframes bodyslidein {
                0% {
                    left: 0;
                }
                100% {
                    left: 300px;
                }
            }
            @-webkit-keyframes bodyslidein {
                0% {
                    left: 0;
                }
                100% {
                    left: 300px;
                }
            }
            @keyframes bodyslidein {
                0% {
                    left: 0;
                }
                100% {
                    left: 300px;
                }
            }
            @-moz-keyframes bodyslideout {
                0% {
                    left: 300px;
                }
                100% {
                    left: 0;
                }
            }
            @-webkit-keyframes bodyslideout {
                0% {
                    left: 300px;
                }
                100% {
                    left: 0;
                }
            }
            @keyframes bodyslideout {
                0% {
                    left: 300px;
                }
                100% {
                    left: 0;
                }
            }
            /* Slide side body*/
            .side-body {
                margin-left: 5px;
                margin-top: 70px;
                position: relative;
                -moz-animation: bodyslideout 300ms forwards;
                -o-animation: bodyslideout 300ms forwards;
                -webkit-animation: bodyslideout 300ms forwards;
                animation: bodyslideout 300ms forwards;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }
            .body-slide-in {
                -moz-animation: bodyslidein 300ms forwards;
                -o-animation: bodyslidein 300ms forwards;
                -webkit-animation: bodyslidein 300ms forwards;
                animation: bodyslidein 300ms forwards;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }
            /* Hamburger */
            .navbar-toggle-sidebar {
                border: 0;
                float: left;
                padding: 18px;
                margin: 0;
                border-radius: 0;
                background-color: #f3f3f3;
            }
            /* Search */
            #search .panel-body .navbar-form {
                border-bottom: 0;
            }
            #search .panel-body .navbar-form .form-group {
                margin: 0;
            }
            .side-menu .navbar-header {
                /* this is probably redundant */
                position: fixed;
                z-index: 3;
                background-color: #f8f8f8;
            }
            /* Dropdown tweek */
            #dropdown .panel-body .navbar-nav {
                margin: 0;
            }
        }
        input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body data-gr-c-s-loaded="true">
<nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
                MENU
            </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                Administrator
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="container-fluid main-container" style="height: 80vh;">
    <div class="col-md-2 sidebar">
        <div class="row">
            <!-- uncomment code for absolute positioning tweek see top comment in css -->
            <div class="absolute-wrapper"> </div>
            <!-- Menu -->
            <div class="side-menu">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Main Menu -->
                    <div class="side-menu-container">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                            <li><a href="{{route('admin.doctors')}}"><span class="glyphicon glyphicon-plane"></span>Doctors</a></li>
                            <li><a href="{{route('admin.clinics')}}"><span class="glyphicon glyphicon-cloud"></span>Clinics</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-signal"></span>Users</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>

            </div>
        </div>  		</div>
    <div class="col-md-10 content" style="margin-top: 20px">
        @if (\Session::has('message'))
            <div class="alert alert-success" style="font-size: 14px">
                {!! \Session::get('message') !!}
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                Doctors List
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($doctors as $doctor)
                        <li class="list-group-item">
                            <p style="display: inline-block">
                                {{$doctor->name}}
                            </p>
                            <span class="pull-right" style="display: inline-block;">
                                <form style="display: inline-block;" role="form" method="POST" action="{{route('admin.doctors.destroy')}}" autocomplete="off">
                                    {{ csrf_field() }}
                                    <input hidden name="id" value="{{$doctor->id}}">
                                    <button type="submit" class="text-danger" style="display: inline-block;">Delete</button>
                                </form>
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="h3 mb-5 font-weight-normal">Add Doctor</h1>
            </div>
            <div class="panel-body">
                <form class="form-signin" role="form" method="POST" action="{{route('admin.doctors.store')}}" autocomplete="off">
                    {{ csrf_field() }}

                    @if (\Session::has('success'))
                        <div class="alert alert-success" style="font-size: 14px">
                            {!! \Session::get('success') !!}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <div class="d-flex justify-content-between align-items-center p-3 my-3 bg-purple rounded shadow-sm bordered">
                        <div class="d-flex flex-column">
                            <div class="m-5">
                                <label for="inputName">Doctor Name</label>
                                <input type="text" value="{{old('name')}}" id="inputName" class="form-control" placeholder="Name" required="" name="name">
                            </div>
                            <div class="m-3">
                                <label for="inputMobile">Mobile Number</label>
                                <input type="text" value="{{old('mobile')}}" id="inputMobile" class="form-control" placeholder="Mobile Number" required="" name="mobile">
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="m-3">
                                <label for="inputEmail">Email</label>
                                <input type="text" value="{{old('email')}}" id="inputEmail" class="form-control" placeholder="Email" required="" name="email">
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="m-3">
                                <label for="inputID">ID Number</label>
                                <input type="text" value="{{old('id_number')}}" id="inputID" class="form-control" placeholder="Id Number" required="" name="id_number">
                            </div>
                            <div class="m-3">
                                <label for="clinic">Clinic</label>
                                <select class="custom-select d-block" id="clinic" required="" name="clinic">
                                    @foreach($clinics as $clinic)
                                        <option value="{{$clinic->id}}">{{$clinic->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 mt-5" style="margin-top: 10px">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="pull-left footer">
        <p class="col-md-12">
        <hr class="divider">
        Copyright &COPY; 2015 <a href="http://www.pingpong-labs.com">Gravitano</a>
        </p>
    </footer>
</div>
</body>
</html>
