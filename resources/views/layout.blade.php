<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Computer Science Books</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        /* NAVBAR */
        nav {
            background: #2c3e50;
            padding: 30px;
        }

        nav a {
            margin: 0 10px;
            padding: 12px 20px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.3s;
        }

        nav a:hover {
            background: #2980b9;
        }

        /* CONTENIDO */
        .container {
            margin-top: 40px;
        }

        h1 {
            font-size: 40px;
            color: #2c3e50;
        }

        h2 {
            color: #34495e;
        }

        p {
            color: #555;
        }

        /* LISTAS */
        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 15px 0;
            font-size: 18px;
        }

        /* LINKS */
        a.link {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        a.link:hover {
            text-decoration: underline;
        }

        /* TARJETAS */
        .card {
            background: white;
            margin: 20px auto;
            padding: 20px;
            width: 60%;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }

        /* FOOTER */
        footer {
            margin-top: 40px;
            background: #3498db;
            color: white;
            padding: 15px;
            font-weight: bold;
        }

    </style>
</head>
<body>

    <nav>
        <a href="/">HOME</a>
        <a href="/books">BOOKS</a>
        <a href="/authors">AUTHORS</a>
        <a href="/publishers">PUBLISHERS</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        COPYRIGHT (C) 2026 - AARON CHAVES BALTODANO
    </footer>

</body>
</html>