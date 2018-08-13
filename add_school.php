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
                  <div class="offer-box" style="margin-top: 2em;">
                    <div class="row">
                        <div class="col-sm-7" style="border-right: 1px solid #ddd; padding-right: 3em; padding-top: 1em;">
                            <h2>Dear partner,</h2>
                            <p>
                                Welcome to LINGUAGO — an online platform for booking quality language courses and accommodation worldwide.
                                Please fill in the form below. Our administrators will contact you shortly afterwards.
                            </p>
                            <p>
                                Note that you should submit the form only once.
                                You will be able to add more schools or school locations later.
                                Just fill the form with the details of one of them for now.
                            </p>
                            <div class="highlight" style="text-align: center; padding: 1em; font-weight: bold;">
                                <a href="/ru/promote_school/youtube/">See how you can grow with LinguaTrip</a>
                            </div>
                            <p>
                            </p><h4>About LINGUAGO</h4>
                                <ul>
                                    <li>team with 15+ years experience in language travel</li>
                                    <li>500 Startups portfolio company (top Silicon Valley accelerator)</li>
                                    <li>investors and advisors from Google, AirBnb, Twitter, top Chinese agencies</li>
                                    <li>100,000+ students use LinguaTrip monthly to search for language courses abroad</li>
                                </ul>
                            <p></p>
                        </div>
                        <div class="col-sm-5">
                            <form style="padding-left: 2em;" method="POST" action="/ru/auth/registerschool/" novalidate="novalidate">
                                <div class="form-group">
                                    <label for="email" class="control-label">Email</label>
                                    <input name="email" type="text" class="form-control" data-val="true" data-val-required="">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label">Password</label>
                                    <input name="password" type="password" class="form-control" data-val="true" data-val-required="">
                                </div>
                                <div class="form-group">
                                    <label for="schoolName" class="control-label">School name</label>
                                    <input name="schoolName" type="text" class="form-control" data-val="true" data-val-required="">
                                </div>
                                <div class="form-group">
                                    <label for="schoolWebsite" class="control-label">School website</label>
                                    <input name="schoolWebsite" type="text" class="form-control" data-val="true" data-val-required="">
                                </div>
                                <div class="form-group">
                                    <label for="personName" class="control-label">Your name</label>
                                    <input name="personName" type="text" class="form-control" data-val="true" data-val-required="">
                                </div>
                                <div class="form-group">
                                    <label for="personPosition" class="control-label">Your position in school</label>
                                    <input name="personPosition" type="text" class="form-control" data-val="true" data-val-required="">
                                </div>
                                <div class="form-group">
                                    <label for="contactPhone" class="control-label">Contact phone</label>
                                    <input name="contactPhone" type="text" class="form-control" data-val="true" data-val-required="">
                                </div>

                                <div class="form-group">
                                    <label class="checkbox" style="margin-left: 20px;">
                                        <input type="checkbox" id="terms">
                                        I have read and agree to the <a href="terms/" target="_blank">Terms &amp; Conditions.</a>
                                    </label>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success bold" style="width: 100%;" disabled="" id="ok">Register school</button>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <br>
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
