<?php
  include 'header.php';
  $category_id = $_GET['category_id'];
  $category = $function->GetCategoryInfo($category_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
    <h5 class="card-title fw-semibold mb-4" style="color: green;">UPDATE CATEGORY INFORMATION</h5>
      <a class="btn btn-primary" href="category.php">Back</a><br><br>
      <?php
         if($category)
           { 
            $category_id = $category->category_id;
            $category_name = $category->category_name;
           
        ?>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <form method="post" action="/inventory_greenware/navigate.php?category_id=<?=$category_id;?>">
              <div class="form-group">
                <label style="color:green; font-weight: bold;">category name:</label>
                <input  type="text" class="form-control" name="category_name" value="<?=($category_name)?$category_name:'';?>" required style="border: 1px solid green;"><br>
              </div>

              

              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-edit-category">Submit</button>

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