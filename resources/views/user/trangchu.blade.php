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
                <a href="" id="logo">
                    <img src="images/logo.png" alt="">
                </a>
                <ul id="main-menu">
                    <li><a href="">Test 1</a></li>
                    <li><a href="">Test 1</a></li>
                    <li><a href="">Test 1</a></li>
                    <li><a href="">Test 1</a>
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
                    <li><a href="">Test 1</a></li>
                    <li><a href="">Test 1</a></li>
                    <li><a href="">Test 1</a></li>
                    <li><a href="">Test 1</a></li>
                    
                </ul>
                <div class="search">
                    <input type="text" placeholder="tìm kiếm"><i class="fas fa-search"></i>
                </div>
            </nav>
        </div>
    </header>
    <section id="slider">
        <div class="aspect-ratio-169"> 
            <img src="../images/banner.jpg" alt="">
            <img src="../images/banner.jpg" alt="">
            <img src="../images/banner.jpg" alt="">
            <img src="../images/banner.jpg" alt="">
            <img src="../images/banner.jpg" alt="">
        </div>
        <div class="dot-container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </section>

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
<script>
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector('.aspect-ratio-169')
    const dotItem = document.querySelectorAll(".dot")
    let imgNumber = imgPosition.length
    let trangchu = 0
    imgPosition.forEach(function(images,trangchu){
        images.style.left = trangchu*100 + "%"
        dotItem[trangchu].addEventListener("click",function(){
        slider (trangchu)
        })
    })
    function imgSlide (){
        trangchu++;
        console.log(trangchu)
        if (trangchu>=imgNumber) {trangchu=0}
        slider (trangchu)
    }
    function slider (trangchu) {
        imgContainer.style.left = "-" +trangchu*100+ "%"
        const dotActive = document.querySelector('.active')
        dotActive.classList.remove("active")
        dotItem[trangchu].classList.add("active")
    }

    setInterval(imgSlide,5000)

</script>
</html>