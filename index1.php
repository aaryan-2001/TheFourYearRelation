<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="web_main/fontawesome/css/all.css" rel="stylesheet">
    <link href="web_main/css/style1.css" rel="stylesheet" />
    <link href="web_main/css/footer.css" rel="stylesheet" type="text/css" />

    <title>The Four Year Relation</title>

</head>
<!-- Navigation bar starts from here-->

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <a class="navbar-brand">The 4 Year Relation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index1.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Information
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item " href="rules.php">Hostel Rules</a></li>
                            <li><a class="dropdown-item" href="mess_menu.php">Mess Timings & menu </a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"> Contact Us</a>
                    </li>


                </ul>

                <form class="d-flex" target="blank" method="get">

                    <input class="form-control me-2" type="search" placeholder="Search" id="search" value="" onchange="ouvrirPage() ">
                    <input class="btn btn-outline-danger" type="button" id="button" onclick="ouvrirPage()" value="Search">




                    <a href="index.php" class="btn btn-outline-danger">Login/Register</a>

                </form>
            </div>
        </div>
    </nav>
    <!-- NAVIGATION BAR END here -->

    <!-- BACK GROUND IMAGE AND WELCOME TEXT-->
    <div class="img-area"></div>
    <div class="slider-text">

        <h2>Welcome To</h2>
        <h1>The 4 Year Relation</h1>
        <p>Designed & Developed By The students of Sagar institute of Science & Technology,Bhopal</p>
    </div>
    <br>
    <div class="container">

        <h1 style="color:hsl(0, 0%, 0%)">Hostels – Home Away from Home</h1>
        <h6>Choosing a Hostel is also about choosing a new home. We ensure that students dwell in a healthy
            environment that helps them to grow and learn without any obstacle.
            <br>
            <br>
            <strong>HOSTEL</strong>-That blessed word, which opens the adolescent heart to the most perfect glimpse
            of the outside world, and helps to carry it thither, as on a bird’s wings. At SISTec, we provide the
            best of Hostel facilities for both
            boys and girls who come from far-off places. There are three hostels in the campus, two for boys and one
            for girls to accommodate more than 500 students. Each room is spacious enough to accommodate three
            students and they have been provided
            with bed, tables and chairs, cupboards, shoe racks and bookshelves. There is a great emphasis on
            cleanliness in the hostels. The availability of daily newspapers in all the three hostels keeps the
            students attuned to the day-to-day happenings.
            Wi Fi is also being provided so that students can access the internet.
            <br><br> College has Hostel is in the Campus has separate hostels for boys and girls with all modern
            facilities and attached mess. The hostel mess serves fresh and hygienic food. You will be provided with
            facilities like 24x7
            Library,24x7 electricity,internet, music room, and common room with TV &amp; cable facility, room for
            indoor games and a reading room, with a collection of national/international newspapers, magazines, etc.
            The hostels’ houses have a fully
            equipped gym and separate courts for Volleyball, BasketBall, and Badminton and separate grounds for
            football and cricket lovers The concerned and highly-experienced staff looks after the Hostel assets and
            ensures that the hostel remains responsive
            all the time.
        </h6>
    </div>
    <br>
    <!--BACKGROUND IMAGE AND WELCOME TEXT END-->

    <!-- HOSTEL FACALITIES START-->


    <div class="text-center">
        <h2 style="background-color: darkred;color:bisque">Facilities at Hostels</h2>


    </div>
    <div class="container">

        <div class="row justify-content-center">
            <div class=" col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img src="web_main/images/hi15.jpg" class="card-img-top" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">24X7 Power Supply</h5>
                        <p class="card-text">Keeping students's requirements in mind, college provides quality
                            residence (offering above average necessities) for their living comforts.</p>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img src="web_main/images/hi16.jpg" class="card-img-top" alt="">
                    </div>
                    <div class=" card-body text-center">
                        <h5 class="card-title">Free Wi-fi Internet Service</h5>
                        <p class="card-text">Internet is the need of today's education, college provides 60 Mbps net
                            speed across campus to the students for endless performance</p>

                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img src="web_main/images/hi17.jpg" class="card-img-top" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Well Furnished Common rooms</h5>
                        <p class="card-text"> entertainment is essential in life, college always supports and pays
                            attention to the students in having fun</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img src="web_main/images/hi19.jpg" class="card-img-top" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Gymnasium</h5>
                        <p class="card-text">The College provides gym facilities for the students with the latest
                            machines. Students can make use of this facility to maintain their physical fitness
                            exclusively for hosteller students.
                        </p>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img src="web_main/images/hi13.jpg" class="card-img-top" alt=>
                    </div>
                    <div class=" card-body text-center">
                        <h5 class="card-title">24X7 Library</h5>
                        <p class="card-text">college offers a huge Library System. There are more than 2 lakh books
                            and e-books on all subject fields. SISTec Library system subscribes number of journals,
                            magazines and newspapers.
                        </p>

                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img src="web_main/images/hi14.jpg" class="card-img-top" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Cafeteria</h5>
                        <p class="card-text">College is equipped with a fully functional canteen to serve
                            hygienically prepared food to the staff and students. Canteen fulfills the immediate
                            need for Breakfast and Light Lunch and snacks</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class=" col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img src="web_main/images/hi21.jpg" class="card-img-top" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Visitors and Guest Rooms</h5>
                        <p class="card-text">college provides food and Guest rooms With all Facilities to campus
                            visitors and parents of hosteller students, Who wants to spend some time with their
                            children</p>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img src="web_main/images/hi18.jpg" class="card-img-top" alt="">
                    </div>
                    <div class=" card-body text-center">
                        <h5 class="card-title">Mess Food</h5>
                        <p class="card-text">College management itself runs the mess, has not been given to any
                            contractor. all residential facilities have dining halls that provide good quality tasty
                            and hygienic food four times a day
                        </p>

                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img src="web_main/images/hi10.jpg" class="card-img-top" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Medical Assistance</h5>
                        <p class="card-text">The College provides medical facilities to the students and faculty. A
                            doctor and a nurse are available for any emergency or first aid. The ambulance facility
                            is also available </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <!-- HOSTEL FACALITIES END-->


    <!--HOSTEL BENEFITS STARTS HERE-->


    <div class="text-center">
        <h2 style="background-color: darkred;color:bisque">Benefits of staying in Hostel</h2>
    </div>

    <div class="container">

        <h4 class="fas fa-user-clock"> A Disciplined Life</h4>
        <p>Hostels facilities maintained by college for students to live in, under the supervision of an
            administration. Hostels have a particular way of working, which is schedule-based. There is a fixed time
            for everything, be it the wake-up call, attending
            the study hall, having food or even recreation. Besides teaching students the value of time, living in a
            Hostel.</p>
        <br>

        <h4 class="fas fa-hourglass-half"> Utilize Your Precious Time</h4>
        <p>Living in hostels is that students do not have to waste time and energy in travelling all the way to
            their college. They can instead use this time to indulge in something productive such as morning yoga
            sessions, reading classes or sports. </p>
        <br>

        <h4 class="fab fa-black-tie"> <strong> Learn to be self reliant </strong></h4>
        <p>Hostels facilities maintained by college for students to live in, under the supervision of an
            administration. Hostels have a particular way of working, which is schedule-based. There is a fixed time
            for everything, be it the wake-up call, attending
            the study hall, having food or even recreation. Besides teaching students the value of time, living in a
            Hostel.</p>
        <br>

        <h4 class="fas fa-graduation-cap"> Better Environment for Studying </h4>
        <p>college offer one of the best environments for studying. Students can seek help of other students in the
            hostel with a topic or subject they find difficult. Group-studies for exams is also quite popular in
            hostels. Notes, additional books and model
            test papers can also be obtained in a similar manner. </p>
        <br>

        <h4 class="fas fa-user-shield"> Safe & Secure </h4>
        <p>Manned by over 100 full time security officials,50+ CCTV cameras covering all the campus, college also
            has Small gates at major entry/exit points as well as Gate records for vehicles ensuring that every
            movement is monitored.
        </p>
        <br>
        <h4 class="fas fa-building"> Access of Sports complex</h4>
        <p>With facilities like swimming pool, warm up pool,Table Tennis, Kabaddi court, badminton court, a
            volleyball court, basketball court, Football ground, Cricket ground etc. is available in the campus.</p>
        <br>

    </div>

    <!--HOSTEL BENEFITS END HERE-->

    <footer>
        <div class="footer-content">

            <h2>The 4 Year Relation</h2>
            <p>The objective of this project is to simplify the hostel allotment process and allow students to
                choose their preferred rooms </p>

            <ul class="socials">
                <p>Follow us on -</p>
                <li><a href="https://www.facebook.com/sagargroupofinstitutionssistec/"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="https://www.instagram.com/sagarcollegebhopal/?hl=hi"><i class="fab fa-instagram-square"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCytOCmxQb7IFU2BVFdI7T7w"><i class="fab fa-youtube-square"></i></a></li>
                <li><a href="https://twitter.com/sagarcollege?lang=hi"><i class="fab fa-twitter-square"></i></a>
                </li>
                <li><a href="https://www.linkedin.com/school/sagar-institute-of-science-&-technology-sistec-gandhi-nagar/"><i class="fab fa-linkedin"></i></a></li>

            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; 2021 The 4 Year Relation. Designed by <span>The students of Sagar Institute of
                    science & technology, Bhopal </span></p>
        </div>
    </footer>

    <script>
        function ouvrirPage() {
            var a = document.getElementById("search").value;

            if (a == "contact") {
                window.open("contact.php");
            }
            if (a == "enquiry") {
                window.open("contact.php");
            }

            if (a == "rule") {
                window.open("rules.php");
            }
            if (a == "menu") {
                window.open("mess.php");
            }
            if (a == "gallery") {
                window.open("gallery.php");
            }


        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>