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
    <body>
        <div class="col-md-12"id="container">
            <div class="col-md-11">
                <h3>Displaying All Clients</h3>
                <table class="table-striped" width="100%">
                    <tr id="tablehead">
                        <th>S.No.</th><th>Name</th><th>Gender</th><th>Phone</th><th>Email</th><th>Address</th><th>Nationality</th>
                        <th>Dob</th><th>Education Background</th><th>Mode of Contact</th>
                    </tr>
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
                    //foreach ($rows as $row){
                        /*echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[work_title]</td><td>$row[duration]</td>"
                                . "<td>$row[timestamp]</td><td><a href='updatemp.php?id=$row[id]'>update</a> &nbsp;"
                                . "<a href='../class/delete.php?id=$row[id]'>delete</a></td></tr>";
                    }*/
                    ?>
        </table>
            </div>
        </div>

</body>
</html>
