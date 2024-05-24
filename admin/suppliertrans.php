<?php
include 'header.php';
?>

<div class="container-fluid" style="font-family: sans-serif;">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4" style="color: green;">Supplier Transaction</h5>
            <div style="display: flex; justify-content: flex-end;">
                <a href="Add-supplier-transaction.php" type="button" class="btn btn-outline-info m-1" style="background-color: green; color: white;" >Add new transaction</a>      
              </div>
               <div class="search-input mb-3">
            <input type="text" class="form-control" id="searchInput" placeholder="Search..." style="border: 1px solid green;">
          </div>
              <?php
                $msg = Session::get("msg");
                if(isset($msg)){
                  echo $msg;
                  Session::set("msg", NULL);
                }
              ?> 
            <div class="col-lg-12 d-flex align-items-stretch">
              
                <div class="card w-100">
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark" style="background-color: green;">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Id</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Supplier</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Product</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Category</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Brand</h6>
                                        </th> 
                                         <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Date</h6>
                                        </th>
                                         <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Quantity Ordered</h6>
                                        </th>
                                         <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Unit Cost</h6>
                                        </th>
                                         <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Total Cost</h6>
                                        </th>

                                         <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Action</h6>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>

                                  <?php 

                                    $i = 0;
                                    $suppliertransaction = $function->GetAllSupplierTransaction();
                                    if ($suppliertransaction) {
                                      foreach ($suppliertransaction as $transaction):
                                        $sup_transaction_id = $transaction['sup_transaction_id']; 
                                        $supplier = $transaction['supplier'];
                                        $product = $transaction['product'];
                                        $category = $transaction['category'];
                                        $brand = $transaction['brand'];
                                        $date = $transaction['date'];
                                        $quantity_ordered = $transaction['quantity_ordered'];
                                        $unit_cost = $transaction['unit_cost'];
                                        $total_cost = $transaction['total_cost'];
                                        $i++;
                                    ?>
                                    <!-- Here you need to dynamically generate rows for each user in your database -->
                                    <!-- Replace the hardcoded data below with a loop that fetches user data from your database -->
                                   <tr class="text-center">
                                        <td><label></label><?=$i;?></td> 
                                        <td><label></label><?=$supplier;?></td>
                                        <td><label></label><?=$product;?></td>
                                        <td><label></label><?=$category;?></td>
                                        <td><label></label><?=$brand;?></td>
                                        <td><label></label><?=$date;?></td> 
                                        <td><label></label><?=$quantity_ordered;?></td> 
                                        <td><label></label><?=$unit_cost;?></td>
                                        <td><label></label><?=$total_cost;?></td>  
                                        <form method="post" action="../navigate.php">
                                        <td class="border-bottom-0">
                                            <a class="btn btn-primary" href="Edit-supplier-transaction.php?sup_transaction_id=<?=$sup_transaction_id;?>" style=" color: white;">Update</a>
                                            <input type="hidden" name="sup_transaction_id" value="<?=$sup_transaction_id;?>">
                                            <button class="btn btn-info" type="submit" name="btn-delete-suppliertransaction">Delete</button>
                                        </td>
                                        </form>
                                    </tr>


                                    <?php 

                                        endforeach;
                                      }

                                    ?>

                                    <!-- Repeat the above row structure for each user in your database -->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  // JavaScript function for table filtering
  function searchTable() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.querySelector(".table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those that don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td");
      for (var j = 0; j < td.length; j++) {
        var cell = td[j];
        if (cell) {
          txtValue = cell.textContent || cell.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            break;
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  }

  // Add event listener to trigger the search function when the user types in the search input
  document.getElementById("searchInput").addEventListener("input", searchTable);
</script>