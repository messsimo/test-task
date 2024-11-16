<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Подключение CSS -->
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <title>Test Task</title>
</head>
<body>
    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Блок#1 -->
        <div class="header-block">
            <nav>
                <a href="">About</a>
                <a class="active" href="">Blog</a>
                <a href="">Forum</a>
                <a href="">Contact</a>
            <nav>

            <div class="about">
                <span>About Author</span>
            </div>

            <div class="arrow">
                <svg width="19" height="33" viewBox="0 0 19 33" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 28.2857L11.875 16.5L0 4.71429L2.375 0L19 16.5L2.375 33L0 28.2857Z" fill="white"/></svg>
            </div>
        </div>

        <!-- Блок#2 -->
        <div class="body-block">
            <div class="describe">
                <div class="top-text">
                    <h2>01</h2>
                    <img src="{{ asset('images/line.png') }}" alt="Image 1">
                </div>
                <h3>BLOG</h3>
            </div>

            <div class="women-info">
                <div class="text">
                    <p>Hey I’m Jess, Welcome To my personal blog website</p>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                    <a href="">READ MORE....</a>
                </div>

                <img src="{{ asset('images/women.png') }}" alt="Jess">
            </div>

            <div class="bottom-image">
                <h2>PERFUMES & SCENTS</h2>
            </div>
        </div>

        <!-- Блок#3 -->
        <div class="footer-block">
            <div class="footer-block--img">
                <p>COSMETICS</p>
            </div>

            <div class="footer-block--text">
                <p>Makeup Tips, Reviews & Skincare Advice</p>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</span>
                <a href="">READ MORE....</a>
            </div>
        </div>
    </div>
</body>
</html>