<?php
session_start();
error_reporting(0);
include 'conn.php';
require './credentials.php';

use PHPMailer\PHPMailer\PHPMailer;

require './vendor/autoload.php';
// create a new object
$mail = new PHPMailer();
// configure an SMTP
$mail->isSMTP();
$mail->Host = $mail_server;
$mail->SMTPAuth = true;
$mail->Username = $mail_username;
$mail->Password = $mail_password;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $department = $_POST['department'];
    $message = $_POST['message'];
    // $insert_sql($conn, "INSERT INTO `appointments` (`id`, `full_name`, `email`, `doctor_type`, `issue`, `date`, `time`) 
    // VALUES ('$full_name', '$email', '$appointment_date', 'e', 'w', '2021-09-22', '03:37:51')");
    $insert_sql = mysqli_query($conn, "INSERT INTO online_appointments (full_name, email, appointment_date, appointment_time, department, message) VALUES('$full_name','$email', '$appointment_date','$appointment_time','$department', '$message')");

    if ($insert_sql) {
        $_SESSION['booksuccs'] = "Appointment Booked Successfully!";
        //sending user mail for confirmation of  booked appointmemt
        $mail->setFrom('casvalabs@gmail.com', 'St. Moses Memorial Hospital');
        $mail->addAddress($email);
        $mail->Subject = "Book Appointment";
        $mail->Body = "Hi $full_name,\n Welcome to St. Moses Memorial Hospital. \nThank you for reaching out to us \n Your Appointment has been sent to the $department , department for a schedule. \n We will get back to you shortly. \n Appointment Details: \n Full Name: $full_name \n Email: $email \n Appointment Date: $appointment_date \n Appointment Time: $appointment_time \n Department: $department \n Message: $message.
            ";


        if ($mail->send()) {
            $_SESSION['mail'] = "Appointment Details Set to Mail Successfully";
        } else {
            $_SESSION['errmail'] = "Mail not Sent!" . $mail->ErrorInfo;
        }
        mysqli_close($conn);
    } else {
        $_SESSION['errmsg'] = "ERROR: " . $add_user . "" . mysqli_error($conn);
        mysqli_close($conn);
    }
}





?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>St. Moses Memorial Hospital</title>

    <meta charset="UTF-8">
    <link rel="shortcut icon" href="home/images/title-logo.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Group 1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- <meta http-equiv="refresh" content="0"> -->

    <link rel="stylesheet" href="home/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css">
    <link rel="stylesheet" href="home/css/animate.css">
    <link rel="stylesheet" href="home/css/owl.carousel.css">
    <link rel="stylesheet" href="home/css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="home/css/tooplate-style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>

    <!-- MENU -->
    <section class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="index.php" class="navbar-brand">St. Moses Memorial Hospital</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#top" class="smoothScroll">Home</a></li>
                    <li><a href="./auth/signup-user.php" class="smoothScroll">SigIn/SignUp</a></li>
                    <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
                </ul>
            </div>

        </div>
    </section>


    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 data-wow-delay="0.6s">Welcome to St. Moses Memorial Hospital</h2>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- MAKE AN APPOINTMENT -->
    <section id="appointment" data-stellar-background-ratio="3">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <img src="home/images/appt-image.jpg" class="img-responsive" alt="">
                </div>

                <div class="col-md-6 col-sm-6">
                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" method="POST" action="#">

                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h2>Make an appointment</h2>
                        </div>

                        <span style="color: green; padding: 0.5rem;">
                            <?php echo htmlentities($_SESSION['booksuccs']); ?>
                            <?php echo htmlentities($_SESSION['booksuccs'] = ""); ?>
                        </span>

                        <span style="color: red; padding: 0.5rem;">
                            <?php echo htmlentities($_SESSION['errmsg']); ?>
                            <?php echo htmlentities($_SESSION['errmsg'] = ""); ?>
                        </span>

                        <span style="color: green; padding: 0.5rem;">
                            <?php echo htmlentities($_SESSION['mail']); ?>
                            <?php echo htmlentities($_SESSION['mail'] = ""); ?>
                        </span>

                        <span style="color: red; padding: 0.5rem;">
                            <?php echo htmlentities($_SESSION['errmail']); ?>
                            <?php echo htmlentities($_SESSION['errmail'] = ""); ?>
                        </span>

                        <div data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="full_name" placeholder="Full Name">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="date">Select Date</label>
                                <input type="date" name="appointment_date" value="" class="form-control">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="date">Select time</label>
                                <input type="time" name="appointment_time" value="" class="form-control">
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label for="select">Select Department</label>
                                <select class="form-control" name="department">
                                    <option value="General Health">General Health</option>
                                    <option value="Cardiology">Cardiology</option>
                                    <option value="Dental">Dental</option>
                                    <option value="Marternity">Marternity</option>
                                </select>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label for="telephone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                                <label for="Message">Additional Message</label>
                                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <br>


    <!-- FOOTER -->
    <footer data-stellar-background-ratio="5">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                        <h4 data-wow-delay="0.4s">Contact Info</h4>

                        <div class="contact-info" style="display: flex; gap: 75rem">
                            <p><i class="fa fa-phone"></i> 0272312737</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="mailto:wellingtoncharlottenaaodarley@gmail.com">wellingtoncharlottenaaodarley@gmail.com</a></p>
                        </div>
                    </div>
                </div>



                <div class="col-md-12 col-sm-12 border-top">
                    <div class="col-md-4 col-sm-6">
                        <div class="copyright-text">
                            <p>Copyright &copy; <script>
                                    document.write(new Date().getFullYear())
                                </script> sMMH | By Group 1</p>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="home/js/jquery.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.sticky.js"></script>
    <script src="home/js/jquery.stellar.min.js"></script>
    <script src="home/js/wow.min.js"></script>
    <script src="home/js/smoothscroll.js"></script>
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/custom.js"></script>

</body>

</html>