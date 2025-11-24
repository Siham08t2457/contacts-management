<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Your CSS files here -->
    <style>
        /* Reset and base styles */
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

        /* Page wrapper layout */
        .page-wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* Content area */
        .content-area {
            flex: 1;
            padding: 30px;
            margin-left: 100px; /* Same as sidebar width */
            transition: all 0.3s ease;
        }

        /* If you want responsive design */
        @media (max-width: 768px) {
            .content-area {
                margin-left: 0;
                padding: 20px;
            }
        }

        /* Basic styling for your content */
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        /* Add some basic card styles for your content */
        .card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
    </style>

    <!-- If you're using external CSS frameworks -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

   <!-- Include Navbar -->
    @include('Element.Nav-bar.Nav_bar')
    <div class="page-wrapper">

        <!-- Content Area -->
        <main class="content-area">
            @yield('content')
        </main>
    </div>

    <!-- Your JS files here -->
</body>
</html>
