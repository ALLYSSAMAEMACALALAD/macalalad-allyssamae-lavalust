<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        LavaLust | Student Information System
    </title>

    <style>

        /* =====================================================
           RESET
        ===================================================== */

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        /* =====================================================
           ROOT COLORS
        ===================================================== */

        :root {

            --pink: #e78bb3;
            --pink-light: #f48fb1;
            --pink-dark: #d86f9e;

            --pink-soft: #fce4ec;

            --dark: #160b18;
            --dark-2: #24101f;
            --dark-3: #301426;

            --text: #ffffff;
            --text-soft: #e8d5df;
            --text-muted: #b99daa;

            --border: rgba(244,143,177,0.20);
            --border-hot: rgba(244,143,177,0.45);

            --glow: rgba(244,143,177,0.25);
        }


        /* =====================================================
           BODY
        ===================================================== */

        body {

            font-family:
                'Segoe UI',
                Arial,
                sans-serif;

            min-height: 100vh;

            color: var(--text);

            background:

                radial-gradient(
                    circle at 10% 10%,
                    rgba(244,143,177,0.18),
                    transparent 30%
                ),

                radial-gradient(
                    circle at 90% 90%,
                    rgba(231,139,179,0.15),
                    transparent 30%
                ),

                linear-gradient(
                    135deg,
                    var(--dark),
                    var(--dark-2),
                    var(--dark-3)
                );

            overflow-x: hidden;
        }


        /* =====================================================
           TECH GRID
        ===================================================== */

        body::before {

            content: "";

            position: fixed;

            inset: 0;

            background-image:

                linear-gradient(
                    rgba(244,143,177,0.055) 1px,
                    transparent 1px
                ),

                linear-gradient(
                    90deg,
                    rgba(244,143,177,0.055) 1px,
                    transparent 1px
                );

            background-size: 45px 45px;

            pointer-events: none;

            z-index: 0;
        }


        /* =====================================================
           GLOW
        ===================================================== */

        body::after {

            content: "";

            position: fixed;

            width: 500px;

            height: 500px;

            border-radius: 50%;

            background: rgba(244,143,177,0.08);

            filter: blur(100px);

            right: -200px;

            top: -150px;

            pointer-events: none;

            z-index: 0;
        }


        /* =====================================================
           NAVIGATION
        ===================================================== */

        .navbar {

            position: relative;

            z-index: 10;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 18px 6%;

            border-bottom:
                1px solid var(--border);

            background:
                rgba(22,11,24,0.72);

            backdrop-filter: blur(15px);

            -webkit-backdrop-filter: blur(15px);
        }


        /* LOGO */

        .logo {

            display: flex;

            align-items: center;

            gap: 10px;

            color: white;

            text-decoration: none;

            font-size: 20px;

            font-weight: 800;

            letter-spacing: 1px;
        }


        .logo-icon {

            width: 38px;

            height: 38px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    var(--pink-dark),
                    var(--pink-light)
                );

            box-shadow:
                0 0 15px var(--glow);
        }


        .logo span {

            color: var(--pink-light);
        }


        /* NAV LINKS */

        .nav-links {

            display: flex;

            align-items: center;

            gap: 8px;
        }


        .nav-links a {

            color: var(--text-soft);

            text-decoration: none;

            font-size: 13px;

            font-weight: 600;

            padding: 9px 14px;

            border-radius: 8px;

            transition: 0.3s;
        }


        .nav-links a:hover {

            color: white;

            background:
                rgba(244,143,177,0.10);

            box-shadow:
                0 0 15px rgba(244,143,177,0.08);
        }


        /* PROFILE BUTTON */

        .profile-btn {

            border:
                1px solid var(--border-hot);

            color: var(--pink-light) !important;
        }


        .profile-btn:hover {

            background:
                rgba(244,143,177,0.12) !important;

            box-shadow:
                0 0 20px var(--glow);
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .container {

            position: relative;

            z-index: 2;

            max-width: 1100px;

            margin: auto;

            padding: 0 25px;
        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {

            min-height: 560px;

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            padding: 80px 20px;
        }


        .hero-content {

            max-width: 800px;
        }


        /* SYSTEM BADGE */

        .system-badge {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            padding: 8px 16px;

            border-radius: 30px;

            background:
                rgba(244,143,177,0.08);

            border:
                1px solid var(--border-hot);

            color: #ffb8d2;

            font-size: 11px;

            font-weight: 700;

            letter-spacing: 1px;

            text-transform: uppercase;

            margin-bottom: 25px;
        }


        .status-dot {

            width: 7px;

            height: 7px;

            background: var(--pink-light);

            border-radius: 50%;

            box-shadow:
                0 0 8px var(--pink-light);

            animation: pulse 2s infinite;
        }


        @keyframes pulse {

            0%,100% {
                opacity: 1;
            }

            50% {
                opacity: .4;
            }
        }


        /* HERO TITLE */

        .hero h1 {

            font-size:
                clamp(45px, 8vw, 82px);

            line-height: 1;

            font-weight: 800;

            letter-spacing: -3px;

            margin-bottom: 25px;

            text-shadow:
                0 0 30px rgba(244,143,177,0.12);
        }


        .hero h1 .pink {

            color: var(--pink-light);

            text-shadow:
                0 0 25px rgba(244,143,177,0.30);
        }


        .hero h1 .outline {

            color: transparent;

            -webkit-text-stroke:
                1px rgba(255,255,255,0.35);
        }


        /* SUBTITLE */

        .hero-description {

            max-width: 650px;

            margin: auto;

            color: var(--text-muted);

            font-size: 15px;

            line-height: 1.8;

            margin-bottom: 30px;
        }


        /* =====================================================
           BUTTONS
        ===================================================== */

        .hero-buttons {

            display: flex;

            justify-content: center;

            gap: 12px;

            flex-wrap: wrap;
        }


        .btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            padding: 13px 22px;

            border-radius: 10px;

            text-decoration: none;

            font-size: 13px;

            font-weight: 700;

            transition: 0.3s;
        }


        .btn-primary {

            color: white;

            background:
                linear-gradient(
                    135deg,
                    var(--pink-dark),
                    var(--pink-light)
                );

            box-shadow:
                0 5px 20px rgba(216,111,158,0.20);
        }


        .btn-primary:hover {

            transform: translateY(-3px);

            box-shadow:
                0 10px 30px rgba(244,143,177,0.35);
        }


        .btn-outline {

            color: var(--pink-light);

            border:
                1px solid var(--border-hot);

            background:
                rgba(244,143,177,0.04);
        }


        .btn-outline:hover {

            background:
                rgba(244,143,177,0.12);

            transform: translateY(-3px);
        }


        /* =====================================================
           SYSTEM INFO CARDS
        ===================================================== */

        .system-grid {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 15px;

            padding-bottom: 70px;
        }


        .system-card {

            padding: 25px;

            border-radius: 16px;

            background:
                rgba(255,255,255,0.055);

            border:
                1px solid var(--border);

            backdrop-filter: blur(12px);

            transition: 0.3s;

            position: relative;

            overflow: hidden;
        }


        .system-card::before {

            content: "";

            position: absolute;

            top: 0;

            left: 0;

            width: 100%;

            height: 2px;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    var(--pink-light),
                    transparent
                );

            opacity: 0;

            transition: 0.3s;
        }


        .system-card:hover {

            transform: translateY(-5px);

            border-color:
                var(--border-hot);

            background:
                rgba(244,143,177,0.07);

            box-shadow:
                0 15px 35px rgba(0,0,0,0.25);
        }


        .system-card:hover::before {

            opacity: 1;
        }


        .card-icon {

            width: 45px;

            height: 45px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 10px;

            background:
                rgba(244,143,177,0.10);

            border:
                1px solid var(--border-hot);

            font-size: 20px;

            margin-bottom: 15px;
        }


        .system-card h3 {

            color: white;

            font-size: 16px;

            margin-bottom: 8px;
        }


        .system-card p {

            color: var(--text-muted);

            font-size: 12px;

            line-height: 1.7;
        }


        /* =====================================================
           STUDENT ACCESS PANEL
        ===================================================== */

        .access-panel {

            margin-bottom: 70px;

            padding: 30px;

            border-radius: 18px;

            background:
                linear-gradient(
                    135deg,
                    rgba(231,139,179,0.10),
                    rgba(255,255,255,0.04)
                );

            border:
                1px solid var(--border-hot);

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            box-shadow:
                0 20px 50px rgba(0,0,0,0.18);
        }


        .access-text h2 {

            color: white;

            font-size: 21px;

            margin-bottom: 8px;
        }


        .access-text p {

            color: var(--text-muted);

            font-size: 12px;

            line-height: 1.6;
        }


        .access-status {

            display: flex;

            align-items: center;

            gap: 8px;

            color: #ffb5d1;

            font-size: 11px;

            font-weight: 700;

            white-space: nowrap;
        }


        /* =====================================================
           TECH SECTION
        ===================================================== */

        .section {

            padding-bottom: 70px;

            text-align: center;
        }


        .section-label {

            color: var(--pink-light);

            font-size: 11px;

            letter-spacing: 2px;

            text-transform: uppercase;

            margin-bottom: 10px;
        }


        .section h2 {

            font-size: 30px;

            margin-bottom: 12px;
        }


        .section-description {

            color: var(--text-muted);

            font-size: 13px;

            max-width: 600px;

            margin: auto;

            line-height: 1.7;
        }


        /* =====================================================
           FEATURES
        ===================================================== */

        .features {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 15px;

            margin-top: 30px;

            text-align: left;
        }


        .feature {

            padding: 22px;

            border-radius: 14px;

            background:
                rgba(255,255,255,0.04);

            border:
                1px solid var(--border);

            transition: 0.3s;
        }


        .feature:hover {

            border-color:
                var(--border-hot);

            background:
                rgba(244,143,177,0.06);
        }


        .feature h3 {

            color: white;

            font-size: 14px;

            margin-bottom: 7px;
        }


        .feature p {

            color: var(--text-muted);

            font-size: 12px;

            line-height: 1.6;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {

            border-top:
                1px solid var(--border);

            padding: 25px;

            text-align: center;

            background:
                rgba(0,0,0,0.12);
        }


        footer p {

            color: #806b76;

            font-size: 10px;

            letter-spacing: 1px;
        }


        footer strong {

            color: var(--pink-light);
        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 768px) {

            .navbar {

                padding: 15px 20px;
            }


            .nav-links a:not(.profile-btn) {

                display: none;
            }


            .hero {

                min-height: 500px;

                padding:
                    60px 10px;
            }


            .hero h1 {

                font-size: 48px;

                letter-spacing: -2px;
            }


            .system-grid {

                grid-template-columns: 1fr;
            }


            .features {

                grid-template-columns: 1fr;
            }


            .access-panel {

                flex-direction: column;

                align-items: flex-start;
            }


            .access-status {

                white-space: normal;
            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     NAVIGATION
====================================================== -->

<nav class="navbar">

    <a
        href="/LavaLust/index.php"
        class="logo"
    >

        <div class="logo-icon">
            🌸
        </div>

        Lava<span>Lust</span>

    </a>


    <div class="nav-links">

        <a
            href="https://lavalust.netlify.app/docs/"
            target="_blank"
        >
            Docs
        </a>


        <a
            href="https://github.com/ronmarasigan/LavaLust"
            target="_blank"
        >
            GitHub
        </a>


        <!-- STUDENT PROFILE -->

        <a
            href="/LavaLust/index.php/student/profile"
            class="profile-btn"
        >
            👤 Student Profile
        </a>

    </div>

</nav>



<!-- =====================================================
     HERO
====================================================== -->

<div class="hero">

    <div class="hero-content">


        <div class="system-badge">

            <span class="status-dot"></span>

            Student Information System

        </div>


        <h1>

            Welcome to

            <span class="pink">
                Lava
            </span><span class="outline">
                Lust
            </span>

        </h1>


        <p class="hero-description">

            A modern and organized student information system
            built with the LavaLust PHP MVC framework.
            Manage and view student information through
            a clean, secure, and responsive interface.

        </p>


        <div class="hero-buttons">


            <!-- STUDENT PROFILE -->

            <a
                href="/LavaLust/index.php/student/profile"
                class="btn btn-primary"
            >

                👤 View My Profile

            </a>


            <!-- GET STARTED -->

            <a
                href="https://lavalust.netlify.app/docs/"
                target="_blank"
                class="btn btn-outline"
            >

                ⚡ Get Started

            </a>


        </div>

    </div>

</div>



<!-- =====================================================
     SYSTEM CARDS
====================================================== -->

<div class="container">


    <div class="system-grid">


        <div class="system-card">

            <div class="card-icon">
                👤
            </div>

            <h3>
                Student Profile
            </h3>

            <p>
                Access your student information,
                academic details, contact information,
                hobbies, and personal description.
            </p>

        </div>



        <div class="system-card">

            <div class="card-icon">
                🔐
            </div>

            <h3>
                Secure Access
            </h3>

            <p>
                Student information is protected using
                middleware to control and secure
                access to the profile page.
            </p>

        </div>



        <div class="system-card">

            <div class="card-icon">
                📱
            </div>

            <h3>
                Responsive Design
            </h3>

            <p>
                The system is designed to work smoothly
                on desktop computers, laptops,
                tablets, and mobile devices.
            </p>

        </div>


    </div>



    <!-- =================================================
         STUDENT ACCESS
    ================================================== -->

    <div class="access-panel">


        <div class="access-text">

            <h2>
                Student Information Portal
            </h2>

            <p>
                Your personal student information is
                available through the protected profile
                section of the system.
            </p>

        </div>


        <div class="access-status">

            <span class="status-dot"></span>

            SYSTEM ONLINE

        </div>


    </div>



    <!-- =================================================
         FEATURES
    ================================================== -->

    <div class="section">


        <div class="section-label">
            // system_features
        </div>


        <h2>
            Built for Student Information
        </h2>


        <p class="section-description">

            LavaLust provides a simple and modern
            interface for displaying student data
            while maintaining a structured MVC architecture.

        </p>



        <div class="features">


            <div class="feature">

                <h3>
                    ⚙ MVC Architecture
                </h3>

                <p>
                    Uses Models, Views, and Controllers
                    to keep the application organized
                    and maintainable.
                </p>

            </div>



            <div class="feature">

                <h3>
                    🛡️ Middleware Protection
                </h3>

                <p>
                    Student profile pages can be protected
                    using StudentMiddleware before
                    allowing access.
                </p>

            </div>



            <div class="feature">

                <h3>
                    🗄️ Database Integration
                </h3>

                <p>
                    Student information can be retrieved
                    dynamically from the database and
                    displayed in the profile.
                </p>

            </div>



            <div class="feature">

                <h3>
                    💻 Modern Interface
                </h3>

                <p>
                    Pink neon accents, glass effects,
                    digital grids, and responsive layouts
                    give the system a modern technology feel.
                </p>

            </div>


        </div>

    </div>

</div>



<!-- =====================================================
     FOOTER
====================================================== -->

<footer>

    <p>

        LAVALUST • STUDENT INFORMATION SYSTEM

        <br><br>

        Designed with
        <strong>♥</strong>
        for Student Information Management

    </p>

</footer>


</body>

</html>