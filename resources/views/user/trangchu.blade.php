@extends('layouts.header')
@section('content')
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

    <section class="sanpham">
        <div class="container">
            <div class="sanpham-title">
                <h1>Sản Phẩm</h1>
            </div>
            <div class="sanpham-content row">
                <div class="sanpham-content-items">
                    <img src="../images/background.jpg" alt="">
                        <h1>Cà phê đen</h1>
                        <p>40.000đ</p>
                </div>
                <div class="sanpham-content-items">
                    <img src="../images/background.jpg" alt="">
                        <h1>Cà phê đen</h1>
                        <p>40.000đ</p>
                </div>
                <div class="sanpham-content-items">
                    <img src="../images/background.jpg" alt="">
                        <h1>Cà phê đen</h1>
                        <p>40.000đ</p>
                </div>
                <div class="sanpham-content-items">
                    <img src="../images/background.jpg" alt="">
                        <h1>Cà phê đen</h1>
                        <p>40.000đ</p>
                </div>
            </div>
        </div>
    </section>

    <section class="danhmucsanpham">
        <div class="container">
            <div class="danhmucsanpham-title">
                <h1>Danh Mục Sản Phẩm</h1>
            </div>
            <div class="danhmucsanpham-content row">
                <div class="danhmucsanpham-content-items">
                    <img src="../images/background.jpg" alt="">
                        <h1>Cà phê</h1>
                </div>
                <div class="danhmucsanpham-content-items">
                    <img src="../images/background.jpg" alt="">
                        <h1>Trà</h1>
                </div>
                <div class="danhmucsanpham-content-items">
                    <img src="../images/background.jpg" alt="">
                        <h1>Sinh tố</h1>
                </div>
                <div class="danhmucsanpham-content-items">
                    <img src="../images/background.jpg" alt="">
                        <h1>Nước ép</h1>
                </div>
            </div>
        </div>
    </section>

@endsection