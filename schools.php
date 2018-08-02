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
                              <li class="nav-item ">
                                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">КУРСЫ ОФФЛАЙН</a>
                              </li>
                              <li class="nav-item ">
                                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">КУРСЫ ОНЛАЙН</a>
                              </li>
                              <li class="nav-item ">
                                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">УРОКИ ПО Skype</a>
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
                    <div class="row detail-filter-wrap">
                        <div class="col-md-4 featured-responsive">
                            <div class="detail-filter-text">
                                <p id="num_result">34 Результатов для языка <span id="language_name"><?php echo $_GET["language"]; ?></span></p>
                            </div>
                        </div>
                        <div class="col-md-8 featured-responsive">
                            <div class="detail-filter">
                                <p>Фильтр</p>
                                <form class="filter-dropdown">
                                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                      <option selected>Лучшие</option>
                                      <option value="1">Хуже</option>
                                      <option value="2">Дороже</option>
                                      <option value="3">Дешевле</option>
                                    </select>
                                </form>
                                <div class="map-responsive-wrap">
                                    <a class="map-icon" href="#"><span class="icon-location-pin"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row detail-checkbox-wrap">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">

                            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Bike Parking</span>
              </label>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Wireless Internet  </span>
              </label>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">

                            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Smoking Allowed  </span>
              </label>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Street Parking</span>
              </label>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">

                            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Special</span>
              </label>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Accepts Credit cards</span>
              </label>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">

                            <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Pets Friendly</span>
              </label>

                        </div>
                    </div>
                    <div class="row light-bg detail-options-wrap">
                      <?php
                        include('bd.php');
                        $result = $mysqli->query("SELECT * FROM schools");
                        $array = [];
                        $x = 0;
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                //var_dump($row);
                                array_push($array, $row);
                            }
                        } else {
                            echo "0 results";
                        }
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
    <!--//END DETAIL -->
    <!--============================= FOOTER =============================-->
    <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright &copy; 2018 Aplin. All rights reserved | Created with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://vk.com/aplinxy9plin" target="_blank">Aplin Nikita</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                        </ul>
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
        $(".map-icon").click(function() {
            $(".map-fix").toggle();
        });
    </script>
    <script>
        // Want to customize colors? go to snazzymaps.com

    </script>
    <!-- Map JS (Please change the API key below. Read documentation for more info) -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?v=3.exp&callback=myMap&key=AIzaSyAAU3XOPaAGyJzmNRAggy0mA167K06Cs4k&sensor=false"></script>
</body>

</html>
