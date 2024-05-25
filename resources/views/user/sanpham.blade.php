@extends('layouts.header')
@section('content')

<section class="category">
    <div class="container">
        <div class="category-top row">
            <p>Trang chủ</p> <span>&#10230;</span> <p>Sản phẩm</p> <span>&#10230;</span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="category-left">
                <ul>
                    <li class="category-left-li"><a href="#">Cà phê</a>
                        <ul>
                            <li><a href="">Cà phê đen</a></li>
                            <li><a href="">Nâu đá</a></li>
                            <li><a href="">Bạc xỉu</a></li>
                        </ul>
                    </li>
                    <li class="category-left-li"><a href="#">Trà</a>
                        <ul>
                            <li><a href="">Cà phê đen</a></li>
                            <li><a href="">Nâu đá</a></li>
                            <li><a href="">Bạc xỉu</a></li>
                        </ul>
                    </li>
                    <li class="category-left-li"><a href="#">Sinh tố</a>
                        <ul>
                            <li><a href="">Cà phê đen</a></li>
                            <li><a href="">Nâu đá</a></li>
                            <li><a href="">Bạc xỉu</a></li>
                        </ul>
                    </li>
                    <li class="category-left-li"><a href="#">Nước Ép</a>
                        <ul>
                            <li><a href="">Cà phê đen</a></li>
                            <li><a href="">Nâu đá</a></li>
                            <li><a href="">Bạc xỉu</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="category-right row">
                <div class="category-right-top-item">
                    <li><a href="">Sản phẩm</a></li>
                </div>
                <div class="category-right-top-item">
                    <button><span>Bộ lọc</span> <i class="fas fa-sort-down"></i></button>
                </div>
                <div class="category-right-top-item">
                    <select name="" id="">
                        <option value="">Sắp xếp</option>
                        <option value="">Giá cao đến thấp</option>
                        <option value="">Giá thấp đến cao</option>
                    </select>
                </div>

                <div class="category-right-content row">
                    <div class="category-right-content-item">
                        <img src="../images/background.jpg" alt="">
                        <h1>Cà phê đen</h1>
                        <p>40.000đ</p>
                    </div>
                    <div class="category-right-content-item">
                        <img src="../images/background.jpg" alt="">
                        <h1>Cà phê đen</h1>
                        <p>40.000đ</p>
                    </div>
                    <div class="category-right-content-item">
                        <img src="../images/background.jpg" alt="">
                        <h1>Cà phê đen</h1>
                        <p>40.000đ</p>
                    </div>
                    <div class="category-right-content-item">
                        <img src="../images/background.jpg" alt="">
                        <h1>Cà phê đen</h1>
                        <p>40.000đ</p>
                    </div>
                    <div class="category-right-content-item">
                        <img src="../images/background.jpg" alt="">
                        <h1>Cà phê đen</h1>
                        <p>40.000đ</p>
                    </div>
                    <div class="category-right-content-item">
                        <img src="../images/background.jpg" alt="">
                        <h1>Cà phê đen</h1>
                        <p>40.000đ</p>
                    </div>
                    <div class="category-right-content-item">
                        <img src="../images/background.jpg" alt="">
                        <h1>Cà phê đen</h1>
                        <p>40.000đ</p>
                    </div>
                    <div class="category-right-content-item">
                        <img src="../images/background.jpg" alt="">
                        <h1>Cà phê đen</h1>
                        <p>40.000đ</p>
                    </div>
                </div>

                <div class="category-right-bottom row">
                    <div class="category-right-bottom-items">
                        <p>Hiển thị 2 <span>|</span> 4 sản phẩm</p>
                    </div>
                    <div class="category-right-bottom-items">
                        <p><span>&#171;</span>1 2 3 4 5<span>&#187;</span>Trang cuối</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>







@endsection