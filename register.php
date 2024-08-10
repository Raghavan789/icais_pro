<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICAIS 2024</title>
    <link rel="stylesheet" href="register.css">
    
</head>
<body>
<?php include 'header.php'; ?>
    

<nav class="bottom-navbar">
    <div class="container">
        <div class="bottom-brand">REGISTRATIONS</div>
    </div>
</nav>

<div class="registration-info">
    <p><strong>The ICAIS 2024 registration fees</strong> are as follows, and must be paid in the USD or local currency as per the current exchange rate.</p>
    
  

     
    
    
    <p><strong>Authors Not from India (Registration Fees is in USD)</strong></p>
    
    <table>
        <tr>
            <th>Category</th>
            <th colspan="1">Early Bird: on or before Oct 17, 2024</th>
            <th colspan="1">Regular Registration: Oct 18, 2024 - Till Oct 20, 2024</th>
            <th colspan="1">Spot Registration: Dec 20-21, 2024</th>
        </tr>
       
        <tr>
            <td><strong>Full Time Students</strong></td>
            <td>100 $</td>
            <td>125 $</td>
            <td>150 $</td>
        </tr>

        <tr>
            <td><strong>Faculty/ Research Scholars</strong></td>
            <td>125 $</td>
            <td>150 $</td>
            <td>175 $</td>
            
        </tr>
        <tr>
            <td><strong>Industry</strong></td>
            <td>150 $</td>
            <td>175 $</td>
            <td>225 $</td>
           
        </tr>
    </table>
    <div class="registration-includes">
        <h3>Registration Includes</h3>
        <ul>
            <li>Two full days of expert insights from top-tier presenters.</li>
            <li>Certificate of Participation OR Presentation of Paper for a registered person only</li>
            <li>Inclusion in SPRINGER proceedings (PROMS), if paper accepted and presented in the conference.</li>
            <li>To become Jack Sparrow member please <a href="#">click here</a></li>
        </ul>
    </div>
    <div class="important-info">
        <h3>Important Information for Registration</h3>
        <ul>
            <li>The deadline for registration can be seen in the important dates. It is important that at least one author per accepted paper registers on or before the deadline.</li>
            <li>Authors registration includes the submission of up to ten (10) pages for full paper.</li>
            <li>M. Tech./B. Tech./MCA students will be considered as Full-time Students.</li>
            <li>Full-time Ph. D. Scholars will be considered as Research Scholars.</li>
            <li>At least one author must register and need to attend the conference to present the paper in person or virtual mode.</li>
            <li>Participants/Attendees/Listeners are also invited.</li>
            <li>Certificate of presentation shall be issued only if the paper is presented either in person or through a virtual platform.</li>
            <li>Jack Sparrow Members must mention their membership UID during registration and submit a copy of the membership card during the conference.</li>
          
        </ul>
    </div>
    <div class="virtual-presentation">
        <h3>Presentation in Virtual Mode</h3>
        <p>Amid prevailing conditions due to COVID19, a virtual meeting platform may be made available for all registered authors who intend to submit their work but are unable to attend the conference. Authors may register and present their paper through the virtual platform.</p>
        <p>Authors shall be sent a Certificate of Participation, Conference Proceedings link and relevant literature by mail.</p>
    </div>
    <div class="virtual-presentation">
        <h3>Guidelines for Conference Paper Submission:</h3>
        <p>To ensure the highest standards of quality and integrity, the following guidelines must be adhered to for all papers submitted to the International Conference on Advancements in Intelligent Systems (ICAIS-2024):</p>
        <p><b>1.Plagiarism Check:</b><br>Submitted papers must have a similarity index of less than 15%. Any paper exceeding this limit will be automatically rejected.</p>
        <p><b>2.Reviewer Feedback:</b>Authors are required to address all comments and suggestions provided by the reviewers. A revised manuscript should be submitted along with a detailed response to the reviewer's comments.</p>
        <p><b>3.Mandatory Presentation</b>At least one author of each accepted paper must register for the conference and present the paper. Failure to present the paper at the conference will result in the paper being excluded from the conference proceedings.</p>
        <p><b>4.Ethical Standards:</b>Authors must adhere to the highest standards of ethics in their research and writing. This includes proper citation of sources, accurate representation of data, and acknowledgment of contributions from others.</p>
        <p><b>5.Springer Submission Guidelines:</b>All papers must conform to the formatting and submission guidelines provided by Springer.         </p>
        <p><b>(A) This includes:</b>Formatting: Use the prescribed Springer conference paper template for formatting your manuscript.</p>
        <p><b>(B) Length:</b> The number of pages should not exceed 10 pages.</p>
        <p><b>(C) References: </b>Ensure that all references are complete and correctly formatted.</p>
        <p><b>(D) Figures and Tables:</b>Include high-quality figures and tables, with appropriate captions and citations.</p>
        <p><b>(E) Submission System:</b>Submit your paper through the designated conference submission system within the specified deadlines.        </p>
        <p><b>6.Originality and Quality:</b>Papers should present original research and provide significant contributions to the field of intelligent systems. The work should be clearly and concisely written, with a logical flow and thorough analysis.</p>
        <p><b>7.Conflict of Interest:</b>Authors must disclose any potential conflicts of interest that could influence the results or interpretation of their research.        </p>
        <p><b>8.Data Availability:</b>Authors should be prepared to provide access to their data and methods for verification and replication of their results, upon request.        </p>
        <p>By following these guidelines, we aim to maintain the integrity and quality of the research presented at ICAIS-2024. Thank you for your cooperation and contribution to the success of the conference.</p>


    </div>
</div>

<?php include 'footer.php'; ?>

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