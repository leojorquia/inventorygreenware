<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-8" style="color: green; font-size: large;">Add new supplier</h5>
    <div style="display: flex; justify-content: flex-end;">
       <a href="/inventory_greenware/admin/supplier.php"  type="button" class="btn btn-outline-info m-1">Submit</a>
</div>

      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <div class="table-responsive">
              
    <form>
                    <div class="mb-3">
                      <label for="inputcategoryname" class="form-label" style="color:green;">Company name</label>
                      <input type="text" class="form-control" id="inputcategoryname" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Contact person</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp">
                    </div>
                      <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Email</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp">
                    </div>
                      <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Phone</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp">
                    </div>
                
                  </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php 
  include 'footer.php';
?>