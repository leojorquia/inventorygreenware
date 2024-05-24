<?php
  include 'header.php';
  $product_id = $_GET['product_id'];
  $product = $function->GetProductInfo($product_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
    <h5 class="card-title fw-semibold mb-4" style="color: green;">UPDATE PRODUCT INFORMATION</h5>
      <a class="btn btn-primary" href="product.php">Back</a><br><br>
      <?php
         if($product)
           { 
            $product_id = $product->product_id;
            $product_name = $product->product_name;
            $category_name = $product->category_name;
            $brand_name = $product->brand_name;
            $price = $product->price;
           
        ?>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <form method="post" action="/inventory_greenware/navigate.php?product_id=<?=$product_id;?>">
              <div class="form-group">
                <label style="color:green; font-weight: bold;">Product:</label>
                <input  type="text" class="form-control" name="product_name" value="<?=($product_name)?$product_name:'';?>" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Category:</label>
                <input type="text" class="form-control" name="category_name" value="<?=($category_name)?$category_name:'';?>" required style="border: 1px solid green;"><br>
              </div>

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Brand:</label>
                <input type="text" class="form-control" name="brand_name" value="<?=($brand_name)?$brand_name:'';?>" required style="border: 1px solid green;"><br>
              </div>

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Price:</label>
                <input type="text" class="form-control" name="price" value="<?=($price)?$price:'';?>" style="border: 1px solid green;"><br>
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