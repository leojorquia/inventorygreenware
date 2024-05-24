<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-8" style="color: green; font-size: large;">Add new sale</h5>
    <div style="display: flex; justify-content: flex-end;">
       <a href="/inventory_greenware/admin/salestrans.php"  type="button" class="btn btn-outline-info m-1">Submit</a>
</div>

      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <div class="table-responsive">
              
    <form>
                    <div class="mb-3">
                      <label for="inputcategoryname" class="form-label" style="color:green;">Product</label>
                      <input type="text" class="form-control" id="inputcategoryname" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Category</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp">
                    </div>
                      <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Brand</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp">
                    </div>
                      <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Customer name</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp">
                    </div>
                      <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Date</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp">
                    </div>
                      <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Reference</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Total</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Biller</label>
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