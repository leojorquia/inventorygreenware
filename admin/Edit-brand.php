<?php
  include 'header.php';
  $brand_id = $_GET['brand_id'];
  $brand = $function->GetBrandInfo($brand_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
    <h5 class="card-title fw-semibold mb-4" style="color: green;">Update Brand Info</h5>
      <a class="btn btn-primary" href="brand.php">Back</a><br><br>
      <?php
         if($brand)
           { 
            $brand_id = $brand->brand_id;
            $brand_name = $brand->brand_name;
           
        ?>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <form method="post" action="/inventory_greenware/navigate.php?brand_id=<?=$brand_id;?>">
              <div class="form-group">
                <label style="color:green; font-weight: bold;">Brand name:</label>
                <input  type="text" class="form-control" name="brand_name" value="<?=($brand_name)?$brand_name:'';?>" required style="border: 1px solid green;"><br>
              </div>

              

              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-edit-brand">Submit</button>

            </form>
          </div>
        </div>
      </div>
      <?php
        }
      ?>
    </div>
  </div>
</div>

<?php 
  include 'footer.php';
?>