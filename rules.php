<?php session_start(); ?>
<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="web_main/css/style1.css" type="text/css">
    <link href="web_main/fontawesome/css/all.css" rel="stylesheet" type="text/css">
    <title>Hostel Rules</title>
  </head>

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
                        <a class="nav-link " aria-current="page" href="index1.php">Home</a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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


    <br>
    <div class="text-center">
      <h1 style="background-color: darkred;color:bisque">Hostel Rules and Regulations</h1>
    </div>

<br>
    <div class="container">

      <p class="fas fa-pencil-alt"> Smoking, Alcohol & Narcotic consumption is strictly prohibited in and around the
        Hostel premises. Strict action will be taken against offenders.</p><br>
      <p class="fas fa-pencil-alt"> Strict adherence to the prescribed dress code is required. Decency in dressing &
        demeanor is a must.</p><br>
      <p class="fas fa-pencil-alt"> Loitering in the Hostel campus during the class hours will not be appreciated.</p>
      <br>
      <p class="fas fa-pencil-alt"> The Management & Staff will not be responsible for personal belongings.</p><br>
      <p class="fas fa-pencil-alt"> Students must keep the Campus & Rooms clean. Defacing walls, equipment, furniture
        etc., is strictly prohibited.</p><br>
      <p class="fas fa-pencil-alt"> Late comers will be penalized.</p><br>
      <p class="fas fa-pencil-alt"> Birthday/Other Celebrations are strictly prohibited in Hostel.</p><br>
      <p class="fas fa-pencil-alt"> Students must turn off all the electrical equipments & lights before leaving their
        rooms.</p><br>
      <p class="fas fa-pencil-alt"> Students are not allowed to use electric stoves, heaters etc in rooms except in
        designated places.</p><br>
      <p class="fas fa-pencil-alt"> Students are not allowed to organize any group activities in their room.</p><br>
      <p class="fas fa-pencil-alt"> Food will be served only in the designated Dining Hall(s) and only during the
        specified timings. Wasting food & water will not be encouraged.</p><br>

      <p class="fas fa-pencil-alt"> All lights must be switched off before 11 pm in the rooms. Only study lamps are
        permitted.</p><br>
      <p class="fas fa-pencil-alt"> Tipping of Wardens, Security Guards, Cleaning staff etc., is not permitted.</p><br>
      <p class="fas fa-pencil-alt"> Any complaints regarding electric equipment, plumbing etc., is required to be
        entered in the ‘Complaints Book’.</p><br>
      <p class="fas fa-pencil-alt"> Students should not enter rooms of other students without permission.</p><br>
      <p class="fas fa-pencil-alt"> Silence: Strict silence shall be observed in hostel from 11.00 pm to 5.30 am. Care
        should be taken at all times to ensure that music\loud talking is NOT audible outside the room.</p><br>
      <p class="fas fa-pencil-alt"> Any manner of festivities and noise making\celebrations will not be entertained,
        which may cause disturbance to other inmates in the hostel premises.</p><br>
      <p class="fas fa-pencil-alt"> Students during their stay in the hostel will be governed by the management rules.
      </p><br>
      <p class="fas fa-pencil-alt"> Students shall NOT bring any extra furniture or other fixtures in the room.
        All furniture and fixtures in the rooms allotted to students shall be cared for
        property. Students shall be required to pay double the original cost of any item
        found missing from their room. Students shall also be required to pay twice the
        charges of repair to items that are found to have been willfully damaged or have
        been damaged on account of misuse or unfair wear and tear.</p> <br>
      <p class="fas fa-pencil-alt"> No student shall bring or store any firearm, ammunition, explosive and inflammable
        goods on the premises of the hostel.</p><br>
      <p class="fas fa-pencil-alt"> If any common property is damaged or lost, the same shall be charged in equal shares
        to
        the students who are in common use of that property. Students shall not drive any pegs
        or nails into walls or stick posters on walls, windows and doors.</p><br>
      <p class="fas fa-pencil-alt"> The student shall be back in the hostel for attendance before 10.30 pm every day.
      </p><br>
      <p class="fas fa-pencil-alt"> Hostel authorities will not be responsible for any loss of money, jewelry or
        personal
        belongings of any student. Students are advised not to keep any cash/jewelry or any
        costly items in the room. </p> <br>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"></script>
      
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


  </body>

</html>