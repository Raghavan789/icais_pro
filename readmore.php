<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICAIS 2024</title>
    <link rel="stylesheet" href="readmore.css">
    
</head>
<body>
    <?php include 'header.php' ?>

<nav class="bottom-navbar">
    <div class="container">
        <div class="bottom-brand">ABOUT AITAM</div>
    </div>
</nav>

<div class="about">
    <h2 >Founded in 2001</h2>
    <p>Sri Aditya Educational Society (ESTD-2000) started a Technical Institution to impart highest quality and standards in the north coastal A.P. under aegis of eminent academicians, educationists and professionals in the name of Aditya Institute of Technology and Management in 2001.</p>
    
    <p>Aditya Institute of Technology and Management is located at K. Kotturu, Tekkali, Srikakulam District, Andhra Pradesh. It is located in an extent of 50 acres of clean, green and serene area. The institute has the beauty of modern day Gurukul. It is situated on the banks of the river Vamsadhara at a short distance and having the sea at an hours journey. The institute is provided with an enjoyable coastal climate.</p>
    
    <p>The college is marching ahead under the able guidance of Chairman Rtn (PHF) Dr. K. Someswara Rao who is a Pediatrician by profession and committed to social service with a special reference to technical education with unstinted support from the Secretary Sri. L.L. Naidu, Director Prof. V.V. Nageswara Rao and other members of the Sri Aditya Educational Society.</p>
    
    <p>Aditya Institute of Technology and Management currently offers 8 U.G programs in the disciplines of ECE, CSE, CSE-AIML, CSE-DS, IT, EEE, CE and MECH, P.G program in MBA, and 5 disciplines of M. Tech.The total sanctioned intake per year is 1080 in B. Tech programmes, 60 in MBA and 60 in M. Tech.</p>
    
    <p>The Aditya Institute of Technology and Management is rated as one among the best self-financing colleges in the north coastal Andhra Pradesh as it sets up highest standards in all areas of curricular, co curricular and extra curricular activities and in students' placements. The seats have been filled in all the branches every academic year is evidence that the college has got reputation in the field of technical education. The college is affiliated to JNTU Kakinada and hence follows the curricula prescribed by the Boards of Studies of the affiliating university. Based on industry and student feedback, the college faculties interact with university in updating the curriculum time to time. The college offers some value added courses to its students apart from the curriculum prescribed by university.</p>
    
    <p>The success of the college is due to its well qualified faculty (out of 239 total faculty members 83 have Ph. Ds, 63 have PG qualifications with 86 having registered for Ph. D and 7 submitted their thesis) and several of them with rich experience in higher institutes of learning nation wide. The senior faculty members always guide the junior faculty in honing their teaching and research skills. The progress of each course in every semester is closely monitored by a class committee which includes representatives from students. Electronic Digital Examination Process System for the end semester examination and on-line internal examination system are salient features of the evaluation system followed.</p>
    
    <p>The college encourages its faculty to pursue further research consultancy and extension activities apart from teaching. The college motivates its faculty to continue their research work. As a result, 33 of the faculty members are currently registered for Ph.D. in various universities. The research work is being carried out by the faculty has resulted in publication of 150 papers in journals and conferences during the last 5 years. The faculty and students of the college take part in extension activities by conducting short term courses, participating in rural development work in neighboring villages in collaboration with reputed social organizations. For its social service the college has been awarded the prestigious gold medal from the Hon'ble Governor of Andhra Pradesh.</p>
    
    <p>The college has a total built-up area of 25,349 Sq.m with 49 class rooms, 3 seminar halls of different sizes, and 74 laboratories. The current annual budget of the college is of the order of about Rs.1,757.69 lakhs. The College Library has about 53,065 volumes of books and has also a Digital Library with 200 journals as hard copies and 450 journals on-line. All the laboratories are provided with the state of art equipment namely computer labs, internet centre, language lab and digital library. The college has 125 KVA, 24 hours power supply from A.P. State Electricity Board. Besides this the college has three generators with a capacity of 325 KVA, 125 KVA and 62 KVA with 30 UPS of total capacity 143.5 KVA to ensure uninterrupted power supply for the smooth functioning of all routine academic activities. Hostel accommodation is available for about 370 boys and 188 girls in separate hostels. Sports facilities are available with play fields in all major games and sports spread over an area of about 5 acres.</p>
    
    <p>The pass percentage has been consistently around 75% right from the inception of the college with some university ranks. The placement record for the previous three years has been laudable about 70% of eligible candidates get placed in various campus recruitment drives. The institute is always quality conscious and got NBA Accreditation for three programs in 2009 and NAAC Accreditation in 2011. Its commitment towards quality and growth enabled AITAM to become a TEQIP funded institution, in Andhra Pradesh in 2011.</p>
    
    <p>The management provides whole-hearted support for the improvement of the college in all aspects. About 90 lakhs of rupees are allotted every year for augmenting / modernizing the equipment to pursue M. Tech, Ph. D. works by giving them study leaves and financial assistance. The faculty and students are closely associated with all administrative and academic policy decisions through membership on appropriate committees.</p>
</div>
<button id="downloadBtn">Download ZIP</button>
<?php include 'footer.php' ?>

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
       


        document.getElementById('downloadBtn').addEventListener('click', function() {
            // Replace 'your-zip-file.zip' with the actual path to your ZIP file
            const fileUrl = 'path/to/your-zip-file.zip';
            const a = document.createElement('a');
            a.href = fileUrl;
            a.download = 'your-zip-file.zip'; // Optional: set a default file name
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        });
    </script>
</body>
</html>