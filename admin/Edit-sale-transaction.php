<?php
  include 'header.php';
  $saletransaction_id = $_GET['saletransaction_id'];
  $transaction = $function->GetSalesTransactionInfo($saletransaction_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
    <h5 class="card-title fw-semibold mb-4" style="color: green;">Update Transaction Info</h5>
      <a class="btn btn-primary" href="salestrans.php">Back</a><br><br>
      <?php
         if($transaction)
           { 
            $saletransaction_id = $transaction->saletransaction_id;
            $product = $transaction->product;
            $category = $transaction->category;
            $brand = $transaction->brand;
            $customer = $transaction->customer;
            $date = $transaction->date;
            $reference = $transaction->reference;
            $total = $transaction->total;
            $biller = $transaction->biller;
           
        ?>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <form method="post" action="/inventory_greenware/navigate.php?saletransaction_id=<?=$saletransaction_id;?>">
              <div class="form-group">
                <label style="color:green; font-weight: bold;">Product:</label>
                <input  type="text" class="form-control" name="product" value="<?=($product)?$product:'';?>" required style="border: 1px solid green;"><br>
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
                <label style="color:green; font-weight: bold;">Customer:</label>
                <input type="text" class="form-control" name="customer" value="<?=($customer)?$customer:'';?>" required style="border: 1px solid green;"><br>
              </div>

                <div class="form-group">
                <label style="color:green; font-weight: bold;">Date:</label>
                <input type="date" class="form-control" name="date" value="<?=($date)?$date:'';?>" required style="border: 1px solid green;"><br>
              </div>

                <div class="form-group">
                <label style="color:green; font-weight: bold;">Reference:</label>
                <input type="text" class="form-control" name="reference" value="<?=($reference)?$reference:'';?>" required style="border: 1px solid green;"><br>
              </div>

                <div class="form-group">
                <label style="color:green; font-weight: bold;">Total:</label>
                <input type="text" class="form-control" name="total" value="<?=($total)?$total:'';?>" required style="border: 1px solid green;"><br>
              </div>

                <div class="form-group">
                <label style="color:green; font-weight: bold;">Biller:</label>
                <input type="text" class="form-control" name="biller" value="<?=($biller)?$biller:'';?>" required style="border: 1px solid green;"><br>
              </div>

              

              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-edit-saletransaction">Submit</button>

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