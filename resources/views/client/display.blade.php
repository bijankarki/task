<html>
    <head>
        <title>Employee</title>
        <meta charset="UTF-8">

        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/dataTables.bootstrap.min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-theme.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-theme-min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/bootstrap/css/mycss.css')}}" />
    </head>
    <body>
        <div class="col-md-12"id="container">
            <div class="col-md-12">
                <h3>Displaying All Clients</h3>
                <table class="table table-striped table-bordered table-hover" width="100%" id="mydata">
                    <thead>
                    <tr id="tablehead">
                        <th>S.No.</th><th>Name</th><th>Gender</th><th>Phone</th><th>Email</th><th>Address</th><th>Nationality</th>
                        <th>Dob</th><th>Education Background</th><th>Mode of Contact</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i=0;
                    foreach ($arrays as $key => $value ) {
                      $i++;
                      echo '<tr>';
                      echo '<td>'.$i.'</td>';
                      echo '<td>'.$arrays[$key][0].'</td>';
                      echo '<td>'.$arrays[$key][1].'</td>';
                      echo '<td>'.$arrays[$key][2].'</td>';
                      echo '<td>'.$arrays[$key][3].'</td>';
                      echo '<td>'.$arrays[$key][4].'</td>';
                      echo '<td>'.$arrays[$key][5].'</td>';
                      echo '<td>'.$arrays[$key][6].'</td>';
                      echo '<td>'.$arrays[$key][7].'</td>';
                      echo '<td>'.$arrays[$key][8].'</td>';
                      echo '</tr>';
                    }
                    ?>
                  </tbody>
        </table>
            </div>
        </div>
    <script src="{{asset('assets/bootstrap/js/jquery.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/jquery.dataTables.min.js')}}"></script>

    <script>
      $('#mydata').DataTable();
    </script>
</body>
</html>
