<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allyssa's Student Home</title>

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
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            text-align: center;
        }

        h1 {
            color: #c45d91;
        }

        .welcome {
            font-size: 20px;
            margin-bottom: 25px;
        }

        .button {
            display: inline-block;
            background: #d98cb3;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            margin-top: 15px;
        }

        .button:hover {
            background: #c56f9c;
        }
    </style>
</head>

<body>

    <nav>
   
    <nav>
    <a href="/student">Home</a>
    <a href="/student/profile">Student Profile</a>
</nav>
    </nav>

    <div class="container">

        <h1>Welcome to My Student Page</h1>

        <p class="welcome">
            Hello, <?= $name; ?>!
        </p>

        <p>
            This is my LavaLust Student Information System.
        </p>

        <p>
            <strong>Course:</strong>
            <?= $course; ?>
        </p>

       <a class="button" href="/student/profile">
    View My Profile
</a>

    </div>

</body>
</html>