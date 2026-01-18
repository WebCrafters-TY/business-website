<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WebCrafters-TY</title>

    <!-- SEO -->
    <meta name="description" content="Professional web development company providing modern websites and applications.">
    <meta name="keywords" content="web development, web design, ecommerce, php, bootstrap">
    <meta name="author" content="Tech Company">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f5f7fb;
            transition: 0.3s;
        }

        .navbar {
            direction: ltr
        }

        .hero {
            background: linear-gradient(to right, #0d6efd, #6610f2);
            color: white;
            padding: 120px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .section-title {
            font-weight: bold;
            margin-bottom: 40px;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 0 25px rgba(0,0,0,0.05);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        footer {
            background: #111;
            color: #ccc;
            padding: 40px 0;
        }

        /* Dark Mode */
        .dark-mode {
            background: #121212;
            color: white;
        }

        .dark-mode .card {
            background: #1f1f1f;
            color: white;
        }

        .dark-mode #about {
            background: #1a1a1a !important;
            color: white;
        }

        .dark-mode #about p {
            color: #ccc;
        }

        .dark-mode footer {
            background: black;
        }
    </style>
</head>

<body>

<!-- Loader -->
<div id="loader" style="
position:fixed;
width:100%;
height:100%;
background:white;
z-index:9999;
display:flex;
align-items:center;
justify-content:center;">
    <div class="spinner-border text-primary"></div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">WebCrafters-TY</a>

        <div class="ms-auto">
            <button class="btn btn-outline-light btn-sm me-2" onclick="toggleDark()">🌙</button>
            <button class="btn btn-outline-light btn-sm" onclick="toggleLang()">AR / EN</button>
        </div>
    </div>
</nav>

<!-- Hero -->
<section class="hero mt-5">
    <div class="container" data-aos="fade-up">
        <h1 id="hero-title" data-en="We Build Digital Solutions" data-ar="نحن نبني حلول رقمية">
            We Build Digital Solutions
        </h1>

        <p class="lead mt-3" id="hero-sub"
            data-en="Modern websites and applications for growing businesses"
            data-ar="مواقع وتطبيقات حديثة لنمو لأعمالك">
            Modern websites and applications for growing businesses
        </p>

        <a href="#contact" class="btn btn-light btn-lg mt-4"
            id="hero-btn" data-en="Get Started" data-ar="ابدأ الآن">
            Get Started
        </a>
    </div>
</section>

<!-- Services -->
<section class="container py-5" id="services">
    <h2 class="text-center section-title" id="services-title"
        data-en="Our Services" data-ar="خدماتنا">
        Our Services
    </h2>

    <div class="row g-4 text-center">

        <div class="col-md-4" data-aos="fade-up">
            <div class="card p-4">
                <i class="fa-solid fa-paintbrush fa-3x text-primary mb-3"></i>
                <h4 data-en="Web Design" data-ar="تصميم مواقع">Web Design</h4>
                <p data-en="Modern UI/UX designs that attract customers"
                    data-ar="تصميم حديثة تجذب لاعمالك">
                    Modern UI/UX designs that attract customers
                </p>
            </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card p-4">
                <i class="fa-solid fa-code fa-3x text-primary mb-3"></i>
                <h4 data-en="Web Development" data-ar="برمجة مواقع">Web Development</h4>
                <p data-en="Fast, secure and scalable websites"
                    data-ar="مواقع سريعة وآمنة وامنة للتطوير">
                    Fast, secure and scalable websites
                </p>
            </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="card p-4">
                <i class="fa-solid fa-cart-shopping fa-3x text-primary mb-3"></i>
                <h4 data-en="E-Commerce" data-ar="متاجر إلكترونية">E-Commerce</h4>
                <p data-en="Powerful online stores for your business"
                    data-ar="متاجر إلكترونية احترافية لأعمالك">
                    Powerful online stores for your business
                </p>
            </div>
        </div>

    </div>
</section>

<!-- About -->
<section class="bg-white py-5" id="about">
    <div class="container" data-aos="fade-right">
        <h2 class="section-title" id="about-title"
            data-en="About Us" data-ar="من نحن">
            About Us
        </h2>

        <p id="about-text"
            data-en="We are a professional digital agency specialized in building high-quality websites and web applications."
            data-ar="نحن شركة رقمية متخصصة في بناء مواقع وتطبيقات عالية الجودة.">
            We are a professional digital agency specialized in building high-quality websites and web applications.
        </p>
    </div>
</section>

<!-- Contact -->
<section class="container py-5" id="contact">
    <h2 class="text-center section-title" id="contact-title"
        data-en="Contact Us" data-ar="تواصل معنا">
        Contact Us
    </h2>

    <form action="save.php" method="POST" class="col-md-6 mx-auto shadow p-4 rounded" data-aos="zoom-in">
        <input type="text" name="name" class="form-control mb-3"
                data-en="Your Name" data-ar="اسمك"
                placeholder="Your Name" required>
        <input type="email" name="email" class="form-control mb-3"
                data-en="Your Email" data-ar="بريدك الإلكتروني"
                placeholder="Your Email" required>
        <textarea name="message" class="form-control mb-3"
                data-en="Your Message" data-ar="رسالتك"
                placeholder="Your Message" rows="4" required></textarea>

        <button class="btn btn-primary w-100"
                data-en="Send Message" data-ar="إرسال الرسالة">
                Send Message
        </button>
    </form>
</section>

<!-- Footer -->
<footer>
    <div class="container text-center">
        <h5>WebCrafters-TY</h5>
        <p>Digital Solutions for Modern Businesses</p>
        <p>© 2026 WebCrafters-TY. All rights reserved.</p>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
AOS.init();

// Loader
window.onload = function() {
    document.getElementById("loader").style.display = "none";
}

// Dark mode
function toggleDark() {
    document.body.classList.toggle("dark-mode");
}

// Language system
let lang = "en";

function toggleLang() {
    const elements = document.querySelectorAll("[data-en]");

    if (lang === "en") {
        elements.forEach(el => {
            if (el.tagName === "INPUT" || el.tagName === "TEXTAREA") {
                el.placeholder = el.getAttribute("data-ar");
            } else {
                el.innerText = el.getAttribute("data-ar");
            }
        });

        document.body.style.direction = "rtl";
        document.body.style.textAlign = "right";
        document.querySelector("nav").style.direction = "ltr";

        lang = "ar";
    } else {
        elements.forEach(el => {
            if (el.tagName === "INPUT" || el.tagName === "TEXTAREA") {
                el.placeholder = el.getAttribute("data-en");
            } else {
                el.innerText = el.getAttribute("data-en");
            }
        });

        document.body.style.direction = "ltr";
        document.body.style.textAlign = "left";
        document.querySelector("nav").style.direction = "ltr";

        lang = "en";
    }
}

</script>

</body>
</html>
