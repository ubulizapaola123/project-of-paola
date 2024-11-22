<?php
if($_SERVER['REQUEST_METHOD']===POST);
$full Name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$food=$_POST['food'];
$extras=$_POST['extras'];
$payment=$_POST['payment'];
$notes=$_POST['notes'];
$quantity=$_POST['quantity'];
$time=$_POST['time'];
$rating=$_POST['rating'];
$submit=$_POST['submit'];
echo "<table border="1">;
echo "<tr>
<th> Full name</th>
<th>Email Adress</th>
<th>Phone Number</th>
<th>Select food item</th>
<th>Extras</th>
<th>Additional Notes</th>
<th>Quantity</th>
<th>Order Date</th>
<th>Pickup time</th>
<th>Rate our services<th>
<tr>";
echo "<tr>
<td>$_Full Name<td>
<td>$_email<td>
<td>$_phone<td>
<td>$_food<td>
<td>$_extras<td>
<td>$_payment<td>
<td>$_notes<td>
<td>$_quantity<td>
<td>$_time<td>
<td>$_rating<td>
<tr>";
echo "</table>"
?>
    