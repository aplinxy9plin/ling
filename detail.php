<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Favicons -->
    <link rel="shortcut icon" href="#">
    <!-- Page Title -->
    <title>Listing &amp; Directory Website Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="css/set1.css">
    <!-- Swipper Slider -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_modal.css">
    <style>
    .borderless td, .borderless th {
      border: none;
    }
    </style>
</head>

<body onload="myMap()">
  <!-- Modal -->
  <div id="modal" class="modal_beer modal--align-top modal__bg" role="dialog" aria-hidden="true">
		<div class="modal__dialog">
			<div class="modal__content">
				<h3>Расчет стоимости</h3>
        <!--<div class="input-group">
          <input type="date" class="form-control">
          <p>на</p><input type="number" class="col-md-2">
        </div>-->
        <div class="dates form-inline" style="background-color: #ffedc9; position: absolute;left: 0;right: 0;margin: auto;">
          <div class="font-size:medium" style="margin-left: 40px;">
            <div class="dates-header">Выберите дату и длительность курса</div>
            <div class="dates-comment">курсы начинаются по понедельникам</div>
            <div style="display:inline;position:relative">
              <input class="form-control js-course-start-date valid" data-val="true" data-val-futuredate="" data-val-onlymondays="" id="CalcParams_Course_Start" name="CalcParams.Course.Start" onkeydown="return false" style="width:8em;display:inline" value="30.07.2018">
            </div>
            <span> </span> на
            <input class="form-control js-course-weeks valid" id="CalcParams_Course_Weeks" max="100" min="1" name="CalcParams.Course.Weeks" style="width:4em;display:inline" type="number" value="2">
            недели
          </div>
        </div><br>
        <div style="margin-top: 70px;">
          <table class="table borderless">
            <tbody>
              <tr>
                <td>Курс</td>
                <td></td>
                <td>30 000 ₽</td>
              </tr>
              <tr>
                <td>Проживание</td>
                <td></td>
                <td>30 000 ₽</td>
              </tr>
              <tr>
                <td>Сборы школы</td>
                <td></td>
                <td>4 000 ₽</td>
              </tr>
              <tr>
                <td>Приглашение для визы</td>
                <td></td>
                <td>0 ₽</td>
              </tr>
              <tr>
                <td>Проверка анкеты на визу</td>
                <td></td>
                <td>0 ₽</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="section section-courses js-courses-section" id="courses-section">
          <h3 id="course">Курс</h3>
          <div class="js-courses">
            <div>
              <div class="option">
                <div class="row">
                  <div class="col-sm-8 col-md-9">
                    <div class="bold" style="margin-bottom:0.5em">
                      <span style="margin-right:1em">
                        Детский курс английского языка
                      </span>
                    </div>
                    <div style="margin-bottom:.25em">
                      <span> От 5 до 13 лет </span>
                      <span style="margin:0 0.25em">•
                      </span> 10 учеников в группе
                      <span style="margin:0 0.25em">•</span>
                      <span>1 урок — 45 минут</span>
                    </div>
                    <div style="margin-bottom:.25em">
                      <span>Курс начинается каждый понедельник, есть группы всех уровней</span>
                    </div>
                    <div style="padding-left:20px">
                      <div class="radio">
                        <label style="font-weight:normal">
                          <input type="radio" name="price" value="45100" checked=""> 20 уроков в неделю (15 часов)
                        </label>
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-4 col-md-3 price">
                    <div>
                      <div style="margin:0.3em 0">
                        <span class="label label-danger" style="font-size:1.1em;padding:.1em .5em">
                          <span class="js-convert-money" data-original-currency="EUR" data-value="456.0000">
                            33&nbsp;361&nbsp;₽
                          </span>
                        </span>
                      </div>
                      <div>
                        <small>30 июля—10 августа</small>
                      </div>
                    </div>
                    <div style="margin-top:1em">
                      <a rel="nofollow" id="course_34800_description_toggle" href=".js-course-34800-description" data-toggle="collapse" class="dotted-underline" onclick="$(this).children().toggle()">
                        <span>Подробнее ▾
                        </span>
                        <span style="display: none;">Свернуть ▴
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="collapse js-course-34800-description" style="margin-top:1em">
                  <p>Детский курс выстраивает основные знания в английском, фокусируясь на простых глаголах, грамматике и словах. Курс разработан специально для детей. Обучение проходит эффективно и весело с использованием видео и упражнений в игровой форме.</p>
                  <p>Доброжелательная обстановка способствует активному участию детей в выполнении заданий и педагог создает позитивную атмосферу, в которой ученики чувствуют себя уверенно и спокойно.</p>
                </div>
              </div>
            </div>
            <div class="js-additional-courses" style="display: none;">
              <hr><div class="option additional">
                <div class="row">
                  <div class="col-sm-8 col-md-9">
                    <div class="bold" style="margin-bottom:0.5em">
                      <span style="margin-right:1em">
                        Детский курс английского языка
                      </span>
                    </div>
                    <div style="margin-bottom:.25em">
                      <span> От 5 до 13 лет </span>
                      <span style="margin:0 0.25em">•
                      </span> 10 учеников в группе
                      <span style="margin:0 0.25em">•</span>
                      <span>1 урок — 45 минут</span>
                    </div>
                    <div style="margin-bottom:.25em">
                      <span>Курс начинается каждый понедельник, есть группы всех уровней</span>
                    </div>
                    <div style="padding-left:20px">
                      <div class="radio">
                        <label style="font-weight:normal">
                          <input type="radio" name="price" value="45100" checked=""> 20 уроков в неделю (15 часов)
                        </label>
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-4 col-md-3 price">
                    <div>
                      <div style="margin:0.3em 0">
                        <span class="label label-danger" style="font-size:1.1em;padding:.1em .5em">
                          <span class="js-convert-money" data-original-currency="EUR" data-value="456.0000">
                            33&nbsp;361&nbsp;₽
                          </span>
                        </span>
                      </div>
                      <div>
                        <small>30 июля—10 августа</small>
                      </div>
                    </div>
                    <div style="margin-top:1em">
                      <a rel="nofollow" id="course_34800_description_toggle" href=".js-course-34800-description" data-toggle="collapse" class="dotted-underline" onclick="$(this).children().toggle()">
                        <span style="display: none;">Подробнее ▾
                        </span>
                        <span style="">Свернуть ▴
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="collapse js-course-34800-description" style="margin-top:1em">
                  <p>Детский курс выстраивает основные знания в английском, фокусируясь на простых глаголах, грамматике и словах. Курс разработан специально для детей. Обучение проходит эффективно и весело с использованием видео и упражнений в игровой форме.</p>
                  <p>Доброжелательная обстановка способствует активному участию детей в выполнении заданий и педагог создает позитивную атмосферу, в которой ученики чувствуют себя уверенно и спокойно.</p>
                </div>
              </div>
            </div>
            <div class="text-center" style="margin-top:0.5em" onclick="$('.js-additional-courses').slideToggle();$(this).children().toggle()">
              <a rel="nofollow" id="courses_all_expand" href="javascript:void(0)" class="bold btn btn-default" style="">
                 Еще 4 курса ▾
               </a>
                <a rel="nofollow" id="courses_all_collapse" style="display: none;" href="javascript:void(0)" class="btn btn-default">
                  Свернуть ▴
                </a>
            </div>
          </div>
        </div>
				<!-- modal close button -->
				<a href="" class="modal__close demo-close">
					<svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"/><path d="M0 0h24v24h-24z" fill="none"/></svg>
				</a>
			</div>
		</div>
	</div>
    <!--============================= HEADER =============================-->
    <div class="dark-bg sticky-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">LINGUAGO</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-menu"></span>
            </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                          <ul class="navbar-nav">
                            <li class="nav-item " style="background-color: #ff3a6d">
                                <a class="nav-link" href="schools.php?sort=offline">КУРСЫ ОФФЛАЙН</a>
                            </li><hr>
                            <li class="nav-item " style="background-color: #ff3a6d">
                                <a class="nav-link" href="schools.php?sort=online">КУРСЫ ОНЛАЙН</a>
                            </li><hr>
                            <li class="nav-item " style="background-color: #ff3a6d">
                                <a class="nav-link" href="teachers.php">УРОКИ ПО Skype</a>
                            </li><hr>
                              <li class="nav-item ">
                                  <a class="nav-link" href="#" aria-haspopup="true" aria-expanded="false">8-913-109-26-84</a>
                              </li>
                              <li class="nav-item ">
                                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Заказать обратный звонок</a>
                              </li>
                              <li class="nav-item ">
                                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Р</a>
                              </li>
                              <li class="nav-item ">
                                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RU</a>
                              </li>
                          </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--//END HEADER -->
    <!--============================= BOOKING =============================-->
    <div>
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php
                  include('bd.php');
                  $result = $mysqli->query("SELECT * FROM schools WHERE id = ".$_GET['id']."");
                  $images = "";
                  $array = [];
                  if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        array_push($array, $row);
                      }
                  } else {
                      echo "0 results";
                  }
                  $array = $array[0];
                  $images = $array["image"];
                  $image_array = explode(',', $images);
                  foreach ($image_array as $key) {
                    echo '<div class="swiper-slide">
                        <a href="'.$key.'" class="grid image-link">
                            <img src="'.$key.'" style="width: 672px; height: 414px;" class="img-fluid" alt="#">
                        </a>
                    </div>';
                  }
                  echo "<script>function myMap() {
                      var maplat = $('#map').data('lat');
                      var maplon = $('#map').data('lon');
                      var mapzoom = $('#map').data('zoom');
                      // Styles a map in night mode.
                      var map = new google.maps.Map(document.getElementById('map'), {
                          center: {lat: -34.397, lng: 150.644},
                          zoom: 8,
                          scrollwheel: false,
                          disableDefaultUI: true
                      });
                      var geocoder = new google.maps.Geocoder();
                      var array = ['".$array['address']."']
                      for (var i = 0; i < array.length; i++) {
                        var address = array[i];
                        geocoder.geocode({'address': address}, function(results, status) {
                          if (status === 'OK') {
                            map.setCenter(results[0].geometry.location);
                            var marker = new google.maps.Marker({
                              map: map,
                              position: results[0].geometry.location
                            });
                          }else{
                            alert('Geocode was not successful for the following reason: ' + status);
                          }
                        });
                      }
                  }
                  </script>";
                ?>
                <!--<div class="swiper-slide">
                    <a href="images/reserve-slide2.jpg" class="grid image-link">
                        <img src="images/reserve-slide2.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide1.jpg" class="grid image-link">
                        <img src="images/reserve-slide1.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide3.jpg" class="grid image-link">
                        <img src="images/reserve-slide3.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide1.jpg" class="grid image-link">
                        <img src="images/reserve-slide1.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide2.jpg" class="grid image-link">
                        <img src="images/reserve-slide2.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide3.jpg" class="grid image-link">
                        <img src="images/reserve-slide3.jpg" class="img-fluid" alt="#">
                    </a>
                </div>-->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
    <!--//END BOOKING -->
    <!--============================= RESERVE A SEAT =============================-->
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><?php echo $_GET['name'];?></h5>
                    <p><span>$$$</span>$$</p>
                    <p class="reserve-description"><?php echo($array["language"] . ", " . $array["country"]);?></p>
                </div>
                <div class="col-md-6">
                    <div class="reserve-seat-block">
                        <div class="reserve-rating">
                            <span>9.5</span>
                        </div>
                        <div class="review-btn">
                            <a href="#" class="btn btn-outline-danger">НАПИСАТЬ ОТЗЫВ</a>
                            <span>34 отзыва</span>
                        </div>
                        <div class="reserve-btn">
                            <div class="featured-btn-wrap">
                                <a href="" data-modal="#modal" class="modal__trigger btn btn-danger" style="color: white">ЗАБРОНИРОВАТЬ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END RESERVE A SEAT -->
    <!--============================= BOOKING DETAILS =============================-->
    <section class="light-bg booking-details_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8 responsive-wrap">
                    <div class="booking-checkbox_wrap">
                        <div class="booking-checkbox">
                            <!--<p>Tasty Hand-Pulled Noodles is a 1950s style diner located in Madison, Wisconsin. Opened in 1946 by Mickey Weidman, and located just across the street from Camp Randall Stadium, it has become a popular game day tradition amongst
                                many Badger fans. The diner is well known for its breakfast selections, especially the Scrambler, which is a large mound of potatoes, eggs, cheese, gravy, and a patrons’ choice of other toppings.</p>
                            <p>Mickies has also been featured on “Todd’s Taste of the Town” during one of ESPN’s college football broadcasts. We are one of the best Chinese restaurants in the New York, New York area. We have been recognized for our outstanding
                                Chinese & Asian cuisine, excellent Chinese menu, and great restaurant specials. We are one of the best Chinese restaurants in the New York, New York area. We have been recognized for our outstanding Chinese & Asian cuisine,
                                excellent Chinese menu, and great restaurant specials.</p>-->
                            <?php echo $array["info"];?>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                        <span class="ti-check-box"></span>
                        <span class="custom-control-description">Bike Parking</span>
                      </label> </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                       <span class="ti-check-box"></span>
                       <span class="custom-control-description">Wireless Internet  </span>
                     </label>
                            </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                     <span class="ti-check-box"></span>
                     <span class="custom-control-description">Smoking Allowed  </span>
                   </label> </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                    <span class="ti-check-box"></span>
                    <span class="custom-control-description">Street Parking</span>
                  </label>
                            </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                   <span class="ti-check-box"></span>
                   <span class="custom-control-description">Special</span>
                 </label> </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                  <span class="ti-check-box"></span>
                  <span class="custom-control-description">Accepts Credit cards</span>
                </label>
                            </div>
                        </div>
                    </div>
                    <div class="booking-checkbox_wrap mt-4">
                        <h5>34 Reviews</h5>
                        <hr>
                        <div class="customer-review_wrap">
                            <div class="customer-img">
                                <img src="images/customer-img1.jpg" class="img-fluid" alt="#">
                                <p>Amanda G</p>
                                <span>35 Reviews</span>
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>Best noodles in the Newyork city</h6>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="round-icon-blank"></span>
                                        <p>Reviewed 2 days ago</p>
                                    </div>
                                    <div class="customer-rating">8.0</div>
                                </div>
                                <p class="customer-text">I love the noodles here but it is so rare that I get to come here. Tasty Hand-Pulled Noodles is the best type of whole in the wall restaurant. The staff are really nice, and you should be seated quickly. I usually get the
                                    hand pulled noodles in a soup. House Special #1 is amazing and the lamb noodles are also great. If you want your noodles a little chewier, get the knife cut noodles, which are also amazing. Their dumplings are great
                                    dipped in their chili sauce.
                                </p>
                                <p class="customer-text">I love how you can see into the kitchen and watch them make the noodles and you can definitely tell that this is a family run establishment. The prices are are great with one dish maybe being $9. You just have to remember
                                    to bring cash.
                                </p>
                                <ul>
                                    <li><img src="images/review-img1.jpg" class="img-fluid" alt="#"></li>
                                    <li><img src="images/review-img2.jpg" class="img-fluid" alt="#"></li>
                                    <li><img src="images/review-img3.jpg" class="img-fluid" alt="#"></li>
                                </ul>
                                <span>28 people marked this review as helpful</span>
                                <a href="#"><span class="icon-like"></span>Helpful</a>
                            </div>
                        </div>
                        <hr>
                        <div class="customer-review_wrap">
                            <div class="customer-img">
                                <img src="images/customer-img2.jpg" class="img-fluid" alt="#">
                                <p>Kevin W</p>
                                <span>17 Reviews</span>
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>A hole-in-the-wall old school shop.</h6>
                                        <span class="customer-rating-red"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <p>Reviewed 3 months ago</p>
                                    </div>
                                    <div class="customer-rating customer-rating-red">2.0</div>
                                </div>
                                <p class="customer-text">The dumplings were so greasy...the pan-fried shrimp noodles were the same. So much oil and grease it was difficult to eat. The shrimp noodles only come with 3 shrimp (luckily the dish itself is cheap) </p>
                                <p class="customer-text">The beef noodle soup was okay. I added black vinegar into the broth to give it some extra flavor. The soup has bok choy which I liked - it's a nice textural element. The shop itself is really unclean (which is the case
                                    in many restaurants in Chinatown) They don't wipe down the tables after customers have eaten. If you peak into the kitchen many of their supplies are on the ground which is unsettling... </p>
                                <span>10 people marked this review as helpful</span>
                                <a href="#"><span class="icon-like"></span>Helpful</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 responsive-wrap">
                    <div class="contact-info">
                        <!--<img src="images/map.jpg" class="img-fluid" alt="#">-->
                        <div style="width:100%; height:200px" id="map"></div>
                        <div class="address">
                            <span class="icon-location-pin"></span>
                            <p> <?php echo $array["address"];?></p>
                        </div>
                        <div class="address">
                            <span class="icon-screen-smartphone"></span>
                            <p> <?php echo $array["phone"];?></p>
                        </div>
                        <div class="address">
                            <span class="icon-clock"></span>
                            <p>Mon - Sun 09:30 am - 05:30 pm <br>
                                <span class="open-now">OPEN NOW</span></p>
                        </div>
                        <a href="#" class="btn btn-outline-danger btn-contact">ЗАБРОНИРОВАТЬ</a>
                    </div>
                    <div class="follow">
                        <div class="follow-img">
                            <img src="images/follow-img.jpg" class="img-fluid" alt="#">
                            <h6>Christine Evans</h6>
                            <span>New York</span>
                        </div>
                        <ul class="social-counts">
                            <li>
                                <h6>26</h6>
                                <span>Listings</span>
                            </li>
                            <li>
                                <h6>326</h6>
                                <span>Followers</span>
                            </li>
                            <li>
                                <h6>12</h6>
                                <span>Followers</span>
                            </li>
                        </ul>
                        <a href="#">FOLLOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END BOOKING DETAILS -->
    <!--============================= FOOTER =============================-->
    <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-3" style="display: inline-block">
                  <div class="row">
                    <ul style="list-style: none">
                      <li><h6 style="color: #f8f8f8">О компании</h6></li>
                      <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">О нас</a></li>
                      <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Контакты</a></li>
                      <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Наши приемущества</a></li>
                      <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Условия использования сайта</a></li>
                      <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Обработка пресональных данных</a></li>
                      <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Вакансии</a></li>
                      <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Партнерская программа</a></li>
                      <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Карта сайта</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3" style="display: inline-block">
                  <div class="row">
                    <ul style="list-style: none; color: white">
                      <li><h6 style="color: #f8f8f8">Наши услуги</h6></li>
                      <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Языковые курсы по всему миру</a></li>
                      <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Курсы иностранных языков онлайн</a></li>
                      <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Уроки по Skype</a></li>
                      <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Консультации по оформлению виз</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3" style="display: inline-block">
                  <div class="row">
                    <ul style="list-style: none">
                      <li><a href="#" class="btn" style="background-color: #ff3a6d; color: #f8f8f8">Внести оплату по карте</a></li><br>
                      <li><a href="add_school.php" style="color: #f8f8f8; text-decoration: underline;">Зарегистрировать школу</a></li>
                      <li><a href="#" style="color: #f8f8f8; text-decoration: underline;">Войти</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-2" style="display: inline-block">
                  <div class="row">

                    <div class="copyright">
                        <ul style="margin: 0px 0 0">
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                        </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->




    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Magnific popup JS -->
    <script src="js/jquery.magnific-popup.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?v=3.exp&callback=myMap&key=AIzaSyAAU3XOPaAGyJzmNRAggy0mA167K06Cs4k&sensor=false"></script>
    <!-- Swipper Slider JS -->
    <script src="js/swiper.min.js"></script>
    <script src="js/modal.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        if ($('.image-link').length) {
            $('.image-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
        if ($('.image-link2').length) {
            $('.image-link2').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
    </script>
</body>

</html>
