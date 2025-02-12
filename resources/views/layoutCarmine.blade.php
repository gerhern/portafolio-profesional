<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de portafolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            /*background: linear-gradient(135deg, #1a1a1a, #4a4a4a);*/
            color: white;
            line-height: 1.6;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 1.5rem;
            background: rgba(26, 26, 26, 0.9);
            backdrop-filter: blur(10px);
            z-index: 1000;
            animation: fadeInDown 1s ease-out;
        }

        .nav-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            background: linear-gradient(45deg, #007bff, #00ff88);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 2rem;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #007bff;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 1200px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            z-index: 1;
        }

        .hero-text {
            text-align: left;
        }


        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease-out;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.8;
            animation: fadeInUp 1s ease-out 0.2s backwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="nav-content">
        <div class="logo">Carmine</div>
        <div class="nav-links">
            <a href="#inicio">Dashboard</a>
            <a href="#proyectos">Proyectos</a>
        </div>
    </div>
</nav>

@yield('content')

</body>
</html>
