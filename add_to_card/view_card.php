<?php include_once('include/header.php'); ?>

<div class="container">
<div class="row">
  <div class="col-sm-10">
     <div class="well">
     <h3>Card -> <a href="index.php">Go To Shop</a></h3>
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>Image</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quenty</th>
        <th>Total Amount</th>
        <th>Action</th>
      </tr>
    </thead>
 <?php $data=mysqli_query($conn,"SELECT a.*,b.image FROM add_to_card as a , product as b WHERE b.id=a.product_id and a.cid='".@$_GET["cid"]."'"); ?>   
    <tbody id="show_card_produst_dsp_view_card">
      <?php 
$total_amount=0;
      while($row=mysqli_fetch_assoc($data)) {
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
        <td><?php echo $row["total_amount"]; ?></td>
        <td><button type="button" class="btn btn-sm btn-danger remove_product_from_card_page_dsp" data-id="<?php echo @$row["id"]; ?>">Remove</button></td>
      </tr>
        <?php
      } ?>
      <tr>
        <td colspan="3">&nbsp;</td>
        <td >Total Amount</td>
        <td ><?php echo $total_amount; ?></td>
        <td><a href="checkout.php?cid=<?php echo @$_GET["cid"] ?>"><button type="button" class="btn btn-block btn-primary">Checkout</button></td>
      </tr>
    
    </tbody>
  </table>

    </div>
  </div>
  
</div>
<hr>
</div>

<?php include_once('include/footer.php'); ?>


