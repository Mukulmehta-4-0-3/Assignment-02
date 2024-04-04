<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Table</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/feedback.css">
    <script src="https://kit.fontawesome.com/d8c8b8644a.js" crossorigin="anonymous"></script>
</head>

<body>
        <?php 
            require_once "./header.php";
        ?>
        <div class="container">
            <!-- Main Page -->
            <div class="title">Modify Routes</div>
            <div>
                <br>
                    <?php
                        // Include config file
                        require_once "../config/connection.php";
                        $results = mysqli_query($connection, "SELECT * FROM routes"); ?>
                        <div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Route</th>
                                        <th colspan="2">Action</th>
                                     </tr>
                                 </thead>

                              <?php while ($row = mysqli_fetch_array($results)) { ?>
                                  <tr>
                                          <td><?php echo $row['route_id']; ?></td>
                                          <td><?php echo $row['route_name']; ?></td>
                                          <td>
                                                <a href="createRoute.php?edit=<?php echo $row['route_id']; ?>" class="edit_btn" >Edit</a>
                                          </td>
                                          <td>
                                                <a href="delete.php?del=<?php echo $row['route_id']; ?>" class="del_btn">Delete</a>
                                          </td>
                                  </tr> 
                                <?php } ?>
                            </table>   
                        </div>
                     <?php
                       // Close connection
                       mysqli_close($connection);
                    ?>
            </div>
        </div>

</body>

</html>