<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: #FEDF9E;
            color: #000000;
            font-family: 'Avenir Next', system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans",
                "Droid Sans", "Helvetica Neue", sans-serif;
            font-size: 18px;
            font-weight: 400;
            line-height: 1.8;
        }

        img {
            height: auto;
            max-width: 100%;
        }

        .button {
            background-color: #000000;
            border: 2px solid #000000;
            color: #ffffff;
            display: inline-block;
            font-size: 18px;
            font-weight: 600;
            margin: 0;
            padding: 12px 32px 14px 32px;
            text-decoration: none;
            text-transform: uppercase;
        }

        .button:hover {
            background-color: #ffffff;
            color: #000000;
        }

        .site-header {
            background-color: #FEDF9E;
            margin: 5%;
        }

        nav a {
            color: black;
            display: inline-block;
            margin: 0 4px;
            text-decoration: none;
        }

        nav a:first-child {
            margin: 0 4px 0 0;
        }

        main {
            margin: 0 5%;
        }

        .home-page {
            display: grid;
            font-size: 24px;
            grid-template-columns: 50% 50%;
            line-height: 1.4;
            margin: 2em auto 0 auto;
            max-width: 45em;
            padding: 0;
        }

        .home-page h1 {
            font-size: 1em;
            margin: 4em 0 0 0;
        }

        .home-page .button {
            margin: 1em 0;
        }

        footer {
            background-color: #000000;
            color: rgba(255, 255, 255, 0.6);
            padding: 5%;
        }

        @media screen and (max-width: 45em) {
            .home-page {
                display: block;
            }
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <header class="site-header">
            <nav>
                <a href="/"><strong>JR</strong></a> |
                <a href="/">Blog</a>
                <a href="/">Books</a>
                <a href="/">Info</a>
                <a href="/">Newsletter</a>
                <a href="/">Podcasts</a>
                <a href="/">Speaking</a>
            </nav>
        </header>

        

        <footer>
            <small>All content &copy; Jason Rodriguez. All rights reserved.</small>
        </footer>
    </div>
</body>

</html>
