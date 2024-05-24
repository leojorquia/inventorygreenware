<?php
  include 'header.php';
?>
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4" style="color: green;">ADD NEW PRODUCT</h5>
      <a class="btn btn-primary" href="product.php">Back</a><br><br>
      <div class="col-lg-12 d-flex align-items-stretch"> 
        <div class="card w-100">
          <div class="card-body">
                 <form method="post" action="/inventory_greenware/navigate.php">
              <div class="form-group">
                <label style="color:green; font-weight: bold;">Product:</label>
                <input type="text" class="form-control" name="product_name" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Category:</label>
                <input type="text" class="form-control" name="category_name" required style="border: 1px solid green;"><br>
              </div>

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Brand:</label>
                <input type="text" class="form-control" name="brand_name" required style="border: 1px solid green;"><br>
              </div>

               <div class="form-group">
                <label style="color:green; font-weight: bold;">price:</label>
                <input type="text" class="form-control" name="price"  style="border: 1px solid green;"><br>
              </div>


              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-add-product">Submit</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
  include 'footer.php';
?>