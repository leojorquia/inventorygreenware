<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link rel="shortcut icon" type="image/png" href="assets\img\Greenwarelogo.png" />
  <style>
    body {
      background-color: #f0f2f5;
      color: #333;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      max-width: 400px;
      width: 100%;
      padding: 20px;
    }

    .card {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 30px;
      text-align: center;
    }

    .logo-img img {
      width: 180px;
    }

    h3 {
      margin-top: 20px;
      font-size: 24px;
    }

    h4 {
      font-size: 16px;
      color: #666;
    }

    label {
      display: block;
      text-align: left;
      font-weight: bold;
      margin-bottom: 5px;
      color: #555;
    }

    .form-control {
      width: 100%;
      height: 40px;
      padding: 8px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 20px;
      box-sizing: border-box;
    }

    .btn-login {
      background-color: #1877f2;
      color: white;
      border: none;
      border-radius: 4px;
      padding: 12px 20px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .btn-login:hover {
      background-color: #009c00;
    }

    .text-primary {
      color: #00a700;
      font-weight: bold;
    }
  </style>
</head>

<body class="account-page">
  <div class="container">
    <div class="card">
      <div class="logo-img">
        <img src="assets\img\GREENWARE-removebg-preview (1).png" alt="">
      </div>
      <h3>Forgot your password?</h3>
      <h4>No worries! It happens. Please enter the email address associated with your account.</h4>
      <form id="forgotPasswordForm" action="/inventory_greenware/signin.php">
        <div class="form-login">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address" required>
        </div>
        <div class="form-login">
          <button type="submit" class="btn btn-login">Submit</button>
        </div>
      </form>
      <div>
        <p>Remember your password? <a class="text-primary" href="/inventory_greenware/signin.php">Log in here</a></p>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById("forgotPasswordForm").addEventListener("submit", function (event) {
      var email = document.getElementById("exampleInputEmail1").value;

      if (!email) {
        event.preventDefault(); // Prevent form submission
        alert("Email is required.");
      }
    });
  </script>
</body>

</html>
