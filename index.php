<?php

$conn = mysqli_connect('localhost','root','','hms') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date_time = $_POST['date_time'];
   $doctor = $_POST['doctor'];

   // Check if the date and time already exist in the database
   $check_date_time = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE date_time = '$date_time'");

   // Count the number of rows returned
   $numrows = mysqli_num_rows($check_date_time);

   if($numrows > 0){
       // Date and time already exist, show an alert
       echo "<script>alert('Slot is already booked , try another slot, thank you.');</script>";
   } else {
       // Date and time do not exist, proceed with the insertion
       $insert = mysqli_query($conn, "INSERT INTO `contact_form` (name, email, number, date_time, doctor) VALUES ('$name', '$email', '$number', '$date_time', '$doctor')") or die('Query failed');
   }

   if($insert){
      $message[] = 'Appointment made successfully!';
   } else {
      $message[] = 'Appointment failed';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kokonda's Hospitals</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style2.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>KH</strong> Kokonda's Hospitals </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#doctors">doctors</a>
        <a href="#appointment">appointment</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home.jpg" alt="">
    </div>

    <div class="content">
        <h3>we take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/home-2.jpg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>Welcome to our multispecialty hospital, where top-notch care meets advanced treatments. With a team of skilled professionals and state-of-the-art facilities, we're here to provide personalized care across various specialties. From routine check-ups to complex procedures, your health is our priority. Trust us to be your partner in wellness.</p>
            <p>At our multispecialty hospital, we blend expertise with compassion to offer unparalleled healthcare services. With a dedicated team of professionals and cutting-edge technology, we provide tailored treatments across a spectrum of medical disciplines. Your well-being is our utmost priority, ensuring you receive the finest care every step of the way.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p> We offer complimentary checkups to promote proactive healthcare and ensure everyone in our community has access to essential preventive services.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Our ambulance service operates round the clock, providing swift and efficient medical assistance whenever emergencies arise, ensuring timely care for patients in need.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p> Our hospital boasts a team of highly skilled and experienced doctors who are leaders in their respective fields, dedicated to providing top-tier medical care and personalized treatment plans tailored to each patient's needs.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Our in-house pharmacy stocks a wide range of medications, ensuring that patients have convenient access to prescribed drugs and pharmaceuticals necessary for their treatment, all under the guidance of our healthcare professionals.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>We offer comfortable and well-equipped bed facilities for patients requiring overnight observation or extended care, ensuring a conducive environment for rest and recovery during their stay at our hospital.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Experience comprehensive care at our multispecialty hospital, where our dedicated team is committed to providing holistic support and guidance to patients throughout their healthcare journey, ensuring their well-being is prioritized at every stage of treatment.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/sriram.jpg" alt="">
            <h3>Dr.Sriram Harshit</h3>
            <span>Internal Medicine Specialist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/nipun.jpg" alt="">
            <h3>Dr.Nipun Sai Kokonda</h3>
            <span>Cardiologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/sriya.png" alt="">
            <h3>Dr.Sriya Palla</h3>
            <span>Neurologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/naveen.jpg" alt="">
            <h3>Dr.Naveen Babu</h3>
            <span>Orthopedist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/hasini.jpg" alt="">
            <h3>Dr.Hasini</h3>
            <span>Gynecologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/durga.jpg" alt="">
            <h3>Dr.Sri Lakshmi Durga</h3>
            <span>Gastroenterologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            
            </div>
        </div>
        <div class="box">
            <img src="image/navaneeth.png" alt="">
            <h3>Dr.Navanit Reddy</h3>
            <span>Pulmonologist</span>
            <div class="share">
                
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/krishna.jpg" alt="">
            <h3>Dr.Krishna Sai</h3>
            <span>Pediatrician</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="image/dinesh.jpg" alt="">
            <h3>Dr.Dinesh Kumar </h3>
            <span>General Surgeon</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/test 2.jpg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <div class="dropdown">
            <select name="doctor" id="doctor" class="box">
    <option value="" disabled selected>Select your Doctor</option>
    <option value="Dr.Sriram">Dr.Sriram</option>
    <option value="Dr.Nipun">Dr.Nipun</option>
    <option value="Dr.Sriya">Dr.Sriya</option>
    <option value="Dr.Naveen">Dr.Naveen</option>
    <option value="Dr.Hasini">Dr.Hasini</option>
    <option value="Dr.Durga">Dr.Durga</option>
    <option value="Dr.Navanit">Dr.Navanit</option>
    <option value="Dr.Krishna">Dr.Krishna</option>
    <option value="Dr.Dinesh">Dr.Dinesh</option>
</select>

    </div>
        
           <input type="datetime-local" name="date_time" class="box" placeholder="Date and Time">

            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>win coder</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>win coder</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">"I was impressed by the professionalism and warmth of the staff at this hospital. The doctors were incredibly knowledgeable, and the free checkup I received was thorough and reassuring. I highly recommend this hospital for anyone seeking quality healthcare."</p>
        </div>

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>win coder</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">The expert doctors at this hospital truly saved my life. They diagnosed my condition accurately and provided effective treatment that helped me recover quickly. The pharmacy had all the medications I needed, making the process seamless. I'm so thankful for their care"</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 09 September, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>Medicine Matters</h3>
                <p>A comprehensive blog covering a wide range of medical specialties, offering insights into the latest advancements, treatment options, and healthcare trends.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 25 Febuary, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> Aashritha Moturi</a>
                </div>
                <h3>Health Hub</h3>
                <p>Providing valuable information on various medical specialties, health tips, patient stories, and updates on healthcare services available at the multispecialty hospital.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 17 October, 2024 </a>
                    <a href="#"> <i class="fas fa-user"></i> Hitesh Maddi </a>
                </div>
                <h3>MediCognize</h3>
                <p>Providing deep dives into various medical fields, this blog educates readers on the intricacies of different specialties, empowering them to make informed healthcare decisions.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-4.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 April, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i>Shruthi Sakamuri </a>
                </div>
                <h3>Health Haven</h3>
                <p>Your go-to resource for health-related information, featuring articles, videos, and infographics on a wide array of medical specialties, wellness trends, and patient experiences.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-5.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 13 november, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> Siva Deepika</a>
                </div>
                <h3>Wellness Waves</h3>
                <p>Offering holistic insights into health and wellness, this blog covers a spectrum of medical specialties, lifestyle tips, and preventive care strategies for overall well-being.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog6.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 20 June, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> Jwala Manaswini </a>
                </div>
                <h3>Multispecialty MedTalk</h3>
                <p> A platform for healthcare professionals and patients alike, featuring articles, interviews, and discussions on diverse medical specialties, treatments, and wellness practices.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 8919298491 </a>
            <a href="#"> <i class="fas fa-phone"></i> 8919298491 </a>
            <a href="#"> <i class="fas fa-envelope"></i> nipunsaikokonda@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> sujoncse26@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> SRM AP, andhra pradesh </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>Team NSK </span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>

