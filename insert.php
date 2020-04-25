<?php
$conn = mysqli_connect("localhost", "root", "candy2011", "pinkcandy");
mysqli_query($conn, "
INSERT INTO orders
  (Time, Name, Contactnumber, Address, Items, Deliverytime, Amount)
VALUES(
  NOW(),
  'Test',
  '000000000',
  'Singapore',
  'chocolate',
  '2020-04-20',
  '5'
  )");

  $result = mysqli_query($conn, $sql);
  if($result === false){
      echo mysqli_error($conn);
  }
  ?>
