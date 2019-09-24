<?php include_once('include/header.php');
 ?>

<div class="container">
<div class="row">
  <div class="col-sm-8">
     <div class="well">
     <h3>Product</h3>
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>Image</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quenty</th>
        <th>Action</th>
      </tr>
    </thead>
 <?php $data=mysqli_query($conn,"select * from product"); ?>   
    <tbody>
      <?php while($row=mysqli_fetch_assoc($data)) {
        ?>
       <tr>
        <td><img src="<?php echo @$row["image"]; ?>" style="width:50px; height: 50px;" /> </td>
        <td><?php echo @$row["product_name"]; ?></td>
        <td>
          <input type="hidden" id="price_<?php echo $row["id"] ?>" value="<?php echo @$row["price"]; ?>">
          <?php echo @$row["price"]; ?>
            
          </td>
        <td><input type="number" id="quenty_<?php echo $row["id"] ?>" value="1"></td>
        <td><button class="btn btn-primary add_to_card_dsp" type="button" data-id="<?php echo @$row["id"]; ?>">Add To Card</button></td>
      </tr>
        <?php
      } ?>
      
    
    </tbody>
  </table>

    </div>
  </div>
  <div class="col-sm-4">
    <div class="well">
      <h3>My Card</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quenty</th>
            <th></th>
          </tr>
        </thead>
        <tbody id="show_card_produst_dsp"></tbody>
      </table>
    </div>
   
  </div>
</div>
<hr>
</div>

<?php include_once('include/footer.php'); ?>


