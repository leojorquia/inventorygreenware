<?php
  include 'header.php';
?>
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4" style="color: green;">Add new transaction</h5>
      <a class="btn btn-primary" href="suppliertrans.php">Back</a><br><br>
      <div class="col-lg-12 d-flex align-items-stretch"> 
        <div class="card w-100">
          <div class="card-body">
                 <form method="post" action="/inventory_greenware/navigate.php">
              <div class="form-group">
                <label style="color:green; font-weight: bold;">Supplier:</label>
                <input type="text" class="form-control" name="supplier" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Product:</label>
                <input type="text" class="form-control" name="product" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Category:</label>
                <input type="text" class="form-control" name="category" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Brand:</label>
                <input type="text" class="form-control" name="brand" required style="border: 1px solid green;"><br>
              </div> 

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Date:</label>
                <input type="date" class="form-control" name="date" required style="border: 1px solid green;"><br>
              </div> 

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Quantity Ordered:</label>
                <input type="text" class="form-control" name="quantity_ordered" required style="border: 1px solid green;"><br>
              </div>

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Unit Cost:</label>
                <input type="text" class="form-control" name="unit_cost" required style="border: 1px solid green;"><br>
              </div>

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Total Cost:</label>
                <input type="text" class="form-control" name="total_cost" required style="border: 1px solid green;"><br>
              </div>

              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-add-suppliertransaction">Submit</button>

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