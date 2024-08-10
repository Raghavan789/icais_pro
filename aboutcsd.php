<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICAIS 2024</title>
    <link rel="stylesheet" href="aboutcsd.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> -->
    
</head>
<body>
    

<nav class="bottom-navbar">
    <div class="container">
        <div class="bottom-brand">ABOUT CSD</div>
    </div>
</nav>
<div class="card-container">
    
    <!-- <div class="card">
        <img src="Dr.bv.ramana.jpeg" alt="image1">
        <h2><br>Dr. B.V.Ramana</h2>
        <p><b>Mobile Number:</b> +91 94410 53733</p>
        <p><b>Email ID:</b>  ramana.bendi@gmail.com</p>
    </div> -->
    <div class="card">
        <img src="nareshsir.jpeg" alt="image2">
        <h2><br>Dr. Naresh Tangudu</h2>
        <p><b>HOD OF CSD & MCA</b></p>

        <p><b>Mobile Number:</b> +91 94918 08717 </p>
        <p><b>Email ID:</b> itsajs@gmail.com </p>
    </div>
    <!-- <div class="card">
        <img src="sir2.jpeg" alt="image3">
        <h2><br>Surya Pavan Kumar Gudla</h2>
        <p><b>Mobile Number:</b>  +91 94903 46746</p>
        <p><b>Email ID:</b> surya@adityatekkali.edu.in</p>
    </div> -->
</div>
<div class="about">
    <!-- <h2>ABOUT CSD</h2> -->
    <p>
        Aditya Institute of Technology and Management (AITAM) established the department of Computer Science & Engineering (Data Science) in 2022 with an initial intake of 60 students. The prime objective of this programme B. Tech CSE (Data Science) is to provide the best graduate education to students so that they can meet the growing national and international need for highly qualified personnel in the fields of data science and artificial intelligence. This programme is to develop a broad academic and practical literacy in computer science, statistics, and optimization, with relevance in data science and artificial intelligence, so that students are able to critically select and apply appropriate methods and techniques to extract relevant and important information from data. The course curriculum involves a blend of data inference, algorithm development, and technology to analytically solve complex problems. The programme imparts a confluence of skills in three major areas of mathematical expertise, technical skills, and business strategy. The core of this programme is the ultimate use of enormous data in creative ways to generate business value.
    </p>
    <p><strong>Career Opportunities:</strong></p>
        <p>Data Analyst</p>
        <p>Business Intelligence Developer</p>
        <p>Data Architect and Administrator</p>
        <p>Software Engineer</p>
        <p>Big Data Engineer</p>
        <p>Data Scientist</p>
        <p>Data Engineer</p>
   
</div>

<?php include 'footer.php'  ?>

    <script>
        // Image slider functionality
        const slider = document.querySelector('.slider');
        const images = document.querySelectorAll('.slider img');
        let currentIndex = 0;

        function nextSlide() {
            currentIndex = (currentIndex + 1) % images.length;
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        }


        setInterval(nextSlide, 3000); // Change slide every 3 seconds

        document.addEventListener('DOMContentLoaded', () => {
            const navbar = document.querySelector('.navbar');
            const rightSection = document.querySelector('.right-section');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                    rightSection.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                    rightSection.classList.remove('scrolled');
                }
            });
        });

        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('show');
        }

    </script>
</body>
</html>