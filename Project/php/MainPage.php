<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Route Planner System - College</title>
    <link rel="shortcut icon" href="https://www.pures.ca/wp-content/uploads/2020/04/index.png">
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
                    <div class="main-text">
                        <div class="mainbar-logo">
                            <img style="width: auto;" src="../images/lets_go_logo.png" alt="logo">
                        </div>
                        <p style="margin: 10px 0px 20px 0px"></p>
                        <h1>Transportation</h1>
                        <p style="margin: 10px 0px 20px 0px"></p>
                        <h3> Vision </h3>
                        <p>
                            Our vision is to create a seamless and efficient transportation experience that connects the vibrant City community to the College campus. We aim to foster a sense of convenience, safety, and sustainability in every journey, contributing to a more connected and accessible community.
                        </p>
                        <h3> Mission </h3>
                        <p>
                            Our mission is to provide a reliable and environmentally friendly bus service that facilitates the smooth commute of students, faculty, and residents between the City and College. We strive to uphold the highest standards of safety, punctuality, and customer satisfaction. Through continuous improvement and innovation, we aim to make the journey not just a means of transportation but an integral part of the community experience.
                        </p>
                        <h3> Bus Route Information: </h3>
                        <p>
                            Welcome to the Pures College of Technology Bus Route Guide, your go-to resource for a hassle-free commute. Whether you're a student, faculty member, or a resident of the City, we are here to ensure that your journey to the College is convenient and enjoyable.
                        </p>
                        <h3> Route Overview: </h3>
                        <p>
                            Our route covers major City neighborhoods and essential College destinations, creating a network that facilitates easy access for students, faculty, and residents. The design is focused on optimizing travel time while ensuring accessibility for all.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php 
            require_once "./footer.php";
        ?>
    </div>

</body>

</html>