<?php
include 'header.php';
?>

<div class="container-fluid" style="font-family: sans-serif;">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4" style="color: green;">Users</h5>
            <div style="display: flex; justify-content: flex-end;">
                <a href="Add-user.php" type="button" class="btn btn-outline-info m-1" style="background-color: green; color: white;" >Add new user</a>      
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
                                            <h6 class="fw-semibold mb-0">Position</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Name</h6>
                                        </th>
                                           <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Suffix</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Date</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Email</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Phone</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Region</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Province</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Municipality</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Barangay</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Street</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Zipcode</h6>
                                        </th>
                                         <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Action</h6>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>

                                  <?php 

                                    $i = 0;
                                    $users = $function->GetAllUsers();
                                    if ($users) {
                                      foreach ($users as $user):
                                        $user_id = $user['user_id'];
                                        $position = $user['position'];
                                        $last_name = $user['last_name'];
                                        $first_name = $user['first_name'];
                                        $middle_name = $user['middle_name'];
                                        $suffix = $user['suffix'];
                                        $date = $user['date'];
                                        $email = $user['email'];
                                        $phone = $user['phone'];
                                        $region = $user['region'];
                                        $province = $user['province'];
                                        $municipality = $user['municipality'];
                                        $barangay = $user['barangay'];
                                        $street = $user['street'];
                                        $zipcode = $user['zipcode'];
                                        $i++;
                                    ?>
                                    <!-- Here you need to dynamically generate rows for each user in your database -->
                                    <!-- Replace the hardcoded data below with a loop that fetches user data from your database -->
                                    <tr class="text-center">
                                        <td><label></label><?=$i;?></td>
                                        <td><label></label><?=$position;?></td>
                                        <td><label></label><?=$first_name;?> <?=$middle_name;?> <?=$last_name;?></td>
                                        <td><label></label><?=$suffix;?></td>
                                        <td><label></label><?=$date;?></td>
                                        <td><label></label><?=$email;?></td>
                                        <td><label></label><?=$phone;?></td>
                                        <td><label></label><?=$region;?></td>
                                        <td><label></label><?=$province;?></td>
                                        <td><label></label><?=$municipality;?></td>
                                        <td><label></label><?=$barangay;?></td>
                                        <td><label></label><?=$street;?></td>
                                        <td><label></label><?=$zipcode;?></td>
                                        <form method="post" action="../navigate.php">
                                        <td class="border-bottom-0">
                                            <a class="btn btn-primary" href="Edit-user.php?user_id=<?=$user_id;?>" style=" color: white;">Update</a>
                                            <input type="hidden" name="user_id" value="<?=$user_id;?>">
                                            <button class="btn btn-info" type="submit" name="btn-delete-user">Delete</button>
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