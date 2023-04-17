<?php

$db_name = 'mysql:host=localhost;dbname=contact_portfolio';
$username = 'root';
$password = 'secret';

$conn = new PDO($db_name, $username, $password);

if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $name = filter_var($name);
    $email = $_POST['email'];
    $email = filter_var($email);
    $subject = $_POST['subject'];
    $subject = filter_var($subject);
    $message = $_POST['message'];
    $message = filter_var($message);

    $select_contact = $conn->prepare("SELECT * FROM `portfolio_form` WHERE name = ? AND email = ? AND subject = ? AND message = ?");
    $select_contact->execute([$name, $email, $subject, $message]);

    if ($select_contact->rowCount() > 0) {
        $msg[] = 'message sent already!';
    } else {
        $insert_contact = $conn->prepare("INSERT INTO `portfolio_form`(name, email, subject, message) VALUES(?,?,?,?)");
        $insert_contact->execute([$name, $email, $subject, $message]);
        $msg[] = 'message sent successfully!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Personal Portfolio Website Design Tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php
    if (isset($msg)) {
        foreach ($msg as $msg) {
            echo '
            <div class="msg" style="
               position: sticky;
               top: 0;
               z-index: 1100;
               background: var(--green);
               padding: 2rem;
               display: flex;
               align-items: center;
               justify-content: space-between;
               gap: 1.5rem;
               max-width: 1200px;
               margin: 0 auto;">
               <span style="color: #fff;
               font-size: 2rem;">' . $msg . '</span>

               <i class="fas fa-times" style="font-size: 2.5rem;
               color: #fff;
               cursor: pointer;" onclick="this.parentElement.remove();"></i>
            </div>
            ';
        }
    }
    ?>

    <!-- header section starts  -->

    <header>

        <div id="menu-bars" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#portfolio">portfolio</a>
            <a href="#blogs">blogs</a>
            <a href="#contact">contact</a>
        </nav>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div id="particles-js"></div>

        <div class="content">
            <img class="tilt" src="images/home-pic.png" alt="">
            <h3> ismoilov <span>yahyobek</span> </h3>
            <p> i am a <span class="typing-text"> front end developer </span> </p>
            <a href="#about" class="btn">about me</a>
            <div class="share">
                <a href="https://www.youtube.com/@front_end_tutorials" class="fab fa-youtube"></a>
                <a href="https://t.me/Dasturchi1111" class="fab fa-telegram"></a>
                <a href="https://github.com/Yahyobek-Coder" class="fab fa-github"></a>
                <a href="index.html" class="fab fa-linkedin"></a>
            </div>
        </div>

    </section>


    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> about <span>me</span> </h1>

        <div class="row">

            <div class="image">
                <img class="tilt" src="images/about-pic.jpg" alt="">
            </div>

            <div class="content">
                <h3> mening ismim <span> ismoilov yahyobek </span> </h3>
                <p class="info">Mening eng yahshi ko'nikmalarimdan bular HTML, CSS, Bootstrap,
                    Sass va Javascript. Men bularni
                    yahshi bilaman. Meni 1.5 yil tajribam bor. Men har
                    xil Web Sayt Dizaynlarini tuzaman. Mening hozirda qiziqishim
                    Back-End dasturlash. jumladan,
                    men hozir PHP dasturlash tilini
                    o'rganyapman.</p>
                <div class="box-container">
                    <div class="box">
                        <p> <span> yosh: </span> 16 </p>
                        <p> <span> jins: </span> erkak </p>
                        <p> <span> tajriba : </span> 1.5+ years </p>
                        <p> <span> ish joy : </span> yo'q </p>
                    </div>
                    <div class="box">
                        <p> <span> tillar : </span> uzbek / english </p>
                        <p> <span> telefon : </span> +998-015-73-16 </p>
                        <p> <span> email : </span> yahyobek7316@gmail.com </p>
                        <p> <span> manzil : </span> farg'ona, o'zbekiston - 12345 </p>
                    </div>
                </div>
                <a href="#" class="btn">download CV</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading"> <span> my </span> services </h1>

        <div class="box-container">

            <div class="box tilt">
                <i class="fas fa-code"></i>
                <h3>web development</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, quidem.</p>
            </div>

            <div class="box tilt">
                <i class="fas fa-paint-brush"></i>
                <h3>graphic design</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, quidem.</p>
            </div>

            <div class="box tilt">
                <i class="fas fa-bullhorn"></i>
                <h3>seo marketing</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, quidem.</p>
            </div>

            <div class="box tilt">
                <i class="fas fa-envelope"></i>
                <h3>email marketing</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, quidem.</p>
            </div>

            <div class="box tilt">
                <i class="fas fa-mobile"></i>
                <h3>Responsive designs</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, quidem.</p>
            </div>

            <div class="box tilt">
                <i class="fab fa-wordpress"></i>
                <h3>wordpress</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, quidem.</p>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- portfolio section starts  -->

    <section class="portfolio" id="portfolio">

        <h1 class="heading"> <span> my </span> portfolio </h1>

        <div class="box-container">

            <div class="box tilt">
                <img src="images/img-1.jpg" alt="">
                <div class="content">
                    <a href="#" class="btn">learn more</a>
                </div>
            </div>

            <div class="box tilt">
                <img src="images/img-2.jpg" alt="">
                <div class="content">
                    <a href="#" class="btn">learn more</a>
                </div>
            </div>

            <div class="box tilt">
                <img src="images/img-3.jpg" alt="">
                <div class="content">
                    <a href="#" class="btn">learn more</a>
                </div>
            </div>

            <div class="box tilt">
                <img src="images/img-4.jpg" alt="">
                <div class="content">
                    <a href="#" class="btn">learn more</a>
                </div>
            </div>

            <div class="box tilt">
                <img src="images/img-5.jpg" alt="">
                <div class="content">
                    <a href="#" class="btn">learn more</a>
                </div>
            </div>

            <div class="box tilt">
                <img src="images/img-6.jpg" alt="">
                <div class="content">
                    <a href="#" class="btn">learn more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- portfolio section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> <span> my </span> blogs </h1>

        <div class="box-container">

            <div class="box tilt">
                <img src="images/blog-img-1.jpg" alt="">
                <h3> blogs title goes here </h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam sint tenetur adipisci explicabo nisi libero, in rerum earum. Dolor, quibusdam!</p>
                <a href="#" class="btn">learn more</a>
            </div>

            <div class="box tilt">
                <img src="images/blog-img-2.jpg" alt="">
                <h3> blogs title goes here </h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam sint tenetur adipisci explicabo nisi libero, in rerum earum. Dolor, quibusdam!</p>
                <a href="#" class="btn">learn more</a>
            </div>

            <div class="box tilt">
                <img src="images/blog-img-3.jpg" alt="">
                <h3> blogs title goes here </h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam sint tenetur adipisci explicabo nisi libero, in rerum earum. Dolor, quibusdam!</p>
                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <!-- blogs section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> contact <span> me </span> </h1>

        <div class="row">

            <div class="image">
                <img class="tilt" src="images/contact-img.svg" alt="">
            </div>

            <form action="" method="POST">

                <div class="inputBox">
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                </div>

                <input type="text" name="subject" placeholder="Subject" class="box">

                <textarea placeholder="Message" name="message" id="" cols="30" rows="10"></textarea>

                <input type="submit" name="send" class="btn" value="Send message">

            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- footer section  -->

    <div class="footer"> created by <span> yahyobek </span> | all rights reserved! </div>



    <!-- javascript part  -->

    <!-- typed.js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

    <!-- particles.js links  -->
    <script src="js/particles.min.js"></script>
    <script src="js/app.js"></script>

    <!-- vanilla-tilt.js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>

    <script>
        let menu = document.querySelector('#menu-bars');
        let header = document.querySelector('header');

        menu.onclick = () => {
            menu.classList.toggle('fa-times');
            header.classList.toggle('active');
        }

        window.onscroll = () => {
            menu.classList.remove('fa-times');
            header.classList.remove('active');
        };

        var typed = new Typed('.typing-text', {
            strings: ['front end developer', 'front end developer', 'web developer'],
            loop: true,
            typeSpeed: 150
        });

        VanillaTilt.init(document.querySelectorAll('.tilt'), {
            max: 25
        });
    </script>

</body>

</html>