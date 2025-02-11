<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Profesional</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background: linear-gradient(135deg, #1a1a1a, #4a4a4a);
            color: white;
            line-height: 1.6;
        }

        .background-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://picsum.photos/id/1/1920/1080') no-repeat center center;
            background-size: cover;
            opacity: 0.2;
            z-index: 1;
        }

        .background-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(26,26,26,0.97), rgba(74,74,74,0.95));
            z-index: 0;
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

        .hero-image {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 0 auto;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid rgba(255,255,255,0.1);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            animation: fadeInUp 1s ease-out 0.5s backwards;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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

        .cta-button {
            padding: 1rem 2rem;
            border: none;
            border-radius: 25px;
            background: #007bff;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            animation: fadeInUp 1s ease-out 0.4s backwards;
        }

        .cta-button:hover {
            background: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,123,255,0.4);
        }

        .projects {
            padding: 6rem 2rem;
            background: rgba(0,0,0,0.3);
            position: relative;
            z-index: 1;
        }

        .projects-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 2rem 0;
        }

        .project-card {
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s;
            animation: fadeInUp 1s ease-out;
        }

        .project-card:hover {
            transform: translateY(-10px);
        }

        .project-image {
            width: 100%;
            height: 200px;
            background: #2a2a2a;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .project-info {
            padding: 1.5rem;
        }

        .project-info h3 {
            margin-bottom: 0.5rem;
        }

        .skills {
            padding: 6rem 2rem;
            position: relative;
            z-index: 1;
        }

        .skills-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .skill-item {
            text-align: center;
            padding: 1.5rem;
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            transition: transform 0.3s;
        }

        .skill-item:hover {
            transform: translateY(-5px);
        }

        .contact {
            padding: 6rem 2rem;
            background: rgba(0,0,0,0.3);
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .contact-content {
            max-width: 600px;
            margin: 0 auto;
        }

        .social-links {
            margin-top: 2rem;
        }

        .social-links a {
            color: white;
            text-decoration: none;
            margin: 0 1rem;
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #007bff;
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

        @media (max-width: 968px) {
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 2rem;
            }

            .hero-text {
                text-align: center;
                order: 2;
            }

            .hero-image {
                order: 1;
                width: 250px;
                height: 250px;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .skills-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="nav-content">
        <div class="logo">Portafolio</div>
        <div class="nav-links">
            <a href="#inicio">Inicio</a>
            <a href="#proyectos">Proyectos</a>
            <a href="#habilidades">Habilidades</a>
            <a href="#contacto">Contacto</a>
        </div>
    </div>
</nav>

@yield('content')

</body>
</html>
