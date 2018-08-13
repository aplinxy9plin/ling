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
    <!-- Page Title -->
    <title>LINGUAGO</title>
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
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
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
                                        <a class="nav-link" href="javascript:alert('Мы вам перезвоним')" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Заказать обратный звонок</a>
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
    </div>
    <!-- SLIDER -->
    <section class="slider d-flex align-items-center">
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1 style="font-size: 4em">ЯЗЫКОВЫЕ КУРСЫ ПО ВСЕМУ МИРУ</h1>
                                    <h5 style="font-size: 2em">ПОЗНАВАЙ МИР ВМЕСТЕ С LINGUAGO</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <form class="form-wrap mt-4" action="schools.php" method="GET">
                                    <div class="btn-group" role="group" aria-label="Basic example">

                                        <select name="language" id="language" class="btn-group1" onchange="selectChange()">
                                          <option>Английский</option>
                                          <option>Немецкий</option>
                                          <option>Испанский</option>
                                        </select>
                                        <select name="country" id="country" class="btn-group2">
                                          <option>США (5)</option>
                                          <option>Англия (2)</option>
                                        </select>
                                        <button type="submit" class="btn-form"><span class="icon-magnifier search-icon"></span>НАЙТИ ШКОЛЫ<i class="pe-7s-angle-right"></i></button>
                                    </div>
                                </form>
                                <div class="slider-link col-md-12">
                                    <!--<h5>Популярные направления:</h5><a href="#">Лондон</a><span>•</span><a href="#">Дублин</a><span>•</span><a href="#">Нью-Йорк</a><span>•</span><a href="#">Мальта</a>-->
                                    <div class="col-md-3" style="display: inline">
                                      <h5 style="color: white; display: inline">2302 школ</h5>
                                    </div>
                                    <span>•</span>
                                    <div class="col-md-3" style="display: inline">
                                      <h5 style="color: white; display: inline">200 городов</h5>
                                    </div>
                                    <span>•</span>
                                    <div style="display: inline">
                                      <h5 style="color: white; display: inline">122200 счастливых учеников</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// SLIDER -->
    <!--//END HEADER -->
    <!--============================= FEATURED PLACES =============================-->
    <?php
      include('bd.php');
      $result = $mysqli->query("SELECT * FROM schools");
      $images = "";
      $array = [];
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            array_push($array, $row);
          }
      } else {
          echo "0 results";
      }
      //var_dump(array_unique($array[1]));
      $countrys = [];
      $languages = [];
      foreach ($array as $key) {
        //запилить двумерный массив, типа ["Английский" => "США", "Англия"]
        array_push($countrys, $key["country"]);
        array_push($languages, $key["language"]);
      }
      $x = $countrys[0];
      $y = $languages[0];
      $a = array_unique($countrys);
      $b = array_unique($languages);
      $languages = [];
      $countrys = [];
      foreach ($a as $key) {
        if($key !== NULL){
          array_push($countrys, $key);
        }
      }
      foreach ($b as $key) {
        if($key !== NULL){
          array_push($languages, $key);
        }
      }
      $arr = [];
      foreach ($languages as $key) {

      }
      //$result = $mysqli->query("SELECT * FROM schools WHERE language = ")
    ?>
    <section class="main-block light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="styled-heading">
                      <h1 style="font-size: 3.5em; color: black">ПОМОЖЕМ ВЫБРАТЬ ШКОЛУ МЕЧТЫ</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 category-responsive">
                  <a href="#" class="category-wrap">
                      <div class="category-block">
                          <img src="images/school.svg" width="190px">
                          <h6 style="font-size: 2em">Запись в школу и решение любых вопросов</h6>
                      </div>
                  </a>
                </div>
                <div class="col-md-4 category-responsive">
                  <a href="#" class="category-wrap">
                      <div class="category-block">
                          <img src="images/visa.svg" width="190px">
                          <h6 style="font-size: 2em">Помощь в оформление <br>визы</h6>
                      </div>
                  </a>
                </div>
                <div class="col-md-4 category-responsive">
                  <a href="#" class="category-wrap">
                      <div class="category-block">
                          <img src="images/operator.svg" width="190px">
                          <h6 style="font-size: 2em">Консультация по выбору <br>школу</h6>
                      </div>
                  </a>
                </div>
            </div>
    </section>
    <!--============================= ADD LISTING =============================-->
    <section class="main-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="add-listing-wrap">
                        <h2>КАК БРОНИРОВАТЬ КУРС НА LINGUAGO</h2>
                        <center><img src="images/plan.png" width="700px"></center>
                        <!--<p>Начни учиться за границей прямо сейчас</p>-->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-btn-wrap">
                        <a href="#" class="btn btn-danger">НАЧАТЬ СЕЙЧАС</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END ADD LISTING -->
    <section class="main-block light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="styled-heading">
                      <h1 style="color: black">ЛУЧШИЕ ПРЕДЛОЖЕНИЯ</h1>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php
                //var_dump($array);
                for ($i=1; $i < 4; $i++) {
                  echo '<div class="col-md-4 featured-responsive">
                      <div class="featured-place-wrap">
                          <a href="detail.php?name='.$array[$i]["name"].'&id='.$array[$i]["id"].'">
                              <img src="sc/1.jpg" class="img-fluid" alt="#">
                              <span class="featured-rating-green">9.5</span>
                              <div class="featured-title-box">
                                  <h6>'.$array[$i]["name"].'</h6>
                                  <p>'.$array[$i]["language"].', '.$array[$i]["country"].' </p> <span>• </span>
                                  <p>4 Отзыва</p> <span> • </span>
                                  <p><span>$$$</span>$$</p>
                                  <ul>
                                      <li><span class="icon-location-pin"></span>
                                          <p>'.$array[$i]["address"].'</p>
                                      </li>
                                      <li><span class="icon-screen-smartphone"></span>
                                          <p>'.$array[$i]["phone"].'</p>
                                      </li>
                                  </ul>
                                  <div class="bottom-icons">
                                      <div class="open-now">ВЫБРАТЬ</div>
                                      <span class="ti-heart"></span>
                                      <span class="ti-bookmark"></span>
                                  </div>
                              </div>
                          </a>
                      </div>
                  </div>';
                }
              ?>

            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-btn-wrap">
                        <a href="schools.php?language=Английский&country=США" class="btn btn-danger">ПОКАЗАТЬ ВСЕ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="add-listing-wrap">
                        <h2>Выбор миллиона людей</h2>
                        <p>Начни учиться за границей прямо сейчас</p>
                    </div>
                    <center><div class="row mt-50">
                      <div class="col-lg-4">
                          <div class="single-team">
                              <div class="member-img">
                                  <img class="img-fluid mx-auto" src="images/t1.png" alt="">
                              </div>
                              <div class="details"><br>
                                  <h4>Петр Петров</h4>
                                  <p>За 6 недель я встретила только 4 человека, кто говорил на русском.</p>
                                  <p>🇷🇺 О школе <a href="detail.php?name=Kings Лос-Анджелес (Голливуд)&id=2">Kings Лос-Анджелес (Голливуд)</a></p>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="single-team">
                              <div class="member-img">
                                  <img class="img-fluid mx-auto" src="images/t2.png" alt="">
                              </div>
                              <div class="details"><br>
                                  <h4>Иван Иванов</h4>
                                  <p>За 6 недель я встретила только 4 человека, кто говорил на русском.</p>
                                  <p>🇷🇺 О школе <a href="detail.php?name=Kings Лос-Анджелес (Голливуд)&id=2">Kings Лос-Анджелес (Голливуд)</a></p>                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="single-team">
                              <div class="member-img">
                                  <img class="img-fluid mx-auto" src="images/t3.png" alt="">
                              </div>
                              <div class="details"><br>
                                  <h4>Полина Христенко</h4>
                                  <p>За 6 недель я встретила только 4 человека, кто говорил на русском.</p>
                                  <p>🇷🇺 О школе <a href="detail.php?name=Kings Лос-Анджелес (Голливуд)&id=2">Kings Лос-Анджелес (Голливуд)</a></p>                              </div>
                          </div>
                      </div>
                  </div></center>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-btn-wrap">
                        <a href="#" class="btn btn-danger">НАЧАТЬ СЕЙЧАС</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END FEATURED PLACES -->
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

    <script>
      function selectChange(){
        var lang = document.getElementById('language').value
        switch (lang) {
          case 'Английский':
            $('#country')
              .find('option')
              .remove()
              .end()
              .append('<option>США (5)</option><option>Англия (2)</option>')
            ;
            break;
          case 'Немецкий':
            $('#country')
              .find('option')
              .remove()
              .end()
              .append('<option>Германия (3)</option>')
            ;
            break;
          case 'Испанский':
            $('#country')
              .find('option')
              .remove()
              .end()
              .append('<option>Испания (4)</option>')
            ;
            break;
          default:

        }
      }
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?158"></script>
    <script>
        (function(d, w, c) {
            w.ChatraID = 'DKqt52HCcPkgvRoRS';
            var s = d.createElement('script');
            w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
            s.async = true;
            s.src = 'https://call.chatra.io/chatra.js';
            if (d.head) d.head.appendChild(s);
        })(document, window, 'Chatra');
    </script>
</body>

</html>
