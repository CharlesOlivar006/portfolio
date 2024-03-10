<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #1b1b1b;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="card p-3">
    <div class="card-body">
        <h2 class="card-title ">Login</h2>
        <form action="login.php" method="post">
            <?php
            session_start();  // Start session to store user data

            $errors = array(); // Array to hold login errors

            if (isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["password"])) { // Modified if condition
                require_once "database.php"; // Assuming database connection script is in a separate file

                $email = $_POST["email"];
                $password = $_POST["password"];

                if (empty($email) || empty($password)) {
                    array_push($errors, "Email and Password are required");
                }

                // Use prepared statements for email check
                $sql = "SELECT * FROM account_details_tbl WHERE email = ?";
                $stmt = mysqli_stmt_init($conn);

                if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    if (mysqli_num_rows($result) == 1) {
                        $row = mysqli_fetch_assoc($result);
                        if (password_verify($password, $row["password"])) {
                            $_SESSION["email"] = $email;
                            header("location: indexIn.php"); // Redirect to a success page after login
                            die();
                        } else {
                            echo "<div class='alert alert-danger'>Invalid Email or Password</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger'>Invalid Email or Password</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'> Error in preparing SQL statement to check email</div>";
                }
            }
        ?>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group mt-3">
                <input type="submit" value="Login" name="submit" class="btn btn-primary">
            </div>
        </form>
        <p class="text-primary mt-3">Don't have an account?&nbsp;<a href="register.php">Register here</a></p>
        
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>