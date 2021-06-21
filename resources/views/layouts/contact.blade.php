<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.includes.meta')
    <title>ParaGone Cineplex | Contact</title>
</head>

<body>
    <?php
        $link = mysqli_connect("localhost", "root", "", "cinema_db");
    ?>

    @include('layouts.includes.header')



    <div class="contact-us-container">
        <div class="contact-us-section contact-us-section1">
            <h1>Contact</h1>
            <p>Contact us here </p>
            <form action="" method="POST">
                <input placeholder="First Name" name="fName" required><br>
                <input placeholder="Last Name" name="lName" ><br>
                <input placeholder="E-mail Address" name="eMail" required><br>
                <textarea placeholder="Enter your message !" name="feedback" rows="10" cols="30" required></textarea><br>
                <button type="submit" name="submit" value="submit">Send your Message</button>
                <?php
                    if(isset($_POST['submit'])){
                        $insert_query = "INSERT INTO
                        feedbackTable ( senderfName,
                                        senderlName,
                                        sendereMail,
                                        senderfeedback)
                        VALUES (        '".$_POST["fName"]."',
                                        '".$_POST["lName"]."',
                                        '".$_POST["eMail"]."',
                                        '".$_POST["feedback"]."')";
                        mysqli_query($link,$insert_query);
                        }
                    ?>
            </form>

        </div>
        <div class="contact-us-section contact-us-section2">
            <h1>Address & Info</h1>
            <h3>Phone Numbers</h3>
            <p><a href="tel:01011391148">+2 010 11 39 11 48</a><br>
                <a href="tel:01011391148">+2 010 11 39 11 48</a></p>
            <h3>Address</h3>
            <p>El Sherouk City , Suez Desert Road , Cairo 11837 - P.O. Box 43</p>
            <h3>E-mail</h3>
            <p><a href="mailto:cinemareservation@bue.edu.eg">cinemareservation@bue.edu.eg</a></p>
        </div>
    </div>

    <div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=BUE&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>

    <footer class="copyright">
        © COPYRIGHT RESERVED © 2021 PARAGONE CINEPLEX. ALL RIGHTS RESERVED.
    </footer>

    <script src="user-scripts/jquery-3.3.1.min.js "></script>
    <script src="user-scripts/owl.carousel.min.js "></script>
    <script src="user-scripts/script.js "></script>
</body>

</html>
