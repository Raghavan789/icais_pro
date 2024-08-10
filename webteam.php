<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICAIS 2024</title>
    <link rel="stylesheet" href="webteam.css">
    
</head>
<body>
<?php include 'header.php'; ?>


<nav class="bottom-navbar">
    <div class="container">
        <div class="bottom-brand">WEB TEAM</div>
    </div>
</nav>

<br>
<div class="card-container">
    <div class="card">
        <img src="raghav.jpeg" alt="image1">
        <h2><br>M.A.V.K.Raghavan </h2>
        <p><b>Dept:</b> III CSD</p>
        <p><b>Roll Number:</b> 22A51A4437</p>
        <p><b>Email ID:</b> mavkrishnaraghavan@gmail.com</p>
    </div>
    <div class="card">
        <img src="rajesh.jpg" alt="image2">
        <h2><br>U. Rajeswara Rao</h2>
        <p><b>Dept:</b> III CSD</p>
        <p><b>Roll Number:</b> 22A51A4462</p>
        <p><b>Email ID:</b> uppadarajeshwararao@gamil.com</p>
    </div>
    <div class="card">
        <img src="sai.jpeg" alt="image3">
        <h2><br>Sai Kamal Suro</h2>
        <p><b>Dept:</b> III CSD</p>
        <p><b>Roll Number:</b> 22A51A4446</p>
        <p><b>Email ID:</b> saikamalsuro1@gmail.com</p>
    </div>
</div>

<?php include 'footer.php'; ?>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
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