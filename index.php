<?php

$date = date ("Y-m-d", time());
$date2 =  date("Y-m-d", strtotime("+2 day", strtotime($date)));
$date3 =  date("Y-m-d", strtotime("+3 day", strtotime($date)));
$date4 =  date("Y-m-d", strtotime("+4 day", strtotime($date)));
$date5 =  date("Y-m-d", strtotime("+5 day", strtotime($date)));
$date6 =  date("Y-m-d", strtotime("+6 day", strtotime($date)));
$date7 =  date("Y-m-d", strtotime("+7 day", strtotime($date)));
$date8 =  date("Y-m-d", strtotime("+8 day", strtotime($date)));
$date9 =  date("Y-m-d", strtotime("+9 day", strtotime($date)));
$date10 =  date("Y-m-d", strtotime("+10 day", strtotime($date)));
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
    <h1>Fill out the form to order fresh Kimchi</h1>

    <form class="form" action="summary.php" method="POST">

        <p class="title">Name </p><input style="width:70%; height:20px" type="text" name="Name">
        <p class="title">Contact number</p><input style="width:70%; height:20px" type="text" name="Contactnumber">
        <p class="title">Delivery/Pick up</p>
          <input type="radio" name="DoP" id="delivery" value="Delivery">
            <label for="delivery">Delivery</label>
          <input type="radio" name="DoP" id="pickup" value="Pick up">
            <label for="pickup">Pick up</label>
        <p class="title">Delivery fee </p>
          <input type="radio" name="DoP" id="7km" value="8">
            <label for="delivery">~7km $8</label>
          <input type="radio" name="DoP" id="10km" value="15">
            <label for="pickup">7.1km~10km $15</label>
          <input type="radio" name="DoP" id="20km" value="20">
            <label for="delivery">10km~ $20</label>
          <input type="radio" name="DoP" id="pickup" value="0">
            <label for="pickup">Pick up</label>
        <p class="title">Address</p><textarea style="width:70%; resize:none; height:50px" name="Address"></textarea>
        <p class="title">Delivery time</p>
          <p><select id="input" name="Deliverytime"></p>
            <option value="<?php echo $date2?>"><?php echo $date2?> </option>;
            <option value="<?php echo $date3?>"><?php echo $date3?> </option>;
            <option value="<?php echo $date4?>"><?php echo $date4?> </option>;
            <option value="<?php echo $date5?>"><?php echo $date5?> </option>;
            <option value="<?php echo $date6?>"><?php echo $date6?> </option>;
            <option value="<?php echo $date7?>"><?php echo $date7?> </option>;
            <option value="<?php echo $date8?>"><?php echo $date8?> </option>;
            <option value="<?php echo $date9?>"><?php echo $date9?> </option>;
            <option value="<?php echo $date10?>"><?php echo $date10?> </option>;
          </select>

        <p class="title">Menu</p>
            <!-- Photo Grid -->
            <div class="parent" style="display:table; width:100%">
              <div class="child" style="display:table-row;">
                    <div class="cell" style="display:table-cell;">
                      <img src="img/freshkimchi.png" alt="Fresh Kimchi" style="width:142px">
                      <p id="bodytext01">Fresh Kimchi 겉절이</p>
                            <select id="input" name="item1">
                              <option value=“Kimchi_240g”>240g</option>;
                              <option value=“Kimchi_500g”>500g</option>;
                              <option value=“Kimchi_1kg”>1kg</option>;
                            </select>
                            <select id="input" name="item1_Q">
                              <option value=“”>0</option>;
                              <option value=“1”>1</option>;
                              <option value=“2”>2</option>;
                              <option value=“3”>3</option>;
                              <option value=“4”>4</option>;
                              <option value=“5”>5</option>;
                            </select>
                    </div>
                    <div class="cell" style="display:table-cell;">
                      <img src="img/traditionalkimchi.png" alt="traditionalkimchi" style="width:142px">
                      <p id="bodytext01">Traditional Kimchi 배추김치</p>
                            <select id="input" name="item2">
                              <option value=“Traditional_Kimchi_500g”>500g</option>;
                              <option value=“Traditional_Kimchi_1kg”>1kg</option>;
                            </select>
                            <select id="input" Name="item2_Q">
                              <option value="">0</option>;
                              <option value=“1”>1</option>;
                              <option value=“2”>2</option>;
                              <option value=“3”>3</option>;
                              <option value=“4”>4</option>;
                              <option value=“5”>5</option>;
                            </select>
                    </div>
              </div>
              <div class="child" style="display:table-row;">
                    <div class="cell" style="display:table-cell;">
                      <img src="img/cucumberkimchi.png" alt="cucumberkimchi.png" style="width:142px">
                      <p id="bodytext01">Cucumber Kimchi 오이김치</p>
                            <select id="input" name="item3">
                              <option value=“1”>500g</option>;
                              <option value=“1”>1kg</option>;
                            </select>
                            <select id="input" Name="item3_Q">
                              <option value1=“0”>0</option>;
                              <option value=“1”>1</option>;
                              <option value=“2”>2</option>;
                              <option value=“3”>3</option>;
                              <option value=“4”>4</option>;
                              <option value=“5”>5</option>;
                            </select>
                    </div>
                    <div class="cell" style="display:table-cell;">
                        <img src="img/springonion.png" alt="springonion" style="width:142px">
                        <p id="bodytext01">Spring Onion Kimchi 파김치</p>
                            <select id="input" name="item4">
                              <option value=“1”>500g</option>;
                              <option value=“1”>1kg</option>;
                            </select>
                            <select id="input" name="item4_Q">
                              <option value=“0”>0</option>;
                              <option value=“1”>1</option>;
                              <option value=“2”>2</option>;
                              <option value=“3”>3</option>;
                              <option value=“4”>4</option>;
                              <option value=“5”>5</option>;
                            </select>
                    </div>
              </div>
              <div class="child" style="display:table-row;">
                    <div class="cell" style="display:table-cell;">
                      <img src="img/radish.png" alt="Radish" style="width:142px">
                      <p id="bodytext01">Radish Kimchi 깍두기</p>
                            <select id="input" name="item5">
                              <option value=“1”>500g</option>;
                              <option value=“1”>1kg</option>;
                            </select>
                            <select id="input" name="item5_Q">
                              <option value=“0”>0</option>;
                              <option value=“1”>1</option>;
                              <option value=“2”>2</option>;
                              <option value=“3”>3</option>;
                              <option value=“4”>4</option>;
                              <option value=“5”>5</option>;
                            </select>
                    </div>
                    <div class="cell" style="display:table-cell;">
                        <img src="img/pickle.png" alt="Pickle" style="width:142px">
                        <p id="bodytext01">Mixed Vege Pickle 피클</p>
                        <select id="input" name="items6_Q">
                          <option value=“0”>0</option>;
                          <option value=“1”>1 Bottle</option>;
                          <option value=“2”>2 Bottles</option>;
                          <option value=“3”>3 Bottles</option>;
                          <option value=“4”>4 Bottles</option>;
                          <option value=“5”>5 Bottles</option>;
                        </select>
                   </div>
              </div>
            </div>


        <p><button class="btn">Check out</button></p>
    </form>
    <form action="" method="post">

  </body>
</html>
