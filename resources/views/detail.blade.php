<!DOCTYPE html>
<html lang="en">
@extends('includes.head')
@section('title',$product->name)
<body>
    <div class="rozy">
        {{-- <div class="inbox" id="notactive">
            <p class="intitle"><i class="far fa-comment-alt"></i> Trò Chuyện
                <div class="boxchat">
                    <div class="preboxchat">
                        <div class="toptool"><span class="centername">Support Rozy: VuCms</span> <button
                                class="closechat">×</button></div>
                        <div class="chatlist">
                            <div class="scrolllog">
                                <ul>
                                    <li class="left">
                                        <img src="admin/assets/img/avt.jpg" alt="" class="avtsend">
                                        <p class="msgcontent">buy slowly metal tiny land declared finish stage wide
                                            correct truck warm zoo exchange structure figure brain women so my behavior
                                            primitive east understanding</p>
                                    </li>
                                    <li class="left">
                                        <img src="admin/assets/img/avt.jpg" alt="" class="avtsend">
                                        <p class="msgcontent">buy slowly metal tiny land declared finish stage wide
                                            correct truck warm zoo exchange structure figure brain women so my behavior
                                            primitive east understanding</p>
                                    </li>
                                    <li class="right">
                                        <p class="msgcontent">askraw student driven worse religious worried trail globe
                                            nest article wood birth love tower recent stream island outside chance stay
                                            band late piece bone before </p>
                                    </li>
                                    <li class="right">
                                        <p class="msgcontent">labelmad driven wing avoid ear price support slightly doll
                                            check perhaps force policeman action industry physical command coal forest
                                            second cream spider silent job stiff </p>
                                    </li>
                                    <li class="left">
                                        <img src="admin/assets/img/avt.jpg" alt="" class="avtsend">
                                        <p class="msgcontent">buy slowly metal tiny land declared finish stage wide
                                            correct truck warm zoo exchange structure figure brain women so my behavior
                                            primitive east understanding</p>
                                    </li>
                                    <li class="left">
                                        <img src="admin/assets/img/avt.jpg" alt="" class="avtsend">
                                        <p class="msgcontent">buy slowly metal tiny land declared finish stage wide
                                            correct truck warm zoo exchange structure figure brain women so my behavior
                                            primitive east understanding</p>
                                    </li>
                                    <li class="right">
                                        <p class="msgcontent">askraw student driven worse religious worried trail globe
                                            nest article wood birth love tower recent stream island outside chance stay
                                            band late piece bone before </p>
                                    </li>
                                    <li class="right">
                                        <p class="msgcontent">labelmad driven wing avoid ear price support slightly doll
                                            check perhaps force policeman action industry physical command coal forest
                                            second cream spider silent job stiff </p>
                                    </li>
                                    <li class="left">
                                        <img src="admin/assets/img/avt.jpg" alt="" class="avtsend">
                                        <p class="msgcontent">buy slowly metal tiny land declared finish stage wide
                                            correct truck warm zoo exchange structure figure brain women so my behavior
                                            primitive east understanding</p>
                                    </li>
                                    <li class="left">
                                        <img src="admin/assets/img/avt.jpg" alt="" class="avtsend">
                                        <p class="msgcontent">buy slowly metal tiny land declared finish stage wide
                                            correct truck warm zoo exchange structure figure brain women so my behavior
                                            primitive east understanding</p>
                                    </li>
                                    <li class="right">
                                        <p class="msgcontent">askraw student driven worse religious worried trail globe
                                            nest article wood birth love tower recent stream island outside chance stay
                                            band late piece bone before </p>
                                    </li>
                                    <li class="right">
                                        <p class="msgcontent">labelmad driven wing avoid ear price support slightly doll
                                            check perhaps force policeman action industry physical command coal forest
                                            second cream spider silent job stiff </p>
                                    </li>
                                    <li class="left">
                                        <img src="admin/assets/img/avt.jpg" alt="" class="avtsend">
                                        <p class="msgcontent">buy slowly metal tiny land declared finish stage wide
                                            correct truck warm zoo exchange structure figure brain women so my behavior
                                            primitive east understanding</p>
                                    </li>
                                    <li class="left">
                                        <img src="admin/assets/img/avt.jpg" alt="" class="avtsend">
                                        <p class="msgcontent">buy slowly metal tiny land declared finish stage wide
                                            correct truck warm zoo exchange structure figure brain women so my behavior
                                            primitive east understanding</p>
                                    </li>
                                    <li class="right">
                                        <p class="msgcontent">askraw student driven worse religious worried trail globe
                                            nest article wood birth love tower recent stream island outside chance stay
                                            band late piece bone before </p>
                                    </li>
                                    <li class="right">
                                        <p class="msgcontent">labelmad driven wing avoid ear price support slightly doll
                                            check perhaps force policeman action industry physical command coal forest
                                            second cream spider silent job stiff </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="send">
                            <form action="#">
                                <input type="text" placeholder="Nhập tin nhắn">
                                <button><i class="far fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </p>

        </div> --}}
        <!-- header -->
        <div class="header">

            <div class="topinfo">
                <span style="margin-left:18%"><i class="fas fa-map-marker-alt"></i> 123 Nam Ky Khoi Nghia, Da
                    Nang</span>
                <span style="margin-left:300px"><i class="fas fa-phone"></i> +84 766 730 945 | Support: 0236 456 789 |
                    Sales: 0236 456 710</span>
            </div>
            <!-- boxtop -->
            <div class="boxtop">
                <!-- boxtopmain -->
                <div class="boxtopmain">
                    <div class="centerboxtop">
                        <div class="logo">
                            <i class="fas fa-cart-arrow-down"></i>
                            <span class="logoname"> Rozy.</span>
                        </div>
                        <div class="mobilelogo"><a href="{{url('')}}"><i class="fas fa-arrow-left"></i></a>
                        </div>
                        <!-- boxsearch -->
                        <div class="boxsearch">
                            <form action="result.html">
                                <input autocomplete="off" name="keyword" placeholder="Nhập từ khóa sản phẩm..."
                                    type="search" class="searchinput"><button onclick=""
                                    class="searchnow micnow"><span><i
                                            class="fas fa-microphone"></i></span></button><input type="text"
                                    id="category_select" list="datalist" placeholder="Tất cả danh mục"
                                    value="Tất cả danh mục"><button class="searchnow"><span><i
                                            class="fas fa-search"></i><span id="search_none">Tìm
                                            kiếm</span></span></button>
                                <datalist name="category_select" id="datalist">
                                    <option value="Tất cả danh mục" selected="selected">
                                    <option value="Điện Thoại - Máy Tính Bảng">
                                    <option value="Điện Tử - Điện Lạnh">
                                    <option value="Phụ Kiện - Thiết Bị Số">
                                    <option value="Laptop - Thiết bị IT">
                                    <option value="Máy Ảnh - Quay Phim">
                                    <option value="Điện Gia Dụng ">
                                    <option value="Nhà Cửa Đời Sống">
                                    <option value="Hàng Tiêu Dùng - Thực Phẩm">
                                    <option value="Đồ chơi, Mẹ & Bé">
                                    <option value="Làm Đẹp - Sức Khỏe">
                                    <option value="Thời trang - Phụ kiện">
                                    <option value="Thể Thao - Dã Ngoại">
                                    <option value="Xe Máy, Ô tô, Xe Đạp">
                                    <option value="Sách, VPP & Quà Tặng">
                                </datalist>
                                <div class="boxmic">
                                    <p><span id="gifload"><i class="fas fa-spinner"></i></span>
                                        <span id="micicon"><i class="fas fa-microphone-alt"></i><span>Hãy Nói Từ Khóa
                                                Cần Tìm </span></span>
                                    </p>
                                </div>
                            </form>
                            <div class="ideaforsearch">
                                <p class="ideatitle">
                                    Gợi Ý Cho Bạn:
                                </p>
                                <ul id="idealist">
                                    <li><a href="result.html"><img src="../assets/img/denwa.png"><span>SamSung Galaxy
                                                A30</span></a></li>
                                    <li><a href="result.html"><img src="../assets/img/product1.png"><span>iPhone
                                                X</span></a></li>
                                    <li><a href="result.html"><img src="../assets/img/product.jpg"><span>Móc
                                                Khóa</span></a></li>
                                    <li><a href="result.html"><img
                                                src="../assets/img/product2.jpg"><span>SmartPhone</span></a></li>
                                    <li><a href="result.html"><img src="../assets/img/product4.jpg"><span>Chuột Máy
                                                Tính</span></a></li>
                                    <li><a href="result.html"><img src="../assets/img/product5.jpg"><span>Đồng
                                                Hồ</span></a></li>
                                    <li><a href="result.html"><img src="../assets/img/mega14.jpg"><span>Sách
                                                Hay</span></a>
                                    </li>
                                    <li><a href="result.html"><img src="../assets/img/denwa.png"><span>Điện
                                                Thoại</span></a></li>
                                    <li><a href="result.html"><img src="../assets/img/bike.png"><span>Xe máy
                                                Sirius</span></a></li>
                                </ul>
                                <p class="ideatitle">
                                    Từ Khóa Hot:
                                </p>
                                <ul id="hotkeyidea">
                                    <li><a href="result.html">bone </a></li>
                                    <li><a href="result.html">then </a></li>
                                    <li><a href="result.html">why </a></li>
                                    <li><a href="result.html">prevent </a></li>
                                    <li><a href="result.html">adventure </a></li>
                                    <li><a href="result.html">blank </a></li>
                                    <li><a href="result.html">enjoy </a></li>

                                </ul>
                            </div>
                            <p>CHI TIẾT SẢN PHẨM</p>
                        </div>
                        <div class="mobliecart" id="tools">
                            <i class="fas fa-ellipsis-v">
                                <span>
                                    <li><a href="#"><i class="fas fa-user-circle"></i> Tài khoản</a></li>
                                    <li><a href="#"><i class="fas fa-bell"></i> Thông báo</a></li>
                                    <li><a href="#"><i class="fas fa-clipboard-check"></i> Theo dõi đơn hàng</a></li>
                                    <li><a href="#"><i class="fas fa-shopping-basket"></i> Mua hàng</a></li>
                                </span>
                            </i>
                        </div>
                        <!-- endboxsearch -->
                        <!-- rightoption  -->
                        <div class="sales">
                            <li class="saleoption">
                                <i class="fab fa-hotjar"></i>
                                Khuyến mãi <sup id="salepercent">-5%</sup>
                            </li>
                        </div>
                        <div class="rightoptions">
                            <li class="roption">
                                <i class="fas fa-user-alt"></i>
                                <span class="uptitle">VuCms0202</span>
                                <span class="downtitle">Tài khoản</span>

                            </li>

                        </div>
                        <div class="cartarea">
                            <li>
                                <i style="font-size: 1.8em" class="fas fa-shopping-cart"></i>
                                <span class="carttitle">Giỏ hàng </span><b>2</b>
                                <ul>
                                    <span class="yourcart">Sản phẩm đã chọn:</span>
                                    <li>
                                        <img src="../assets/img/product1.png" alt="" class="cartimg">
                                        <span class="cartname"><a href="#">Galaxy S6 32Gb 3Gb Ram abc xyz </a></span>
                                        <span class="cartinfo">
                                            <span class="cartcost">10,000,000 <sup>VND</sup></span> x
                                            <span class="quantity">1</span>
                                        </span>
                                        <span class="closecart">×</span>
                                    </li>
                                    <li>
                                        <img src="../assets/img/product2.jpg" alt="" class="cartimg">
                                        <span class="cartname"><a href="#">Iphone X 64 GB Ram 4Gb</a></span>
                                        <span class="cartinfo">
                                            <span class="cartcost">20,000,000 <sup>VND</sup></span> x
                                            <span class="quantity">1</span>
                                        </span>
                                        <span class="closecart">×</span>
                                    </li>
                                    <li class="carttotal">
                                        <span> Tổng cộng: 30,000,000 <sup>VND</sup></span>
                                    </li>
                                    <div class="groupcartbtn">
                                        <button class="btnviewcart"><a href="cart.html">Xem giỏ hàng</a></button>
                                        <button class="btncartpay"><a href="payment.html">Thanh toán ngay</a></button>
                                    </div>




                                </ul>
                            </li>
                        </div>
                    </div>


                </div>
                <!-- endboxtopmain -->


            </div>
            <!-- endboxtop -->

        </div>

        <!-- endheader -->
        <!-- body -->
        <div class="body">

            <!-- bodycenter -->
            <div class="bodycenter">
                <div class="mobilecats">
                    <p>DANH MỤC SẢN PHẨM</p>
                    <div class="mcats">
                        <div class="boxcat">
                            <img src="../assets/img/dodadung.png" alt="">
                            <a href="#viewcat">
                                <p>Đồ da dụng</p>
                            </a>
                        </div>
                        <div class="boxcat">
                            <img src="../assets/img/hon.png" alt="">
                            <a href="#viewcat">
                                <p>Văn phòng phẩm</p>
                            </a>
                        </div>
                        <div class="boxcat">
                            <img src="../assets/img/denwa.png" alt="">
                            <a href="#viewcat">
                                <p>Điện thoại</p>
                            </a>
                        </div>
                        <div class="boxcat">
                            <img src="../assets/img/fuku.png" alt="">
                            <a href="#viewcat">
                                <p>Thời trang<br>Phụ kiện</p>
                            </a>
                        </div>
                        <div class="boxcat">
                            <img src="../assets/img/kireinishi.png" alt="">
                            <a href="#viewcat">
                                <p>Sức khỏe<br>làm đẹp</p>
                            </a>
                        </div>
                        <div class="boxcat">
                            <img src="../assets/img/oto.jpg" alt="">
                            <a href="#viewcat">
                                <p>Xe máy, Ô tô</p>
                            </a>
                        </div>
                        <div class="boxcat">
                            <img src="../assets/img/headphone.png" alt="">
                            <a href="#viewcat">
                                <p>Phụ Kiện<br>Thiết Bị Số</p>
                            </a>
                        </div>
                        <div class="boxcat">
                            <img src="../assets/img/microwave.jpg" alt="">
                            <a href="#viewcat">
                                <p>Điện Gia Dụng</p>
                            </a>
                        </div>
                        <div class="boxcat">
                            <img src="../assets/img/fan.png" alt="">
                            <a href="#viewcat">
                                <p>Nhà Cửa<br> Đời Sống</p>
                            </a>
                        </div>
                        <div class="boxcat">
                            <img src="../assets/img/food.jpg" alt="">
                            <a href="#viewcat">
                                <p>Hàng Tiêu Dùng<br>Thực Phẩm</p>
                            </a>
                        </div>
                        <div class="boxcat">
                            <img src="../assets/img/camera.png" alt="">
                            <a href="#viewcat">
                                <p>Máy Ảnh<br>Quay Phim</p>
                            </a>
                        </div>
                        <div class="boxcat">
                            <img src="../assets/img/toy.png" alt="">
                            <a href="#viewcat">
                                <p>Đồ chơi<br>Mẹ & Bé</p>
                            </a>
                        </div>
                        <div class="boxcat">
                            <img src="../assets/img/tent.jpg" alt="">
                            <a href="#viewcat">
                                <p>Thể Thao - Dã Ngoại</p>
                            </a>
                        </div>
                        <div class="boxcat">
                            <img src="../assets/img/fridge.png" alt="">
                            <a href="#viewcat">
                                <p>Điện Tử - Điện Lạnh</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="centerbanner" id="mobliebanner">
                    <a href="#centerbanner"><img src="../assets/img/topbanner.png"></a>
                </div>
                <!-- breadcrumb -->
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{url('')}}"><i class="fas fa-home"></i><span> Trang chủ</span></a></li>
                        <i class="fas fa-chevron-right breadarrow"></i>
                        <li><a href="filter.html"><i class="fas fa-list"></i><span> Danh
                                    Mục</span></a></li>
                        <i class="fas fa-chevron-right breadarrow"></i>
                        <li><a href="filter.html"><i class="fas fa-mobile-alt"></i><span> Điện thoại</span></a></li>
                        <i class="fas fa-chevron-right breadarrow"></i>
                        <li class="active"><a href=""><i class="fas fa-shopping-cart"></i> {{$product->name}}</a>
                        </li>

                    </ul>
                </div>
                <!-- endbreadcrumb -->
                <!-- productmain -->
                <div class="productmain">
                    <div class="gallery">
                        <div class="mainphoto">
                            <a href="#"><img id="mainimg" src="{{isset($product->Avatar()->src) ? url($product->Avatar()->src) : '../assets/img/product5.jpg'}}" alt=""></a>
                        </div>
                        <div class="photolist">
                            <button class="left"><i class="fas fa-chevron-left"></i></button>
                            <button class="right"><i class="fas fa-chevron-right"></i></button>
                            <div class="owl-carousel owl-theme" id="keyslider">
                                @php
                                    $Images = $product->Images();
                                    $Images->push($product->Avatar());
                                    $Images =$Images->reverse()
                                @endphp
                                @foreach ($Images as $Img)
                                    <div class="item">
                                    <li class="active"><img src="{{url($Img->src)}}" alt=""></li>
                                    </div>
                                @endforeach
                                <div class="item">
                                    <li><img src="../assets/img/product.jpg" alt=""></li>
                                </div>
                                <div class="item">
                                    <li><img src="../assets/img/product2.jpg" alt=""></li>
                                </div>
                                <div class="item">
                                    <li><img src="../assets/img/product4.jpg" alt=""></li>
                                </div>
                                <div class="item">
                                    <li><img src="../assets/img/product5.jpg" alt=""></li>
                                </div>
                                <div class="item">
                                    <li><img src="../assets/img/product.jpg" alt=""></li>
                                </div>
                                <div class="item">
                                    <li><img src="../assets/img/product1.png" alt=""></li>
                                </div>
                                <div class="item">
                                    <li><img src="../assets/img/product2.jpg" alt=""></li>
                                </div>
                                <div class="item">
                                    <li><img src="../assets/img/product4.jpg" alt=""></li>
                                </div>
                                <div class="item">
                                    <li><img src="../assets/img/product5.jpg" alt=""></li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order">
                        <div class="pname">
                            <h1>
                                {{$product->name}}
                            </h1>
                        </div>
                        <div class="votecount">
                            <p>
                                @for ($i = 1; $i <= $product->getAvgReview(); $i++)
                                    <i class="fas fa-star" style="color:orange" id="star"></i>
                                 @endfor
                                 @for ($i = 1; $i <= 5-$product->getAvgReview(); $i++)
                                    <i class="fas fa-star" id="star"></i>
                                 @endfor
                                <span id="review_count"><a href="#viewvotes" id="scroll2review">{{$product->getCountReview()}} Đánh giá</a></span>
                            </p>
                        <span id="salecount"><i class="fas fa-tags"></i> (<b>{{$product->getTotalQuantitySelled()}}</b>) đã bán</span>
                        </div>
                        <div class="ordertool">
                            <div class="pprice">
                                @php
                                $discount = $product->AvailableDiscount()->get();
                                @endphp
                                @if (count($discount)>0)
                                <span class="newp">
                                    {{number_format($product->price-$discount[0]->percent/100*$product->price)}} <sup>đ</sup>
                                </span>
                                <span class="oldp">
                                    {{number_format($product->price)}} <sup>đ</sup>
                                </span>
                                <span class="discount">Giảm {{$discount[0]->percent}}%</span>
                                @else
                                <span class="newp">{{number_format($product->price)}} <sup>đ</sup></span>
                                @endif
                                
                                
                            </div>
                            <div class="traninfo">
                                <span><i class="fas fa-history"></i></span>
                                <p>NHẬN HÀNG TRONG 2 GIỜ - ĐỔI TRẢ 24 GIỜ </p>
                            </div>
                            <div class="colorpick">
                                <span class="ctitle">
                                    Màu sắc:
                                </span>
                                <ul class="listcolors">
                                    <li class="orange " style="background:gold"></li>
                                    <li class="black active" style="background:black"></li>
                                    <li class="blue" style="background:#007ff0"></li>
                                </ul>
                            </div>
                            <div class="quantity" >
                                <span class="qtitle">
                                    SỐ LƯỢNG:
                                </span>
                                <div class="updowngroup" data-max={{$product->quantity}}>
                                    <button>–</button>
                                    <input type="text" value="1">
                                    <button>+</button>
                                </div>
                                <span class="amout">
                                    {{$product->quantity}} sản phẩm có sẵn
                                </span>
                            </div>
                            <div class="orderbtn">
                                <span><a href="#addlove"><i class="far fa-heart"></i> Thêm vào danh sách yêu
                                        thích</a></span>
                                <div style="margin-top:15px;">
                                    <button><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</button>
                                    <button><i class="far fa-money-bill-alt"></i> Mua ngay</button>
                                </div>
                            </div>
                            <div class="note">

                            </div>
                            <div class="sharetool">
                                <ul> <span>Chia sẻ sản phẩm này </span>
                                    <a href="#share">
                                        <li style="color:#4166b2;"><i class="fab fa-facebook-square"></i></li>
                                    </a>
                                    <a href="#share">
                                        <li style="color:#1da1f2"><i class="fab fa-twitter-square"></i></li>
                                    </a>
                                    <a href="#share">
                                        <li style="color:#e60023"><i class="fab fa-pinterest-square"></i></li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="shop">
                        <div class="shopname">
                            <i class="fas fa-store-alt"></i>
                            <span>
                                <a href="#viewshop">VMOBILE</a> <br>
                                <small>Cam kết chính hiệu 100%</small>
                            </span>
                            <a href="#viewshop" id="viewshop" class="tabfade">
                                <button class="viewshop">
                                    <small>Xem shop</small>
                                </button>
                            </a>
                        </div>
                        <div class="cefi">
                            <i class="fas fa-user-check"></i>
                            <small>Shop đã được xác minh đạt tiêu chuẩn bán hàng tại Rozy</small>
                        </div>
                        <div class="award">
                            <ul><span></span>
                                <li><i class="fas fa-tshirt"></i>
                                    <span>
                                        <b>{{$product->Seller()->getTotalProducts()<1000 ?$product->Seller()->getTotalProducts() : $product->Seller()->getTotalProducts()/1000 ."k"}}</b><br>
                                        <small>Sản phẩm</small>
                                    </span>
                                </li>
                                <li><i class="far fa-comment-alt"></i>
                                    <span>
                                        <b>90%</b><br>
                                        <small>Tỉ lệ phản hồi</small>
                                    </span>
                                </li>
                                <li><i class="fas fa-vote-yea"></i>
                                    <span>
                                        @php
                                            $countReview = $product->Seller()->getTotalReviewsThan(3)
                                        @endphp
                                        <b>{{$countReview<1000 ?$countReview : $countReview/1000 ."k"}}</b><br>
                                        <small>Đánh giá > 3 <i class="fas fa-star"></i> </small>
                                    </span>
                                </li>
                                <li><i class="fas fa-tshirt"></i>
                                    <span>
                                        <b>24H</b><br>
                                        <small>Thời gian chuẩn bị</small>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <a href="#viewshop" id="viewshop" class="tabhiden">
                            <button class="viewshop">
                                <small>Xem shop</small>
                            </button>
                        </a>
                        <div class="contactshop">
                            <div class="hotline">
                                <img src="../assets/img/callme.png" alt="">
                                <p>
                                    <b>Liên hệ</b><br>
                                    <small>
                                        Hotline đặt hàng: 0234 5678 98 <br>
                                        (Miễn phí, 8-21h cả T7, CN)
                                    </small>
                                </p>
                            </div>
                            <div class="hotline">
                                <img src="../assets/img/mailme.png" alt="">
                                <p>
                                    <b>Email: </b><br>
                                    <small>support@rozyonline.vn</small>
                                </p>
                            </div>
                        </div>
                        <a href="#chat" class="chatonline">
                            <p>Để giải quyết các thắc mắc của bạn về sản phẩm.</p>
                            <button>
                                Hỏi đáp trực tuyến
                            </button>
                        </a>
                    </div>
                </div>
                <!-- endproductmain -->
                <div class="productinfo">
                    <div class="detailinfo">
                        <div class="dtitle">
                            <p>CHI TIẾT SẢN PHẨM</p>
                        </div>
                        <div class="tableinfo">
                            <table>
                                @foreach ($product->getProps() as $name => $prop)
                                    <tr>
                                        <td>{{App\Property::getPropKey($name)}}</td>
                                        <td>{{$prop}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="description">
                        <div class="dtitle">
                            <p>MÔ TẢ SẢN PHẨM</p>
                        </div>
                        <div class="dgroup">
                            <div class="destext">
                                <h2>Đặc điểm nổi bật của Samsung Galaxy A30</h2>
                                <div class="productnews">
                                    <h2>
                                        Now farmer later thumb term full camera valley nearby improve slipped direction
                                        anyway lovely village activity bad protection anyone tribe shelter say evidence
                                        straight
                                    </h2>
                                    <div class="blocknew">
                                        <h3 class="hightlight">
                                            Màn hình lớn tương đương <a href="#">Galaxy S10+</a>
                                        </h3>
                                        <p class="nonetext">
                                            Có thể bạn sẽ bất ngờ bởi chiếc điện thoại Samsung mới sở hữu cho mình màn
                                            hình có kích thước lên tới 6.4 inch, tương đương với màn hình của chiếc
                                            Samsung <a href="#">Galaxy S10+</a>.
                                        </p>
                                        <img src="../assets/img/sp2.jpg" alt="">
                                        <p class="nonetext">
                                            Tuy nhiên khác với màn hình <a href="#">Infinity-O</a> trên người đàn anh
                                            đắt tiền thì Galaxy A30 sẽ sở hữu màn hình <a href="#">Infinity-U</a> hoàn
                                            toàn mới mẻ.
                                            Với tỷ lệ màn hình 19:9 đảm bảo cho bạn có một không gian trải nghiệm rộng
                                            rãi trên kích thước 6 inch nhưng vẫn tối ưu được diện tích tổng thể thân
                                            máy.
                                            Tuy nhiên khác với màn hình <a href="#">Infinity-O</a> trên người đàn anh
                                            đắt tiền thì Galaxy A30 sẽ sở hữu màn hình <a href="#">Infinity-U</a> hoàn
                                            toàn mới mẻ.
                                            Với tỷ lệ màn hình 19:9 đảm bảo cho bạn có một không gian trải nghiệm rộng
                                            rãi trên kích thước 6 inch nhưng vẫn tối ưu được diện tích tổng thể thân
                                            máy.
                                        </p>
                                    </div>
                                    <div class="blocknew">
                                        <h3 class="hightlight">
                                            Màn hình lớn tương đương <a href="#">Galaxy S10+</a>
                                        </h3>
                                        <p class="nonetext">
                                            Có thể bạn sẽ bất ngờ bởi chiếc điện thoại Samsung mới sở hữu cho mình màn
                                            hình có kích thước lên tới 6.4 inch, tương đương với màn hình của chiếc
                                            Samsung <a href="#">Galaxy S10+</a>.
                                        </p>
                                        <img src="../assets/img/sp4.jpg" alt="">
                                        <p class="nonetext">
                                            Tuy nhiên khác với màn hình <a href="#">Infinity-O</a> trên người đàn anh
                                            đắt tiền thì Galaxy A30 sẽ sở hữu màn hình <a href="#">Infinity-U</a> hoàn
                                            toàn mới mẻ.
                                            Với tỷ lệ màn hình 19:9 đảm bảo cho bạn có một không gian trải nghiệm rộng
                                            rãi trên kích thước 6 inch nhưng vẫn tối ưu được diện tích tổng thể thân
                                            máy.
                                            Tuy nhiên khác với màn hình <a href="#">Infinity-O</a> trên người đàn anh
                                            đắt tiền thì Galaxy A30 sẽ sở hữu màn hình <a href="#">Infinity-U</a> hoàn
                                            toàn mới mẻ.
                                            Với tỷ lệ màn hình 19:9 đảm bảo cho bạn có một không gian trải nghiệm rộng
                                            rãi trên kích thước 6 inch nhưng vẫn tối ưu được diện tích tổng thể thân
                                            máy.
                                        </p>
                                    </div>
                                    <div class="blocknew">
                                        <h3 class="hightlight">
                                            Màn hình lớn tương đương <a href="#">Galaxy S10+</a>
                                        </h3>
                                        <p class="nonetext">
                                            Có thể bạn sẽ bất ngờ bởi chiếc điện thoại Samsung mới sở hữu cho mình màn
                                            hình có kích thước lên tới 6.4 inch, tương đương với màn hình của chiếc
                                            Samsung <a href="#">Galaxy S10+</a>.
                                        </p>
                                        <img src="../assets/img/sp3.jpg" alt="">
                                        <p class="nonetext">
                                            Tuy nhiên khác với màn hình <a href="#">Infinity-O</a> trên người đàn anh
                                            đắt tiền thì Galaxy A30 sẽ sở hữu màn hình <a href="#">Infinity-U</a> hoàn
                                            toàn mới mẻ.
                                            Với tỷ lệ màn hình 19:9 đảm bảo cho bạn có một không gian trải nghiệm rộng
                                            rãi trên kích thước 6 inch nhưng vẫn tối ưu được diện tích tổng thể thân
                                            máy.
                                            Tuy nhiên khác với màn hình <a href="#">Infinity-O</a> trên người đàn anh
                                            đắt tiền thì Galaxy A30 sẽ sở hữu màn hình <a href="#">Infinity-U</a> hoàn
                                            toàn mới mẻ.
                                            Với tỷ lệ màn hình 19:9 đảm bảo cho bạn có một không gian trải nghiệm rộng
                                            rãi trên kích thước 6 inch nhưng vẫn tối ưu được diện tích tổng thể thân
                                            máy.
                                        </p>
                                    </div>
                                    <div class="blocknew" style="display:none">
                                        <h3 class="hightlight">
                                            Màn hình lớn tương đương <a href="#">Galaxy S10+</a>
                                        </h3>
                                        <p class="nonetext">
                                            Có thể bạn sẽ bất ngờ bởi chiếc điện thoại Samsung mới sở hữu cho mình màn
                                            hình có kích thước lên tới 6.4 inch, tương đương với màn hình của chiếc
                                            Samsung <a href="#">Galaxy S10+</a>.
                                        </p>
                                        <img src="../assets/img/sp5.jpg" alt="">
                                        <p class="nonetext">
                                            Tuy nhiên khác với màn hình <a href="#">Infinity-O</a> trên người đàn anh
                                            đắt tiền thì Galaxy A30 sẽ sở hữu màn hình <a href="#">Infinity-U</a> hoàn
                                            toàn mới mẻ.
                                            Với tỷ lệ màn hình 19:9 đảm bảo cho bạn có một không gian trải nghiệm rộng
                                            rãi trên kích thước 6 inch nhưng vẫn tối ưu được diện tích tổng thể thân
                                            máy.
                                            Tuy nhiên khác với màn hình <a href="#">Infinity-O</a> trên người đàn anh
                                            đắt tiền thì Galaxy A30 sẽ sở hữu màn hình <a href="#">Infinity-U</a> hoàn
                                            toàn mới mẻ.
                                            Với tỷ lệ màn hình 19:9 đảm bảo cho bạn có một không gian trải nghiệm rộng
                                            rãi trên kích thước 6 inch nhưng vẫn tối ưu được diện tích tổng thể thân
                                            máy.
                                        </p>
                                    </div>
                                    <div class="blocknew" style="display:none">
                                        <h3 class="hightlight">
                                            Màn hình lớn tương đương <a href="#">Galaxy S10+</a>
                                        </h3>
                                        <p class="nonetext">
                                            Có thể bạn sẽ bất ngờ bởi chiếc điện thoại Samsung mới sở hữu cho mình màn
                                            hình có kích thước lên tới 6.4 inch, tương đương với màn hình của chiếc
                                            Samsung <a href="#">Galaxy S10+</a>.
                                        </p>
                                        <img src="../assets/img/sp1.jpg" alt="">
                                        <p class="nonetext">
                                            Tuy nhiên khác với màn hình <a href="#">Infinity-O</a> trên người đàn anh
                                            đắt tiền thì Galaxy A30 sẽ sở hữu màn hình <a href="#">Infinity-U</a> hoàn
                                            toàn mới mẻ.
                                            Với tỷ lệ màn hình 19:9 đảm bảo cho bạn có một không gian trải nghiệm rộng
                                            rãi trên kích thước 6 inch nhưng vẫn tối ưu được diện tích tổng thể thân
                                            máy.
                                            Tuy nhiên khác với màn hình <a href="#">Infinity-O</a> trên người đàn anh
                                            đắt tiền thì Galaxy A30 sẽ sở hữu màn hình <a href="#">Infinity-U</a> hoàn
                                            toàn mới mẻ.
                                            Với tỷ lệ màn hình 19:9 đảm bảo cho bạn có một không gian trải nghiệm rộng
                                            rãi trên kích thước 6 inch nhưng vẫn tối ưu được diện tích tổng thể thân
                                            máy.
                                        </p>
                                    </div>
                                    <div class="readmore"><a href="javascript:void(0)" id="readtextmore">Đọc Thêm <i
                                                class="fas fa-angle-down"></i></a></div>
                                </div>
                            </div>
                            <div class="desnumber">
                                <div class="pbanner">
                                    <a href="#"><img src="../assets/img/pbanner1.png" alt=""></a>
                                </div>
                                <div class="pbanner">
                                    <a href="#"><img src="../assets/img/pbanner2.jpg" alt=""></a>
                                </div>
                                <div class="pbanner">
                                    <a href="#"><img src="../assets/img/pbanner1.png" alt=""></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="dtitle">
                            <p>ĐÁNH GIÁ SẢN PHẨM</p>
                        </div>
                        <div class="totalreview">
                            <div class="total">
                                <p>Đánh Giá Trung Bình</p>
                                <span class="rate">
                                    {{$product->getAvgReview()}}/5
                                </span>
                                <div class="stars">
                                    <ul>
                                        @for ($i = 1; $i <= $product->getAvgReview(); $i++)
                                            <li><i class="fas fa-star" style="color:orange"></i></li>
                                        @endfor
                                        @for ($i = 1; $i <= 5-$product->getAvgReview(); $i++)
                                            <li><i class="fas fa-star" style="color:#acacac"></i></li>
                                        @endfor
                                    </ul>
                                </div>
                                <span class="ratecount" style="color:#acacac">({{$product->getCountReview()}} Đánh giá)</span>
                            </div>
                            
                            <div class="statis">
                                <div class="liststatis">
                                    <ul>
                                        @php
                                            $i = 5;
                                        @endphp
                                        @foreach ($product->getPercentReview() as $percent)
                                            <li>
                                                <span>{{$i--}} <i class="fas fa-star" style="color:orange"></i></span>
                                                <div class="ratebar">
                                                <p style=" width:{{100-$percent}}%;"></p>
                                                </div>
                                            <span>{{$percent}}%</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="writereview">
                                <div>
                                    <p>Chia sẻ nhận xét về sản phẩm</p>
                                    <button><i class="fas fa-pen-alt"></i> Nhận xét về sản phẩm</button>
                                </div>
                            </div>
                        </div>
                        <div class="reviewlist">
                            <div class="rvtitle">
                                <p>Nhận xét</p>
                            </div>
                            <div class="rvlist">
                                @foreach ($product->getReviews() as $review)
                                <div class="rv">
                                        <div class="rvauthor">
                                            <img src="{{url($review->avatar ?? '')}}" alt="">
                                            <div>
                                            <p>{{$review->whoWrite()}}</p>
                                                <p>
                                                    @for ($i = 1; $i <= $review->star; $i++)
                                                        <span><i class="fas fa-star" style="color:orange" id="star"></i></span>
                                                     @endfor
                                                     @for ($i = 1; $i <= 5-$review->star; $i++)
                                                        <span><i class="fas fa-star" id="star"></i></span>
                                                     @endfor
                                                </p>
                                            <p class="rvcontent">{{$review->message ?? ''}}</p>
                                            
                                                <p class="rvgallery">
                                                    @foreach ($review->getImages() as $rvimg)
                                                        <img src="{{url($rvimg->src)}}" alt="{{$product->name}}">
                                                    @endforeach
                                                </p>
                                                <p class="rvat">
                                                    <i class="far fa-clock"> </i> {{date_format(date_create($review->create_at),"H:i:s d-m-Y")}}
                                                </p>
                                            </div>
                                            <a href="javascript:void(0)"><button><i class="far fa-thumbs-up"></i> <span>Hữu
                                                        ích</span></button></a>
                                        </div>
                                    </div> 
                                @endforeach
                                
                            </div>
                        </div>
                        
                        <div class="btnloadmore" id="pagination">
                            {{$product->getReviews()->links()}}
                        </div>
                    </div>
                </div>
                <!-- categoriesforyou -->

                <!-- endsearchtrending -->
                <div class="flashsales" id="foryou">
                    <div class="salestitle">
                        CÓ THỂ BẠN CŨNG THÍCH
                    </div>
                    <div class="salesproducts">


                        <div class="product">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product1.png" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                            </div>

                            <div class="salespercent">-30%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">449.000 <sup>đ</sup></span>
                                <span class="oldprice">563.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(458)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 427</span>
                            </div>
                            <div class="supaddress">
                                Đà Nẵng
                            </div>

                        </div>
                        <div class="product">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product.jpg" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                                <span id="new_trend"><img src="../assets/img/new.png" alt=""></span>
                            </div>
                            <div class="salespercent">-36%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">262.000 <sup>đ</sup></span>
                                <span class="oldprice">596.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(186)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 241</span>
                            </div>
                            <div class="supaddress">
                                Hà Nội
                            </div>
                        </div>
                        <div class="product">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product2.jpg" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                            </div>
                            <div class="salespercent">-25%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">235.000 <sup>đ</sup></span>
                                <span class="oldprice">504.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(493)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 402</span>
                            </div>
                            <div class="supaddress">
                                TP Hồ Chí Minh
                            </div>
                        </div>
                        <div class="product">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product3.jpg" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                                <span id="new_trend"><img src="../assets/img/new.png" alt=""></span>
                            </div>
                            <div class="salespercent">-31%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">410.000 <sup>đ</sup></span>
                                <span class="oldprice">577.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(455)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 447</span>
                            </div>
                            <div class="supaddress">
                                Đà Nẵng
                            </div>
                        </div>

                        <div class="product">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product5.jpg" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                            </div>
                            <div class="salespercent">-18%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">431.000 <sup>đ</sup></span>
                                <span class="oldprice">502.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(425)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 427</span>
                            </div>
                            <div class="supaddress">
                                Hà Nội
                            </div>
                        </div>
                        <div class="product ">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product1.png" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                            </div>
                            <div class="salespercent">-15%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">425.000 <sup>đ</sup></span>
                                <span class="oldprice">754.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(461)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 369</span>
                            </div>
                            <div class="supaddress">
                                Đà Nẵng
                            </div>
                        </div>
                        <div class="product ">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product2.jpg" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                            </div>
                            <div class="salespercent">-20%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">195.000 <sup>đ</sup></span>
                                <span class="oldprice">686.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(440)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 356</span>
                            </div>
                            <div class="supaddress">
                                Hải Phòng
                            </div>
                        </div>
                        <div class="product ">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product4.jpg" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                                <span id="new_trend"><img src="../assets/img/new.png" alt=""></span>
                            </div>
                            <div class="salespercent">-35%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">476.000 <sup>đ</sup></span>
                                <span class="oldprice">779.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(346)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 307</span>
                            </div>
                            <div class="supaddress">
                                Quảng Nam
                            </div>
                        </div>

                        <div class="product">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product1.png" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                            </div>
                            <div class="salespercent">-37%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">300.000 <sup>đ</sup></span>
                                <span class="oldprice">755.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(116)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 171</span>
                            </div>
                            <div class="supaddress">
                                Đà Nẵng
                            </div>
                        </div>
                        <div class="product ">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product.jpg" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                                <span id="new_trend"><img src="../assets/img/new.png" alt=""></span>
                            </div>
                            <div class="salespercent">-36%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">118.000 <sup>đ</sup></span>
                                <span class="oldprice">605.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(277)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 235</span>
                            </div>
                            <div class="supaddress">
                                Bình Dương
                            </div>
                        </div>
                        <div class="product flashnext1">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product1.png" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                            </div>

                            <div class="salespercent">-30%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">449.000 <sup>đ</sup></span>
                                <span class="oldprice">563.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(458)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 427</span>
                            </div>
                            <div class="supaddress">
                                Đà Nẵng
                            </div>

                        </div>
                        <div class="product flashnext1">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product.jpg" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                            </div>
                            <div class="salespercent">-36%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">262.000 <sup>đ</sup></span>
                                <span class="oldprice">596.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(186)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 241</span>
                            </div>
                            <div class="supaddress">
                                Hà Nội
                            </div>
                        </div>
                        <div class="product flashnext1">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product2.jpg" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                                <span id="new_trend"><img src="../assets/img/new.png" alt=""></span>
                            </div>
                            <div class="salespercent">-25%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">235.000 <sup>đ</sup></span>
                                <span class="oldprice">504.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(493)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 402</span>
                            </div>
                            <div class="supaddress">
                                TP Hồ Chí Minh
                            </div>
                        </div>
                        <div class="product flashnext1">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product3.jpg" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                            </div>
                            <div class="salespercent">-31%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">410.000 <sup>đ</sup></span>
                                <span class="oldprice">577.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(455)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 447</span>
                            </div>
                            <div class="supaddress">
                                Đà Nẵng
                            </div>
                        </div>

                        <div class="product flashnext1">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product5.jpg" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                                <span id="new_trend"><img src="../assets/img/new.png" alt=""></span>
                            </div>
                            <div class="salespercent">-18%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">431.000 <sup>đ</sup></span>
                                <span class="oldprice">502.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(425)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 427</span>
                            </div>
                            <div class="supaddress">
                                Hà Nội
                            </div>
                        </div>
                        <div class="product flashnext1">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product1.png" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                            </div>
                            <div class="salespercent">-15%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">425.000 <sup>đ</sup></span>
                                <span class="oldprice">754.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(461)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 369</span>
                            </div>
                            <div class="supaddress">
                                Đà Nẵng
                            </div>
                        </div>
                        <div class="product flashnext1">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product2.jpg" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                                <span id="new_trend"><img src="../assets/img/new.png" alt=""></span>
                            </div>
                            <div class="salespercent">-20%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">195.000 <sup>đ</sup></span>
                                <span class="oldprice">686.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(440)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 356</span>
                            </div>
                            <div class="supaddress">
                                Hải Phòng
                            </div>
                        </div>
                        <div class="product flashnext1">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product4.jpg" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                            </div>
                            <div class="salespercent">-35%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">476.000 <sup>đ</sup></span>
                                <span class="oldprice">779.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(346)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 307</span>
                            </div>
                            <div class="supaddress">
                                Quảng Nam
                            </div>
                        </div>

                        <div class="product flashnext1">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product1.png" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                            </div>
                            <div class="salespercent">-37%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">300.000 <sup>đ</sup></span>
                                <span class="oldprice">755.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(116)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 171</span>
                            </div>
                            <div class="supaddress">
                                Đà Nẵng
                            </div>
                        </div>
                        <div class="product flashnext1">
                            <div class="imgbox">
                                <a href="#viewflash"><img src="../assets/img/product.jpg" alt=""></a>
                                <div class="groupcart">
                                    <a href="#cartoption"> <button title="Thêm vào danh sách yêu thích"><i
                                                class="fas fa-heart"></i></button></a>
                                    <a href="#cartoption"> <button title="So sánh"><i
                                                class="fas fa-exchange-alt"></i></button></a>
                                    <a href="#cartoption"> <button title="Thêm vào giỏ hàng"><i
                                                class="fas fa-cart-plus"></i></button></a>
                                </div>
                            </div>
                            <div class="salespercent">-36%</div>
                            <div class="product_name"><a href="detail.html">Samsung Galaxy S8 64Gb, 4Gb Ram</a></div>
                            <div class="product_price">
                                <span class="newprice">118.000 <sup>đ</sup></span>
                                <span class="oldprice">605.000 <sup>đ</sup></span>
                            </div>
                            <div class="rating">
                                <p><i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <i class="fas fa-star" id="star"></i>
                                    <span id="review_count">(277)</span>
                                </p>
                                <span class="selled"><i class="fas fa-check-double"></i> 235</span>
                            </div>
                            <div class="supaddress">
                                Bình Dương
                            </div>
                        </div>
                    </div>
                    <div class="btnloadmore">
                        <button class="loadmore"><span><i class="fas fa-spinner loadingicon"></i></span><span
                                id="loadmoretext">Tải thêm <i class="fas fa-chevron-circle-down"></i></span></button>
                    </div>
                </div>
            </div>
            <!-- endbodycenter -->

        </div>
        <!-- endbody -->
        <!-- footer -->
        @extends('includes.footer')
</body>

</html>