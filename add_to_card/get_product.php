<?php include_once('connection.php'); 
if(@$_POST["status"]=="get_add_to_card_product")
{
	$cid=$_POST["cid"];

$data=mysqli_query($conn,"select a.*,b.image from add_to_card as a,product as b where b.id=a.product_id and a.cid='".$cid."'");
while ($row=mysqli_fetch_assoc($data)) {
	?>
<tr>
	<th><img src="<?php echo @$row["image"]; ?>" style="width:20px; height:20px" /> </th>
	<th><?php echo @$row["product_name"]; ?></th>
	<th><?php echo @$row["price"]; ?></th>
	<th><?php echo @$row["quenty"]; ?></th>
	<th><button type="button" class="btn btn-sm btn-danger remove_product_dsp" data-id="<?php echo @$row["id"]; ?>">Remove</button> </th>
</tr>
	<?php
}
?>
<tr>
	<th colspan="5">
		<a href="view_card.php?cid=<?php echo $cid ?>"><btn btutton type="button" class="btn btn-primary btn-block">Checkout</button></a>
	</th>
</tr>
<?php
}

if(@$_POST["status"]=="fill_card")
{
	$cid=$_POST["cid"];
	$product_id=$_POST["product_id"];
	$price=$_POST["product_price"];
	$que=$_POST["product_que"];

	$product_data=mysqli_query($conn,"select product_name from product where id='".$product_id."'");
	$product_data=mysqli_fetch_array($product_data);
   
$check_data=mysqli_query($conn,"select * from add_to_card where cid='".$cid."' and product_id='".$product_id."'");
$check_data=mysqli_fetch_array($check_data);

if($check_data)
{
    $que=$check_data["quenty"]+$que;
    $total_amount=$price*$que;
    mysqli_query($conn,"UPDATE add_to_card SET quenty='".$que."',total_amount='".$total_amount."' WHERE id='".$check_data["id"]."'");
}
else
{
	$total=$price*$que;

	mysqli_query($conn,"INSERT INTO add_to_card(cid, product_id, product_name,price, quenty,total_amount) VALUES ('".$cid."','".$product_id."','".$product_data["product_name"]."','".$price."','".$que."','".$total."')");

}
	
}

if(@$_POST["status"]=="Remove_product")
{
	$id=$_POST["id"];
	$data=mysqli_query($conn,"select * from add_to_card where id='".$id."'");
	$data=mysqli_fetch_array($data);
	mysqli_query($conn,"delete from add_to_card where id='".$id."'");
	echo json_encode(array("data"=>$data));
}


?>
