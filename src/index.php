<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Green connect</title>
        <link rel="stylesheet" href="myhome.css" />
        <!--github link-->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="./nav.css" />
    </head>
    <body>
        <section class="header">
            <div class="menu-bar"></div>
            <script src="./nav.js"></script>

            <div class="text-box">
                <h1 class="anim">Green Connect</h1>
                <p class="anim">
                    Welcome to the offical Site of Green Connect.
                </p>
            </div>
            <video autoplay loop muted plays-inline class="back-video">
                <source src="grass.mp4" type="video/mp4">
                </video>
        </section>

        <section class="wwwsection">
            <div class="wwwcontainer">
                <div class="wwwrow">
                    <div class="wwwcol" class="wwwtxt" data-aos="fade-left">
                        <h1 class="wwwheading" class="anim">
                            W<span class="auto-type"></span>
                        </h1>

                        <p class="wwwpara" class="anim">
                            The main purpose which served as the inspiration in
                            providing us with this specific idea was the initial
                            weeks we spent thinking where we were going to
                            pursue our higher studies and which degree we were
                            going to pursue before we enrolled ourselves into
                            NSBM Green University.
                        </p>
                        <p class="wwwpara" class="anim">
                            This website was developed for freshers and future
                            students to gain insight on different degree
                            programs and to communicate with senior students,
                            lecturers and industrial experts as a helping hand
                            for them to choose the ideal degree program and
                            career path.
                        </p>
                    </div>

                    <div class="wwwcol" class="imgcntnr" data-aos="fade-right">
                        <div class="imgcntnr-2">
                            <img src="image.jpg" class="wwwimage" />
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--section 04-->

        <section class="prblmsection" data-aos="fade-up">
            <div class="prblmcontainer">
                <h1>The Problems We Solve</h1>
                <div class="prblmsrow">
                    <div class="prblmscol">
                        <div class="">
                            <img src="images/img01.jpg" class="prblm-img" />
                        </div>
                        <h3>problem 01</h3>

                        <p class="prblmpara">
                            ON THE THRESHOLD OF CHALLENGES IN HIGHER EDUCATION
                            AFTER ORDINARY LEVELS/ADVANCED LEVELS YOU START
                            EXPLORING YOUR PASSION AND OPTIONS TOWARDS BUILDING
                            YOUR CAREER PATH.
                        </p>
                    </div>

                    <div class="prblmscol">
                        <div class="">
                            <img src="images/img02.webp" class="prblm-img" />
                        </div>
                        <h3>problem 02</h3>

                        <p class="prblmpara">
                            DEALING WITH THE FRUSTRATION AND CHALLENGES IN A
                            MYRIAD OF DEGREE PROGRAMS WITH THE VARIOUS NEW
                            TRENDS AND VAST OPTIONS OF DEGREES AVAILABLE IN THE
                            INDUSTRY CHOOSING THE MOST SUITABLE DEGREE FOR
                            YOURSELF CAN BE CHALLENGING, TIRING AND CONFUSING.
                        </p>
                    </div>

                    <div class="prblmscol">
                        <div class="">
                            <img src="images/img01.jpg" class="prblm-img" />
                        </div>
                        <h3>problem 03</h3>

                        <p class="prblmpara">
                            GREEN CONNECT PROVIDES YOU WITH THE OPPURTUNITY OF
                            COMMUNICATING WITH INDUSTRIAL EXPERTS, LECTURERS AND
                            SENIOR STUDENTS OF A DEGREE PROGRAM OF YOUR INTEREST
                            WHILST SAVING YOU A LOT OF TIME, EFFORT??
                            AND??CONFUSION.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer -->
        <section class="footer">
            <div class="footertext">
                <h4>Get In Touch ! @greenconnect2022@gmail.com</h4>
            </div>
            ????????????
        </section>

        <!--what why section 02 txt animation-->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

        <script>
            var typed = new Typed(".auto-type", {
                strings: ["HAT IS GREEN CONNECT?", "HY?", "HEN?"],
                typeSpeed: 80,
                backSpeed: 60,
                loop: true,
            });
        </script>

        <!---scroll down animation-->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 500,
                duration: 1500,
            });
        </script>

        <!-- <script src="./userCheck.js"></script> -->
    </body>
</html>
