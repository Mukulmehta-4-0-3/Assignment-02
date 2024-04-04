
<?php
require_once "../config/connection.php";
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($connection, "DELETE FROM RouteStations WHERE route_id=$id");
    mysqli_query($connection, "DELETE FROM Routes WHERE route_id=$id");
    header('location: index.php');
}

mysqli_close($connection);

?>