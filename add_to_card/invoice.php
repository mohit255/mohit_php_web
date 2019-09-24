<?php include_once('include/header.php'); 
// var_dump($_POST["cid"]);
if(@$_POST["cid"])
{
  $product_total=mysqli_query($conn,"SELECT count(id) as total_product, SUM(total_amount) as total_amount FROM `add_to_card` WHERE cid='".@$_POST["cid"]."'");
$product_total=mysqli_fetch_array($product_total);
// var_dump($product_total);
if(@$product_total["total_product"]>0)
{
  mysqli_query($conn,"INSERT INTO all_order(name, email,contact,city,date,total_product,total_amount,payment_type,payment_status,delever) VALUES ('".@$_POST["name"]."','".@$_POST["email"]."','".@$_POST["contact"]."','".@$_POST["city"]."','".date("d-m-Y H:i:sa")."','".@$product_total["total_product"]."','".@$product_total["total_amount"]."','COD','Pending','Pending')");
$get_order_id=mysqli_query($conn,"select * from all_order where email='".$_POST["email"]."' ORDER BY `all_order`.`id` DESC LIMIT 1");
$get_order_id=mysqli_fetch_array($get_order_id);
// var_dump($get_order_id["id"]);

$get_all_product=mysqli_query($conn,"select * from add_to_card where cid='".$_POST["cid"]."'");
while ($row=mysqli_fetch_assoc($get_all_product)) {
  mysqli_query($conn,"INSERT INTO oreder_product(order_id,product_id,product_name, price, quenty, total_amount) VALUES ('".$get_order_id["id"]."','".$row["product_id"]."','".$row["product_name"]."','".$row["price"]."','".$row["quenty"]."','".$row["total_amount"]."')");
}
  mysqli_query($conn,"delete from add_to_card where cid='".$_POST["cid"]."'");
}

}

if(!@$get_order_id["id"])
{
 header("location:index.php");
}
?>

<div class="container">
<div class="row">
  <div class="col-sm-8">
     <div class="well">
     <h1>Thank You</h1>
<h4>Your order is booked and Your Order ID is :<?php echo @$get_order_id["id"]; ?> <a href="index.php">Go To Shop</a></h4>
    </div>
  </div>
 
</div>
<hr>
</div>

<?php include_once('include/footer.php'); ?>


