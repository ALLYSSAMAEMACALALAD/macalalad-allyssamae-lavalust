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
        Student Profile | <?= htmlspecialchars($student['name']); ?>
    </title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* =========================
           BODY
        ========================== */

        body {

            font-family: 'Segoe UI', Arial, sans-serif;

            min-height: 100vh;

            padding: 40px 20px;

            background:
                radial-gradient(
                    circle at 15% 20%,
                    rgba(255, 105, 180, 0.22),
                    transparent 30%
                ),

                radial-gradient(
                    circle at 85% 80%,
                    rgba(231, 139, 179, 0.18),
                    transparent 30%
                ),

                linear-gradient(
                    135deg,
                    #160b18,
                    #2a1025,
                    #180c20
                );

            color: white;

            position: relative;

            overflow-x: hidden;

        }


        /* =========================
           DIGITAL GRID
        ========================== */

        body::before {

            content: "";

            position: fixed;

            inset: 0;

            background-image:

                linear-gradient(
                    rgba(255, 105, 180, 0.06) 1px,
                    transparent 1px
                ),

                linear-gradient(
                    90deg,
                    rgba(255, 105, 180, 0.06) 1px,
                    transparent 1px
                );

            background-size: 40px 40px;

            pointer-events: none;

            z-index: 0;

        }


        /* =========================
           GLOW
        ========================== */

        body::after {

            content: "";

            position: fixed;

            width: 400px;

            height: 400px;

            border-radius: 50%;

            background: rgba(244, 143, 177, 0.12);

            filter: blur(100px);

            right: -150px;

            top: -120px;

            pointer-events: none;

            z-index: 0;

        }


        /* =========================
           MAIN CARD
        ========================== */

        .card {

            position: relative;

            z-index: 2;

            width: 100%;

            max-width: 650px;

            margin: auto;

            padding: 40px;

            background: rgba(255,255,255,0.07);

            backdrop-filter: blur(18px);

            -webkit-backdrop-filter: blur(18px);

            border: 1px solid rgba(255,182,213,0.22);

            border-radius: 24px;

            box-shadow:

                0 25px 60px rgba(0,0,0,0.45),

                0 0 40px rgba(244,143,177,0.08);

        }


        /* =========================
           TOP GLOW LINE
        ========================== */

        .top-line {

            width: 70px;

            height: 4px;

            margin: 0 auto 25px;

            border-radius: 20px;

            background: #f48fb1;

            box-shadow:

                0 0 10px #f48fb1,

                0 0 25px rgba(244,143,177,0.8);

        }


        /* =========================
           PROFILE HEADER
        ========================== */

        .profile-header {

            text-align: center;

            margin-bottom: 25px;

        }


        .profile-icon {

            width: 90px;

            height: 90px;

            margin: 0 auto 15px;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 40px;

            background:

                linear-gradient(
                    135deg,
                    #d86f9e,
                    #f48fb1
                );

            border: 3px solid rgba(255,255,255,0.3);

            box-shadow:

                0 0 20px rgba(244,143,177,0.35),

                0 0 40px rgba(244,143,177,0.15);

        }


        .profile-name {

            color: #ffffff;

            font-size: 28px;

            font-weight: 700;

            margin-bottom: 8px;

            text-shadow:

                0 0 15px rgba(244,143,177,0.35);

        }


        .profile-title {

            color: #c9aebc;

            font-size: 13px;

        }


        /* =========================
           ACCESS BADGE
        ========================== */

        .lock-badge {

            display: flex;

            width: fit-content;

            margin: 0 auto 30px;

            align-items: center;

            gap: 7px;

            padding: 7px 15px;

            border-radius: 30px;

            background: rgba(231,139,179,0.12);

            border: 1px solid rgba(244,143,177,0.35);

            color: #ffb5d1;

            font-size: 11px;

            font-weight: 700;

            letter-spacing: 1px;

            text-transform: uppercase;

            box-shadow:

                0 0 15px rgba(244,143,177,0.08);

        }


        .online-dot {

            width: 8px;

            height: 8px;

            border-radius: 50%;

            background: #ff8fbd;

            box-shadow:

                0 0 8px #ff8fbd,

                0 0 15px #ff8fbd;

        }


        /* =========================
           SECTION TITLE
        ========================== */

        .section-title {

            display: flex;

            align-items: center;

            gap: 10px;

            color: #ffffff;

            font-size: 19px;

            margin-bottom: 18px;

            padding-bottom: 12px;

            border-bottom: 1px solid rgba(244,143,177,0.2);

        }


        .section-title span {

            color: #f48fb1;

        }


        /* =========================
           INFORMATION TABLE
        ========================== */

        .info-table {

            width: 100%;

            border-collapse: separate;

            border-spacing: 0 7px;

        }


        .info-table tr {

            background: rgba(255,255,255,0.035);

        }


        .info-table td {

            padding: 13px 14px;

            font-size: 13px;

            border-top: 1px solid rgba(255,255,255,0.03);

            border-bottom: 1px solid rgba(255,255,255,0.03);

        }


        .info-table td:first-child {

            width: 38%;

            color: #f1a8c4;

            font-weight: 700;

            border-left: 2px solid #d86f9e;

            border-radius: 8px 0 0 8px;

        }


        .info-table td:last-child {

            color: #e2d3da;

            border-radius: 0 8px 8px 0;

        }


        .info-table tr:hover {

            background: rgba(244,143,177,0.07);

        }


        /* =========================
           SOCIAL MEDIA
        ========================== */

        .social-section {

            margin-top: 30px;

            padding-top: 25px;

            border-top: 1px solid rgba(244,143,177,0.2);

        }


        .social-section h2 {

            color: #ffffff;

            font-size: 19px;

            text-align: center;

            margin-bottom: 18px;

        }


        .social-links {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 10px;

        }


        .social-link {

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 7px;

            padding: 12px 10px;

            border-radius: 10px;

            color: white;

            text-decoration: none;

            font-size: 12px;

            font-weight: 700;

            transition: 0.3s ease;

        }


        .social-link:hover {

            transform: translateY(-4px);

            box-shadow:

                0 8px 20px rgba(0,0,0,0.25);

        }


        /* FACEBOOK */

        .facebook {

            background: rgba(24,119,242,0.85);

            border: 1px solid rgba(24,119,242,0.5);

        }


        .facebook:hover {

            background: #1877F2;

        }


        /* INSTAGRAM */

        .instagram {

            background: rgba(228,64,95,0.85);

            border: 1px solid rgba(228,64,95,0.5);

        }


        .instagram:hover {

            background: #E4405F;

        }


        /* TIKTOK */

        .tiktok {

            background: rgba(20,20,20,0.9);

            border: 1px solid rgba(255,255,255,0.15);

        }


        .tiktok:hover {

            background: #111111;

        }


        .social-icon {

            font-size: 17px;

            font-weight: bold;

        }


        /* =========================
           NAVIGATION
        ========================== */

        nav {

            margin-top: 30px;

            display: flex;

            justify-content: center;

            gap: 12px;

            flex-wrap: wrap;

        }


        nav a {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            padding: 12px 28px;

            border-radius: 10px;

            color: #ffffff;

            text-decoration: none;

            font-size: 13px;

            font-weight: 700;

            transition: 0.3s ease;

        }


        /* BACK TO STUDENT HOME */

        .student-home {

            background:

                linear-gradient(
                    135deg,
                    #d86f9e,
                    #f48fb1
                );

            border: 1px solid rgba(255,255,255,0.2);

            box-shadow:

                0 5px 15px rgba(216,111,158,0.2);

        }


        .student-home:hover {

            transform: translateY(-3px);

            box-shadow:

                0 10px 30px rgba(244,143,177,0.35);

        }


        /* LAVALUST LANDING PAGE */

        .lavalust-home {

            background: rgba(255,255,255,0.05);

            border: 1px solid rgba(244,143,177,0.25);

            color: #f8bfd5;

        }


        .lavalust-home:hover {

            background: rgba(244,143,177,0.12);

            border-color: #f48fb1;

            transform: translateY(-3px);

            box-shadow:

                0 8px 20px rgba(244,143,177,0.15);

        }


        /* =========================
           FOOTER
        ========================== */

        .footer {

            text-align: center;

            margin-top: 25px;

            padding-top: 18px;

            border-top: 1px solid rgba(255,255,255,0.07);

            color: #806b76;

            font-size: 10px;

            letter-spacing: 1px;

        }


        /* =========================
           MOBILE
        ========================== */

        @media (max-width: 600px) {

            body {

                padding: 20px 12px;

            }

            .card {

                padding: 28px 20px;

            }

            .profile-name {

                font-size: 24px;

            }

            .social-links {

                grid-template-columns: 1fr;

            }

            .social-link {

                width: 100%;

            }

            .info-table td {

                font-size: 12px;

                padding: 11px 9px;

            }

            nav {

                flex-direction: column;

            }

            nav a {

                width: 100%;

            }

        }

    </style>

</head>


<body>


    <div class="card">


        <!-- TOP GLOW -->

        <div class="top-line"></div>


        <!-- PROFILE HEADER -->

        <div class="profile-header">

            <div class="profile-icon">
                👤
            </div>

            <div class="profile-name">

                <?= htmlspecialchars($student['name']); ?>

            </div>

            <div class="profile-title">

                Student Profile • LavaLust System

            </div>

        </div>


        <!-- ACCESS STATUS -->

        <div class="lock-badge">

            <span class="online-dot"></span>

            Access Granted by StudentMiddleware

        </div>


        <!-- INFORMATION -->

        <h2 class="section-title">

            <span>▣</span>

            Student Information

        </h2>


        <table class="info-table">


            <tr>

                <td>Student ID</td>

                <td>
                    <?= htmlspecialchars($student['student_id']); ?>
                </td>

            </tr>


            <tr>

                <td>Name</td>

                <td>
                    <?= htmlspecialchars($student['name']); ?>
                </td>

            </tr>


            <tr>

                <td>Course</td>

                <td>
                    <?= htmlspecialchars($student['course']); ?>
                </td>

            </tr>


            <tr>

                <td>Year Level</td>

                <td>
                    <?= htmlspecialchars($student['year']); ?>
                </td>

            </tr>


            <tr>

                <td>Section</td>

                <td>
                    <?= htmlspecialchars($student['section']); ?>
                </td>

            </tr>


            <tr>

                <td>Email</td>

                <td>
                    <?= htmlspecialchars($student['email']); ?>
                </td>

            </tr>


            <tr>

                <td>Address</td>

                <td>
                    <?= htmlspecialchars($student['address']); ?>
                </td>

            </tr>


            <tr>

                <td>Contact No.</td>

                <td>
                    <?= htmlspecialchars($student['contact_no']); ?>
                </td>

            </tr>


            <tr>

                <td>Hobbies</td>

                <td>
                    <?= htmlspecialchars($student['hobbies']); ?>
                </td>

            </tr>


            <tr>

                <td>About</td>

                <td>
                    <?= htmlspecialchars($student['description']); ?>
                </td>

            </tr>


        </table>


        <!-- SOCIAL MEDIA -->

        <div class="social-section">

            <h2>
                Connect With Me
            </h2>

            <div class="social-links">


                <!-- FACEBOOK -->

                <a
                    href="https://www.facebook.com/allyssamae.macalalad"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="social-link facebook"
                >

                    <span class="social-icon">
                        f
                    </span>

                    Facebook

                </a>


                <!-- INSTAGRAM -->

                <a
                    href="https://www.instagram.com/jst_lyssa0?igsh=ZzNxem8zOHo4NjM2"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="social-link instagram"
                >

                    <span class="social-icon">
                        ◎
                    </span>

                    Instagram

                </a>


                <!-- TIKTOK -->

                <a
                    href="https://www.tiktok.com/@alaysamey0?_r=1&_t=ZS-98yuFd7GqpQ"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="social-link tiktok"
                >

                    <span class="social-icon">
                        ♪
                    </span>

                    TikTok

                </a>


            </div>

        </div>


        <!-- NAVIGATION -->

        <nav>


            <!-- BACK TO STUDENT HOME -->

            <a
                href="<?= site_url('student'); ?>"
                class="student-home"
            >

                🏠 Back to Home

            </a>



        </nav>


        <!-- FOOTER -->

        <div class="footer">

            LAVALUST • STUDENT INFORMATION SYSTEM

        </div>


    </div>


</body>

</html>