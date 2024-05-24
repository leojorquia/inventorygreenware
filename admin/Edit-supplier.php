<?php
  include 'header.php';
  $supplier_id = $_GET['supplier_id'];
  $supplier = $function->GetSupplierInfo($supplier_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
    <h5 class="card-title fw-semibold mb-4" style="color: green;">Update Supplier Info</h5>
      <a class="btn btn-primary" href="supplier.php">Back</a><br><br>
      <?php
         if($supplier)
           { 
            $supplier_id = $supplier->supplier_id;
            $company_name = $supplier->company_name;
            $contact_person = $supplier->contact_person; 
            $email = $supplier->email;
            $phone = $supplier->phone;
           
        ?>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <form method="post" action="/inventory_greenware/navigate.php?supplier_id=<?=$supplier_id;?>">
              <div class="form-group">
                <label style="color:green; font-weight: bold;">Company name:</label>
                <input  type="text" class="form-control" name="company_name" value="<?=($company_name)?$company_name:'';?>" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Contact person:</label>
                <input type="text" class="form-control" name="contact_person" value="<?=($contact_person)?$contact_person:'';?>" required style="border: 1px solid green;"><br>
              </div> 

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Email:</label>
                <input type="email" class="form-control" name="email" value="<?=($email)?$email:'';?>" required style="border: 1px solid green;"><br>
              </div> 

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Phone:</label>
                <input type="text" class="form-control" name="phone" value="<?=($phone)?$phone:'';?>" required style="border: 1px solid green;"><br>
              </div>

              

              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-edit-supplier">Submit</button>

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