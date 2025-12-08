<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Portfolio')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Super simple layout styling */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color:rgba(15, 23, 42, 0.98);
            position: relative;
            overflow-x: hidden;
        }

        /* Mouse-following lightening effect */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            background: radial-gradient(
                circle 600px at var(--mouse-x, 50%) var(--mouse-y, 50%),
                rgba(255, 255, 255, 0.08) 0%,
                transparent 50%
            );
            z-index: 0;
            will-change: background;
        }

        /* Ensure content is above the gradient */
        header, main, footer {
            position: relative;
            z-index: 1;
        }

        header {
            background-color: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            color: #fff;
            padding: 15px 25px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 22px;
        }

        nav {
            margin-top: 8px;
        }

        nav a {
            color: #e5e7eb;
            margin-right: 15px;
            text-decoration: none;
            font-size: 14px;
        }

        nav a.active {
            font-weight: bold;
            text-decoration: underline;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 900px;
            margin: 30px auto;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            border-radius: 8px;
        }

        footer {
            text-align: center;
            padding: 15px 0;
            color: #6b7280;
            font-size: 13px;
        }

        /* Contents navigation links */
        .contents-nav a {
            color: #ffffff;
            text-decoration: none;
            font-size: 0.875rem;
        }
        .contents-nav a:hover {
            color: #e5e7eb;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header>
    <h1>Ivan Leonov</h1> {{-- put your name here --}}
    <nav>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    &copy; {{ date('Y') }} Ivan Leonov. All rights reserved.
</footer>

<script>
    //The mouse lighting effect
    document.addEventListener('DOMContentLoaded', function() {
        const body = document.body;
        let rafId = null;
        let currentX = 50;
        let currentY = 50;
        const smoothing = 0.15; 
        
        function updateMousePosition(e) {
            const targetX = (e.clientX / window.innerWidth) * 100;
            const targetY = (e.clientY / window.innerHeight) * 100;
            
            // Cancel previous animation frame
            if (rafId) {
                cancelAnimationFrame(rafId);
            }
            
            function animate() {
                // Smooth interpolation
                currentX += (targetX - currentX) * smoothing;
                currentY += (targetY - currentY) * smoothing;
                
                body.style.setProperty('--mouse-x', currentX + '%');
                body.style.setProperty('--mouse-y', currentY + '%');
                
                // Continue animating if we're not close enough
                if (Math.abs(targetX - currentX) > 0.1 || Math.abs(targetY - currentY) > 0.1) {
                    rafId = requestAnimationFrame(animate);
                }
            }
            
            animate();
        }
        
        // Track mouse movement
        document.addEventListener('mousemove', updateMousePosition);
        
        // Reset to center when mouse leaves
        document.addEventListener('mouseleave', function() {
            currentX = 50;
            currentY = 50;
            body.style.setProperty('--mouse-x', '50%');
            body.style.setProperty('--mouse-y', '50%');
        });
    });
</script>
</body>
</html>
