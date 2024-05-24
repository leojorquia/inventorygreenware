<?php
include 'header.php';
?>

<div class="container-fluid" style="font-family: sans-serif;">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4" style="color: green;">Categories</h5>
            <div style="display: flex; justify-content: flex-end;">
                <a href="Add-category.php" type="button" class="btn btn-outline-info m-1" style="background-color: green; color: white;">Add new category</a>
            </div>
            <div class="search-input mb-3">
                <input type="text" class="form-control" id="searchInputCategory" placeholder="Search..." style="border: 1px solid green;">
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
                                            <h6 class="fw-semibold mb-0">Category</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Action</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                    $i = 0;
                                    $categories = $function->GetAllCategories();
                                    if ($categories) {
                                      foreach ($categories as $category):
                                        $category_id = $category['category_id'];
                                        $category_name = $category['category_name'];
                                        $i++;
                                  ?>
                                    <tr class="text-center">
                                        <td><label><?=$i;?></label></td>
                                        <td><label><?=$category_name;?></label></td>
                                        <form method="post" action="../navigate.php">
                                        <td class="border-bottom-0">
                                            <a class="btn btn-primary" href="Edit-Category.php?category_id=<?=$category_id;?>" style="color: white;">Update</a>
                                            <input type="hidden" name="category_id" value="<?=$category_id;?>">
                                            <button class="btn btn-info" type="submit" name="btn-delete-category">Delete</button>
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
  function searchTableCategory() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInputCategory");
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

  document.getElementById("searchInputCategory").addEventListener("input", searchTableCategory);
</script>

<?php
include 'footer.php';
?>