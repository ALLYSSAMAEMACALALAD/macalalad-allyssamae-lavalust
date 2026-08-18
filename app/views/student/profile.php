<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Student Profile</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff5fa;
            color: #333;
        }

        nav {
            background: #d98cb3;
            padding: 18px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            width: 90%;
            max-width: 700px;
            margin: 40px auto;
        }

        .card {
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #c45d91;
            margin-bottom: 30px;
        }

        .info {
            padding: 12px;
            border-bottom: 1px solid #f0d5e2;
        }

        .label {
            font-weight: bold;
            color: #c45d91;
        }

        .back {
            display: block;
            width: fit-content;
            margin: 25px auto 0;
            padding: 12px 25px;
            background: #d98cb3;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .back:hover {
            background: #c56f9c;
        }
    </style>
</head>

<body>

 <nav>
    <a href="/student">Home</a>
    <a href="/student/profile">Student Profile</a>
</nav>

    <div class="container">

        <div class="card">

            <h1>Student Information</h1>

            <div class="info">
                <span class="label">Student ID:</span>
                <?= $student_id; ?>
            </div>

            <div class="info">
                <span class="label">Name:</span>
                <?= $name; ?>
            </div>

            <div class="info">
                <span class="label">Course:</span>
                <?= $course; ?>
            </div>

            <div class="info">
                <span class="label">Year Level:</span>
                <?= $year; ?>
            </div>

            <div class="info">
                <span class="label">Section:</span>
                <?= $section; ?>
            </div>

            <div class="info">
                <span class="label">Email:</span>
                <?= $email; ?>
            </div>

            <div class="info">
                <span class="label">Hobby:</span>
                <?= $hobby; ?>
            </div>

             <a class="back" href="/student">
    Back to Home
</a>

        </div>

    </div>

</body>
</html>