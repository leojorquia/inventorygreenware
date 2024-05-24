<?php
include 'header.php';
?>

<div class="container-fluid" style="font-family: sans-serif;">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4" style="color: green;">Stocks</h5>
            <div style="display: flex; justify-content: flex-end;">
                <a href="Add-stock.php" type="button" class="btn btn-outline-info m-1" style="background-color: green; color: white;" >Add new stock</a>      
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
                                            <h6 class="fw-semibold mb-0">Product</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Category</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Brand</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Avail. Stock</h6>
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
                                    $stocks = $function->GetAllStocks();
                                    if ($stocks) {
                                      foreach ($stocks as $stock):
                                        $stock_id = $stock['stock_id'];
                                        $product = $stock['product'];
                                        $category = $stock['category'];
                                        $brand = $stock['brand'];
                                        $available_stock = $stock['available_stock'];
                                        $unit_cost = $stock['unit_cost'];
                                        $total_cost = $stock['total_cost'];
                                        $i++;
                                    ?>
                                    <!-- Here you need to dynamically generate rows for each user in your database -->
                                    <!-- Replace the hardcoded data below with a loop that fetches user data from your database -->
                                    <tr class="text-center">
                                        <td><label></label><?=$i;?></td>
                                        <td><label></label><?=$product;?></td>
                                        <td><label></label><?=$category;?></td>
                                        <td><label></label><?=$brand;?></td>
                                        <td><label></label><?=$available_stock;?></td> 
                                        <td><label></label><?=$unit_cost;?></td> 
                                        <td><label></label><?=$total_cost;?></td>
                                        <form method="post" action="../navigate.php">
                                        <td class="border-bottom-0">
                                            <a class="btn btn-primary" href="Edit-stock.php?stock_id=<?=$stock_id;?>" style=" color: white;">Update</a>
                                            <input type="hidden" name="stock_id" value="<?=$stock_id;?>">
                                            <button class="btn btn-info" type="submit" name="btn-delete-stock">Delete</button>
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