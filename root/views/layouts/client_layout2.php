<!DOCTYPE html>
<html lang="en">
<?php
require_once _DIR_ROOT . '/views/layouts/head.inc.php';
?>

<body>
    <!-- navigation mobile -->
    <div class="header">
        <div class="wrapper cf">
            <nav id="main-nav">
                <ul class="first-nav">
                    <li class="cryptocurrency">
                        <a href="" target="_blank">Cryptocurrency</a>
                        <ul>
                            <li><a href="#">Bitcoin</a></li>
                            <li><a href="#">Ethereum</a></li>
                            <li><a href="#">NEO</a></li>
                            <li><a href="#">ZCash</a></li>
                            <li><a href="#">Dogecoin</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="second-nav">
                    <li class="devices">
                        <a>Devices</a>
                        <ul>
                            <li class="mobile">
                                <a href="#">Mobile Phones</a>
                                <ul>
                                    <li><a href="#">Super Smart Phone</a></li>
                                    <li><a href="#">Thin Magic Mobile</a></li>
                                    <li><a href="#">Performance Crusher</a></li>
                                    <li><a href="#">Futuristic Experience</a></li>
                                </ul>
                            </li>
                            <li class="television">
                                <a href="#">Televisions</a>
                                <ul>
                                    <li><a href="#">Flat Superscreen</a></li>
                                    <li><a href="#">Gigantic LED</a></li>
                                    <li><a href="#">Power Eater</a></li>
                                    <li><a href="#">3D Experience</a></li>
                                    <li><a href="#">Classic Comfort</a></li>
                                </ul>
                            </li>
                            <li class="camera">
                                <a href="#">Cameras</a>
                                <ul>
                                    <li><a href="#">Smart Shot</a></li>
                                    <li><a href="#">Power Shooter</a></li>
                                    <li><a href="#">Easy Photo Maker</a></li>
                                    <li><a href="#">Super Pixel</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="magazines">
                        <a href="#">Magazines</a>
                        <ul>
                            <li><a href="#">National Geographic</a></li>
                            <li><a href="#">Scientific American</a></li>
                            <li><a href="#">The Spectator</a></li>
                            <li><a href="#">The Rambler</a></li>
                            <li><a href="#">Physics World</a></li>
                            <li><a href="#">The New Scientist</a></li>
                        </ul>
                    </li>
                    <li class="store">
                        <a href="#">Store</a>
                        <ul>
                            <li>
                                <a href="#">Clothes</a>
                                <ul>
                                    <li>
                                        <a href="#">Women's Clothing</a>
                                        <ul>
                                            <li><a href="#">Tops</a></li>
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Trousers</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Sale</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Men's Clothing</a>
                                        <ul>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Trousers</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Sale</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Jewelry</a>
                            </li>
                            <li>
                                <a href="#">Music</a>
                            </li>
                            <li>
                                <a href="#">Grocery</a>
                            </li>
                        </ul>
                    </li>
                    <li class="collections"><a href="#">Collections</a></li>
                    <li class="credits"><a href="#">Credits</a></li>
                </ul>
            </nav>
            <div class="icon_nav_mobile">
                <a class="toggle">
                    <span></span>
                </a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- end nav mobile -->
    <header>
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="left pull-left">
                            <span class="phone">
                                <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;
                                +49 123 456789
                            </span>
                            <span class="email">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;
                                meine.email@google.com
                            </span>
                        </div>
                        <!-- <div class="right pull-right">
                                <span class="time">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;
                                    08:00 - 17:00
                                </span>
                                <span class="face">
                                    <a href="">
                                        <img src="image/face_top.png" alt="">
                                    </a>
                                </span>
                                <span class="insta">
                                    <a href="">
                                        <img src="image/insta_top.png" alt="">
                                    </a>
                                </span>
                                <span class="insta">
                                    <a href="">
                                        <img src="image/play_top.png" alt="">
                                    </a>
                                </span>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="header_bot">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <div class="img">
                                <a href="">
                                    <img src="image/3.png" alt="">
                                </a>
                            </div>
                            <div class="text">
                                <a href="">Comcave Online Shop</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form_search">
                            <form action="" method="POST" role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="Nhập từ khóa tìm kiếm">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="right_header_bot">
                            <p class="love icon">
                                <a href="">
                                    <span>
                                        <img src="image/1.png" alt="">
                                    </span>
                                    <span>Danh mục yêu thích</span>
                                    <span class="number">5</span>
                                </a>
                            </p>
                            <p class="cart icon">
                                <a href="">
                                    <span>
                                        <img src="image/2.png" alt="">
                                    </span>
                                    <span>Giỏ hàng</span>
                                    <span class="number">5</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="navi_cate">
                            <h4>
                                <i class="fa fa-bars" aria-hidden="true"></i>&nbsp;&nbsp;Danh mục sản phẩm
                            </h4>
                            <div class="list_cate">
                                <ul>
                                    <li>
                                        <a href="">Đồ dùng nhà hàng khách sạn</a><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        <div class="sub_category">
                                            <div class="row list_sub_cate">
                                                <div class="col-md-6 sub_cate">
                                                    <div class="top_title">
                                                        <a href="">Đồ Melamine Thái Lan</a>
                                                    </div>
                                                    <ul class="child_cate">
                                                        <li><a href="">Bộ sản phẩm 1</a></li>
                                                        <li><a href="">Bộ sản phẩm 1</a></li>
                                                        <li><a href="">Bộ sản phẩm 1</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 sub_cate">
                                                    <div class="top_title">
                                                        <a href="">Đồ Melamine Thái Lan</a>
                                                    </div>
                                                    <ul class="child_cate">
                                                        <li><a href="">Bộ sản phẩm 1</a></li>
                                                        <li><a href="">Bộ sản phẩm 1</a></li>
                                                        <li><a href="">Bộ sản phẩm 1</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <a class="buy_now" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;<i>Mua ngay</i></a>

                                        </div>
                                    </li>
                                    <li>
                                        <a href="">Đồ gia dụng</a><i class="fa fa-chevron-right" aria-hidden="true"></i>

                                    </li>
                                    <li>
                                        <a href="">Bếp nướng các loại</a><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        <div class="sub_category">
                                            <div class="row list_sub_cate">
                                                <div class="col-md-6 sub_cate">
                                                    <div class="top_title">
                                                        <a href="">Đồ Melamine Thái Lan</a>
                                                    </div>
                                                    <ul class="child_cate">
                                                        <li><a href="">Bộ sản phẩm 1</a></li>
                                                        <li><a href="">Bộ sản phẩm 1</a></li>
                                                        <li><a href="">Bộ sản phẩm 1</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 sub_cate">
                                                    <div class="top_title">
                                                        <a href="">Đồ Melamine Thái Lan</a>
                                                    </div>
                                                    <ul class="child_cate">
                                                        <li><a href="">Bộ sản phẩm 1</a></li>
                                                        <li><a href="">Bộ sản phẩm 1</a></li>
                                                        <li><a href="">Bộ sản phẩm 1</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <a class="buy_now" href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;<i>Mua ngay</i></a>

                                        </div>
                                    </li>
                                    <li><a href="">Đồ Melamine</a><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                                    <li><a href="">Đồ sứ, thủy tinh</a><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                                    <li><a href="">Đồ nhựa phíp</a><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                                    <li><a href="">Bếp Âu, bếp Á</a><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="menu">
                            <ul>
                                <li><a href="">Trang chủ</a></li>
                                <li><a href="">Giới thiệu</a></li>
                                <li><a href="">Tin tức</a></li>
                                <li><a href="">Sản phẩm</a></li>
                                <li><a href="">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="slide" class="">
        <div class="container-fluid">
            <div class="row">
                <div class="slide owl-carousel" data-slider-id="1">
                    <div class="item">
                        <a href="">
                            <img src="image/8.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="image/8.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="image/8.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section top_products">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box_item">
                        <div class="img">
                            <a href="">
                                <img src="image/11.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_item">
                        <div class="img">
                            <a href="">
                                <img src="image/34.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_item">
                        <div class="img">
                            <a href="">
                                <img src="image/35.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section quality">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box_item" style="padding-top: 13px;">
                        <div class="img">
                            <img src="image/21.png" alt="">
                        </div>
                        <div class="info">
                            <h3 class="title">Hỗ trợ 24/7</h3>
                            <p class="desc">
                                Chúng tôi luôn muốn mang đến cho quý khách những trải nghiệm tốt nhất khi đến với chúng tôi với Hotline : 01234568688 – 0911929929
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_item" style="padding-top: 13px;">
                        <div class="img">
                            <img src="image/22.png" alt="">
                        </div>
                        <div class="info">
                            <h3 class="title">GIAO HÀNG MIỄN PHÍ</h3>
                            <p class="desc">
                                Với hóa đơn trên 10.000.000đ. Chắc chắn bạn sẽ rất vui khi nhận được hàng mà không mất thêm phí vận chuyển nào ( trong nội thành Hà Nội )
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_item">
                        <div class="img">
                            <img src="image/23.png" alt="">
                        </div>
                        <div class="info">
                            <h3 class="title">GIÁ RẺ CHẤT LƯỢNG CAO</h3>
                            <p class="desc">
                                Đến với Dụng Cụ Nhà Bếp Phương Loan, chúng tôi luôn muốn mang đến cho quý khách dịch vụ tốt và giá thành rẻ nhất.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section about">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="left">
                        <div class="item item_high">
                            <div class="img">
                                <img src="image/12.png" alt="">
                            </div>
                            <div class="info">
                                <p class="small_image">
                                    <img src="image/36.png" alt="">
                                </p>
                                <p class="title">Dụng cụ nhà bếp</p>
                                <h3 class="name">Phương Loan</h3>
                                <p class="desc">
                                    Dụng cụ nhà bếp Phương Loan chuyên cung cấp đồ dùng nhà hàng khách sạn, bán buôn bán lẻ tất cả các loại đồ gia dụng, dụng cụ nhà bếp, dụng cụ buffet, dụng cụ pha chế, dụng cụ quầy bar, đồ dùng nhà hàng và quán ăn khắp cả nước với mức giá rẻ nhất. Với
                                    đội ngũ nhân viên trẻ trung, chuyên nghiệp, nhiệt tình và nhiều kinh nghiệm trong lĩnh vực đồ dùng nhà hàng khách sạn bạn sẽ được phục vụ một cách chu đáo và hài lòng nhất.
                                </p>
                                <a href="" class="read_more">
                                    Xem thêm
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="right_list_img">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="box_img">
                                    <div class="img">
                                        <img src="image/13.png" alt="">
                                    </div>
                                    <div class="title">
                                        <p>Đồ dùng nhà hàng khách sạn</p>
                                    </div>
                                    <a href="" class="read_more">
                                        Chi tiết
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_img">
                                    <div class="img">
                                        <img src="image/14.png" alt="">
                                    </div>
                                    <div class="title">
                                        <p>Đồ dùng Melamine</p>
                                    </div>
                                    <a href="" class="read_more">
                                        Chi tiết
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_img">
                                    <div class="img">
                                        <img src="image/15.png" alt="">
                                    </div>
                                    <div class="title">
                                        <p>Đồ dùng Melamine</p>
                                    </div>
                                    <a href="" class="read_more">
                                        Chi tiết
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_img">
                                    <div class="img">
                                        <img src="image/16.png" alt="">
                                    </div>
                                    <div class="title">
                                        <p>Đồ dùng Melamine</p>
                                    </div>
                                    <a href="" class="read_more">
                                        Chi tiết
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_img">
                                    <div class="img">
                                        <img src="image/17.png" alt="">
                                    </div>
                                    <div class="title">
                                        <p>Đồ dùng Melamine</p>
                                    </div>
                                    <a href="" class="read_more">
                                        Chi tiết
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_img">
                                    <div class="img">
                                        <img src="image/18.png" alt="">
                                    </div>
                                    <div class="title">
                                        <p>Đồ dùng Melamine</p>
                                    </div>
                                    <a href="" class="read_more">
                                        Chi tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section qc">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="img">
                        <a href="">
                            <img src="image/9.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section list_sale">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row left">
                        <div class="col-md-4">
                            <div class="box_sale_product">
                                <div class="image">
                                    <a href="">
                                        <img src="image/37.png" alt="">
                                    </a>
                                </div>
                                <div class="tag_sale">Sale</div>
                                <div class="like">
                                    <a href="">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <a href="">Bo dao nhat</a>
                                    </div>
                                    <div class="price">
                                        <span class="price_1">325.000</span> vnđ
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_sale_product">
                                <div class="image">
                                    <a href="">
                                        <img src="image/37.png" alt="">
                                    </a>
                                </div>
                                <div class="tag_sale">Sale</div>
                                <div class="like">
                                    <a href="">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <a href="">Bo dao nhat</a>
                                    </div>
                                    <div class="price">
                                        <span class="price_1">325.000</span> vnđ
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_sale_product">
                                <div class="image">
                                    <a href="">
                                        <img src="image/37.png" alt="">
                                    </a>
                                </div>
                                <div class="tag_sale">Sale</div>
                                <div class="like">
                                    <a href="">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <a href="">Bo dao nhat</a>
                                    </div>
                                    <div class="price">
                                        <span class="price_1">325.000</span> vnđ
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_sale_product">
                                <div class="image">
                                    <a href="">
                                        <img src="image/37.png" alt="">
                                    </a>
                                </div>
                                <div class="tag_sale">Sale</div>
                                <div class="like">
                                    <a href="">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <a href="">Bo dao nhat</a>
                                    </div>
                                    <div class="price">
                                        <span class="price_1">325.000</span> vnđ
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_sale_product">
                                <div class="image">
                                    <a href="">
                                        <img src="image/37.png" alt="">
                                    </a>
                                </div>
                                <div class="tag_sale">Sale</div>
                                <div class="like">
                                    <a href="">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <a href="">Bo dao nhat</a>
                                    </div>
                                    <div class="price">
                                        <span class="price_1">325.000</span> vnđ
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box_sale_product">
                                <div class="image">
                                    <a href="">
                                        <img src="image/37.png" alt="">
                                    </a>
                                </div>
                                <div class="tag_sale">Sale</div>
                                <div class="like">
                                    <a href="">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <a href="">Bo dao nhat</a>
                                    </div>
                                    <div class="price">
                                        <span class="price_1">325.000</span> vnđ
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product_hight">
                        <div class="title">
                            <p class="top">Sản phẩm</p>
                            <p class="bot">Nổi bật</p>
                        </div>
                        <div class="img">
                            <a href="">
                                <img src="image/7.png" alt="">
                            </a>
                            <a href="" class="read_more">
                                Xem thêm
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section qc">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="img">
                        <a href="">
                            <img src="image/38.png" alt="">
                        </a>
                        <a href="" class="buy_now">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section list_sale">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product_hight_left">
                        <div class="title">
                            <p class="top">Sản phẩm</p>
                            <p class="bot">Bán chạy</p>
                        </div>
                        <div class="img">
                            <a href="">
                                <img src="image/39.png" alt="">
                            </a>
                            <a href="" class="read_more">
                                Xem thêm
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row right">
                        <ul class="nav nav-tabs">
                            <li class="active home"><a class="" data-toggle="tab" href="#home">Đồ dùng khách sạn</a></li>
                            <li><a data-toggle="tab" href="#menu1">Đồ dùng gia đình</a></li>
                            <li><a data-toggle="tab" href="#menu2">Đồ dùng nhà hàng</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="col-md-4">
                                    <div class="box_sale_product">
                                        <div class="image">
                                            <a href="">
                                                <img src="image/37.png" alt="">
                                            </a>
                                        </div>
                                        <div class="tag_sale">Sale</div>
                                        <div class="like">
                                            <a href="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="">Bo dao nhat</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_1">325.000</span> vnđ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box_sale_product">
                                        <div class="image">
                                            <a href="">
                                                <img src="image/37.png" alt="">
                                            </a>
                                        </div>
                                        <div class="tag_sale">Sale</div>
                                        <div class="like">
                                            <a href="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="">Bo dao nhat</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_1">325.000</span> vnđ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box_sale_product">
                                        <div class="image">
                                            <a href="">
                                                <img src="image/37.png" alt="">
                                            </a>
                                        </div>
                                        <div class="tag_sale">Sale</div>
                                        <div class="like">
                                            <a href="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="">Bo dao nhat</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_1">325.000</span> vnđ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box_sale_product">
                                        <div class="image">
                                            <a href="">
                                                <img src="image/37.png" alt="">
                                            </a>
                                        </div>
                                        <div class="tag_sale">Sale</div>
                                        <div class="like">
                                            <a href="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="">Bo dao nhat</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_1">325.000</span> vnđ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box_sale_product">
                                        <div class="image">
                                            <a href="">
                                                <img src="image/37.png" alt="">
                                            </a>
                                        </div>
                                        <div class="tag_sale">Sale</div>
                                        <div class="like">
                                            <a href="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="">Bo dao nhat</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_1">325.000</span> vnđ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box_sale_product">
                                        <div class="image">
                                            <a href="">
                                                <img src="image/37.png" alt="">
                                            </a>
                                        </div>
                                        <div class="tag_sale">Sale</div>
                                        <div class="like">
                                            <a href="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="">Bo dao nhat</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_1">325.000</span> vnđ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="col-md-4">
                                    <div class="box_sale_product">
                                        <div class="image">
                                            <a href="">
                                                <img src="image/37.png" alt="">
                                            </a>
                                        </div>
                                        <div class="tag_sale">Sale</div>
                                        <div class="like">
                                            <a href="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="">Bo dao nhat</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_1">325.000</span> vnđ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box_sale_product">
                                        <div class="image">
                                            <a href="">
                                                <img src="image/37.png" alt="">
                                            </a>
                                        </div>
                                        <div class="tag_sale">Sale</div>
                                        <div class="like">
                                            <a href="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="">Bo dao nhat</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_1">325.000</span> vnđ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box_sale_product">
                                        <div class="image">
                                            <a href="">
                                                <img src="image/37.png" alt="">
                                            </a>
                                        </div>
                                        <div class="tag_sale">Sale</div>
                                        <div class="like">
                                            <a href="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="">Bo dao nhat</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_1">325.000</span> vnđ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box_sale_product">
                                        <div class="image">
                                            <a href="">
                                                <img src="image/37.png" alt="">
                                            </a>
                                        </div>
                                        <div class="tag_sale">Sale</div>
                                        <div class="like">
                                            <a href="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="">Bo dao nhat</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_1">325.000</span> vnđ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box_sale_product">
                                        <div class="image">
                                            <a href="">
                                                <img src="image/37.png" alt="">
                                            </a>
                                        </div>
                                        <div class="tag_sale">Sale</div>
                                        <div class="like">
                                            <a href="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="">Bo dao nhat</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_1">325.000</span> vnđ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box_sale_product">
                                        <div class="image">
                                            <a href="">
                                                <img src="image/37.png" alt="">
                                            </a>
                                        </div>
                                        <div class="tag_sale">Sale</div>
                                        <div class="like">
                                            <a href="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="">Bo dao nhat</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_1">325.000</span> vnđ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <div class="col-md-4">
                                    <div class="box_sale_product">
                                        <div class="image">
                                            <a href="">
                                                <img src="image/37.png" alt="">
                                            </a>
                                        </div>
                                        <div class="tag_sale">Sale</div>
                                        <div class="like">
                                            <a href="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="">Bo dao nhat</a>
                                            </div>
                                            <div class="price">
                                                <span class="price_1">325.000</span> vnđ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section list_sale_image">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 first_img col_img">
                    <div class="img">
                        <a href="">
                            <img src="image/40.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-8 image_2nd col_img">
                            <div class="img">
                                <a href="">
                                    <img src="image/41.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 image_3nd col_img">
                            <div class="img">
                                <a href="">
                                    <img src="image/42.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col_img image_4nd">
                            <div class="img">
                                <a href="">
                                    <img src="image/43.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col_img image_5nd">
                            <div class="img">
                                <a href="">
                                    <img src="image/44.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section feed_back">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <p class="top">Khách hàng</p>
                        <p class="bot">Nói về chúng tôi</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="feed_back_slide owl-carousel" data-slider-id="1">
                        <div class="item">
                            <div class="img">
                                <img src="image/29.png" alt="">
                            </div>
                            <div class="rate">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            </div>
                            <div class="name">
                                <span class="first_name">Chị</span>
                                <span class="last_name">Loan</span>
                            </div>
                            <div class="desc">
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="image/30.png" alt="">
                            </div>
                            <div class="rate">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            </div>
                            <div class="name">
                                <span class="first_name">Chị</span>
                                <span class="last_name">Loan</span>
                            </div>
                            <div class="desc">
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="image/30.png" alt="">
                            </div>
                            <div class="rate">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            </div>
                            <div class="name">
                                <span class="first_name">Chị</span>
                                <span class="last_name">Loan</span>
                            </div>
                            <div class="desc">
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="image/30.png" alt="">
                            </div>
                            <div class="rate">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            </div>
                            <div class="name">
                                <span class="first_name">Chị</span>
                                <span class="last_name">Loan</span>
                            </div>
                            <div class="desc">
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="image/30.png" alt="">
                            </div>
                            <div class="rate">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            </div>
                            <div class="name">
                                <span class="first_name">Chị</span>
                                <span class="last_name">Loan</span>
                            </div>
                            <div class="desc">
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="image/31.png" alt="">
                            </div>
                            <div class="rate">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            </div>
                            <div class="name">
                                <span class="first_name">Chị</span>
                                <span class="last_name">Loan</span>
                            </div>
                            <div class="desc">
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="image/31.png" alt="">
                            </div>
                            <div class="rate">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            </div>
                            <div class="name">
                                <span class="first_name">Chị</span>
                                <span class="last_name">Loan</span>
                            </div>
                            <div class="desc">
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="home_list_news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h3>Tin tức</h3>
                        <p class="desc">về dụng cụ nhà bếp Phương Loan</p>
                    </div>
                </div>
            </div>
            <div class="row list_news">
                <div class="col-md-6">
                    <div class="first_news">
                        <div class="img">
                            <a href="">
                                <img src="image/news1.png" alt="">
                            </a>
                        </div>
                        <div class="info">
                            <h3 class="name">
                                <a href="">Bộ sưu tập phụ kiện độc đáo dành cho những người không thể rời tay khỏi điện thoại</a>
                            </h3>
                            <p class="time">
                                (Thứ 4, ngày 23/3/2011 16:30 PM)
                            </p>
                            <p class="desc">
                                Heather và Myles là hai nhà sáng tạo ra bộ sưu tập phụ kiện trang trí bằng gốm sứ đa năng dành cho chức năng chính là đặt các sản phẩm công nghệ như điện thoại thông minh hay máy tính bảng. Bạn hoàn toàn có thể sử dụng chúng như một cách để đồ gọn gàng ...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right_news">
                        <div class="news_item">
                            <div class="img">
                                <a href="">
                                    <img src="image/news2.png" alt="">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="name">
                                    <a href="">Giúp không gian đẹp và gọn hơn </a>
                                </h4>
                                <p class="time">
                                    (Thứ 4, ngày 23/3/2011 16:30 PM)
                                </p>
                                <p class="desc">
                                    Máy tính bảng cũng được đặt gọn trên phần kệ kèm theo phía sau là nơi đựng dụng cụ nấu nướng, ăn uống tiện lợi. Có nhiều màu, nhiều kiểu dáng để bạn lựa chọn phù hợp ...
                                </p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="news_item">
                            <div class="img">
                                <a href="">
                                    <img src="image/news2.png" alt="">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="name">
                                    <a href="">Giúp không gian đẹp và gọn hơn </a>
                                </h4>
                                <p class="time">
                                    (Thứ 4, ngày 23/3/2011 16:30 PM)
                                </p>
                                <p class="desc">
                                    Máy tính bảng cũng được đặt gọn trên phần kệ kèm theo phía sau là nơi đựng dụng cụ nấu nướng, ăn uống tiện lợi. Có nhiều màu, nhiều kiểu dáng để bạn lựa chọn phù hợp ...
                                </p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="news_item">
                            <div class="img">
                                <a href="">
                                    <img src="image/news2.png" alt="">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="name">
                                    <a href="">Giúp không gian đẹp và gọn hơn </a>
                                </h4>
                                <p class="time">
                                    (Thứ 4, ngày 23/3/2011 16:30 PM)
                                </p>
                                <p class="desc">
                                    Máy tính bảng cũng được đặt gọn trên phần kệ kèm theo phía sau là nơi đựng dụng cụ nấu nướng, ăn uống tiện lợi. Có nhiều màu, nhiều kiểu dáng để bạn lựa chọn phù hợp ...
                                </p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="news_item">
                            <div class="img">
                                <a href="">
                                    <img src="image/news2.png" alt="">
                                </a>
                            </div>
                            <div class="info">
                                <h4 class="name">
                                    <a href="">Giúp không gian đẹp và gọn hơn </a>
                                </h4>
                                <p class="time">
                                    (Thứ 4, ngày 23/3/2011 16:30 PM)
                                </p>
                                <p class="desc">
                                    Máy tính bảng cũng được đặt gọn trên phần kệ kèm theo phía sau là nơi đựng dụng cụ nấu nướng, ăn uống tiện lợi. Có nhiều màu, nhiều kiểu dáng để bạn lựa chọn phù hợp ...
                                </p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    require_once _DIR_ROOT . '/views/layouts/footer.inc.php';
    ?>
    <?php
    require_once _DIR_ROOT . '/views/layouts/script.inc.php';
    ?>

</body>

</html>