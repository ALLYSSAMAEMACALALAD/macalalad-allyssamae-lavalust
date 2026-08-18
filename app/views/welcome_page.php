<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome to LavaLust</title>

    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600;700;800&family=Unbounded:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>

        /* =====================================================
           RESET
        ===================================================== */

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        /* =====================================================
           VARIABLES
        ===================================================== */

        :root {

            --pink: #f48fb1;
            --pink-light: #ffb6d2;
            --pink-dark: #d86f9e;

            --pink-glow:
                rgba(244, 143, 177, 0.25);

            --pink-glow-strong:
                rgba(244, 143, 177, 0.45);

            --dark:
                #160b18;

            --dark2:
                #211020;

            --dark3:
                #2b1328;

            --text:
                #ffffff;

            --muted:
                #c9aebc;

            --dim:
                #806b76;

            --border:
                rgba(244, 143, 177, 0.16);

            --border-hot:
                rgba(244, 143, 177, 0.4);

            --mono:
                'Fira Code', monospace;

            --sans:
                'Unbounded', sans-serif;
        }


        /* =====================================================
           BODY
        ===================================================== */

        html {
            scroll-behavior: smooth;
        }

        body {

            font-family: var(--sans);

            min-height: 100vh;

            background:
                radial-gradient(
                    circle at 10% 10%,
                    rgba(244,143,177,0.15),
                    transparent 30%
                ),

                radial-gradient(
                    circle at 90% 80%,
                    rgba(216,111,158,0.12),
                    transparent 30%
                ),

                linear-gradient(
                    135deg,
                    #160b18,
                    #241021,
                    #180c20
                );

            color: var(--text);

            overflow-x: hidden;
        }


        /* =====================================================
           DIGITAL GRID
        ===================================================== */

        body::before {

            content: "";

            position: fixed;

            inset: 0;

            background-image:

                linear-gradient(
                    rgba(244,143,177,0.045) 1px,
                    transparent 1px
                ),

                linear-gradient(
                    90deg,
                    rgba(244,143,177,0.045) 1px,
                    transparent 1px
                );

            background-size: 45px 45px;

            pointer-events: none;

            z-index: 0;
        }


        /* =====================================================
           GLOW ORBS
        ===================================================== */

        .orb {

            position: fixed;

            border-radius: 50%;

            filter: blur(100px);

            pointer-events: none;

            z-index: 0;
        }


        .orb-1 {

            width: 450px;

            height: 450px;

            left: -180px;

            top: -150px;

            background:
                rgba(244,143,177,0.12);
        }


        .orb-2 {

            width: 400px;

            height: 400px;

            right: -150px;

            bottom: -120px;

            background:
                rgba(216,111,158,0.12);
        }


        /* =====================================================
           NAVIGATION
        ===================================================== */

        nav {

            position: sticky;

            top: 0;

            z-index: 20;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 18px 45px;

            background:
                rgba(22,11,24,0.82);

            backdrop-filter:
                blur(18px);

            -webkit-backdrop-filter:
                blur(18px);

            border-bottom:
                1px solid var(--border);

            box-shadow:
                0 10px 30px rgba(0,0,0,0.2);
        }


        /* LOGO */

        .nav-logo {

            display: flex;

            align-items: center;

            gap: 10px;

            color: white;

            text-decoration: none;

            font-size: 17px;

            font-weight: 700;
        }


        .nav-logo .flame {

            width: 36px;

            height: 36px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 10px;

            background:
                linear-gradient(
                    135deg,
                    var(--pink-dark),
                    var(--pink)
                );

            box-shadow:
                0 0 18px var(--pink-glow-strong);

            font-size: 18px;
        }


        /* NAV LINKS */

        .nav-links {

            display: flex;

            align-items: center;

            gap: 8px;
        }


        .nav-links a {

            color: var(--muted);

            text-decoration: none;

            font-family: var(--mono);

            font-size: 12px;

            padding: 9px 13px;

            border-radius: 8px;

            transition: 0.3s;
        }


        .nav-links a:hover {

            color: white;

            background:
                rgba(244,143,177,0.08);

            box-shadow:
                0 0 15px rgba(244,143,177,0.08);
        }


        /* GET STARTED */

        .nav-links .btn-nav {

            color: white;

            background:
                linear-gradient(
                    135deg,
                    var(--pink-dark),
                    var(--pink)
                );

            border:
                1px solid rgba(255,255,255,0.15);

            margin-left: 5px;

            box-shadow:
                0 5px 18px rgba(216,111,158,0.2);
        }


        .nav-links .btn-nav:hover {

            color: white;

            transform:
                translateY(-2px);

            box-shadow:
                0 8px 25px rgba(244,143,177,0.35);
        }


        /* STUDENT PROFILE */

        .nav-links .profile-btn {

            color: var(--pink-light);

            border:
                1px solid var(--border-hot);

            background:
                rgba(244,143,177,0.04);
        }


        .nav-links .profile-btn:hover {

            color: white;

            background:
                rgba(244,143,177,0.12);

            box-shadow:
                0 0 18px rgba(244,143,177,0.18);
        }


        /* =====================================================
           MAIN WRAPPER
        ===================================================== */

        .wrap {

            position: relative;

            z-index: 2;

            max-width: 1100px;

            margin: auto;

            padding-left: 25px;

            padding-right: 25px;
        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {

            text-align: center;

            padding:
                100px 25px 80px;
        }


        /* BADGE */

        .badge {

            display: inline-flex;

            align-items: center;

            gap: 9px;

            padding:
                8px 16px;

            margin-bottom: 25px;

            border-radius: 30px;

            background:
                rgba(244,143,177,0.08);

            border:
                1px solid var(--border-hot);

            color:
                var(--pink-light);

            font-family:
                var(--mono);

            font-size: 11px;

            letter-spacing: 1px;

            text-transform: uppercase;

            box-shadow:
                0 0 20px rgba(244,143,177,0.06);
        }


        .badge::before {

            content: "";

            width: 7px;

            height: 7px;

            border-radius: 50%;

            background:
                var(--pink);

            box-shadow:
                0 0 10px var(--pink);

            animation:
                pulse 2s infinite;
        }


        @keyframes pulse {

            0%,100% {
                opacity: 1;
                box-shadow:
                    0 0 8px var(--pink);
            }

            50% {
                opacity: .5;
                box-shadow:
                    0 0 3px var(--pink);
            }
        }


        /* HERO TITLE */

        .hero h1 {

            font-size:
                clamp(2.8rem, 7vw, 5.8rem);

            line-height:
                1.05;

            font-weight:
                800;

            letter-spacing:
                -3px;

            margin-bottom:
                25px;

            text-shadow:
                0 0 30px rgba(244,143,177,0.08);
        }


        .word-lava {

            color:
                var(--pink);

            text-shadow:
                0 0 25px rgba(244,143,177,0.25);
        }


        .word-lust {

            color:
                transparent;

            -webkit-text-stroke:
                1.5px rgba(255,182,210,0.45);
        }


        /* HERO DESCRIPTION */

        .hero-sub {

            max-width:
                600px;

            margin:
                auto auto 35px;

            color:
                var(--muted);

            font-family:
                var(--mono);

            font-size:
                13px;

            line-height:
                1.8;
        }


        /* =====================================================
           BUTTONS
        ===================================================== */

        .hero-actions {

            display:
                flex;

            justify-content:
                center;

            gap:
                12px;

            flex-wrap:
                wrap;
        }


        .btn {

            display:
                inline-flex;

            align-items:
                center;

            justify-content:
                center;

            padding:
                13px 22px;

            border-radius:
                10px;

            text-decoration:
                none;

            font-family:
                var(--mono);

            font-size:
                12px;

            font-weight:
                700;

            transition:
                0.3s;
        }


        .btn-primary {

            color:
                white;

            background:
                linear-gradient(
                    135deg,
                    var(--pink-dark),
                    var(--pink)
                );

            box-shadow:
                0 8px 25px rgba(216,111,158,0.2);
        }


        .btn-primary:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 12px 30px rgba(244,143,177,0.35);
        }


        .btn-ghost {

            color:
                var(--muted);

            border:
                1px solid var(--border-hot);

            background:
                rgba(255,255,255,0.02);
        }


        .btn-ghost:hover {

            color:
                white;

            background:
                rgba(244,143,177,0.08);

            transform:
                translateY(-3px);
        }


        /* =====================================================
           STATS
        ===================================================== */

        .stats {

            position:
                relative;

            z-index:
                2;

            display:
                flex;

            justify-content:
                center;

            align-items:
                center;

            gap:
                70px;

            flex-wrap:
                wrap;

            padding:
                35px 20px;

            border-top:
                1px solid var(--border);

            border-bottom:
                1px solid var(--border);

            background:
                rgba(255,255,255,0.015);
        }


        .stat {

            text-align:
                center;
        }


        .stat-value {

            font-family:
                var(--mono);

            font-size:
                25px;

            font-weight:
                800;

            color:
                white;
        }


        .stat-value span {

            color:
                var(--pink);
        }


        .stat-label {

            margin-top:
                7px;

            font-family:
                var(--mono);

            font-size:
                9px;

            letter-spacing:
                1px;

            text-transform:
                uppercase;

            color:
                var(--dim);
        }


        /* =====================================================
           DIVIDER
        ===================================================== */

        .divider {

            height:
                1px;

            margin:
                0 25px;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(244,143,177,0.25),
                    transparent
                );
        }


        /* =====================================================
           SECTIONS
        ===================================================== */

        section {

            position:
                relative;

            z-index:
                2;

            padding:
                80px 25px;
        }


        .section-label {

            font-family:
                var(--mono);

            color:
                var(--pink);

            font-size:
                11px;

            letter-spacing:
                2px;

            text-transform:
                uppercase;

            margin-bottom:
                10px;
        }


        .section-title {

            color:
                white;

            font-size:
                clamp(1.7rem,4vw,2.7rem);

            line-height:
                1.2;

            margin-bottom:
                15px;

            font-weight:
                800;
        }


        .section-desc {

            color:
                var(--muted);

            font-family:
                var(--mono);

            font-size:
                12px;

            line-height:
                1.8;

            max-width:
                550px;
        }


        /* =====================================================
           FEATURES
        ===================================================== */

        .features-layout {

            display:
                grid;

            grid-template-columns:
                repeat(2,1fr);

            gap:
                15px;

            margin-top:
                35px;
        }


        .feature {

            position:
                relative;

            padding:
                25px;

            min-height:
                190px;

            background:
                rgba(255,255,255,0.045);

            border:
                1px solid var(--border);

            border-radius:
                16px;

            backdrop-filter:
                blur(12px);

            transition:
                0.3s;
        }


        .feature:hover {

            transform:
                translateY(-5px);

            border-color:
                var(--border-hot);

            background:
                rgba(244,143,177,0.07);

            box-shadow:
                0 15px 35px rgba(0,0,0,0.25),
                0 0 25px rgba(244,143,177,0.06);
        }


        .feature-icon {

            width:
                45px;

            height:
                45px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            margin-bottom:
                18px;

            border-radius:
                11px;

            background:
                rgba(244,143,177,0.1);

            border:
                1px solid var(--border-hot);

            font-size:
                19px;

            box-shadow:
                0 0 15px rgba(244,143,177,0.06);
        }


        .feature h3 {

            color:
                white;

            font-size:
                14px;

            margin-bottom:
                10px;
        }


        .feature p {

            color:
                var(--muted);

            font-family:
                var(--mono);

            font-size:
                11px;

            line-height:
                1.7;
        }


        /* =====================================================
           CODE SECTION
        ===================================================== */

        .code-section {

            display:
                grid;

            grid-template-columns:
                1fr 1fr;

            gap:
                40px;

            align-items:
                center;
        }


        .code-block {

            background:
                rgba(10,5,12,0.65);

            border:
                1px solid var(--border);

            border-radius:
                14px;

            overflow:
                hidden;

            box-shadow:
                0 15px 35px rgba(0,0,0,0.25);
        }


        .code-header {

            display:
                flex;

            align-items:
                center;

            gap:
                7px;

            padding:
                12px 15px;

            background:
                rgba(244,143,177,0.05);

            border-bottom:
                1px solid var(--border);
        }


        .dot {

            width:
                9px;

            height:
                9px;

            border-radius:
                50%;
        }


        .dot-r {
            background: #ff5f57;
        }


        .dot-y {
            background: #febc2e;
        }


        .dot-g {
            background: #28c840;
        }


        .code-filename {

            margin-left:
                8px;

            font-family:
                var(--mono);

            font-size:
                10px;

            color:
                var(--muted);
        }


        .code-body {

            padding:
                20px;

            font-family:
                var(--mono);

            font-size:
                11px;

            line-height:
                1.9;

            color:
                #aaa;

            overflow-x:
                auto;
        }


        .code-body .kw {
            color: #ff8fbd;
        }


        .code-body .fn {
            color: #8ecbff;
        }


        .code-body .str {
            color: #9be7b0;
        }


        .code-body .cl {
            color: #ffe39b;
        }


        .code-body .var {
            color: #d2b8ff;
        }


        /* =====================================================
           STRUCTURE
        ===================================================== */

        .structure-grid {

            display:
                grid;

            grid-template-columns:
                repeat(auto-fill,minmax(180px,1fr));

            gap:
                10px;

            margin-top:
                30px;
        }


        .dir-item {

            display:
                flex;

            align-items:
                center;

            gap:
                8px;

            padding:
                14px;

            border:
                1px solid var(--border);

            border-radius:
                10px;

            background:
                rgba(255,255,255,0.035);

            color:
                var(--muted);

            font-family:
                var(--mono);

            font-size:
                10px;

            transition:
                0.3s;
        }


        .dir-item:hover {

            color:
                white;

            border-color:
                var(--border-hot);

            background:
                rgba(244,143,177,0.07);

            transform:
                translateY(-2px);
        }


        .dir-item .dir-icon {

            color:
                var(--pink);

            font-size:
                15px;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {

            position:
                relative;

            z-index:
                2;

            padding:
                30px 25px;

            border-top:
                1px solid var(--border);

            background:
                rgba(10,5,12,0.25);
        }


        .footer-inner {

            max-width:
                1100px;

            margin:
                auto;

            display:
                flex;

            align-items:
                center;

            justify-content:
                space-between;

            flex-wrap:
                wrap;

            gap:
                15px;
        }


        .footer-meta {

            display:
                flex;

            gap:
                20px;

            flex-wrap:
                wrap;

            font-family:
                var(--mono);

            font-size:
                9px;

            color:
                var(--dim);
        }


        .footer-meta span span {

            color:
                var(--muted);
        }


        .footer-links {

            display:
                flex;

            gap:
                15px;
        }


        .footer-links a {

            color:
                var(--dim);

            text-decoration:
                none;

            font-family:
                var(--mono);

            font-size:
                10px;

            transition:
                0.3s;
        }


        .footer-links a:hover {

            color:
                var(--pink);
        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 768px) {

            nav {

                padding:
                    15px 18px;
            }


            .nav-links {

                gap:
                    3px;
            }


            .nav-links a:not(.btn-nav):not(.profile-btn) {

                display:
                    none;
            }


            .nav-links a {

                font-size:
                    9px;

                padding:
                    8px;
            }


            .hero {

                padding:
                    75px 20px 60px;
            }


            .hero h1 {

                letter-spacing:
                    -2px;
            }


            .features-layout {

                grid-template-columns:
                    1fr;
            }


            .code-section {

                grid-template-columns:
                    1fr;

                gap:
                    30px;
            }


            .stats {

                gap:
                    30px;
            }


            section {

                padding:
                    60px 20px;
            }


            .structure-grid {

                grid-template-columns:
                    1fr 1fr;
            }


            .footer-inner {

                flex-direction:
                    column;

                text-align:
                    center;
            }


            .footer-meta,
            .footer-links {

                justify-content:
                    center;
            }
        }


        @media (max-width: 450px) {

            .structure-grid {

                grid-template-columns:
                    1fr;
            }


            .hero h1 {

                font-size:
                    2.6rem;
            }
        }

    </style>

</head>

<body>


<!-- GLOW EFFECTS -->

<div class="orb orb-1"></div>
<div class="orb orb-2"></div>


<!-- =====================================================
     NAV
===================================================== -->

<nav>

    <a class="nav-logo" href="#">

        <div class="flame">
            🌸
        </div>

        LavaLust

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


        <a
            class="profile-btn"
            href="/LavaLust/index.php/student"
        >
            Student Profile
        </a>


        <a
            href="https://lavalust.netlify.app/docs/"
            target="_blank"
            class="btn-nav"
        >
            Get Started →
        </a>

    </div>

</nav>


<!-- =====================================================
     HERO
===================================================== -->

<div class="hero wrap">

    <div class="badge">

        v<?php echo config_item('VERSION') ?? '4.x'; ?> — Now Available

    </div>


    <h1>

        <span class="word-lava">
            Allyssa Mae
        </span>

        <span class="word-lust">
            Macalalad
        </span>

        <br>

        Framework

    </h1>


    <p class="hero-sub">

        A lightweight, expressive PHP MVC framework built for developers who want structure without the bloat.

    </p>


    <div class="hero-actions">

        <a
            href="https://lavalust.netlify.app/docs/"
            target="_blank"
            class="btn btn-primary"
        >
            Read the Docs
        </a>


        <a
            href="https://github.com/ronmarasigan/LavaLust"
            target="_blank"
            class="btn btn-ghost"
        >
            View on GitHub
        </a>

    </div>

</div>


<!-- =====================================================
     STATS
===================================================== -->

<div class="stats">

    <div class="stat">

        <div class="stat-value">
            MVC<span>+</span>
        </div>

        <div class="stat-label">
            Architecture
        </div>

    </div>


    <div class="stat">

        <div class="stat-value">
            <span>4</span> DB
        </div>

        <div class="stat-label">
            Drivers
        </div>

    </div>


    <div class="stat">

        <div class="stat-value">
            HMVC<span>✓</span>
        </div>

        <div class="stat-label">
            Module Support
        </div>

    </div>


    <div class="stat">

        <div class="stat-value">
            REST<span>*</span>
        </div>

        <div class="stat-label">
            API Ready
        </div>

    </div>

</div>


<div class="divider"></div>


<!-- =====================================================
     FEATURES
===================================================== -->

<section>

    <div class="wrap">

        <div class="section-label">
            // features
        </div>


        <h2 class="section-title">

            Everything you need.
            <br>
            Nothing you don't.

        </h2>


        <p class="section-desc">

            LavaLust gives you a clean, consistent structure so you can focus on building — not configuring.

        </p>


        <div class="features-layout">


            <div class="feature">

                <div class="feature-icon">
                    🧠
                </div>

                <h3>
                    MVC Architecture
                </h3>

                <p>
                    Clean separation between Models, Views, and Controllers keeps your codebase maintainable as it grows.
                </p>

            </div>


            <div class="feature">

                <div class="feature-icon">
                    ⚙️
                </div>

                <h3>
                    Flexible Routing
                </h3>

                <p>
                    Define routes with GET, POST, PUT, DELETE and more. Supports named routes, closures, and grouped prefixes.
                </p>

            </div>


            <div class="feature">

                <div class="feature-icon">
                    🗄️
                </div>

                <h3>
                    ORM-style Models
                </h3>

                <p>
                    Fluent query builder with relationships, soft deletes, timestamps, mass assignment protection, and eager loading.
                </p>

            </div>


            <div class="feature">

                <div class="feature-icon">
                    📦
                </div>

                <h3>
                    HMVC Modules
                </h3>

                <p>
                    Scale your app with self-contained modules. Each module owns its controllers, models, and views.
                </p>

            </div>


            <div class="feature">

                <div class="feature-icon">
                    🔗
                </div>

                <h3>
                    REST API Support
                </h3>

                <p>
                    Build JSON APIs out of the box using built-in conventions, response helpers, and content negotiation.
                </p>

            </div>


            <div class="feature">

                <div class="feature-icon">
                    🛡️
                </div>

                <h3>
                    Libraries & Helpers
                </h3>

                <p>
                    Sessions, form validation, file uploads, pagination, encryption — batteries included where it counts.
                </p>

            </div>


        </div>

    </div>

</section>


<div class="divider"></div>


<!-- =====================================================
     CODE EXAMPLE
===================================================== -->

<section>

    <div class="wrap">

        <div class="code-section">


            <div>

                <div class="section-label">
                    // quick start
                </div>


                <h2 class="section-title">
                    Up and running in minutes.
                </h2>


                <p class="section-desc">
                    Define a route, write a controller method, render a view. That's the whole loop.
                </p>

            </div>


            <div>


                <div
                    class="code-block"
                    style="margin-bottom:1rem;"
                >

                    <div class="code-header">

                        <div class="dot dot-r"></div>

                        <div class="dot dot-y"></div>

                        <div class="dot dot-g"></div>

                        <span class="code-filename">
                            app/config/routes.php
                        </span>

                    </div>


                    <div class="code-body">

                        <span class="var">$router</span>-><span class="fn">get</span>(<span class="str">'/'</span>, <span class="str">'Welcome::index'</span>);<br>

                        <span class="var">$router</span>-><span class="fn">get</span>(<span class="str">'/users'</span>, <span class="str">'Users::index'</span>);<br>

                        <span class="var">$router</span>-><span class="fn">post</span>(<span class="str">'/users/store'</span>, <span class="str">'Users::store'</span>);

                    </div>

                </div>



                <div class="code-block">

                    <div class="code-header">

                        <div class="dot dot-r"></div>

                        <div class="dot dot-y"></div>

                        <div class="dot dot-g"></div>

                        <span class="code-filename">
                            app/controllers/Welcome.php
                        </span>

                    </div>


                    <div class="code-body">

                        <span class="kw">class</span> <span class="cl">Welcome</span> <span class="kw">extends</span> <span class="cl">Controller</span> {<br>

                        &nbsp;&nbsp;<span class="kw">public function</span> <span class="fn">index</span>() {<br>

                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="var">$this</span>-><span class="fn">call</span>-><span class="fn">model</span>(<span class="str">'UserModel'</span>);<br>

                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="var">$data</span>[<span class="str">'users'</span>] = <span class="var">$this</span>-><span class="cl">UserModel</span>-><span class="fn">all</span>();<br>

                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="var">$this</span>-><span class="fn">call</span>-><span class="fn">view</span>(<span class="str">'welcome'</span>, <span class="var">$data</span>);<br>

                        &nbsp;&nbsp;}<br>

                        }

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<div class="divider"></div>


<!-- =====================================================
     STRUCTURE
===================================================== -->

<section>

    <div class="wrap">

        <div class="section-label">
            // project structure
        </div>


        <h2 class="section-title">
            Organized by default.
        </h2>


        <p class="section-desc">
            A predictable directory layout so every file has a logical home from day one.
        </p>


        <div class="structure-grid">

            <?php

            $dirs = [

                ['app/config',      '⚙'],

                ['app/controllers', '🎮'],

                ['app/helpers',     '🔧'],

                ['app/libraries',   '📚'],

                ['app/language',    '🌐'],

                ['app/middlewares', '🛡️'],

                ['app/migrations',  '🔄'],

                ['app/models',      '🗄'],

                ['app/modules',     '📦'],

                ['app/views',       '🖼'],

                ['public/',         '🌍'],

                ['runtime/',        '⚡'],

                ['console/',        '💻'],

                ['scheme/',         '📐'],

            ];


            foreach ($dirs as [$name, $icon]): ?>

                <div class="dir-item">

                    <span class="dir-icon">
                        <?php echo $icon; ?>
                    </span>

                    <?php echo $name; ?>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <div class="footer-inner">


        <div class="footer-meta">

            <span>

                rendered in

                <span>
                    <?php echo lava_instance()->performance->elapsed_time('lavalust'); ?>s
                </span>

            </span>


            <span>

                memory

                <span>
                    <?php echo lava_instance()->performance->memory_usage(); ?>
                </span>

            </span>


            <?php if(config_item('environment') === 'development'): ?>

                <span>

                    version

                    <span>
                        <?php echo config_item('version'); ?>
                    </span>

                </span>


                <span style="color: #f48fb1;">
                    ● development
                </span>

            <?php endif; ?>

        </div>


        <div class="footer-links">

            <a
                href="https://github.com/ronmarasigan/LavaLust"
                target="_blank"
            >
                GitHub
            </a>


            <a
                href="https://lavalust.netlify.app/docs/"
                target="_blank"
            >
                Docs
            </a>


            <a
                href="https://opensource.org/licenses/MIT"
                target="_blank"
            >
                MIT License
            </a>

        </div>

    </div>

</footer>


</body>
</html>