<?php include 'header-no.php';?>
    <style>
        .main-login-section__wrapper-logo {
            top: 55px;
            left: 0;
            padding-left: 200px;
            padding-right: 180px;
            width: 100%;
        }
        .main-login-section__wrapper-logo-inside {
            max-width: 378px;
            margin: auto;
        }
        .main-login-section__wrapper-text {
            max-width: 382px;
            padding-left: 3px;
            padding-right: 2px;
            margin: auto;
        }
        .p-0-inside footer {
            padding-top: 0;
        }
        .main-login-section__psevdo-element {
            position: relative;
            z-index: 2;
            background: #fff;
        }
    </style>
   <section class="container-fluid main-login-section row mx-0 px-0">
        <div class="main-login-section__left-column position-relative">
            <div class="main-login-section__wrapper-logo position-absolute">
                <div class="main-login-section__wrapper-logo-inside">
                    <a href="#">
                        <img src="images/logo.svg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="main-login-section__wrapper-text">
                <h1 class="main-login-section__title">Sign In</h1>
                <div class="main-login-section__after-title">
                    <span class="main-title-text">New user?</span> <a href="#">Create an account</a>
                </div>
                <div class="main-login-section__form-section">
                    <form class="main-login-section__wrapper-form">
                        <div class="form-group">
                          <label for="InputEmail1">Email address</label>
                          <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="InputPassword1">Password</label>
                          <div class="position-relative wrapper-input-psevdo">
                            <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                            <div class="">
                                <img src="images/icon-eye.svg" alt="" class="position-absolute">
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign In</button>
                      </form>
                      <div class="text-center main-login-section__wrapper-psevdo-element">
                          <span class="main-login-section__psevdo-element position-relative">or</span>
                      </div>
                      <button  class="btn btn-primary btn-social">
                        <img src="images/icon-google.svg" alt="" class="google-img" >  
                        <span>Sign In with Google</span>
                      </button>
                </div>
                <a href="#" class="main-title-text text-center d-block">Forgot your password?</a>
            </div>

        </div>
        <div class="main-login-section__right-column">
            <div class="main-login-section__right-column-title">Lorem ipsum dolor sit amet consectetuer adpiscing </div>
            <a href="#" class="btn main-login-section__right-column_btn">Lorem ipsum</a>
        </div>
   </section>


    <div class="p-0-inside">
        <?php include 'footer.php';?>
    </div>
