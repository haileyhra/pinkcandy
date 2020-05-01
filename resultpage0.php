<?php
$conn = mysqli_connect("localhost", "root", "candy2011", "pinkcandy");
$query ="SELECT * FROM orders ORDER BY ID DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
     <head>
          <title>Webslesson Tutorial | Datatables Jquery Plugin with Php MySql and Bootstrap</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
     </head>
     <body>
          <br /><br />
          <div class="container">
               <h3 align="center">Datatables Jquery Plugin with Php MySql and Bootstrap</h3>
               <br />
               <div class="table-responsive">
                    <table id="order_data" class="table table-striped table-bordered">
                         <thead>
                              <tr>
                                <th>ID</th>
                                <th>Order time</th>
                                <th>Name</th>
                                <th>Contact Name</th>
                                <th>Address</th>
                                <th>Items</th>
                                <th>Delivery Time</th>
                                <th>Amount</th>
                                <th>Fullfilment</th>
                              </tr>
                         </thead>
                         <?php
                         while($row = mysqli_fetch_array($result))
                         {
                              echo '
                              <tr>
                                   <td>'.$row["ID"].'</td>
                                   <td>'.$row["Time"].'</td>
                                   <td>'.$row["Name"].'</td>
                                   <td>'.$row["Contactnumber"].'</td>
                                   <td>'.$row["Address"].'</td>
                                   <td>'.$row["Items"].'</td>
                                   <td>'.$row["Deliverytime"].'</td>
                                   <td>'.$row["Amount"].'</td>
                                   <td>'.$row["Status"].'</td>
                              </tr>
                              ';
                         }
                         ?>
                    </table>
               </div>
          </div>

          <form action="status.php" method="POST">
            <p> ID <input type="text" name="ID"></p>
            <p><input type="submit" value="Completed" name="completed"></p>
          </form>

     </body>
</html>
<script>
$(document).ready(function(){
     $('#order_data').DataTable();
});

</script>
