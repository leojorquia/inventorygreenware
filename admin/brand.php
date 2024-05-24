<?php
include 'header.php';
?>

<div class="container-fluid" style="font-family: sans-serif;">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4" style="color: green;">Brands</h5>
            <div style="display: flex; justify-content: flex-end;">
                <a href="Add-brand.php" type="button" class="btn btn-outline-info m-1" style="background-color: green; color: white;">Add new brand</a>
            </div>
            <div class="search-input mb-3">
                <input type="text" class="form-control" id="searchInputBrand" placeholder="Search..." style="border: 1px solid green;">
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
                                            <h6 class="fw-semibold mb-0">Brand</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Action</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                    $i = 0;
                                    $brands = $function->GetAllBrands();
                                    if ($brands) {
                                      foreach ($brands as $brand):
                                        $brand_id = $brand['brand_id'];
                                        $brand_name = $brand['brand_name'];
                                        $i++;
                                  ?>
                                    <tr class="text-center">
                                        <td><label><?=$i;?></label></td>
                                        <td><label><?=$brand_name;?></label></td>
                                        <form method="post" action="../navigate.php">
                                        <td class="border-bottom-0">
                                            <a class="btn btn-primary" href="Edit-brand.php?brand_id=<?=$brand_id;?>" style="color: white;">Update</a>
                                            <input type="hidden" name="brand_id" value="<?=$brand_id;?>">
                                            <button class="btn btn-info" type="submit" name="btn-delete-brand">Delete</button>
                                        </td>
                                        </form>
                                    </tr>
                                  <?php 
                                      endforeach;
                                    }
                                  ?>
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
  function searchTableBrand() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInputBrand");
    filter = input.value.toUpperCase();
    table = document.querySelector(".table");
    tr = table.getElementsByTagName("tr");

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

  document.getElementById("searchInputBrand").addEventListener("input", searchTableBrand);
</script>

<?php
include 'footer.php';
?>