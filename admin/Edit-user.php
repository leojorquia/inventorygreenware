<?php
  include 'header.php';
  $user_id = $_GET['user_id'];
  $user = $function->GetUserInfo($user_id);
?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
    <h5 class="card-title fw-semibold mb-4" style="color: green;">Update Users Info</h5>
      <a class="btn btn-primary" href="users.php">Back</a><br><br>
      <?php
         if($user)
           { 
            $user_id = $user->user_id;
            $position = $user->position;
            $last_name = $user->last_name;
            $first_name = $user->first_name;
            $middle_name = $user->middle_name;
            $suffix= $user->suffix;
            $date = $user->date;
            $email = $user->email;
            $phone = $user->phone;
            $region = $user->region;
            $province = $user->province;
            $municipality = $user->municipality;
            $barangay = $user->barangay;
            $street= $user->street;
            $zipcode = $user->zipcode;
           
        ?>
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body">
            <form method="post" action="/inventory_greenware/navigate.php?user_id=<?=$user_id;?>">
              <div class="form-group">
                <label style="color:green; font-weight: bold;">Position:</label>
                <input  type="text" class="form-control" name="position" value="<?=($position)?$position:'';?>" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Last name:</label>
                <input type="text" class="form-control" name="last_name" value="<?=($last_name)?$last_name:'';?>" required style="border: 1px solid green;"><br>
              </div>

               <div class="form-group">
                <label style="color:green; font-weight: bold;">First name:</label>
                <input type="text" class="form-control" name="first_name" value="<?=($first_name)?$first_name:'';?>" required style="border: 1px solid green;"><br>
              </div>

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Middle name:</label>
                <input type="text" class="form-control" name="middle_name" value="<?=($middle_name)?$middle_name:'';?>" style="border: 1px solid green;"><br>
              </div>

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Suffix:</label>
                <input type="text" class="form-control" name="suffix" value="<?=($suffix)?$suffix:'';?>"  style="border: 1px solid green;"><br>
              </div>

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Date:</label>
                <input type="date" class="form-control" name="date" value="<?=($date)?$date:'';?>" required style="border: 1px solid green;"><br>
              </div>

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Email:</label>
                <input type="text" class="form-control" name="email" value="<?=($email)?$email:'';?>" required style="border: 1px solid green;"><br>
              </div>

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Phone:</label>
                <input type="text" class="form-control" name="phone" value="<?=($phone)?$phone:'';?>" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Region:</label>
                <input type="text" class="form-control" name="region" value="<?=($region)?$region:'';?>" required style="border: 1px solid green;"><br>
              </div>

               <div class="form-group">
                <label style="color:green; font-weight: bold;">Province:</label>
                <input type="text" class="form-control" name="province" value="<?=($province)?$province:'';?>" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Municipality:</label>
                <input type="text" class="form-control" name="municipality" value="<?=($municipality)?$municipality:'';?>" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Barangay:</label>
                <input type="text" class="form-control" name="barangay" value="<?=($barangay)?$barangay:'';?>" required style="border: 1px solid green;"><br>
              </div>

              <div class="form-group">
                <label style="color:green; font-weight: bold;">Street:</label>
                <input type="text" class="form-control" name="street" value="<?=($street)?$street:'';?>" required style="border: 1px solid green;"><br>
              </div>


              <div class="form-group">
                <label style="color:green; font-weight: bold;">Zipcode:</label>
                <input type="text" class="form-control" name="zipcode" value="<?=($zipcode)?$zipcode:'';?>" required style="border: 1px solid green;"><br>
              </div>

              <button class="btn btn-primary" type="submit" style="float: right;" name="btn-edit-user">Submit</button>

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