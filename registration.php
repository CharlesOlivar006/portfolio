<?php
// Start the session
session_start();

// Include your database connection file
include_once('database.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $brgy = $_POST['brgy'];
    $lot = $_POST['lot'];
    $street = $_POST['street'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];
    
    // Check if passwords match
    if ($password !== $repeat_password) {
        $_SESSION['message'] = "Passwords do not match";
        $_SESSION['success'] = 'danger';
        header("Location: registration.php");
        exit();
    }
    
    // Hash the password before storing it in the database for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Prepare and execute the SQL INSERT query
    $sql = "INSERT INTO users (fname, lname, phone, email, country, prov, city, brgy, lot, street, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssssssss', $fname, $lname, $phone, $email, $country, $province, $city, $brgy, $lot, $street, $hashed_password);

    
    // Check if the query executed successfully
    if ($stmt->execute()) {
        // Redirect user to login page after successful signup
        header("Location: login.php");
        exit();
    } else {
        // If the query fails, display an error message
        $_SESSION['message'] = "Error: " . $conn->error;
        $_SESSION['success'] = 'danger';
    }
    
    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Registration system PHP and MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="registration.css">
  </head>
  <body>
    <div class="card p-3">
      <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-success <?= $_SESSION['success'] == 'danger' ? 'bg-danger text-light' : null ?>" role="alert">
          <?php echo $_SESSION['message']; ?>
        </div>
        <?php unset($_SESSION['message']); ?>
      <?php endif
      ?>
      <div class="card-body">
        <h2 class="card-title">Registration</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="row mb-3">
            <div class="col form-group">
              <label for="fname">First Name:</label>
              <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
            </div>
            <div class="col form-group">
              <label for="lname">Last Name:</label>
              <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col form-group">
              <label for="phone">Contact Number:</label>
              <input type="tel" class="form-control" id="phone" name="phone" pattern="[0]{1}[9]{1}[0-9]{9}" placeholder="09*******" required>
            </div>
            <div class="col form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col form-group">
              <label for="country">Country:</label>
              <input type="text" class="form-control" id="country" name="country" required>

            </div>
            <div class="col form-group">
              <label for="province">Province:</label>
              <input type="text" class="form-control" id="province" name="province" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" id="city" name="city" required>

            </div>
            <div class="col form-group">
              <label for="brgy">Barangay:</label>
              <input type="text" class="form-control" id="brgy" name="brgy" required>

            </div>
          </div>
          <div class="row mb-3">
            <div class="col form-group">
              <label for="lot">Lot/Block:</label>
              <input type="text" class="form-control" id="lot" name="lot" placeholder="Lot/Block" required>
            </div>
            <div class="col form-group">
              <label for="street">Street:</label>
              <input type="text" class="form-control" id="street" name="street" placeholder="Street" required>
            </div>
          </div>
          <div class="form-group mb-2">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="form-group mb-2">
    <label for="repeat_password">Repeat Password:</label>
    <input type="password" class="form-control" id="repeat_password" name="repeat_password" required>
</div>
          <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Sign up</button>
          </div>
        </form>
        <p class="text-primary mt-3">Have an account?&nbsp;<a href="login.php">Log in here</a></p>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>