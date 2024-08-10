<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICAIS 2024</title>
    <link rel="stylesheet" href="contact.css">
    
</head>
<body>
<?php include 'header.php'; ?>

         

<nav class="bottom-navbar">
    <div class="container">
        <div class="bottom-brand">CONTACT</div>
    </div>
</nav>

<br>
<div class="card-container">
    <div class="card">
        <img src="Dr.bv.ramana.jpeg" alt="image1">
        <h2><br>Dr. B.V.Ramana</h2>
        <p><b>Mobile Number:</b> +91 94410 53733</p>
        <p><b>Email ID:</b>  ramana.bendi@gmail.com</p>
    </div>
    <div class="card">
        <img src="nareshsir.jpeg" alt="image2">
        <h2><br>Dr. Naresh Tangudu</h2>
        <p><b>Mobile Number:</b> +91 94918 08717 </p>
        <p><b>Email ID:</b> itsajs@gmail.com </p>
    </div>
    <div class="card">
        <img src="sir2.jpeg" alt="image3">
        <h2><br>Surya Pavan Kumar Gudla</h2>
        <p><b>Mobile Number:</b>  +91 94903 46746</p>
        <p><b>Email ID:</b> surya@adityatekkali.edu.in</p>
    </div>
</div>
<br>
<div class="container">
   
    <div class="map2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.1822943247594!2d84.19375377496415!3d18.565818482536496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3c522ff727489b%3A0x7b3a160927cac1e!2sAditya%20Institute%20of%20Technology%20and%20Management!5e0!3m2!1sen!2sin!4v1721398894245!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="contact-info">
        <h2>Contact Us</h2>
        <form method="post" action="https://script.google.com/macros/s/AKfycbzwGW6VsSIFno5rtnQk593cMV1V9OkWBgQYk-8PU0b0RzB-Zzn9tlZqT0ugivySB5Cx/exec" name="contact-form">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="contact">Contact Number</label>
            <input type="tel" id="contact" name="contact" required>
            
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
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



        function validateForm() {
            // Clear previous error messages
            document.getElementById("nameError").textContent = "";
            document.getElementById("emailError").textContent = "";
            document.getElementById("contactError").textContent = "";
            document.getElementById("messageError").textContent = "";

            // Get form values
            var fullname = document.getElementById("fullname").value;
            var email = document.getElementById("email").value;
            var contact = document.getElementById("contact").value;
            var message = document.getElementById("message").value;

            var valid = true;

            // Validate Full Name
            if (fullname === "") {
                document.getElementById("nameError").textContent = "Full Name is required.";
                valid = false;
            }

            // Validate Email
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (email === "") {
                document.getElementById("emailError").textContent = "Email is required.";
                valid = false;
            } else if (!emailPattern.test(email)) {
                document.getElementById("emailError").textContent = "Invalid email format.";
                valid = false;
            }

            // Validate Contact Number
            var contactPattern = /^\d+$/;
            if (contact === "") {
                document.getElementById("contactError").textContent = "Contact Number is required.";
                valid = false;
            } else if (!contactPattern.test(contact)) {
                document.getElementById("contactError").textContent = "Contact Number must contain only digits.";
                valid = false;
            }

            // Validate Message
            if (message === "") {
                document.getElementById("messageError").textContent = "Message is required.";
                valid = false;
            }

            return valid;
        }

        const scriptURL = 'https://script.google.com/macros/s/AKfycbzwGW6VsSIFno5rtnQk593cMV1V9OkWBgQYk-8PU0b0RzB-Zzn9tlZqT0ugivySB5Cx/exec'

const form = document.forms['contact-form']

form.addEventListener('submit', e => {

e.preventDefault()

fetch(scriptURL, { method: 'POST', body: new FormData(form)})

.then(response => alert("Thank you! your form is submitted successfully." ))

.then(() => { window.location.reload(); })

.catch(error => console.error('Error!', error.message))

})


    </script>
</body>
</html>