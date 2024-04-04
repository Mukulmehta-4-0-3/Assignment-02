
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Route Planner System - College</title>
  <link rel="shortcut icon" href="https://www.pures.ca/wp-content/uploads/2020/04/index.png">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/home.css">
  <script src="https://kit.fontawesome.com/d8c8b8644a.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <?php 
      require_once "./header.php";
    ?>
    <main>
      <div style="display:flex;">
        <div style="margin-right: 20px">
          <img src="../images/main-logo.png" style="height:330px;width: auto" alt="logo"> 
        </div>
        <div>
          <h3>Introduction:- </h3>
          <p>
            As transportation plays a vital role in ensuring accessibility to
            educational institutions, we propose the development of a comprehensive
            web application aimed at providing users with a seamless experience in
            navigating bus routes to Northrun College from various key locations.
            This project aims to simplify the process of commuting for students,
            faculty, and visitors alike, enhancing their overall convenience and
            accessibility.
          </p>
          <h3>Project Overview:-</h3>
          <p>
            The proposed web application, <strong> Bus Route Guide </strong> will offer users an
            intuitive platform to plan their journeys efficiently. The application
            will feature detailed information on bus routes, schedules, and stops
            for four primary locations: Brampton, Toronto, Mississauga, and Malton,
            all leading to Northrun College. From this web application, you can
            directly access college's website and other social media links. The
            layout of this web application will follow the same pattern as college's
            website to ensure a smooth and convenient user experience.
          </p>
        </div>
      </div>  
      <div>
        <h3>Key Features:-</h3>
        <ul>
          <li>
            <span class="heading">Route Selection:-</span>
            <span>
              Users will be able to select their origin location (Brampton,
              Toronto, Mississauga, Malton) and destination (Northrun College).
              Upon selection, the application will display the available bus
              routes corresponding to the chosen locations.
            </span>
          </li>
          <br>
          <li>
            <span class="heading">Interactive Map:-</span>
            <span>
              A dynamic map interface will provide users with a visual
              representation of the selected bus routes. Users can view specific
              bus stops along the route.
            </span>
          </li>
          <br>
          <li>
            <span class="heading">Bus Stop Information:-</span>
            <span>
              Detailed information about each bus stop, including its name,
              location, and next location, will be provided. Users can easily
              locate nearby bus stops and plan their journeys accordingly.
            </span>
          </li>
          <br>
          <li>
            <span class="heading">Easy Navigation:-</span>
            <br>
            <span>
              Users can easily navigate to Northrun College's official website
              by clicking on the college icon and also navigate to social media
              platforms to view required information.
            </span>
          </li>
          <br>
          <li>
            <span class="heading">Feedback/Query Form:-</span>
            <br>
            <span>
              Users can write their inquiries, suggestions, or feedback
              regarding the Northrun College Bus Route Guide web application and
              our team will providing assistance and addressing any concerns
              users may have.
            </span>
          </li>
        </ul>
        <div>
          <h3>Data need to store in Database:- </h3>
          <p>
            We will store Bus Routes along with Bus stops and their Stop ID,
            Landmarks and estimate time to next station. This is our initial plan
            and as we are expanding our project we will store new data in our
            database.
          </p>
        </div>
        <div>
          <h3>Conclusion:-</h3>
          <p>
            The Northrun College Bus Route Guide web application will serve as a
            valuable resource for individuals commuting to Northrun College from
            Brampton, Toronto, Mississauga, and Malton. By offering
            comprehensive route information, real-time updates, and personalized
            user experiences, the application aims to enhance accessibility and
            convenience for all stakeholders. We believe that this project will
            contribute significantly to improving the overall commuting
            experience for Northrun College's community members.
          </p>
        </div>
      </div>
    </main>
</body>

</html>