<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c08ea0327a.js" crossorigin="anonymous"></script>
    

    <title>Document</title>
</head>
<body>
    <header>
        <div class="filter">
            <nav class="container">
                <a href="trangchu" id="logo">
                    <img src="images/logo.png" alt="">
                </a>
                <ul id="main-menu">
                    <li><a href="sanpham">Sản phẩm</a>
                        <ul class="sub-menu">
                            <li><a href="">Test 2</a></li>
                            <li><a href="">Test 2</a>
                                <ul class="sub-menu">
                                    <li><a href="">Test 3</a></li>
                                    <li><a href="">Test 3</a></li>
                                    <li><a href="">Test 3</a></li>
                                    <li><a href="">Test 3</a></li>
                                </ul>
                            </li>
                            <li><a href="">Test 2</a></li>
                            <li><a href="">Test 2</a></li>
                        </ul>
                    </li>
                    <li><a href="">Danh mục sản phẩm</a>
                        <ul class="sub-menu">
                            <li><a href="">Test 2</a></li>
                            <li><a href="">Test 2</a>
                                <ul class="sub-menu">
                                    <li><a href="">Test 3</a></li>
                                    <li><a href="">Test 3</a></li>
                                    <li><a href="">Test 3</a></li>
                                    <li><a href="">Test 3</a></li>
                                </ul>
                            </li>
                            <li><a href="">Test 2</a></li>
                            <li><a href="">Test 2</a></li>
                        </ul>
                    </li>   
                    <li><a href="">Giỏ hàng</a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    
                    
                    
                </ul>
                <div class="search">
                    <i class="fas fa-search"></i><input type="text" placeholder="tìm kiếm">
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="footer-top">
            <ul>
                <li><a href=""><img src="../images/logo.png" alt=""></a></li>
                <li><a href="">Liên hệ</a></li>
                <li><a href="">Tuyển dụng</a></li>
                <li><a href="">Giới thiệu</a></li>
                <li>
                    <a href="" class="fab fa-facebook-f"></a>
                    <a href="" class="fab fa-twitter"></a>
                    <a href="" class="fab fa-youtube"></a>
                </li>
            </ul>
        </div>
    </footer>
</body>
<script src="/js/javascript.js"></script>
</html>