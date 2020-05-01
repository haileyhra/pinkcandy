<?php
  $item1 = $_POST['item1'];
  $item1_Q = $_POST['item1_Q'];
  $item2 = $_POST['item2'];
  $item2_Q = $_POST['item2_Q'];
  $item3 = $_POST['item3'];
  $item3_Q = $_POST['item3_Q'];
  $item4 = $_POST['item4'];
  $item4_Q = $_POST['item4_Q'];
  $item5 = $_POST['item5'];
  $item5_Q = $_POST['item5_Q'];
  $item6 = $_POST['item6'];
  $item6_Q = $_POST['item6_Q'];
  $a = 15;
  $total = $item1_Q * 15;
?>

<!doctype html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
  <link rel=stylesheet href='style.css' type='text/css'>
    <meta charset="utf-8">
    <title>Pink Candy Order Page</title>
    <style media="screen">
        .menu {
        display: grid;
        grid-template-columns: auto auto;
        }
    </style>
  </head>
  <body>
    <h1>Order Summary</h1>
    <div class="container">
         <br>
         <div class="table-responsive">
           <form class="summary" action="process.php" method="post">
              <table id="order_summary" style="width:90%; height: 30px; text-align:left;">
                   <thead>
                        <tr>
                          <th>Name</th>
                          <td><input type="text" name="Name" style="width:95%" value="<?php echo "{$_POST['Name']}"?>"></td>
                        </tr>
                        <tr>
                          <th>Contact number</th>
                          <td><input type="text" name="Contactnumber" style="width:95%" value="<?php echo "{$_POST['Contactnumber']}"?>"></td>
                        </tr>
                        <tr>
                          <th>Delivery/Pick up</th>
                          <td><input type="text" name="DoP" style="width:95%" value="<?php echo "{$_POST['DoP']}"?>"></td>
                        </tr>
                        <tr>
                          <th>Delivery Time</th>
                          <td><input type="text" name="Deliverytime" style="width:95%" value="<?php echo "{$_POST['Deliverytime']}"?>"></td>
                        </tr>
                        <tr>
                          <th>Address</th>
                          <td><input type="text" name="Address" style="width:95%" value="<?php echo "{$_POST['Address']}"?>"></td>
                        </tr>
                        <tr>
                          <th>Items</th>
                          <td>
                              <input type="text" name="Items" style="width:95%; resize:none;" rows="10" value="<?php

                                  echo $item1_Q;
                                  echo $item1;
                                  echo $item2_Q;
                                  echo $item2;
                                  echo $item3_Q;
                                  echo $item3;
                                  echo $item4_Q;
                                  echo $item4;
                                  echo $item5_Q;
                                  echo $item5;
                                  echo $item6_Q;
                                  echo $item6;
                              ?>">
                          </td>
                        </tr>
                        <tr>
                          <th>Total</th>
                          <td><?php echo $total;?></td>
                        </tr>

                   </thead>
              </table>
         </div>
    </div>
          <p><button class="btn">Submit</button></p>
          </form>

  </body>
</html>
