<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class='route-buttons'>
            <div>
                <a href="./createRoute.php">
                    <button class='routes' onclick = ''> Create New Route </button>
                </a>
            </div>
        <div>
            <a href="./modifyRoute.php">
                <button class='routes' onclick = ''> Modify Routes </button>
            </a>
        </div>
        </div>

        <div class="text-widget">
            <a style="color: gray;font-weight: 600;" href="./MainPage.php">
                <div class="heading">
                    <h4>GO Transit Bus</h4>
                </div>
            </a>
            <div>
                <ul class="menu">
                <?php
                    // Include config file
                    require_once "../config/connection.php";
                    // fetching data from database
                    $sql = "SELECT * FROM Routes";
                    $result = mysqli_query($connection, $sql);
                    //render data on html page
                    echo  '<ul class="menu">';
                    while ($row = mysqli_fetch_array($result)) {
                        $keyword =  strpos($row['route_name'],'ToNorthrun');
                        $city = substr($row['route_name'], 0, $keyword);
                        if ($row['route_id'] <= 5) {
                            $url = './' . $row['route_name'] . '.php';
                        }
                        else {
                            $url = './routeDetails.php"'; 
                        }
                      echo '<li>';
                      echo '<a href="'. $url . '"';
                      echo '</a>';
                      echo '<div class="menu-item">';
                      echo '<i class="fa-solid fa-bus"></i>';
                      echo '<span>'. $city . '- Northrun College </span>';
                      echo  '</div>';
                      echo '</li>';
                    }
                    echo  '</ul>';
                    ?>
            </div>
        </div>
    </div>
    </body>
</html>