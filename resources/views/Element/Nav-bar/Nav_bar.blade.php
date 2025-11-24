<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Barre de Navigation</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
        }

        .navbar {
            background: linear-gradient(135deg, #3b1c5c 0%, #2575fc 100%);
            padding: 0 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
        }

        .logo {
            color: white;
            font-size: 1.8rem;
            font-weight: 700;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-right: 10px;
            font-size: 1.5rem;
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-item {
            margin-left: 30px;
        }
          /* here color de lecturE et icon*/
        .nav-link {
            color: rgba(255, 255, 255, 0.952);
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 500;
            padding: 10px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }

        .nav-link i {
            margin-right: 8px;
            font-size: 1.2rem;
        }
              /* mouse color*/
        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }

        .nav-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .hamburger {
            display: none;
            cursor: pointer;
            color: white;
            font-size: 1.8rem;
        }

        .content {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .section {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);

        }

        .section h2 {
            color: #6a11cb;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f0f0;
        }

        .section p {
            line-height: 1.6;
            color: #555;
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            .hamburger {
                display: block;
            }

            .nav-menu {
                position: fixed;
                left: -100%;
                top: 70px;
                flex-direction: column;
                background-color: #6a11cb;
                width: 100%;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 27px rgba(0, 0, 0, 0.05);
                padding: 20px 0;
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-item {
                margin: 15px 0;
            }

            .nav-link {
                justify-content: center;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">
                <i class="fas fa-laptop-code"></i>
                SEOMANIAK
            </a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{route('dashh')}}" class="nav-link {{ request()->routeIs('dashh') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt"></i>
                        Tableau de Bord
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contact-list')}}" class="nav-link {{ request()->routeIs('contact-list') ? 'active' : '' }}">
                        <i class="fas fa-envelope"></i>
                        Contact
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('profile')}}"  class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}">
                        <i class="fas fa-user-circle"></i>
                        Profil
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>
