<?php
  include 'header.php';
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-8" style="color: green; font-size: large;">Add new user:</h5>
    
      <a class="btn btn-outline-info" href="users.php">Back</a><br><br>

      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <div class="table-responsive">
              
    <form>
                    <div class="mb-3">
                      <label for="inputposition" class="form-label" style="color:green;">Position</label>
                      <input type="text" class="form-control" id="inputposition" aria-describedby="emailHelp" style="border-color: green;border-width: 2px;" required>
                    </div>
                    <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Last name</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp" style="border-color: green;border-width: 2px;" required>
                    </div>
                      <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">First name</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp" style="border-color: green;border-width: 2px;" required>
                    </div>
                      <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Middle name</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp" style="border-color: green;border-width: 2px;">
                    </div>
                        <div class="mb-3">
                      <label for="inputcategoryname" class="form-label" style="color:green;">Suffix</label>
                      <input type="text" class="form-control" id="inputcategoryname" aria-describedby="emailHelp" style="border-color: green;border-width: 2px;">
                    </div>
                    <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Email</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp" style="border-color: green;border-width: 2px;">
                    </div>
                      <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Phone</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp" style="border-color: green;border-width: 2px;">
                    </div>
                      <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Region</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp" style="border-color: green;border-width: 2px;">
                    </div>
                        <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Province</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp" style="border-color: green;border-width: 2px;">
                    </div>
                        <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Municipality</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp" style="border-color: green;border-width: 2px;">
                    </div>
                        <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Barangay</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp" style="border-color: green;border-width: 2px;">
                    </div>
                        <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Street</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp" style="border-color: green;border-width: 2px;">
                    </div>
                        <div class="mb-3">
                      <label for="inputcategorydescription" class="form-label" style="color:green;">Zip code</label>
                      <input type="text" class="form-control" id="inputcategorydescription" aria-describedby="emailHelp" style="border-color: green;border-width: 2px;">
                    </div>
                   
                  </form>
                    <div style="display: flex; justify-content: flex-end;">
       <a href="/inventory_greenware/admin/users.php"  type="button" class="btn btn-outline-info m-1">Submit</a>
</div>
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