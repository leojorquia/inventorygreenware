<?php
  include 'header.php';
  $product_id = $_GET['product_id'];
  $product = $function->GetProductInfo($product_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="'btn-edit-product">Update Product</h5>
      <a class="btn btn-primary" href="products.php">Back</a><br><br>
      <?php
         if($product)
           { 
            $product_id = $product->id;
            $product_name = $product->product_name;
            $category_name = $product->category_name;
            $brand_name= $product->brand_name;
            $price= $product->price;
        ?>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <?php
                  $msg = Session::get("msg");
                  if(isset($msg)){
                    echo $msg;
                    Session::set("msg", NULL);
                  }
              ?> 
            <form method="post" action="navigate.php?product_id=<?=$product_id;?>">
              <div class="form-group">
                <label>Product:</label>
                <input type="text" class="form-control" name="product_name" value="<?=($product_name)?$product_name:'';?>" required><br>
              </div>

              <div class="form-group">
                <label>Category:</label>
                <input type="text" class="form-control" name="category_name" value="<?=($category_name)?$category_name:'';?>" required><br>
              </div>

              <div class="form-group">
                <label>Brand:</label>
                <input type="text" class="form-control" name="brand_name" value="<?=($brand_name)?$brand_name:'';?>" required><br>
              </div>

              <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name="price" value="<?=($price)?$price:'';?>" required><br>
              </div>

              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-edit-product">Submit</button>

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