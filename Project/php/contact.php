<?php
// Include config file
require_once "../config/connection.php";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define variables and initialize with empty values
    $name = $email = $message = "";
    $name_err = $email_err = $message_err = "";
    // Validate name
    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter a name.";
    } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $name_err = "Please enter a valid name.";
    } else {
        $name = $input_name;
    }

    // Validate email
    $input_email = trim($_POST["email"]);
    if (empty($input_email)) {
        $email_err = "Please enter an email address.";
    } else {
        $email = $input_email;
    }

    // Validate address
    $input_message = trim($_POST["message"]);
    if (empty($input_message)) {
        $message_err = "Please enter the message";
    } else {
        $message = $input_message;
    }

    if (isset($_POST['update'])) {
      $id = $_POST['record_id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $email = $_POST['message'];
  
      mysqli_query($connection, "UPDATE queries SET name='$name', email='$email', message='$message' WHERE query_id=$id");
      header('location: index.php');
    }

    // Check input errors before inserting in database
    if (empty($name_err) && empty($email_err) && empty($message_err) ) {
      // Prepare an insert statement
      $sql = "INSERT INTO queries (name, email, message) VALUES ('$name', '$email', '$message')";

      if ($stmt = mysqli_prepare($connection, $sql)) {
          // Attempt to execute the prepared statement
          if (mysqli_stmt_execute($stmt)) {
              // Records created successfully. Redirect to landing page
              header("location: index.php");
              exit();
          } else {
              echo "Oops! Something went wrong. Please try again later.";
          }
      }
    }
  }

  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($connection, "SELECT * FROM queries WHERE query_id=$id");
    // echo count($record);
    // if (count($record) == 1 ) {
        $n = mysqli_fetch_array($record);
        $name = $n['query_id'];
        $name = $n['name'];
        $email = $n['email'];
        $message = $n['message'];
    //}
  }

  // Close connection
  mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact US</title>
  <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="../css/contact.css">
  <script src="https://kit.fontawesome.com/d8c8b8644a.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <!-- Header -->
    <?php 
      require_once "./header.php";
    ?>
    <div class="title">Contact US</div>
      <div class="form">
        <form class="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
              <span class="invalid-feedback"><?php echo $name_err; ?></span>
          </div>
          <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
              <span class="invalid-feedback"><?php echo $email_err; ?></span>
          </div>
          <div class="form-group">
              <label>Message</label>
              <input type="text" name="message" class="form-control <?php echo (!empty($message_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $message; ?>">
              <span class="invalid-feedback"><?php echo $message_err; ?></span>
          </div>
          <?php if ($update == true): ?>
            <input type="hidden" name="record_id" value="<?php echo $id?>">
            <input type="submit" class="btn btn-primary" value="Update">
          <?php else: ?>
            <input type="submit" class="btn btn-primary" value="Submit">
          <?php endif ?>
          <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
        </form>
      </div>

      <!-- Footer -->
      <?php 
        require_once "./footer.php";
      ?>
    </div>
</body>

</html>