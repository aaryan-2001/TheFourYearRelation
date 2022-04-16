<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Contact US </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="web_main/fontawesome/css/all.css" rel="stylesheet">
    <link href="web_main/css/contact1.css" rel="stylesheet" />


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
                        <a class="nav-link" aria-current="page" href="index1.php">Home</a>
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
                        <a class="nav-link active" href="contact.php"> Contact Us</a>
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

    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p> The Four Year Relation</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Sagar Institute of Science and Technology,<br>Gandhinagar,Bhopal,<br>462036</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"> <i class="fas fa-phone-alt" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>1234567890</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fas fa-envelope-square" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>dummymail@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="includes/contact_success.php" method="post" onsubmit="return validation()">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" id="name" required>
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="tel" name="phone" id="phone" required>
                        <span>Phone</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="message" required></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <button type="submit" class="btn btn-success col-md-4" name="contact-submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function validation() {
            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;

            if (!isNaN(name)) {
                alert("Name Should be in CHARACTER");
                return false;
            }
            if (isNaN(phone)) {
                alert("Phone number should be in DIGIT");
                return false;
            }
            if (phone.length != 10) {
                alert("phone number Must be 10 Digit ");
                return false;
            }
        }

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
            if (a == "mess") {
                window.open("mess.php");
            }
           
        }
    </script>
</body>

</html>