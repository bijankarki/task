<html>
    <head>
        <title>Employee</title>
        <meta charset="UTF-8">

        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-theme.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-theme-min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/mycss.css')}}" />

      </head>
        <div class="col-md-8"  id="container">
            <h3 class="dash">Client Dashboard</h3>
            <div class="col-md-5" id="btnarea">
                <button class="btn-default" onclick="location.href='/laravel/public/addclient'">Add New Client</button>
                <button class="btn-default" onclick="location.href='/laravel/public/viewall'">View All Clients</button>
            </div>
            <p id="display-status">
            <?php

            ?>
            </p>

        </div>
    </body>


</html>
