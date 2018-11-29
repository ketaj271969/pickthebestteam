<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pick The Best Team</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600"
          rel="stylesheet" type="text/css">

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link href="{{asset('css/libs.css')}}" rel="stylesheet">
    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
<div class="dropdown">
    <button class="dropbtn">Actions</button>
    <div class="dropdown-content">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/admin/cities') }}">List Cities</a>
        <a href="{{ url('/admin/cities/create') }}">Create City</a>
        <a href="{{ url('/admin/users') }}">List Users</a>
        <a href="{{ url('/admin/users/create') }}">Create User</a>
        <a href="{{ url('/admin/venues') }}">List Venues</a>
        <a href="{{ url('/admin/venues/create') }}">Create Venue</a>
    </div>
</div>

<div class="container">
    @yield('content')
</div>

@yield('footer')

</body>
</html>