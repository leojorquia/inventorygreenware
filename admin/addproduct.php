<?php
  include 'header.php';
 
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="btn-add-product" style="color: green; font-size: large;">Add new Product</h5>
      <a class="btn btn-outline-info m-1" href="products.php">Back</a><br><br>

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
            <div class="table-responsive">
              
            <form method="post" action="navigate.php">
              <div class="form-group">
                <label>Product:</label>
                <input type="text" class="form-control" name="product_name" required><br>
              </div>

              <div class="form-group">
                <label>Category:</label>
                <input type="text" class="form-control" name="category_name" required><br>
              </div>

              <div class="form-group">
                <label>Brand</label>
                <input type="text" class="form-control" name="brand_name" required><br>
              </div>

              <div class="form-group">
                <label>Price:</label>
                <input type="text" class="form-control" name="price" required><br>
              </div>

              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-add-product">Submit</button>

            </form>
                  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php 
  include 'footer.php';
?>