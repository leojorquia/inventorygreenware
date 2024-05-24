<?php
  include 'header.php';
?>
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4" style="color: green;">Add new Category</h5>
      <a class="btn btn-primary" href="category.php">Back</a><br><br>
      <div class="col-lg-12 d-flex align-items-stretch"> 
        <div class="card w-100">
          <div class="card-body">
                 <form method="post" action="/inventory_greenware/navigate.php">
              <div class="form-group">
                <label style="color:green; font-weight: bold;">Category name:</label>
                <input type="text" class="form-control" name="category_name" required style="border: 1px solid green;"><br>
              </div>

              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-add-category">Submit</button>

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