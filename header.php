<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Personal-Site</title>
    <style>
        /* CSS styling */
        body {
            font-family: 'Times New Roman';
            margin: 0;
            padding: 0;
        }

        header {
        font-family: 'Times New Roman';
        font-size: x-large;
        background: linear-gradient(to right, #333,#A05C7B,#E0ACD5, #6988a7);
        color: #fff;
        padding: 20px;
        text-align: center;
        background-size: 200% auto;
        animation: gradientAnimation 12s linear infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 10% 100%;
            }
            50% {
                background-position: 100% 10%;
            }
            100% {
                background-position: 10% 100%;
            }
        }

        h1 {
            margin: 0;
        }

        nav {
            font-size: large;
            font-family: "Times New Roman";
            background-color: #f2f2f2;
            padding: 10px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            padding: 5px;
        }

        /* Other styles specific to the About Me section */

    </style>
</head>
<body>
    <header>
        <h1>Ryan Bowser</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about_me">About</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/resume">Resume</a></li>
        </ul>
    </nav>

</body>
</html>
