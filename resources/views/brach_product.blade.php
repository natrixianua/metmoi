<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---------Seo--------->
    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    <link  rel="icon" type="image/x-icon" href="" />
    
    {{--   <meta property="og:image" content="{{$image_og}}" />  
    <meta property="og:site_name" content="http://localhost/tutorial_youtube/shopbanhanglaravel" />
    <meta property="og:description" content="{{$meta_desc}}" />
    <meta property="og:title" content="{{$meta_title}}" />
    <meta property="og:url" content="{{$url_canonical}}" />
    <meta property="og:type" content="website" /> --}}
    <!--//-------Seo--------->
    <title>{{$meta_title}}</title>

    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">


    <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
    <!--     <link href="header.css" rel="stylesheet"> -->
    <link href="{{asset('fullll.css')}}" rel="stylesheet">
    <link href="{{asset('section2.css')}}" rel="stylesheet">
    <link href="{{('responsivefrontend.css')}}" rel="stylesheet"> 
    <!--      -->
    <link href="{{asset('public/frontend/css/jquery.convform.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->       
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="shortcut icon" href="{{('public/frontend/images/favicon.ico')}}">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<style>
      header{
  background-color: #d3d3d3;
  background-image: linear-gradient(315deg, #d3d3d3 0%, #7f8c8d 24%);

      background-size:cover;
      background-position: center;
      background-repeat: no-repeat;
      
      width: 100vw;
      overflow: hidden;

  }
   #slide-out{
          background-color: transparent;
         box-shadow: 10px 10px 20px 0px #666;
         width: 17.5%;
      }  
  .panel.panel-default {
    background-color: transparent;
    transition: 0.4s  ease-out;

  }
  .panel-title {
    text-transform: uppercase;
     border-radius: 30px;
     border-bottom: 2px solid black;  
     text-align: center;
     width: 80%;
     margin-left: 10%;
  }

  .panel.panel-default:hover{
    transform: scale(1.1);
  }
  .panel-group .panel{
      border: none;
  }
  nav{
      background-color: transparent;
  }
  .nav-wrapper ul{
    margin-right: 20%;
  }
  .nav-wrapper ul li{
      margin-left: 5rem;

  }
  .title.text-center{
      color: white;
       
      width: 25%;
   
       position: relative;
       left: 38%;
       border-bottom: 2px solid white;
       margin-bottom: 5%;
       font-size: 200%;
       font-weight: 700;
  }
  .panel-group.category-products{
      margin-top: 25%;
      margin-bottom: 20%;
  }
   .swiper-container {
        width: 90%;
        height: 30vh;
        margin-top: 2%;

      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }
  .swiper-slide{
      width: 100%;
      height: 100%;
  }
  .single-products strong{
      color: #bf081f;
      font-size: 150%;
      font-weight: 700;
  }
  .single-products img{
      width: 70%;
      margin: 15%;
    height: 18rem;
  }
  .single-products:hover a{
      text-decoration: none;
  }
  .branch:hover{
     text-decoration: none;
  }
  .product-image-wrapper{
    border: 1px dotted black;
    border-radius: 10px;
  }
  .branch strong{
    display: block;
  }


  .branch h4{
    font-size: 120%;
    color: white;
   

  }
  .branch img{
    transition: 0.5s ease-out; 
  }
  .branch:hover img{
    transform: translate(0%, -5%);
  }
  .branch input{
    margin-bottom: 5%;
    margin-top: 2%;
  }
  #nav-mobile li a{
    text-decoration: none;
    color: white;
    font-size: 100%;


  }
    #slide-out ul{
      height: 100%;
    }

  #slide-out ul li a{
    text-decoration: none; 

  }
  .slider{
   
  width: 90%;
  height: 20vh;
  border-radius: 10px;
  overflow: hidden;

 margin-left: 7%;
}
.slides{
  width: 500%;
  height: 20vh;
  display: flex;
}
.slides input{
  display: none;
}

.slide{
  width: 20%;
  transition: 2s;
}
.slide img{
  width: 100%;
  height: 100%;
}
.navigation-manual{
position: absolute;
bottom: 10%;
left: 40%;
}
.navigation-auto{
 opacity: 0;
}
.manual-btn{
  border:2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
}
.manual-btn:not(:last-child){
  margin-right: 40px;
}
.manual-btn:hover{
  background:  #40D3DC;
}
#radio1:checked ~ .first{
  margin-left: 0;
}
#radio2:checked ~ .first{
  margin-left: -20%;
}
#radio3:checked ~ .first{
  margin-left: -40%;
}
#radio4:checked ~ .first{
  margin-left: -60%;
}
.navigation-auto{
  position: absolute;
  display: flex;
  width: 800px;
  justify-content: center;
  margin-top: 23%;
}
.navigation-auto div{
  border:2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  transition: 1s;
}
.navigation-auto div:not(:last-child){
  margin-right: 40px; 
}
#radio1:checked ~ .navigation-auto .auto-btn1{
  background: #40D3DC;
}
#radio2:checked ~ .navigation-auto .auto-btn2{
  background: #40D3DC;
}
#radio3:checked ~ .navigation-auto .auto-btn3{
  background: #40D3DC;
}
#radio4:checked ~ .navigation-auto .auto-btn4{
  background: #40D3DC;
}

.swiper-container{
  height: 75vh;
  width: 14vw;

}
.footer{
  height: 20vh;
}
.btn.btn-primary.btn-sm{
  border-radius: 10px;
}
.features_items{
  z-index: 1;
}
</style>

<body>
   <header>
     
   <!-- /header -->
     <div class="header-bottom" style="overflow: hidden"><!--header-bottom-->
            <div class="container">
           
                <div class="row" >
                   
                    <div class="col-sm-1">
                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                       
                    </div>
                  
                    <div class="col-sm-7">
                        <div class="shop-menu pull-right">
                            <ul id="navmenu"class="nav navbar-nav navbar-collapse">
                               
                               <li><a href="{{URL::to('/trang-chu')}}" class="active"><i class="fa fa-home"></i>TRANG CHỦ</a></li>
                                  
                                </li> 
                                <?php
                                   $customer_id = Session::get('customer_id');
                                   $shipping_id = Session::get('shipping_id');
                                   if($customer_id!=NULL && $shipping_id==NULL){ 
                                 ?>
                                  <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i>THANH TOÁN</a></li>
                                
                                <?php
                                 }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                 ?>
                                 <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i>THANH TOÁN</a></li>
                                 <?php 
                                }else{
                                ?>
                                 <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> THANH TOÁN</a></li>
                                <?php
                                 }
                                ?>
                                

                                <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> GIỎ HÀNG</a></li>
                                <?php
                                   $customer_id = Session::get('customer_id');
                                   if($customer_id!=NULL){ 
                                 ?>
                                  <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i>ĐĂNG XUẤT</a></li>
                                
                                <?php
                            }else{
                                 ?>
                                 <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> ĐĂNG NHẬP</a></li>
                                 <?php 
                             }
                                 ?>
                               
                            </ul>
                        </div>
                    </div>
                     <div class="col-sm-4">
                        <form action="{{URL::to('/tim-kiem')}}" autocomplete="off" method="POST">
                            {{csrf_field()}}
                        <div class="search_box">

                            <input type="text" style="width: 100%" name="keywords_submit" id="keywords" placeholder="Tìm kiếm sản phẩm"/>
                           <div id="search_ajax"></div>

                           <input type="submit" style="margin-top:0;color:#666" name="search_items" class="btn btn-primary btn-sm" value="Tìm kiếm ">

                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
   <!-- swiper -->

    <!-- Add Pagination -->
   

  <!--  -->
  <div class="navside" >
  
      <ul  id="slide-out" class="sidenav " style="background-color: transparent">
    
      <div class="panel-group category-products" id="accordian">
        <h6 style="text-align: center; margin-bottom: 5vh; color:#FE980F;font-weight: 700;">DANH MỤC SẢN PHẨM</h6><!--category-productsr-->
                          @foreach($category as $key => $cate)
                           
                            <ul class="panel panel-default">
                                
                                    <li style=" background-color: transparent;"  class="panel-title"><a style="color:white" href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a></li>
                                
                            </ul>
                        @endforeach
                        </div>

 
    <li><div class="divider"></div></li>
     <div class="panel-group category-products" >
        <h6 style="text-align: center; margin-bottom: 5vh; color:#FE980F;font-weight: 700;">THƯƠNG HIỆU SẢN PHẨM</h6><!--category-productsr-->
                           @foreach($brand as $key => $brand)
                           
                            <ul class="panel panel-default">
                                
                                    <li style=" background-color: transparent;"  class="panel-title"><a style="color:white" href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$brand->brand_name}}</a></li>
                                
                            </ul>
                        @endforeach
                        </div>
  </ul>
</div>


  <button  type="button" href="#" data-target="slide-out" class="sidenav-trigger confirm btn btn-lg btn-success" style="position:fixed;top:0;left:0;">DANH MỤC</button> 


  <!-- slide -->
   <!--  <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="https://images.search.yahoo.com/images/view;_ylt=Awr9Hr6BI4RgUjAAb76JzbkF;_ylu=c2VjA3NyBHNsawNpbWcEb2lkAzY3MTBhMzA3N2ZkNGI5NzZhZTFlYTlmMDJmOGUxY2E5BGdwb3MDMwRpdANiaW5n?back=https%3A%2F%2Fimages.search.yahoo.com%2Fsearch%2Fimages%3Fp%3D%25E1%25BA%25A3nh%2Bgame%26fr%3Dmcafee%26fr2%3Dpiv-web%26tab%3Dorganic%26ri%3D3&w=1920&h=1280&imgurl=wall.vn%2Fwp-content%2Fuploads%2F2020%2F04%2Fhinh-nen-game-dep-6.jpg&rurl=https%3A%2F%2Fwall.vn%2Fhinh-nen-game-full-hd-dep-sieu-net.html&size=533.0KB&p=%E1%BA%A3nh+game&oid=6710a3077fd4b976ae1ea9f02f8e1ca9&fr2=piv-web&fr=mcafee&tt=Chia+s%E1%BA%BB+100+h%C3%ACnh+n%E1%BB%81n+game+Full+HD+%C4%91%E1%BA%B9p+si%C3%AAu+n%C3%A9t+cho+game+th%E1%BB%A7&b=0&ni=21&no=3&ts=&tab=organic&sigr=_ew7ZpOTLf7X&sigb=Dey4DC1hqrBQ&sigi=cDY9cSsLHtsG&sigt=iZXAsuKSKqZi&.crumb=eDNy1GN/WZz&fr=mcafee&fr2=piv-web" alt=""></a>
    <a class="carousel-item" href="#two!"></a>
    <a class="carousel-item" href="#three!"></a>
    <a class="carousel-item" href="#four!"></a>
    <a class="carousel-item" href="#five!"></a>
  </div> -->
<div class="features_items"><!--features_items-->
                       
                  <div class="row">
                   <div class="col-sm-2"></div>
                    <div class="col-sm-8" >
                      @yield('content')
                    </div><!--features_items-->
                     <div class="col-sm-2" >
                         <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
                </div>
            </div>
              </div>
              </header>
<footer>
  <style type="text/css">
    *{
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     font-family: Roboto;
     }
    body{
         display: flex;
         justify-content: flex-end;
         align-items: center;
         min-height: 100vh;
         flex-direction: column;
         
     }
    footer{
         position: relative;
         width: 100%;
         height: auto;
         padding: 50px 100px;
         background: #111;
         
         justify-content: space-between;
         flex-wrap: wrap;
     }
    footer .hoangfooter{
         display: flex;
         justify-content: space-between;
         flex-wrap: wrap;
         flex-direction: row;

     }

 footer .hoangfooter .noi-dung{
     margin-right: 30px;
 }
footer  .hoangfooter .noi-dung.about{
     width:40%;
 }
 footer .hoangfooter .noi-dung.about h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
 footer .hoangfooter .noi-dung.about h2:before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background: #f00;
 }
footer .hoangfooter .noi-dung.about p{
     color: #999;
 }
 /*Thiết Lập Cho Thành Phần Icon Mạng Xã Hội*/
 .social-icon{
     margin-top: 20px;
     display: flex;
 }
.social-icon li {
     list-style: none;
 }
 .social-icon li a{
     display: inline-block;
     width: 40px;
     height: 40px;
     background: #222;
     display: flex;
     justify-content: center;
     align-items: center;
     margin-right: 10px;
     text-decoration: none;
     border-radius: 4px;
 }
.social-icon li a:hover{
     background: #f00;
 }
.social-icon li a .fa{
     color: #fff;
     font-size: 20px;
 }
.links h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
 .links h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
.links h2::before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background: #f00;
 }
.links{
    position: relative;
    width: 25%;
   
 }
 .links ul li{
     list-style: none;
 }
 .links ul li a{
     color: #999;
     text-decoration: none;
     margin-bottom: 10px;
     display: inline-block;
 }
.links ul li a:hover{
     color: #fff;
 }

 .contact h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
.contact h2::before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background: #f00;
 }
.contact{
    position: relative;
     width: calc(35% - 60px);
    margin-right: 0 !important;
 }
.contact .info{
     position: relative;
 }
 .contact .info li{
     display: flex;
     margin-bottom: 16px;
 }
 .contact .info li span:nth-child(1) {
     color: #fff;
     font-size: 20px;
      }
.contact .info li span{
     color: #999;
 }
.contact .info li a{
     color: #999;
     text-decoration: none;
 }
 .btn {
     display: inline-block;
     background: transparent;
     color: inherit;
     font: inherit;
     border: 0;
     outline: 0;
     padding: 0;
     margin-top:16px;
     transition: all 200ms ease-in;
     cursor: pointer;
 }
 .btn--primary {
     background: #222;
     color: #fff;
     box-shadow: 0 0 10px 2px rgba(0, 0, 0, .1);
     border-radius: 2px;
     padding: 8px 24px;
 }
 .btn--primary:hover {
     background: #f00;
 }
 .btn--primary:active {
     background: #f00;
     box-shadow: inset 0 0 10px 2px rgba(0, 0, 0, .2);
 }
.form__field {
     width: 90%;
     background: #fff;
     color: #a3a3a3;
     font: inherit;
     box-shadow: 0 6px 10px 0 rgba(0, 0, 0, .1);
     border: 0;
     outline: 0;
     padding: 8px 4px;
 }

 @media  (max-width: 768px){
     footer{
         padding: 40px;
              }
     footer .hoangfooter{
         flex-direction: column;
     }
     footer .hoangfooter .noi-dung{
         margin-right: 0;
         margin-bottom: 40px;
     }
     footer .hoangfooter, .noi-dung.about, .links, .contact{
         width: 100%;
     }
 }
  </style>
     <div class="hoangfooter">
         <!--Bắt Đầu Nội Dung Giới Thiệu-->
         <div class="noi-dung about">
             <h2 style="font-size: 20px;">Về chúng tôi</h2>
             <p>We and our partners store and/or access information on a device, such as unique IDs in cookies to process personal data. You may accept or manage your choices by clicking below, including your right to object where legitimate interest is used, or at any time in the privacy policy page. These choices will be signaled to our partners and will not affect browsing data.</p>
             <ul class="social-icon">
                 <li><a href="https://www.facebook.com/profile.php?id=100022865804555"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="https://www.facebook.com/profile.php?id=100022865804555"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="https://www.facebook.com/profile.php?id=100022865804555"><i class="fa fa-instagram"></i></a></li>
                 <li><a href="https://www.facebook.com/profile.php?id=100022865804555"><i class="fa fa-youtube"></i></a></li>
             </ul>
         </div>
         <!--Kết Thúc Nội Dung Giới Thiệu-->
         <!--Bắt Đầu Nội Dung Đường Dẫn-->
         <div class="noi-dung links">
             <h2 class="duongdan" style="font-size: 20px;">Đường Dẫn</h2>
             <ul>
                 <li><a href="#">Trang Chủ</a></li>
                 <li><a href="#">Về Chúng Tôi</a></li>
                 <li><a href="#">Thông Tin Liên Lạc</a></li>
                 <li><a href="#">Dịch Vụ</a></li>
                 <li><a href="#">Điều Kiện Chính Sách</a></li>
             </ul>
         </div>
         <!--Kết Thúc Nội Dung Đường Dẫn-->
         <!--Bắt Đâu Nội Dung Liên Hệ-->
         <div class="blankkk">
           

         </div>
         <div class="noi-dung contact">
             <h2 class="thongtin" style="font-size: 20px;">Thông Tin Liên Hệ</h2>
             <ul class="info">
                 <li>
                     <span><i class="fa fa-map-marker"></i></span>
                     <span>193 Nguyễn Lương Bằng<br />
                         Hòa khánh bắc, Thành Phố Đà Nẵng<br />
                         Việt Nam</span>
                 </li>
                 <li>
                     <span><i class="fa fa-phone"></i></span>
                     <p><a href="#">+84 967855754</a>
                         <br />
                         <a href="#">+84 999999999</a></p>
                 </li>
                 <li>
                     <span><i class="fa fa-envelope"></i></span>
                     <p><a href="#">dnd.hoang@gmail.com</a></p>
                </li>
                 <li>
                     <form class="form">
                         <input type="email" class="form__field" placeholder="Đăng Ký Subscribe Email" />
                         <button type="button" class="btn btn--primary  uppercase">Gửi</button>
                     </form>
                 </li>
             </ul>
         </div>
         <!--Kết Thúc Nội Dung Liên Hệ-->
     </div>
 </footer><!--/Footer-->
                
      
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
     <script src="{{asset('public/frontend/js/jquery.convform.js')}}"></script> 
<script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=2339123679735877&autoLogAppEvents=1"></script>
<script type="text/javascript">
  $(document).ready(function(){  

    load_comment();

        function load_comment(){
              var product_id = $('.comment_product_id').val();
              var _token = $('input[name="_token"]').val();
              $.ajax({
              url:'{{url('/load-comment')}}',
              method:"POST",
              data:{product_id:product_id, _token:_token},
              success:function(data){
               
                $('#comment_show').html(data);
              }
             });
        }    
        $('.send-comment').click(function(){
            var product_id = $('.comment_product_id').val();
            var comment_name = $('.comment_name').val();
            var comment_content = $('.comment_content').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
              url:'{{url('/send-comment')}}',
              method:"POST",
              data:{product_id:product_id,comment_name:comment_name,comment_content:comment_content, _token:_token},
              success:function(data){
                $('#notify_comment').html('<span class="text text-success">Thêm bình luận thành công , bình đang chờ kiểm duyệt</span>');
                load_comment();
                $('#notify_comment').fadeOut(7000);
                $('.comment_name').val('');
                $('.comment_content').val('');
              }
             });

        });
  });
</script>
<script type="text/javascript">
    $('#keywords').keyup(function(){
        var query = $(this).val();

          if(query != '')
            {
             var _token = $('input[name="_token"]').val();

             $.ajax({
              url:"{{url('/autocomplete-ajax')}}",
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data){
               $('#search_ajax').fadeIn();  
                $('#search_ajax').html(data);
              }
             });

            }else{

                $('#search_ajax').fadeOut();  
            }
    });

    $(document).on('click', '.li_search_ajax', function(){  
        $('#keywords').val($(this).text());  
        $('#search_ajax').fadeOut();  
    }); 
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.add-to-cart').click(function(){

            var id = $(this).data('id_product');
                // alert(id);
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                if(parseInt(cart_product_qty)>parseInt(cart_product_quantity)){
                    alert('Làm ơn đặt nhỏ hơn ' + cart_product_quantity);
                }else{

                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token,cart_product_quantity:cart_product_quantity},
                        success:function(){

                            swal({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{url('/gio-hang')}}";
                            });

                        }

                    });
                }

                
            });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';

            if(action=='city'){
                result = 'province';
            }else{
                result = 'wards';
            }
            $.ajax({
                url : '{{url('/select-delivery-home')}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                 $('#'+result).html(data);     
             }
         });
        });
    });

</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.calculate_delivery').click(function(){
            var matp = $('.city').val();
            var maqh = $('.province').val();
            var xaid = $('.wards').val();
            var _token = $('input[name="_token"]').val();
            if(matp == '' && maqh =='' && xaid ==''){
                alert('Làm ơn chọn để tính phí vận chuyển');
            }else{
                $.ajax({
                    url : '{{url('/calculate-fee')}}',
                    method: 'POST',
                    data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
                    success:function(){
                     location.reload(); 
                 }
             });
            } 
        });
    });
</script>
  <script>
    
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  </script>
  <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter =1 ;
      }
    },5000);
  </script>
  <script>
      $(document).ready(function(){
        $('.chaticon').click(function(event){
          $('.chatbot').toggleClass('active');
          $('.close').toggleClass('show')
          $('.close').toggleClass('animate__backInUp ')
          
        });


        $('.conv-form-wrapper').convform({selectInputStyle: 'disable'});
      })
  </script>
  <script>
      $(document).ready(function(){
        $('.close').click(function(event){
            $('.chatbot').removeClass('active');
            $('.close').removeClass('show');        })
      })
  </script>
  <script >
    var TxtRotate = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 4000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };
  
  TxtRotate.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];
  
    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }
  
    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
  
    var that = this;
    var delta = 300 - Math.random() * 100;
  
    if (this.isDeleting) { delta /= 2; }
  
    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }
  
    setTimeout(function() {
      that.tick();
    }, delta);
  };
  
  window.onload = function() {
    var elements = document.getElementsByClassName('text');
    for (var i=0; i<elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-rotate');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtRotate(elements[i], JSON.parse(toRotate), period);
      }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
    document.body.appendChild(css);
  };
</script>
 <script>
        var swiper = new Swiper('.swiper-container', {
            direction: 'vertical',
            slidesPerView: 1,
            spaceBetween: 30,
            mousewheel: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
        });
    </script>
</body>
</html>