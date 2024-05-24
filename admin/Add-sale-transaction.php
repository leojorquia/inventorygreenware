<?php
  include 'header.php';
?>
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4" style="color: green;">Add new transaction</h5>
      <a class="btn btn-primary" href="salestrans.php">Back</a><br><br>
      <div class="col-lg-12 d-flex align-items-stretch"> 
        <div class="card w-100">
          <div class="card-body">
                 <form method="post" action="/inventory_greenware/navigate.php">
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
                <label style="color:green; font-weight: bold;">Customer:</label>
                <input type="text" class="form-control" name="customer" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Date:</label>
                <input type="date" class="form-control" name="date" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Reference:</label>
                <input type="text" class="form-control" name="reference" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Total:</label>
                <input type="text" class="form-control" name="total" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Biller:</label>
                <input type="text" class="form-control" name="biller" required style="border: 1px solid green;"><br>
              </div>

              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-add-saletransaction">Submit</button>

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