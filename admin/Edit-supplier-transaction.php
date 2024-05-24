<?php
  include 'header.php';
  $sup_transaction_id = $_GET['sup_transaction_id'];
  $transaction = $function->GetSupplierTransactionInfo($sup_transaction_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
    <h5 class="card-title fw-semibold mb-4" style="color: green;">Update Transaction Info</h5>
      <a class="btn btn-primary" href="suppliertrans.php">Back</a><br><br>
      <?php
         if($transaction)
           { 
            $sup_transaction_id = $transaction->sup_transaction_id;
            $supplier = $transaction->supplier;
            $product = $transaction->product; 
            $category = $transaction->category;
            $brand = $transaction->brand; 
            $date = $transaction->date; 
            $quantity_ordered = $transaction->quantity_ordered;
            $unit_cost = $transaction->unit_cost;
            $total_cost = $transaction->total_cost;
           
        ?>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <form method="post" action="../navigate.php?sup_transaction_id=<?=$sup_transaction_id;?>">
              <div class="form-group">
                <label style="color:green; font-weight: bold;">Supplier:</label>
                <input  type="text" class="form-control" name="supplier" value="<?=($supplier)?$supplier:'';?>" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Product:</label>
                <input type="text" class="form-control" name="product" value="<?=($product)?$product:'';?>" required style="border: 1px solid green;"><br>
              </div> 

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Category:</label>
                <input type="text" class="form-control" name="category" value="<?=($category)?$category:'';?>" required style="border: 1px solid green;"><br>
              </div> 

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Brand:</label>
                <input type="text" class="form-control" name="brand" value="<?=($brand)?$brand:'';?>" required style="border: 1px solid green;"><br>
              </div> 

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Date:</label>
                <input type="date" class="form-control" name="date" value="<?=($date)?$date:'';?>" required style="border: 1px solid green;"><br>
              </div> 

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Quantity ordered:</label>
                <input type="text" class="form-control" name="quantity_ordered" value="<?=($quantity_ordered)?$quantity_ordered:'';?>" required style="border: 1px solid green;"><br>
              </div> 

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Unit Cost:</label>
                <input type="text" class="form-control" name="unit_cost" value="<?=($unit_cost)?$unit_cost:'';?>" required style="border: 1px solid green;"><br>
              </div> 

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Total Cost:</label>
                <input type="text" class="form-control" name="total_cost" value="<?=($total_cost)?$total_cost:'';?>" required style="border: 1px solid green;"><br>
              </div>

              

              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-edit-suppliertransaction">Submit</button>

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