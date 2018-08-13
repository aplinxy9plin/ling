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

<body onload="load_mark(); leng = document.getElementById('country').length; changeContryOnLoad()">
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
                <div class="col-md-7 responsive-wrap">
                    <div class="row detail-checkbox-wrap">
                        <div class="col-sm-12">
                          <div style="display: inline-block;" >
                            <h5 style="font-size: 1.1em">Язык</h5>
                            <select name="language" id="language" class="btn-group1" onchange="selectChange('language')" style="width: 150px; height: 40px; box-shadow: none">
                              <option>Английский</option>
                              <option>Немецкий</option>
                              <option>Испанский</option>
                            </select>
                          </div>
                          <div style="display: inline-block; padding-left: 20px;" >
                            <h5 style="font-size: 1.1em">Страна</h5>
                            <select name="country" id="country" class="btn-group1" onchange="selectChange('country')" style="width: 150px; height: 40px;">
                              <option>США (5)</option>
                              <option>Англия (2)</option>
                            </select>
                          </div>
                          <div style="display: inline-block; padding-left: 20px;" >
                            <h5 style="font-size: 1.1em">Город</h5>
                            <select name="city" id="city" class="btn-group1" style="width: 150px; height: 40px;">
                              <option>Все</option>
                              <option>Немецкий</option>
                              <option>Испанский</option>
                            </select>
                          </div>
                          <div style="display: inline-block; padding-left: 20px;" >
                            <h5 style="font-size: 1.1em">Сортировать</h5>
                            <select name="sort" id="language" class="btn-group1" style="width: 150px; height: 40px;">
                              <option>По оценке</option>
                              <option>Немецкий</option>
                              <option>Испанский</option>
                            </select>
                          </div>
                        </div>
                        <div style="margin-top: 20px" class="col-sm-12">
                          <div style="display: inline-block;" >
                            <h5 style="font-size: 1.1em">Дата начала курса</h5>
                            <select name="date_start" id="language" class="btn-group1" style="width: 150px; height: 40px;">
                              <option>1.09.2018</option>
                              <option>8.09.2018</option>
                              <option>16.09.2018</option>
                            </select>
                          </div>
                          <div style="display: inline-block; padding-left: 20px;" >
                            <h5 style="font-size: 1.1em">Длительность</h5>
                            <select name="continue" id="country" class="btn-group1" style="width: 150px; height: 40px;">
                              <option>2 недели</option>
                              <option>3 недели</option>
                            </select>
                          </div>
                          <div style="display: inline-block; padding-left: 20px;" >
                            <h5 style="font-size: 1.1em">Проживание</h5>
                            <select name="living" id="city" class="btn-group1" style="width: 150px; height: 40px;">
                              <option>Присутствует</option>
                              <option>Отсутствует</option>
                            </select>
                          </div>
                          <div style="display: inline-block; padding-left: 20px;" >
                            <h5 style="font-size: 1.1em"></h5>
                            <button style="width: 180px; height: 40px; background-color: #F8F8F8" class="btn">Расширенный поиск</button>
                          </div>
                        </div>
                    </div>
                    <div class="row light-bg detail-options-wrap">
                      <?php
                        include('bd.php');
                        $result = $mysqli->query("SELECT * FROM schools");
                        $array = [];
                        $x = 0;
                        if(isset($_GET['sort'])){
                          $sort = $_GET['sort'];
                        }else{
                          $sort = 'all';
                        }
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $tmp = explode(",", $row['type_school']);
                                switch ($sort) {
                                  case 'online':
                                    if($tmp[0] == 'online'){
                                      array_push($array, $row);
                                    }
                                    break;
                                  case 'offline':
                                    if($tmp[0] == 'offline' || $tmp[1] == 'offline'){
                                      array_push($array, $row);
                                    }
                                    break;
                                  default:
                                    array_push($array, $row);
                                    break;
                                }
                            }
                        } else {
                            echo "0 results";
                        }
                        if(empty($_GET['language'])){
                          $js_array = '[';
                          $count = 0;
                          foreach ($array as $key) {
                            if($count < 4){
                              $js_array .= '"'.$key["address"].'",';
                            }
                            $count++;
                            $image = explode(",", $key["image"]);
                            echo '<div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                                <div class="featured-place-wrap">
                                    <a href="detail.php?name='.$key["name"].'&id='.$key["id"].'">
                                        <img src="'.$image[0].'" class="img-fluid" alt="#">
                                        <span class="featured-rating-green ">'.$key["reviews"].'</span>
                                        <div class="featured-title-box">
                                            <h6>'.$key["name"].'</h6>
                                            <p>'.$key["country"].' </p> <span>• </span>
                                            <p>3 Reviews</p>
                                            <ul>
                                                <li><span class="icon-location-pin"></span>
                                                    <p>'.$key["address"].'</p>
                                                </li>
                                                <li><span class="icon-screen-smartphone"></span>
                                                    <p>'.$key["phone"].'</p>
                                                </li>
                                                <li>
                                                  <h4><span>$</span>'.$key["price"].' рублей</h4>
                                                </li>

                                            </ul>
                                            <div class="bottom-icons">
                                                <div class="closed-now">ВЫБРАТЬ</div>
                                                <span class="ti-heart"></span>
                                                <span class="ti-bookmark"></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>';
                          }
                          $js_array = substr($js_array, 0, -1);

                          $js_array .= ']';
                          echo "<script>function myMap(array, country) {
                              var maplat = $('#map').data('lat');
                              var maplon = $('#map').data('lon');
                              var mapzoom = $('#map').data('zoom');
                              // Styles a map in night mode.
                              var map = new google.maps.Map(document.getElementById('map'), {
                                  center: {lat: -34.397, lng: 150.644},
                                  zoom: 2,
                                  scrollwheel: false
                              });
                              var geocoder = new google.maps.Geocoder();
                              if(country !== undefined){
                                //alert(country)
                                // Set Center by country
                                geocoder.geocode({'address': country}, function(results, status) {
                                  if (status === 'OK') {
                                    map.setCenter(results[0].geometry.location);
                                  }else{
                                    alert('Geocode was not successful for the following reason: ' + status);
                                  }
                                });
                              }
                              for (var i = 0; i < array.length; i++) {
                                var address = array[i];
                                geocoder.geocode({'address': address}, function(results, status) {
                                  if (status === 'OK') {
                                    //map.setCenter(results[0].geometry.location);
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
                          function load_mark(){
                            myMap(".$js_array.", 'Russia');
                          }
                          </script>";
                        }else{
                          $language = $_GET['language'];
                          $country = $surname = preg_replace("/[^А-Яа-яЁё]/u","", $_GET['country']);
                          $lat_array = '[';
                          $lng_array = '[';
                          $js_array = '[';
                          foreach ($array as $key) {
                            //echo $key['country'];
                            if($key["language"] == $language && $key["country"] == $country){
                              //echo "string";
                              //672х414
                              $js_array .= '"'.$key["address"].'",';
                              $image = explode(",", $key["image"]);
                              echo '<div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                                  <div class="featured-place-wrap">
                                      <a href="detail.php?name='.$key["name"].'&id='.$key["id"].'">
                                          <img src="'.$image[0].'" class="img-fluid" alt="#">
                                          <span class="featured-rating-green ">'.$key["reviews"].'</span>
                                          <div class="featured-title-box">
                                              <h6>'.$key["name"].'</h6>
                                              <p>'.$key["country"].' </p> <span>• </span>
                                              <p>3 Reviews</p>
                                              <ul>
                                                  <li><span class="icon-location-pin"></span>
                                                      <p>'.$key["address"].'</p>
                                                  </li>
                                                  <li><span class="icon-screen-smartphone"></span>
                                                      <p>'.$key["phone"].'</p>
                                                  </li>
                                                  <li>
                                                    <h4><span>$</span>'.$key["price"].' рублей</h4>
                                                  </li>

                                              </ul>
                                              <div class="bottom-icons">
                                                  <div class="closed-now">ВЫБРАТЬ</div>
                                                  <span class="ti-heart"></span>
                                                  <span class="ti-bookmark"></span>
                                              </div>
                                          </div>
                                      </a>
                                  </div>
                              </div>';
                            }
                          }
                          $js_array = substr($js_array, 0, -1);
                          $js_array .= ']';
                          //echo $js_array;
                          echo "<script>function myMap(array, country) {
                              var maplat = $('#map').data('lat');
                              var maplon = $('#map').data('lon');
                              var mapzoom = $('#map').data('zoom');
                              // Styles a map in night mode.
                              var map = new google.maps.Map(document.getElementById('map'), {
                                  center: {lat: -34.397, lng: 150.644},
                                  zoom: 4,
                                  scrollwheel: false
                              });
                              var geocoder = new google.maps.Geocoder();
                              if(country !== undefined){
                                //alert(country)
                                // Set Center by country
                                geocoder.geocode({'address': country}, function(results, status) {
                                  if (status === 'OK') {
                                    map.setCenter(results[0].geometry.location);
                                  }else{
                                    alert('Geocode was not successful for the following reason: ' + status);
                                  }
                                });
                              }
                              for (var i = 0; i < array.length; i++) {
                                var address = array[i];
                                geocoder.geocode({'address': address}, function(results, status) {
                                  if (status === 'OK') {
                                    //map.setCenter(results[0].geometry.location);
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
                          function load_mark(){
                            myMap(".$js_array.", '".$country."');
                          }
                          </script>";
                          //$string = str_replace(' ', '+', $string);
                          //file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=%D0%A1%D0%B0%D0%BD%D0%BA%D1%82-%D0%BF%D0%B5%D1%82%D0%B5%D1%80%D0%B1%D1%83%D1%80%D0%B3?api_key=AIzaSyC1r-q9h62dDi84nMG3s0-C6MRG7u495E8')
                          /*$address = 'Chennai, India';
                          $url = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=".urlencode($address)."&sensor=false");
                          $response = json_decode($url);
                            
                          if ($response->status == 'OK') {
                              $latitude = $response->results[0]->geometry->location->lat;
                              $longitude = $response->results[0]->geometry->location->lng;
                              echo 'Latitude: ' . $latitude;
                              echo '<br />';
                              echo 'Longitude: ' . $longitude;
                          } else {
                              echo $response->status;
                        }*/
                          //echo "";
                          //var_dump($array[13]);
                        }
                      ?>
                    </div>
                </div>
                <div class="col-md-5 responsive-wrap map-wrap">
                    <div class="map-fix">
                        <!-- data-toggle="affix" -->
                        <!-- Google map will appear here! Edit the Latitude, Longitude and Zoom Level below using data-attr-*  -->
                        <div id="map" data-lat="40.674" data-lon="-73.945" data-zoom="14"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="#" id="changePage"></a>
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
      <?php
        echo "var sort = '" . $sort . "';\n";
      ?>
      //alert(sort)
      function selectChange(type){
        if(type == 'language'){
          var lang = document.getElementById('language').value
          switch (lang) {
            case 'Английский':
              $('#country')
                .find('option')
                .remove()
                .end()
                .append('<option>США (5)</option><option>Англия (2)</option>')
              ;
              var str = document.getElementById('country').value;
              var regexp = /[А-яа-я]/gi;
              var matches = str.match(regexp);
              document.getElementById('changePage').href = "schools.php?language=Английский&country=" + matches.join('') + "&sort=" + sort;
              document.getElementById('changePage').click();
              break;
            case 'Немецкий':
              $('#country')
                .find('option')
                .remove()
                .end()
                .append('<option>Германия (3)</option>')
              ;
              var str = document.getElementById('country').value;
              var regexp = /[А-яа-я]/gi;
              var matches = str.match(regexp);
              document.getElementById('changePage').href = "schools.php?language=Немецкий&country=" + matches.join('') + "&sort=" + sort;
              document.getElementById('changePage').click();
              break;
            case 'Испанский':
              $('#country')
                .find('option')
                .remove()
                .end()
                .append('<option>Испания (4)</option>')
              ;
              var str = document.getElementById('country').value;
              var regexp = /[А-яа-я]/gi;
              var matches = str.match(regexp);
              document.getElementById('changePage').href = "schools.php?language=Испанский&country=" + matches.join('') + "&sort=" + sort;
              document.getElementById('changePage').click();
              break;
            default:

          }
        }else{
          var lang = document.getElementById('language').value
          document.getElementById('changePage').href = "schools.php?language="+lang+"&country=" + document.getElementById('country').value + "&sort=" + sort;
          document.getElementById('changePage').click();
        }
      }
      function selectChangeOnLoad(lang){
        //var lang = document.getElementById('language').value
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
      function changeContry(){

      }
      var leng = '0';
      <?php
        if(isset($_GET['country'])){
          echo "var country = '".$_GET['country']."';\n";
        }else{
          echo "var country = '0';\n";
        }
      ?>
      function changeContryOnLoad(){
        if(country !== '0'){
          var regexp = /[А-яа-я]/gi;
          var matches = country.match(regexp);
          country = matches.join('')
          var ar = [];
          for (var i = 0; i < leng; i++) {
            ar.push(document.getElementById('country').options[i].value)
          }
          for (var i = 0; i < ar.length; i++) {
            var str = ar[i];
            var regexp = /[А-яа-я]/gi;
            var matches = str.match(regexp);
            var match = matches.join('')
            console.log(match);
            if(country == match){
              document.getElementById('country').value = ar[i]
            }
          }
        }
      }
      <?php
        if(isset($language)){
          echo "selectChangeOnLoad('".$language."');\n";
          echo "document.getElementById('language').value = '".$language."';\n";
        }
      ?>
        $(".map-icon").click(function() {
            $(".map-fix").toggle();
        });
    </script>
    <script>
        // Want to customize colors? go to snazzymaps.com

    </script>
    <!-- Map JS (Please change the API key below. Read documentation for more info) -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?v=3.exp&callback=myMap&key=AIzaSyCy5byxzoigmevVSNOlQe0HSabmpxOsNOU&sensor=false"></script>
</body>

</html>
