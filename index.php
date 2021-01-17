<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Personal Portfolio Website</title> -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
<nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#">Pro<span>file.</span></a></div>
                <ul class="menu">
                    <li><a href="#home" class="menu-btn">Home</a></li>
                    <li><a href="#about" class="menu-btn">About</a></li>
                    <li><a href="#services" class="menu-btn">Services</a></li>
                    <li><a href="#skills" class="menu-btn">Skills</a></li>
                    <li><a href="#contact" class="menu-btn">Contact</a></li>
                    <li><a  href="register.php">Register/Login</a><li>
                </ul>
                <div class="menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
</nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Cham</div>
                <div class="text-3">And I'm a <span class="typing">Student</span></div>
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="about.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Cham and I'm a <span class="typing-2">Student</span></div>
                    <p>
                    <?php
                        require "connect.php";
                        $sql="SELECT *FROM profile";
                        $result= mysqli_query($db,$sql);
                        $post_list = mysqli_fetch_all($result);
                    ?><p>
                        
                            
                       
                <?php
                    foreach($post_list as $post){
                           echo' <p><th>Fullname: '.$post[1].'</td></p> ';
                           echo' <td><p>Date of birth: '.$post[2].'</td></p> ';
                           echo' <td><p>Work: '.$post[3].'</td></p> ';
                           echo' <td><p>My hobbies are: '.$post[4].'</td></p> ';
                           echo' <td><p>Personatily:  '.$post[5].'</td></p> ';
                           echo' <td><p>I grew up in:  '.$post[6].'</td></p> ';

                    }
                ?>
                </p>
                    <a href="#">Download CV</a>
                    <a  href="editabout.php">Edit</a>

                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Advertising</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>Knowledge about networking is something that will be required of most IT </p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>70%</span>
                        </div>
                    <div class="line html">
                </div>
            </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>65%</span>
                        </div>
                            <div class="line css">
                        </div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>50%</span>
                        </div>
                            <div class="line js">
                        </div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                            <div class="line php">
                        </div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>60%</span>
                        </div>
                            <div class="line mysql">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
        <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Please, contact with me as soon as you can.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Cham</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Thai Binh</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">trancham3112@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <!-- Due to more textarea, I got an error so I changed the tag name of this textarea into changeit. -->
                            <changeit cols="30" rows="10" placeholder="Message.." required></changeit>
                        </div>
                        <div class="button">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

 <!-- Somehow I got an error, so I comment the script tag, just uncomment to use -->
<script src="script.js"></script>
</body>
</html>
