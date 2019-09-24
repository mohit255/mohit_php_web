<?php include_once('include/header.php'); 
if(!$_GET["cid"])
{
  header("location:index.php");
}
?>

<div class="container">
<div class="row">
  <div class="col-sm-8">
     <div class="well">
     <h3>Sipping</h3>
     
     <form action="invoice.php" method="post">
       <input type="hidden" name="cid" value="<?php echo @$_GET["cid"]; ?>">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
              <label for="InputName">Name</label>
              <input type="text" name="name"  class="form-control" placeholder="Enter Name" required="treu">
              <span class="text-danger"></span>
            </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label for="InputName">E-mail</label>
              <input type="email" name="email"  class="form-control" placeholder="Enter E-mail" required="treu">
              <span class="text-danger"></span>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
              <label for="InputName">Contact</label>
              <input type="number" name="contact"  class="form-control" placeholder="Enter number" required="treu">
              <span class="text-danger"></span>
            </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
              <label for="InputName">City</label>
              <input type="text" name="city"  class="form-control" placeholder="Enter City" required="treu">
              <span class="text-danger"></span>
            </div>
        </div>
      </div>
       <div class="row">
        <div class="col-md-12">
           <label for="InputName">Sipping Address</label>
           <textarea name="address" cols="50" rows="4" class="form-control" placeholder="Address"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
           <label for="InputName">Payment Method : COD</label>
           
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <button type="submit" class="btn btn-danger btn-block">Book</button>
        </div>
      </div>
     </form>

    </div>
  </div>
 
</div>
<hr>
</div>

<?php include_once('include/footer.php'); ?>


