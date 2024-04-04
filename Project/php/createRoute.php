<?php
// Include config file
require_once "../config/connection.php";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define variables and initialize with empty values
    $departure = $destination = $stations = "";
    $departure_err = $destination_err = $stations_err = "";
    // Validate name
    $input_departure = trim($_POST["departure"]);
    if (empty($input_departure)) {
        $input_departure = "Please enter a departure.";
    } elseif (!filter_var($input_departure, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        $input_departure = "Please enter a valid departure.";
    } else {
        $departure = $input_departure;
    }

    // Validate email
    $input_destination = trim($_POST["destination"]);
    if (empty($input_destination)) {
        $destination_err = "Please enter an valid destination.";
    } else {
        $destination = $input_destination;
    }

    // Validate address
    $input_stations = trim($_POST["stations"]);
    if (empty($input_stations)) {
        $stations_err = "Please enter the stations";
    } else {
        $stations = $input_stations;
    }

    // Check input errors before inserting in database
    if (empty($departure_err) && empty($destination_err) && empty($stations_err) ) {
      // Prepare an insert statements
        $routeName = $departure.'ToNorthrun';
        $stationArr = explode(',', $stations);
        $sql = "INSERT INTO routes (route_name) VALUES ('$routeName')";
        if ($stmt = mysqli_prepare($connection, $sql)) {
            // Attempt to execute the prepared statement
            mysqli_stmt_execute($stmt);
            header('location: index.php');
        }
    }
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($connection, "SELECT * FROM Routes WHERE route_id=$id");
    // echo count($record);
    // if (count($record) == 1 ) {
        $n = mysqli_fetch_array($record);
        $id = $n['route_id'];
        $departure = $n['route_name'];
        $destination = "Northrun college";
        $stations = "";
    //}
  }

  // Close connection
  mysqli_close($connection);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Route</title>
    <link rel="shortcut icon" href="https://www.pures.ca/wp-content/uploads/2020/04/index.png">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/contact.css">
    <script src="https://kit.fontawesome.com/d8c8b8644a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <?php 
            require_once "./header.php";
        ?>
    </div>
    <div class="title">Create/Update a New Route</div>
    <div class="form">
        <form class="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="form-group">
              <label> Departure </label>
              <input type="text" name="departure" class="form-control <?php echo (!empty($departure_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $departure; ?>">
              <span class="invalid-feedback"><?php echo $departure_err; ?></span>
          </div>
          <div class="form-group">
              <label> Destination </label>
              <input type="text" name="destination" class="form-control <?php echo (!empty($destination_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $destination; ?>">
              <span class="invalid-feedback"><?php echo $destination_err; ?></span>
          </div>
          <div class="form-group">
              <label>Station Details</label>
              <input type="text" name="stations" class="form-control <?php echo (!empty($stations_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $stations; ?>">
              <span class="invalid-feedback"><?php echo $stations_err; ?></span>
          </div>
            <input type="submit" class="btn btn-primary" value="Submit">
            <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
        </form>
      </div>

     <!-- Footer -->
    <?php 
        require_once "./footer.php";
    ?>
</body>
</html>