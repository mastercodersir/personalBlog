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
    <title>signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/nav-desktop.css">
    <link rel="stylesheet" href="css/mobile-nav.css">
    <link rel="stylesheet" href="css/profile-form.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="js/validate.js" defer></script>
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
    <div class="nav-m-body d-block d-lg-none noscript">
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
      </div>
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
                <h1 class="text-center">We Are 100x</h1>
            </div>
            
                <form  action="process-signup.php" method="post"  class="mb-5" style="margin-top:10%" enctype="multipart/form-data">
                    <strong class="h1 mb-3">Sign up</strong>
                        <?php 
                            if(isset($_GET['err'])){
                                setError('err6','length of password can not be less then 6 characters');
                                setError('err7','password and password-confirm not match');
                                setError('err8','length of phone can not be less then 10 characters');
                                setError('err9','username already taken');
                                setError('err10','phone already taken');
                                setError('err11','error');
                                setError('err11','we can not upload file');
                                setError('err12','format error');
                                setError('err13','username characters must be english');
                            }
                        ?>
                    <div id="msg_box" class="alert alert-warning" style="display: none;text-align:center;margin-top:10px;">
                        
                    </div>
                    <div>
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name" autocomplete="off">
                        <?php 
                            if(isset($_GET['err'])){
                                setError('err1','name is empty');
                            }
                        ?>
                    </div>
                    <div id="pusername">
                        <label for="username">username</label>
                        <input class="form-control" type="text" name="username" id="username" >
                        <?php 
                            if(isset($_GET['err'])){
                                setError('err2','username is empty');
                            }
                        ?>
                    </div>
                    
                    <div style="margin-top:10px;" >
                        <label for="profilepic">choose profile ( optional)</label>
                        <input class="form-control" id="profilepic" type="file" name="user_file">
                    </div>
                    <div>
                        <label for="password">password</label>
                        <input class="form-control" type="password" name="password" id="password">
                        <?php 
                            if(isset($_GET['err'])){
                                setError('err3','password is empty');
                            }
                        ?>
                    </div>
                    <div>
                        <label for="password-confirm">password-confirm</label>
                        <input class="form-control" type="password" name="password_confirmation" id="password-confirm">
                        <?php 
                            if(isset($_GET['err'])){
                                setError('err4','password-confirmation is empty');
                            }
                        ?>
                    </div>
                    <div>
                        <label for="phone">Phone Number</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="basic-addon1">+98</span>
                            <input type="tel" class="form-control" placeholder="like : 9121119999 ( without Zero '0' )" name="phone" id="phone" maxlength="10" maxlength="10">
                          </div>
                            <?php 
                            if(isset($_GET['err'])){
                                setError('err5','phone is empty');
                            }
                            ?>
                    </div>
                    <input type="submit" value="Sign Up" name="btnSignUp" class="btn btn-dark mt-3 col-12 mb-5">
                    <span>Already have An Account ?</span><a href="login.php" class="link-primary ps-2">Sign in</a>
                </form>
            </div>
        </div>
    </main>
    <script src="js/jquery-3.6.1.min.js"></script>

    <script>

        $(document).ready(function(){

        })

        $("#username").blur(function () {
            data = `username=${$(this).val()}`;
            $.post('ajax.php',data,(r)=>{
                var msg_box = $("#msg_box")
                if(r === "-1"){
                    msg_box.html("username already taken");
                    msg_box.show(500)
                }else{
                    msg_box.hide(500)
                }
            })
        })

        $("#phone").blur(function () {
            data = `phone=${$(this).val()}`;
            var msg_box = $("#msg_box")
            $.post('ajax.php',data,(r)=>{
                if(r === "-2"){
                    msg_box.html("phone already taken");
                    msg_box.show(500)
                }else{
                    msg_box.hide(500)
                }
            })
        })

        function checkInput() {
            isSubmit = false
            var name = $("#name").val().trim()
            var username = $("#username").val().trim()
            var password = $("#password").val().trim()
            var password_confirm = $("#password-confirm").val().trim()
            var phone = $("#phone").val().trim()
            var msg_box = $("#msg_box")
            if(name == ""){
                msg_box.html("name can not be empty");
                msg_box.slideDown(500)
            }
            else if(username == ""){
                msg_box.html("username can not be empty");
                msg_box.slideDown(500)
            }
            else if(password == ""){
                msg_box.html("password can not be empty");
                msg_box.slideDown(500)
            }
            else if (password_confirm == ""){
                msg_box.html("password_confirm can not be empty");
                msg_box.slideDown(500)
            }
            else if(phone == ""){
                msg_box.html("phone can not be empty");
                msg_box.slideDown(500)
            }
            else if(password.length < 6){
                msg_box.html("length of password can not be less then 6 characters");
                msg_box.slideDown(500)
            }
            else if(password != password_confirm){
                msg_box.html("password and password-confirm not match");
                msg_box.slideDown(500)
            }
            else if(phone.length < 10){
                msg_box.html("length of phone can not be less then 10 characters");
                msg_box.slideDown(500)
            }
            else{
                msg_box.slideUp(500)
                isSubmit = true
            }
            return isSubmit
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/desktop-nav.js"></script>
    
</body>
</html>