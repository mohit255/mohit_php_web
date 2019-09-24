<?php include_once('connection.php'); 
if(@$_POST["status"]=="get_add_to_card_product")
{
	$cid=$_POST["cid"];

 $data=mysqli_query($conn,"SELECT a.*,b.image FROM add_to_card as a , product as b WHERE b.id=a.product_id and a.cid='".$cid."'"); 
 $total_amount=0; 
while ($row=mysqli_fetch_assoc($data)) {
	  $total_amount=$total_amount+$row["total_amount"];
	?>
<tr>
        <td><img src="<?php echo @$row["image"]; ?>" style="width:50px; height: 50px;" /> </td>
        <td><?php echo @$row["product_name"]; ?></td>
        <td>
          <input type="hidden" id="price_<?php echo $row["id"] ?>" value="<?php echo @$row["price"]; ?>">
          <?php echo @$row["price"]; ?>
            
          </td>
        <td><a href="javascript:;" class="set_quenty" data-id="n_<?php echo @$row["id"]; ?>"><i >N</i></a> <input type="number" id="quenty_<?php echo $row["id"] ?>"  value="<?php echo $row["quenty"]; ?>">
          <a href="javascript:;" class="set_quenty" data-id="p_<?php echo @$row["id"]; ?>"><i >P</i></a></td>
        <td><?php echo $row["total_amount"] ?></td>
        <td><button type="button" class="btn btn-sm btn-danger remove_product_from_card_page_dsp" data-id="<?php echo @$row["id"]; ?>">Remove</button></td>
      </tr>
	<?php
}
?>
<tr>
        <td colspan="3">&nbsp;</td>
        <td >Total Amount</td>
        <td ><?php echo $total_amount; ?></td>
        <td><a href="checkout.php?cid=<?php echo @$cid; ?>"><button type="button" class="btn btn-block btn-primary">Checkout</button></td>
      </tr>

<?php
?>

<?php
} 

if(@$_POST["status"]=="set_quenty")
{
	$ids=explode("_",$_POST["id"]);
	$data=mysqli_query($conn,"select * from add_to_card where id='".$ids["1"]."'");
	$data=mysqli_fetch_array($data);
	if($ids["0"]=="n")
	{
		$que=$data["quenty"]-1;
		$total_amount=$data["total_amount"]-$data["price"];
	}
	else
	{
		$que=$data["quenty"]+1;
		$total_amount=$data["total_amount"]+$data["price"];
	}	
 mysqli_query($conn,"UPDATE add_to_card SET quenty='".$que."',total_amount='".$total_amount."' WHERE id='".$ids["1"]."'");

 echo json_encode(array("data"=>$data));

}
?>