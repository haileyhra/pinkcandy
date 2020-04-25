<?php

$date = date ("Y-m-d", time());
$date2 =  date("Y-m-d", strtotime("+1 day", strtotime($date)));
$date3 =  date("Y-m-d", strtotime("+2 day", strtotime($date)));
$date4 =  date("Y-m-d", strtotime("+3 day", strtotime($date)));
$date5 =  date("Y-m-d", strtotime("+4 day", strtotime($date)));
$date6 =  date("Y-m-d", strtotime("+5 day", strtotime($date)));
$date7 =  date("Y-m-d", strtotime("+6 day", strtotime($date)));
$date8 =  date("Y-m-d", strtotime("+7 day", strtotime($date)));
$date9 =  date("Y-m-d", strtotime("+8 day", strtotime($date)));
$date10 =  date("Y-m-d", strtotime("+9 day", strtotime($date)));
?>
<!doctype html>
<html>

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
    <h1>Fill out the form to order fresh Kimchi :)</h1>

    <form class="form" action="process.php" method="POST">
        <p class="title">Name </p><input id="input" type="text" name="Name">
        <p class="title">Contact number</p><input id="input" type="text" name="Contactnumber">
        <p class="title">Address</p><textarea id="input" name="Address"></textarea>
        <p class="title">Menu</p>
            <!-- Photo Grid -->
            <div class="menu">
              <div class="photo">
                <img src="img/1.png" alt="Sandwich" style="width:142px">
                <h6>Fresh Kimchi</h6>
                <p><input type="checkbox">240g   <input type="checkbox">500g   <input type="checkbox">1kg   </p>
              </div>
              <div class="photo">
                <img src="img/2.png" alt="Steak" style="width:142px">
                <h6>Let Me Tell You About This Steak</h6>
                <p><input type="checkbox">240g   <input type="checkbox">500g   <input type="checkbox">1kg   </p>
              </div>
              <div class="photo">
                <img src="img/3.png" alt="Cherries" style="width:142px">
                <h6>Cherries, interrupted</h6>
                <p><input type="checkbox">240g   <input type="checkbox">500g   <input type="checkbox">1kg   </p>
              </div>
              <div class="photo">
                <img src="img/4.png" alt="Pasta and Wine" style="width:142px">
                <h6>Once Again, Robust Wine and Vegetable Pasta</h6>
                <p><input type="checkbox">240g   <input type="checkbox">500g   <input type="checkbox">1kg   </p>
              </div>
            </div>
      <p class="title">Delivery time
          <p><select id="input">
              <option value="volvo"><?php echo $date?> </option>
              <option value="volvo"><?php echo $date2?> </option>
              <option value="volvo"><?php echo $date3?> </option>
              <option value="volvo"><?php echo $date4?> </option>
              <option value="volvo"><?php echo $date5?> </option>
              <option value="volvo"><?php echo $date6?> </option>
              <option value="volvo"><?php echo $date7?> </option>
              <option value="volvo"><?php echo $date8?> </option>
              <option value="volvo"><?php echo $date9?> </option>
              <option value="volvo"><?php echo $date10?> </option>
          </select></p>
      </p>
      <p class="title">Amount </p> <input type="text" id="input" name="Amount">

      <p><button class="btn">Submit</button></p>
    </form>

  </body>
</html>
