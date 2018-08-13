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

<body onload="load_mark()">
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
    <!--============================= DETAIL =============================-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 responsive-wrap">
                    <div class="row detail-checkbox-wrap">
                        <div class="col-sm-12">
                          <div style="display: inline-block;" >
                            <h5 style="font-size: 1.1em">Язык</h5>
                            <select name="language" id="language" class="btn-group1" onchange="selectChange()" style="width: 150px; height: 40px; box-shadow: none">
                              <option>Английский</option>
                              <option>Немецкий</option>
                              <option>Испанский</option>
                            </select>
                          </div>
                          <div style="display: inline-block; padding-left: 20px;" >
                            <h5 style="font-size: 1.1em">Страна</h5>
                            <select name="country" id="country" class="btn-group1" onchange="selectChange()" style="width: 150px; height: 40px;">
                              <option>США (5)</option>
                              <option>Англия (2)</option>
                            </select>
                          </div>
                          <div style="display: inline-block; padding-left: 20px;" >
                            <h5 style="font-size: 1.1em">Город</h5>
                            <select name="city" id="city" class="btn-group1" onchange="selectChange()" style="width: 150px; height: 40px;">
                              <option>Все</option>
                              <option>Немецкий</option>
                              <option>Испанский</option>
                            </select>
                          </div>
                          <div style="display: inline-block; padding-left: 20px;" >
                            <h5 style="font-size: 1.1em">Сортировать</h5>
                            <select name="sort" id="language" class="btn-group1" onchange="selectChange()" style="width: 150px; height: 40px;">
                              <option>По оценке</option>
                              <option>Немецкий</option>
                              <option>Испанский</option>
                            </select>
                          </div>
                        </div>
                    </div>
                    <div class="row light-bg detail-options-wrap">
                      <!-- здесь карточки с учителями -->
                      <?php
                        include('bd.php');
                        $result = $mysqli->query("SELECT * FROM teachers");
                        $images = "";
                        $array = [];
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                              array_push($array, $row);
                            }
                        } else {
                            echo "0 results";
                        }
                        foreach ($array as $key) {
                          echo '<div class="col-md-2 featured-responsive">
                              <div class="featured-place-wrap">
                                  <a href="detail.php?name='.$key["name"].'&id='.$key["id"].'">
                                      <img src="'.$key["image"].'" style="width: 400px" class="img-fluid" alt="#">
                                      <span class="featured-rating-green">9.5</span>
                                      <div class="featured-title-box">
                                          <h6>'.$key["name"].'</h6>
                                          <p>'.$key["language"].', '.$key["country"].' </p> <span>• </span>
                                          <p>4 Отзыва</p> <span> • </span>
                                          <p><span>$$$</span>$$</p>
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
                </div>
            </div>
        </div>
    </section>
    <!--//END DETAIL -->
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
        // Want to customize colors? go to snazzymaps.com

    </script>
</body>

</html>
