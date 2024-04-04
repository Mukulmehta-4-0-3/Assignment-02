<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Table</title>
    <link rel="stylesheet" href="../css/home.css">
    <script src="https://kit.fontawesome.com/d8c8b8644a.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <?php 
            require_once "./header.php";
        ?>
        <!-- Main Page -->
        <div class="main">
            <div class="main-wrapper">
                <!-- side bar -->
                <?php 
                    require_once "./sideBar.php";
                ?>
                <!-- info area -->
                <div class="mainbar">
                    <div class="mainbar-logo">
                        <img src="../images/MissisaugaToNorthern2.png" alt="logo">
                    </div>
                    <p style="margin: 0px 0px 10px 0px"></p>
                    <div class="main-text">
                        <h1>Missisauga To Northrun College</h1>
                        <p style="margin: 10px 0px 20px 0px"></p>
                        <div class="text-area-nav">
                            <div class="timeline_wrapper">
                            <?php
                                // Include config file
                                require_once "../config/connection.php";

                                // fetching data from database
                                $sql = "SELECT s.station_name, s.station_mode, s.station_distance
                                FROM Stations s
                                JOIN RouteStations rs ON s.station_id = rs.station_id
                                JOIN Routes r ON rs.route_id = r.route_id
                                WHERE r.route_name = 'MissisaugaToNorthrun'";
                                $result = mysqli_query($connection, $sql);
                                //render data on html page
                                echo '<div class="timeline_wrapper">';
                                while ($row = mysqli_fetch_array($result)) {
                                  echo '<div class="item">';
                                  echo '<p>' . $row['station_name'] . '</p>';
                                  echo  '<div class="stop-details">';
                                  echo  '<span class="mode">' . $row['station_mode'] . '</span>';
                                  echo  '<br>';
                                  echo  '<span class="distance">'. $row['station_distance'] . '</span>';
                                  echo  '</div>';
                                  echo  '</div>';
                                }
                                 echo  '</div>';
                                // Close connection
                                mysqli_close($connection);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <?php 
            require_once "./footer.php";
        ?>
    </div>

</body>

</html>