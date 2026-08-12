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
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600;700&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>

        /* =========================================================
           RESET
        ========================================================= */

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        /* =========================================================
           FEMININE PASTEL PINK COLOR PALETTE
        ========================================================= */

        :root {

            --pink: #d98cb3;
            --pink-dark: #c4779f;
            --pink-light: #f5c6da;
            --pink-soft: #fde8f1;
            --pink-pale: #fff5f9;

            --pink-glow: rgba(217, 140, 179, 0.18);
            --pink-glow-strong: rgba(217, 140, 179, 0.35);

            --bg: #fff8fb;
            --bg2: #fff1f6;
            --bg3: #ffe5ef;

            --border: rgba(217, 140, 179, 0.20);
            --border-hot: rgba(217, 140, 179, 0.45);

            --text: #4a3540;
            --text-muted: #8f7180;
            --text-dim: #b99aaa;

            --white: #ffffff;

            --mono: 'Fira Code', monospace;
            --sans: 'Quicksand', sans-serif;
        }


        /* =========================================================
           HTML
        ========================================================= */

        html {
            scroll-behavior: smooth;
        }


        /* =========================================================
           BODY
        ========================================================= */

        body {

            font-family: var(--sans);

            background:
                radial-gradient(
                    circle at top left,
                    rgba(245, 198, 218, 0.35),
                    transparent 35%
                ),
                radial-gradient(
                    circle at bottom right,
                    rgba(217, 140, 179, 0.18),
                    transparent 35%
                ),
                var(--bg);

            color: var(--text);

            min-height: 100vh;

            overflow-x: hidden;
        }


        /* =========================================================
           SOFT BACKGROUND PATTERN
        ========================================================= */

        body::before {

            content: '';

            position: fixed;

            inset: 0;

            background-image:
                radial-gradient(
                    rgba(217, 140, 179, 0.12) 1px,
                    transparent 1px
                );

            background-size: 28px 28px;

            pointer-events: none;

            z-index: 0;

            opacity: 0.6;
        }


        /* =========================================================
           SOFT GRID
        ========================================================= */

        body::after {

            content: '';

            position: fixed;

            inset: 0;

            background-image:
                linear-gradient(
                    rgba(217, 140, 179, 0.04) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(217, 140, 179, 0.04) 1px,
                    transparent 1px
                );

            background-size: 60px 60px;

            pointer-events: none;

            z-index: 0;

            mask-image:
                radial-gradient(
                    ellipse 80% 60% at 50% 0%,
                    black 30%,
                    transparent 100%
                );
        }


        /* =========================================================
           GLOW ORBS
        ========================================================= */

        .orb {

            position: fixed;

            border-radius: 50%;

            filter: blur(100px);

            pointer-events: none;

            z-index: 0;
        }


        .orb-1 {

            width: 500px;

            height: 500px;

            top: -180px;

            left: -100px;

            background:
                radial-gradient(
                    circle,
                    rgba(217, 140, 179, 0.18) 0%,
                    transparent 70%
                );
        }


        .orb-2 {

            width: 400px;

            height: 400px;

            top: 250px;

            right: -100px;

            background:
                radial-gradient(
                    circle,
                    rgba(245, 198, 218, 0.35) 0%,
                    transparent 70%
                );
        }


        /* =========================================================
           MAIN WRAPPER
        ========================================================= */

        .wrap {

            position: relative;

            z-index: 1;

            max-width: 1100px;

            margin: 0 auto;

            padding: 0 2rem;
        }


        /* =========================================================
           NAVIGATION
        ========================================================= */

        nav {

            position: relative;

            z-index: 10;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 1.3rem 2rem;

            border-bottom:
                1px solid var(--border);

            backdrop-filter: blur(14px);

            background:
                rgba(255, 248, 251, 0.85);

            box-shadow:
                0 5px 20px rgba(217, 140, 179, 0.06);
        }


        /* Logo */

        .nav-logo {

            display: flex;

            align-items: center;

            gap: 0.7rem;

            font-size: 1.15rem;

            font-weight: 700;

            color: var(--text);

            text-decoration: none;
        }


        /* Logo icon */

        .nav-logo .flame {

            width: 34px;

            height: 34px;

            background:
                linear-gradient(
                    135deg,
                    var(--pink),
                    var(--pink-dark)
                );

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 16px;

            box-shadow:
                0 5px 15px var(--pink-glow-strong);
        }


        /* Navigation links */

        .nav-links {

            display: flex;

            align-items: center;

            gap: 0.35rem;
        }


        .nav-links a {

            color: var(--text-muted);

            text-decoration: none;

            font-size: 0.88rem;

            font-weight: 600;

            padding: 0.55rem 0.9rem;

            border-radius: 20px;

            transition:
                color 0.25s,
                background 0.25s,
                transform 0.25s;
        }


        .nav-links a:hover {

            color: var(--pink-dark);

            background: var(--pink-soft);

            transform: translateY(-1px);
        }


        /* Get Started */

        .nav-links .btn-nav {

            color: white;

            background:
                linear-gradient(
                    135deg,
                    var(--pink),
                    var(--pink-dark)
                );

            padding:
                0.55rem 1.1rem;

            border-radius: 20px;

            margin-left: 0.5rem;

            box-shadow:
                0 5px 15px var(--pink-glow);

            transition:
                transform 0.25s,
                box-shadow 0.25s;
        }


        .nav-links .btn-nav:hover {

            color: white;

            background:
                linear-gradient(
                    135deg,
                    var(--pink-dark),
                    var(--pink)
                );

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px var(--pink-glow-strong);
        }


        /* =========================================================
           HERO
        ========================================================= */

        .hero {

            padding:
                7rem 2rem 5rem;

            text-align: center;

            position: relative;

            z-index: 1;
        }


        /* Badge */

        .badge {

            display: inline-flex;

            align-items: center;

            gap: 0.5rem;

            background:
                var(--pink-soft);

            border:
                1px solid var(--border-hot);

            color:
                var(--pink-dark);

            font-size: 0.75rem;

            font-weight: 700;

            letter-spacing: 0.05em;

            padding:
                0.45rem 1rem;

            border-radius: 999px;

            margin-bottom: 2rem;
        }


        .badge::before {

            content: '♡';

            color: var(--pink);

            font-size: 14px;

            animation:
                pulse 2s ease-in-out infinite;
        }


        /* Animation */

        @keyframes pulse {

            0%,
            100% {

                transform: scale(1);

                opacity: 1;
            }

            50% {

                transform: scale(1.2);

                opacity: 0.6;
            }
        }


        /* Hero heading */

        .hero h1 {

            font-size:
                clamp(3rem, 8vw, 6rem);

            font-weight: 700;

            line-height: 1;

            letter-spacing: -0.05em;

            margin-bottom: 1.5rem;
        }


        .hero h1 .word-lava {

            color: var(--pink-dark);
        }


        .hero h1 .word-lust {

            color: transparent;

            -webkit-text-stroke:
                1.5px var(--pink);
        }


        /* Hero description */

        .hero-sub {

            font-size: 1.1rem;

            color: var(--text-muted);

            max-width: 560px;

            margin:
                0 auto 2.5rem;

            line-height: 1.8;

            font-weight: 500;
        }


        /* Hero buttons */

        .hero-actions {

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 0.8rem;

            flex-wrap: wrap;
        }


        /* Buttons */

        .btn {

            display: inline-flex;

            align-items: center;

            gap: 0.5rem;

            padding:
                0.8rem 1.6rem;

            border-radius: 25px;

            font-family: var(--sans);

            font-size: 0.9rem;

            font-weight: 700;

            text-decoration: none;

            transition:
                all 0.25s;

            cursor: pointer;

            border: none;
        }


        /* Primary button */

        .btn-primary {

            background:
                linear-gradient(
                    135deg,
                    var(--pink),
                    var(--pink-dark)
                );

            color: white;

            box-shadow:
                0 7px 20px var(--pink-glow);
        }


        .btn-primary:hover {

            transform:
                translateY(-3px);

            box-shadow:
                0 12px 30px var(--pink-glow-strong);
        }


        /* Ghost button */

        .btn-ghost {

            background:
                rgba(255,255,255,0.7);

            color:
                var(--pink-dark);

            border:
                1px solid var(--border-hot);
        }


        .btn-ghost:hover {

            color:
                var(--pink-dark);

            border-color:
                var(--pink);

            background:
                var(--pink-soft);

            transform:
                translateY(-2px);
        }


        /* =========================================================
           STATISTICS
        ========================================================= */

        .stats {

            display: flex;

            justify-content: center;

            gap: 4rem;

            flex-wrap: wrap;

            padding: 3rem 2rem;

            border-top:
                1px solid var(--border);

            border-bottom:
                1px solid var(--border);

            position: relative;

            z-index: 1;

            background:
                rgba(255,255,255,0.35);
        }


        .stat {

            text-align: center;
        }


        .stat-value {

            font-size: 2rem;

            font-weight: 700;

            color: var(--text);

            letter-spacing: -0.03em;

            line-height: 1;
        }


        .stat-value span {

            color:
                var(--pink);
        }


        .stat-label {

            font-size: 0.75rem;

            color: var(--text-muted);

            font-weight: 600;

            margin-top: 0.5rem;

            text-transform: uppercase;

            letter-spacing: 0.06em;
        }


        /* =========================================================
           SECTIONS
        ========================================================= */

        section {

            padding: 5rem 2rem;

            position: relative;

            z-index: 1;
        }


        .section-label {

            font-family:
                var(--mono);

            font-size: 0.72rem;

            font-weight: 600;

            color:
                var(--pink-dark);

            text-transform: uppercase;

            letter-spacing: 0.12em;

            margin-bottom: 0.75rem;
        }


        .section-title {

            font-size:
                clamp(1.8rem, 4vw, 2.8rem);

            font-weight: 700;

            letter-spacing: -0.03em;

            line-height: 1.2;

            margin-bottom: 1rem;

            color:
                var(--text);
        }


        .section-desc {

            color:
                var(--text-muted);

            font-size: 1rem;

            line-height: 1.8;

            max-width: 500px;
        }


        /* =========================================================
           FEATURES
        ========================================================= */

        .features-layout {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 1rem;

            margin-top: 3rem;
        }


        .feature {

            background:
                rgba(255,255,255,0.75);

            padding: 2rem;

            border:
                1px solid var(--border);

            border-radius: 20px;

            transition:
                transform 0.25s,
                box-shadow 0.25s,
                border-color 0.25s;

            position: relative;

            overflow: hidden;
        }


        .feature:hover {

            transform:
                translateY(-5px);

            border-color:
                var(--border-hot);

            box-shadow:
                0 15px 35px
                rgba(217, 140, 179, 0.12);
        }


        .feature::before {

            content: '';

            position: absolute;

            top: 0;

            left: 0;

            right: 0;

            height: 4px;

            background:
                linear-gradient(
                    90deg,
                    var(--pink-light),
                    var(--pink),
                    var(--pink-light)
                );

            opacity: 0;

            transition:
                opacity 0.3s;
        }


        .feature:hover::before {

            opacity: 1;
        }


        /* Feature icon */

        .feature-icon {

            width: 45px;

            height: 45px;

            background:
                var(--pink-soft);

            border:
                1px solid var(--border-hot);

            border-radius: 14px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 20px;

            margin-bottom: 1rem;
        }


        .feature h3 {

            font-size: 1rem;

            font-weight: 700;

            margin-bottom: 0.6rem;

            color:
                var(--text);
        }


        .feature p {

            font-size: 0.875rem;

            color:
                var(--text-muted);

            line-height: 1.7;
        }


        /* =========================================================
           CODE SECTION
        ========================================================= */

        .code-section {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 3rem;

            align-items: center;
        }


        .code-block {

            background:
                #fffafa;

            border:
                1px solid var(--border);

            border-radius: 16px;

            overflow: hidden;

            box-shadow:
                0 10px 30px
                rgba(217,140,179,0.08);
        }


        .code-header {

            display: flex;

            align-items: center;

            gap: 0.5rem;

            padding:
                0.8rem 1rem;

            border-bottom:
                1px solid var(--border);

            background:
                var(--pink-soft);
        }


        .dot {

            width: 10px;

            height: 10px;

            border-radius: 50%;
        }


        .dot-r {
            background: #f39ab7;
        }


        .dot-y {
            background: #f5c979;
        }


        .dot-g {
            background: #9bd5ad;
        }


        .code-filename {

            font-family:
                var(--mono);

            font-size: 0.72rem;

            color:
                var(--text-muted);

            margin-left: 0.5rem;
        }


        .code-body {

            padding: 1.5rem;

            font-family:
                var(--mono);

            font-size: 0.82rem;

            line-height: 1.8;

            color:
                #765d69;

            overflow-x: auto;
        }


        .code-body .kw {

            color:
                #c4779f;
        }


        .code-body .fn {

            color:
                #9b7ab5;
        }


        .code-body .str {

            color:
                #6da884;
        }


        .code-body .cm {

            color:
                #b99aaa;
        }


        .code-body .cl {

            color:
                #b5895c;
        }


        .code-body .var {

            color:
                #8f72b0;
        }


        /* =========================================================
           PROJECT STRUCTURE
        ========================================================= */

        .structure-grid {

            display: grid;

            grid-template-columns:
                repeat(
                    auto-fill,
                    minmax(180px, 1fr)
                );

            gap: 0.7rem;

            margin-top: 2rem;
        }


        .dir-item {

            background:
                rgba(255,255,255,0.7);

            border:
                1px solid var(--border);

            border-radius: 12px;

            padding:
                0.9rem 1rem;

            font-family:
                var(--mono);

            font-size: 0.8rem;

            color:
                var(--text-muted);

            transition:
                all 0.25s;

            display: flex;

            align-items: center;

            gap: 0.5rem;
        }


        .dir-item:hover {

            border-color:
                var(--border-hot);

            color:
                var(--pink-dark);

            background:
                var(--pink-soft);

            transform:
                translateY(-2px);
        }


        .dir-item .dir-icon {

            color:
                var(--pink);

            font-size: 0.9rem;
        }


        /* =========================================================
           DIVIDER
        ========================================================= */

        .divider {

            height: 1px;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    var(--pink-light),
                    transparent
                );

            margin:
                0 2rem;

            position: relative;

            z-index: 1;
        }


        /* =========================================================
           FOOTER
        ========================================================= */

        footer {

            border-top:
                1px solid var(--border);

            padding:
                2.5rem 2rem;

            position: relative;

            z-index: 1;

            background:
                linear-gradient(
                    135deg,
                    #fff0f6,
                    #fff8fb
                );
        }


        .footer-inner {

            max-width: 1100px;

            margin: 0 auto;

            display: flex;

            align-items: center;

            justify-content: space-between;

            flex-wrap: wrap;

            gap: 1.5rem;
        }


        .footer-meta {

            font-family:
                var(--mono);

            font-size: 0.7rem;

            color:
                var(--text-dim);

            display: flex;

            gap: 1rem;

            flex-wrap: wrap;
        }


        .footer-meta span {

            color:
                var(--text-muted);
        }


        /* Main footer name */

        .footer-center {

            color:
                var(--pink-dark);

            font-size: 0.95rem;

            font-weight: 700;

            letter-spacing:
                0.05em;

            text-align: center;

            text-shadow:
                0 3px 12px
                rgba(217,140,179,0.25);
        }


        .footer-links {

            display: flex;

            gap: 1rem;
        }


        .footer-links a {

            color:
                var(--text-muted);

            text-decoration: none;

            font-size: 0.8rem;

            font-weight: 600;

            transition:
                color 0.2s;
        }


        .footer-links a:hover {

            color:
                var(--pink-dark);
        }


        /* =========================================================
           ANIMATIONS
        ========================================================= */

        @keyframes fadeUp {

            from {

                opacity: 0;

                transform:
                    translateY(24px);
            }

            to {

                opacity: 1;

                transform:
                    translateY(0);
            }
        }


        .hero > * {

            animation:
                fadeUp 0.6s ease both;
        }


        .hero .badge {

            animation-delay:
                0.05s;
        }


        .hero h1 {

            animation-delay:
                0.15s;
        }


        .hero .hero-sub {

            animation-delay:
                0.25s;
        }


        .hero .hero-actions {

            animation-delay:
                0.35s;
        }


        /* =========================================================
           RESPONSIVE DESIGN
        ========================================================= */

        @media (max-width: 768px) {

            .features-layout {

                grid-template-columns:
                    1fr;
            }


            .code-section {

                grid-template-columns:
                    1fr;
            }


            nav {

                padding:
                    1rem 1.5rem;
            }


            .nav-links a:not(.btn-nav) {

                display: none;
            }


            section {

                padding:
                    3rem 1.5rem;
            }


            .hero {

                padding:
                    5rem 1.5rem 4rem;
            }


            .stats {

                gap: 2rem;
            }


            .footer-inner {

                flex-direction:
                    column;

                text-align:
                    center;
            }


            .footer-meta {

                justify-content:
                    center;
            }


            .footer-links {

                justify-content:
                    center;
            }
        }


        @media (max-width: 480px) {

            .hero h1 {

                font-size:
                    3rem;
            }


            .hero-sub {

                font-size:
                    0.95rem;
            }


            .stats {

                display:
                    grid;

                grid-template-columns:
                    1fr 1fr;

                gap:
                    2rem 1rem;
            }


            .btn {

                width:
                    100%;

                justify-content:
                    center;
            }


            .hero-actions {

                width:
                    100%;
            }
        }

    </style>

</head>


<body>


<!-- =========================================================
     BACKGROUND
========================================================= -->

<div class="orb orb-1"></div>
<div class="orb orb-2"></div>


<!-- =========================================================
     NAVIGATION
========================================================= -->

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
            href="https://lavalust.netlify.app/docs/"
            target="_blank"
            class="btn-nav"
        >
            Get Started →
        </a>

    </div>

</nav>



<!-- =========================================================
     HERO
========================================================= -->

<div class="hero wrap">


    <div class="badge">

        v<?php echo config_item('VERSION') ?? '4.x'; ?>

        — Now Available

    </div>


    <h1>

        <span class="word-lava">
            Lava
        </span>

        <span class="word-lust">
            Lust
        </span>

        <br>

        Framework

    </h1>


    <p class="hero-sub">

        A lightweight, expressive PHP MVC framework
        built for developers who want structure
        without the bloat.

    </p>


    <div class="hero-actions">

        <a
            href="https://lavalust.netlify.app/docs/"
            target="_blank"
            class="btn btn-primary"
        >

            📖 Read the Docs

        </a>


        <a
            href="https://github.com/ronmarasigan/LavaLust"
            target="_blank"
            class="btn btn-ghost"
        >

            💻 View on GitHub

        </a>

    </div>

</div>



<!-- =========================================================
     STATS
========================================================= -->

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



<!-- =========================================================
     FEATURES
========================================================= -->

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

            LavaLust gives you a clean,
            consistent structure so you can focus
            on building — not configuring.

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
                    Clean separation between Models,
                    Views, and Controllers keeps your
                    codebase maintainable as it grows.
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
                    Define routes with GET, POST, PUT,
                    DELETE and more. Supports named routes,
                    closures, and grouped prefixes.
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
                    Fluent query builder with relationships,
                    soft deletes, timestamps, mass assignment
                    protection, and eager loading.
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
                    Scale your app with self-contained modules.
                    Each module owns its controllers, models,
                    and views.
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
                    Build JSON APIs out of the box using
                    built-in conventions, response helpers,
                    and content negotiation.
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
                    Sessions, form validation, file uploads,
                    pagination, encryption — batteries included
                    where it counts.
                </p>

            </div>


        </div>

    </div>

</section>



<div class="divider"></div>



<!-- =========================================================
     CODE EXAMPLE
========================================================= -->

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

                    Define a route, write a controller
                    method, render a view. That's the
                    whole loop.

                </p>

            </div>



            <div>


                <!-- ROUTES -->

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

                        <span class="var">$router</span>
                        ->
                        <span class="fn">get</span>
                        (
                        <span class="str">'/'</span>,
                        <span class="str">'Welcome::index'</span>
                        );

                        <br>


                        <span class="var">$router</span>
                        ->
                        <span class="fn">get</span>
                        (
                        <span class="str">'/users'</span>,
                        <span class="str">'Users::index'</span>
                        );

                        <br>


                        <span class="var">$router</span>
                        ->
                        <span class="fn">post</span>
                        (
                        <span class="str">'/users/store'</span>,
                        <span class="str">'Users::store'</span>
                        );

                    </div>

                </div>



                <!-- CONTROLLER -->

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

                        <span class="kw">
                            class
                        </span>

                        <span class="cl">
                            Welcome
                        </span>

                        <span class="kw">
                            extends
                        </span>

                        <span class="cl">
                            Controller
                        </span>

                        {

                        <br>


                        &nbsp;&nbsp;

                        <span class="kw">
                            public function
                        </span>

                        <span class="fn">
                            index
                        </span>

                        () {

                        <br>


                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <span class="var">
                            $this
                        </span>

                        ->

                        <span class="fn">
                            call
                        </span>

                        ->

                        <span class="fn">
                            model
                        </span>

                        (

                        <span class="str">
                            'UserModel'
                        </span>

                        );

                        <br>


                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <span class="var">
                            $data
                        </span>

                        [

                        <span class="str">
                            'users'
                        </span>

                        ]

                        =

                        <span class="var">
                            $this
                        </span>

                        ->

                        <span class="cl">
                            UserModel
                        </span>

                        ->

                        <span class="fn">
                            all
                        </span>

                        ();

                        <br>


                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <span class="var">
                            $this
                        </span>

                        ->

                        <span class="fn">
                            call
                        </span>

                        ->

                        <span class="fn">
                            view
                        </span>

                        (

                        <span class="str">
                            'welcome'
                        </span>

                        ,

                        <span class="var">
                            $data
                        </span>

                        );

                        <br>


                        &nbsp;&nbsp;}

                        <br>

                        }

                    </div>

                </div>


            </div>

        </div>

    </div>

</section>



<div class="divider"></div>



<!-- =========================================================
     PROJECT STRUCTURE
========================================================= -->

<section>

    <div class="wrap">


        <div class="section-label">

            // project structure

        </div>


        <h2 class="section-title">

            Organized by default.

        </h2>


        <p class="section-desc">

            A predictable directory layout so every
            file has a logical home from day one.

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


            foreach ($dirs as [$name, $icon]):

            ?>

                <div class="dir-item">

                    <span class="dir-icon">

                        <?php echo $icon; ?>

                    </span>

                    <?php echo $name; ?>

                </div>

            <?php

            endforeach;

            ?>


        </div>

    </div>

</section>



<!-- =========================================================
     FOOTER
========================================================= -->

<footer>


    <div class="footer-inner">


        <!-- Performance information -->

        <div class="footer-meta">


            <span>

                rendered in

                <span>

                    <?php

                    echo lava_instance()
                        ->performance
                        ->elapsed_time('lavalust');

                    ?>s

                </span>

            </span>


            <span>

                memory

                <span>

                    <?php

                    echo lava_instance()
                        ->performance
                        ->memory_usage();

                    ?>

                </span>

            </span>


            <?php

            if (
                config_item('environment')
                === 'development'
            ):

            ?>


                <span>

                    version

                    <span>

                        <?php

                        echo config_item('version');

                        ?>

                    </span>

                </span>


                <span style="color:#d98cb3;">

                    ● development

                </span>


            <?php endif; ?>


        </div>



        <!-- ALLYSSA MAE MACALALAD -->

        <div class="footer-center">

            💗 ALLYSSA MAE MACALALAD 💗

        </div>



        <!-- Footer links -->

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