<?php

    require_once("helper.php");

    if(isLogin()){
        redirect("profile.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/nav-desktop.css">
    <link rel="stylesheet" href="css/mobile-nav.css">
    <link rel="stylesheet" href="css/profile-form.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="js/login-validate.js" defer></script>
</head>
<body class="bg-black text-white">
    <!-- desktop navigation start -->
    <div class="navigation-n d-none d-lg-block noscript">
        <ul>
            <li>
                <a href="#">
                    <span class="icon-n">
                        <img src="https://image.winudf.com/v2/image/Y29tLmxpbmthcHAuY3V0ZWJhYnlnaXJsX3NjcmVlbl8wX241Z3QwZzg4/screen-0.jpg?fakeurl=1&type=.webp"
                            class="img-fluid baby rounded-circle" alt="">
                    </span>
                    <span class="title-n">Zer0daY</span>
                </a>
            </li>
            <li>
                <a href="index.html">
                    <span class="icon-n">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title-n">Home</span>
                </a>
            </li>
            <li>
                <a href="notifications.html">
                    <span class="icon-n">
                        <ion-icon name="notifications-outline"></ion-icon>
                    </span>
                    <span class="title-n">Notifications</span>
                </a>
            </li>
            <li>
                <a href="help-center.html">
                    <span class="icon-n">
                        <ion-icon name="help-circle-outline"></ion-icon>
                    </span>
                    <span class="title-n">Help & About</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon-n">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="title-n">Profile</span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <span class="icon-n">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title-n">Sign out</span>
                </a>
            </li>
        </ul>
        <div class="toggle-n"></div>
    </div>
        <!-- desktop navigation end -->
    <!-- mobile nav start -->
    <header class="nav-m-body d-block d-lg-none noscript">
        <div class="navigation-m">
          <ul>
              <li class="list-m ">
                  <a href="index.html">
                      <span class="icon-m">
                          <ion-icon name="home-outline"></ion-icon>
                      </span>
                      <span class="text-m">Home</span>
                  </a>
              </li>
              <li class="list-m">
                  <a href="search.html">
                      <span class="icon-m">
                        <ion-icon name="search-outline"></ion-icon>
                      </span>
                      <span class="text-m">Search</span>
                  </a>
              </li>
              <li class="list-m">
                  <a href="notifications.html">
                      <span class="icon-m">
                        <ion-icon name="notifications-outline"></ion-icon>
                      </span>
                      <span class="text-m">Notifications</span>
                  </a>
              </li>
              <li class="list-m">
                  <a href="help-center.html">
                      <span class="icon-m">
                        <ion-icon name="help-circle-outline"></ion-icon>
                      </span>
                      <span class="text-m">Help</span>
                  </a>
              </li>
              <li class="list-m active-m">
                  <a href="#">
                      <span class="icon-m">
                        <ion-icon name="person-outline"></ion-icon>
                      </span>
                      <span class="text-m">profile</span>
                  </a>
              </li>
              <div class="indicator-m"></div>
          </ul>
      </div>
      </header>
        <!-- mobile nav end -->

    <header class="noscript">
        <nav class="navbar navbar-expand-lg bg-dark text-white">
          <div class="container">
            <a class="logo navbar-brand ms-auto me-auto me-lg-0 ms-lg-0 text-white" href="https://MasterCoders.ir"
              target="_blank">MasterCoders</a>
                        <div class="d-flex d-none d-lg-block" style="cursor: pointer;">
                <span class="pe-3">SEARCH</span>
                <svg class="header-svg" viewBox="0 0 183.792 183.792">
                  <path d="M54.734,9.053C39.12,18.067,27.95,32.624,23.284,50.039c-4.667,17.415-2.271,35.606,6.743,51.22
        c12.023,20.823,34.441,33.759,58.508,33.759c7.599,0,15.139-1.308,22.287-3.818l30.364,52.592l21.65-12.5l-30.359-52.583
        c10.255-8.774,17.638-20.411,21.207-33.73c4.666-17.415,2.27-35.605-6.744-51.22C134.918,12.936,112.499,0,88.433,0
        C76.645,0,64.992,3.13,54.734,9.053z M125.29,46.259c5.676,9.831,7.184,21.285,4.246,32.25c-2.938,10.965-9.971,20.13-19.802,25.806
        c-6.462,3.731-13.793,5.703-21.199,5.703c-15.163,0-29.286-8.146-36.857-21.259c-5.676-9.831-7.184-21.284-4.245-32.25
        c2.938-10.965,9.971-20.13,19.802-25.807C73.696,26.972,81.027,25,88.433,25C103.597,25,117.719,33.146,125.29,46.259z" />
                  <g>
                </svg>
              </div>
            </div>
        </nav>
        </header>
    <main>
        <div class="container">
            <div class="row row-cols-lg-2">
                <div>
                <img width="500" height="400" src="img/logo.png" alt="" class="img-fluid">
                <h1 class="text-center">Welcome Back !</h1>
            </div>

                <form action="check.php" method="post" class="mb-5" style="margin-top:15%" id="login">
                <?php if ($is_invalid): ?>
        <em class="text-warning">Username or password is Incorrect , please check your inputs</em>
    <?php endif; ?>
                    <?php
                            if($_GET['ok']){
                                    setSuccess("success","Register Success");
                                    setSuccess("logout","Logout Success");
                                    setSuccess("delete","Delete Success");
                            }
                            else if($_GET['err']){
                                    setError("err1","Username Or Password Invalid");
                                    setError("err2","Username Can not be empty");
                                    setError("err3","password can not be empty");
                                    setError("err4","for access to this page you need login");
                            }
                    ?>
                    <div>
                        <label for="username">username</label>
                        <input class="form-control" type="text" name="username" id="username">
                    </div>
                    <div>
                        <label for="password">password</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <button class="btn btn-dark mt-3 col-12 mb-5">Sign in</button>
                    <span>Doesn't have An Account ?</span><a href="sign-up.php" class="link-primary ps-2">Sign up</a>
                    <div class="w-100 mb-5"></div>
                    <div class="w-100 mb-2"></div>

                </form>
            </div>
        </div>
    </main>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/desktop-nav.js"></script>
</body>
</html>