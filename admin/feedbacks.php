<?php
include 'header.php';
?>

<div class="container-fluid" style="font-family: sans-serif;">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4" style="color: green;">Feedbacks</h5>
           
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
                                            <h6 class="fw-semibold mb-0">Customer</h6>
                                        </th> 
                                         <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Feedback</h6>
                                        </th> 
                                         <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Date</h6>
                                        </th>
                                         <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Action</h6>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>

                                  <?php 

                                    $i = 0;
                                    $feedbacks = $function->GetAllFeedbacks();
                                    if ($feedbacks) {
                                      foreach ($feedbacks as $feedback):
                                        $feedback_id = $feedback['feedback_id'];

                                        
                                        $product = $feedback['product'];
                                        $category = $feedback['category'];
                                        $brand = $feedback['brand'];
                                        $customer = $feedback['customer'];
                                         $feedback_text = $feedback['feedback_text'];
                                         $date = $feedback['date'];
                                         
                                        
                                        $i++;
                                    ?>
                                    <!-- Here you need to dynamically generate rows for each user in your database -->
                                    <!-- Replace the hardcoded data below with a loop that fetches user data from your database -->
                                    <tr class="text-center">
                                        <td><label></label><?=$i;?></td>
                                        <td><label></label><?=$product;?></td>
                                        <td><label></label><?=$category;?></td>
                                        <td><label></label><?=$brand;?></td>
                                        <td><label></label><?=$customer;?></td>
                                        <td><label></label><?=$feedback_text;?></td>
                                        <td><label></label><?=$date;?></td>
                                        <form method="post" action="../navigate.php">
                                        <td class="border-bottom-0">
                                           
                                            <input type="hidden" name="feedback_id" value="<?=$feedback_id;?>">
                                            <button class="btn btn-info" type="submit" name="btn-delete-feedback">Delete</button>
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