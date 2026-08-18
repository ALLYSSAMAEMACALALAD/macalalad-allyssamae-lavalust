<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Student Home | <?= htmlspecialchars($student['name']); ?>
    </title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;

            background:
                radial-gradient(
                    circle at 20% 20%,
                    rgba(255, 105, 180, 0.25),
                    transparent 30%
                ),

                radial-gradient(
                    circle at 80% 80%,
                    rgba(231, 139, 179, 0.25),
                    transparent 30%
                ),

                linear-gradient(
                    135deg,
                    #160b18,
                    #2a1025,
                    #180c20
                );

            color: #fff;
            overflow: hidden;
            position: relative;
        }

        body::before {
            content: "";

            position: absolute;
            inset: 0;

            background-image:
                linear-gradient(
                    rgba(255, 105, 180, 0.08) 1px,
                    transparent 1px
                ),

                linear-gradient(
                    90deg,
                    rgba(255, 105, 180, 0.08) 1px,
                    transparent 1px
                );

            background-size: 40px 40px;
            pointer-events: none;
        }

        body::after {
            content: "";

            position: absolute;

            width: 350px;
            height: 350px;

            border-radius: 50%;

            background: rgba(231, 139, 179, 0.15);

            filter: blur(80px);

            top: -100px;
            right: -100px;

            pointer-events: none;
        }

        .card {
            position: relative;
            z-index: 2;

            width: 100%;
            max-width: 520px;

            padding: 45px;

            background: rgba(255, 255, 255, 0.08);

            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            border: 1px solid rgba(255, 182, 213, 0.25);

            border-radius: 24px;

            box-shadow:
                0 25px 60px rgba(0,0,0,0.45),
                0 0 40px rgba(231, 139, 179, 0.08);

            text-align: center;
        }

        .top-line {
            width: 70px;
            height: 4px;

            background: #f48fb1;

            border-radius: 10px;

            margin: 0 auto 25px;

            box-shadow:
                0 0 10px #f48fb1,
                0 0 20px rgba(244, 143, 177, 0.7);
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 7px 16px;

            border-radius: 30px;

            background: rgba(231, 139, 179, 0.15);

            border: 1px solid rgba(244, 143, 177, 0.4);

            color: #ffc4db;

            font-size: 11px;
            font-weight: 700;

            letter-spacing: 1.5px;
            text-transform: uppercase;

            margin-bottom: 20px;
        }

        .status-dot {
            width: 8px;
            height: 8px;

            background: #ff8fbd;

            border-radius: 50%;

            box-shadow:
                0 0 8px #ff8fbd,
                0 0 15px #ff8fbd;

            animation: pulse 1.8s infinite;
        }

        @keyframes pulse {

            0%, 100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.5;
                transform: scale(0.75);
            }

        }

        h1 {
            color: #fff;

            font-size: 32px;

            line-height: 1.2;

            margin-bottom: 12px;

            text-shadow:
                0 0 15px rgba(244, 143, 177, 0.4);
        }

        h1 span {
            color: #f48fb1;
        }

        p.sub {
            color: #d8c5cf;

            font-size: 14px;

            line-height: 1.7;

            margin-bottom: 30px;
        }

        nav {
            display: flex;

            justify-content: center;

            gap: 12px;

            flex-wrap: wrap;

            margin-bottom: 25px;
        }

        nav a {
            position: relative;

            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 8px;

            padding: 12px 22px;

            border-radius: 10px;

            text-decoration: none;

            font-size: 13px;

            font-weight: 700;

            transition: 0.3s ease;

            overflow: hidden;
        }

        .profile-btn {
            color: #fff;

            background: linear-gradient(
                135deg,
                #d86f9e,
                #f48fb1
            );

            border: 1px solid #f8abc7;

            box-shadow:
                0 5px 15px rgba(216,111,158,0.25);
        }

        .profile-btn:hover {
            transform: translateY(-3px);

            box-shadow:
                0 10px 30px rgba(244,143,177,0.35);
        }

        .lavalust-btn {
            color: #f8bfd5;

            background: rgba(255,255,255,0.05);

            border: 1px solid rgba(244,143,177,0.25);
        }

        .lavalust-btn:hover {
            background: rgba(244,143,177,0.12);

            border-color: #f48fb1;

            transform: translateY(-3px);

            box-shadow:
                0 8px 20px rgba(244,143,177,0.15);
        }

        .note {
            padding: 15px;

            border-radius: 12px;

            background: rgba(255,255,255,0.04);

            border-left: 3px solid #e78bb3;

            color: #cdbbc4;

            font-size: 12px;

            line-height: 1.7;

            text-align: left;
        }

        .note strong {
            color: #f3a3c2;
        }

        .grant-link {
            color: #ff9fc4;

            font-weight: bold;

            text-decoration: none;

            transition: 0.3s;
        }

        .grant-link:hover {
            color: #fff;

            text-shadow:
                0 0 10px #f48fb1;

            text-decoration: underline;
        }

        .footer {
            margin-top: 25px;

            padding-top: 18px;

            border-top: 1px solid rgba(255,255,255,0.08);

            color: #806b76;

            font-size: 10px;

            letter-spacing: 1px;
        }

        @media (max-width: 500px) {

            body {
                padding: 15px;
            }

            .card {
                padding: 30px 22px;
            }

            h1 {
                font-size: 27px;
            }

            nav {
                flex-direction: column;
            }

            nav a {
                width: 100%;
            }

            .note {
                font-size: 11px;
            }

        }

    </style>

</head>

<body>

    <div class="card">

        <div class="top-line"></div>

        <span class="badge">

            <span class="status-dot"></span>

            Student Information System

        </span>

        <h1>

            Welcome,
            <span>
                <?= htmlspecialchars($student['name']); ?>
            </span>!

        </h1>

        <p class="sub">

            Your personal student information dashboard.
            Access your profile and manage your student information
            through the LavaLust system.

        </p>


        <!-- NAVIGATION -->

        <nav>

            <!-- PROFILE -->

            <a
                href="<?= site_url('student/profile'); ?>"
                class="profile-btn"
            >

                👤 Student Profile

            </a>

        </nav>


        <!-- ACCESS INFORMATION -->

        <p class="note">

            🔐 The Student Profile page is protected by
            <strong>StudentMiddleware</strong>.

            <br><br>

            If you haven't unlocked access yet, click

            <a
                class="grant-link"
                href="<?= site_url('student/access'); ?>"
            >

                here to grant access

            </a>

            before opening your profile.

        </p>


        <div class="footer">

            LAVALUST • STUDENT PORTAL

        </div>

    </div>

</body>

</html>