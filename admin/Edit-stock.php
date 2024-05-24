<?php
  include 'header.php';
  $stock_id = $_GET['stock_id'];
  $stock = $function->GetStockInfo($stock_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
    <h5 class="card-title fw-semibold mb-4" style="color: green;">Update Stock Info</h5>
      <a class="btn btn-primary" href="stocks.php">Back</a><br><br>
      <?php
         if($stock)
           { 
            $stock_id = $stock->stock_id;
            $product = $stock->product;
            $category = $stock->category;
            $brand = $stock->brand;
            $available_stock = $stock->available_stock; 
            $unit_cost = $stock->unit_cost; 
            $total_cost = $stock->total_cost;

           
        ?>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <form method="post" action="/inventory_greenware/navigate.php?stock_id=<?=$stock_id;?>">
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
                <label style="color:green; font-weight: bold;">Available Stock:</label>
                <input type="text" class="form-control" name="available_stock" value="<?=($available_stock)?$available_stock:'';?>" required style="border: 1px solid green;"><br>
              </div> 

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Unit Cost:</label>
                <input type="text" class="form-control" name="unit_cost" value="<?=($unit_cost)?$unit_cost:'';?>" required style="border: 1px solid green;"><br>
              </div> 

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Total Cost:</label>
                <input type="text" class="form-control" name="total_cost" value="<?=($total_cost)?$total_cost:'';?>" required style="border: 1px solid green;"><br>
              </div>

              

              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-edit-stock">Submit</button>

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