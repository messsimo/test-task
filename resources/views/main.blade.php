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
    </div>
</body>
</html>