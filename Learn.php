<?php
  include("php/register.php");
  include("php/login.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>iKos</title>
  <link rel="stylesheet" type="text/css" href="css/style_ForAll.css">
  <link rel="stylesheet" type="text/css" href="css/style_learn.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src = "js/jquery.leanModal.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#tab_all").click(function(){
        $(".content-lv1").toggle(500);
      });
      $("#Endocrinology").click(function(){
        $("#Endocrinology").nextAll().toggle();
        $("#Endocrinology-content").toggle(500);
      })
    })
  </script>
<script type="text/javascript" src = "js/login.js"></script>
</head>
<body>
<div id="top">
    <div id="head-bg">
      <img src="image/Homepage.jpg">
    </div>
    <div id="head-logo">
      <img src="image/iKos.png">
    </div>
    <div id = "head-signup">
      <ul>
        <li><a id = "signup_trigger" href="#modal">SignUp & Login</a></li>
      </ul>
    </div>
    <div id = "head-menu">
      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="Learn.php">Learn</a></li>
        <li><a href="About2.php">About</a></li>
        <li><a href="Contact.php">Contact</a></li>
      </ul>
    </div>
    <div id = "search-bar">
      <div id = "text">
        <strong>Change the Tide</strong>
      </div>
    </div>
</div>


<div id="modal" style="display:none;">
    <div id = "title">
        <span class = "login-title">Login</span>
        <span class = "modal-close"><i class = "fa fa-times"></i></span>
      </div>
    <div id = "popupbody">
      <div id = "social_login" >
        <a id = "facebook_connect" class = "social_box" href="#"><span class = "social_icon fb"><i class = "fa fa-facebook"></i></span><span class = "social_desc">Connect with Facebook</span></a>
        <a id = "google_connect" class = "social_box" href="#"><span class = "social_icon gg"><i class = "fa fa-google-plus"></i></span><span class = "social_desc">Connect with Google</span></a>
        <div id = "statement">
          USE YOUR OWN EMAIL TO SIGN UP OR LOGIN
        </div>
        <div id = "email_connect">
          <div>
            <a class="btn" id="signup_btn" href="#">SignUp</a>
          </div>
          <div>
            <a class="btn" id="login_btn" href="#">Login</a>
          </div>
        </div>
      </div>
      <div id="email_login" style="display: none;">
        <table>
          <tr>
            <td><input type="checkbox" name="sel_login" id = "login_service_provider" checked>I am a service provider</td>
            <td><input type="checkbox" name="sel_login" id = "login_patient">I am a patient</td>
          </tr>
        </table>
        <div id = "login_service_provider_content">
          <form action = "" method = "POST">
            <table>
              <tr>
                <td><label>Username:</label></td>
                <td><input type="text" name="servicer_provider_login_username"></td>
              </tr>
              <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="servicer_provider_login_password"></td>
              </tr>
              <tr>
                <td><input type="checkbox" name="remember" style="float:right;"></td>
                <td>Remember me on this computer</td>
              </tr>
              <tr>
                <td><a href="#" class="back_btn btn">Back</a></td>
                <td><input type="button" name="submit" class = "submit_btn btn" value = "Login"></td>
              </tr>
            </table>
          </form>
        </div>
        <div id="login_patient_content" style="display:none;">
          <form action = "" method = "POST">
            <table>
              <tr>
                <td><label>Username: </label></td>
                <td><input type="text" name="username_login" class = "info_signup_login"></td>
              </tr>
              <tr>
                <td><label>Password: </label></td>
                <td><input type="password" name="password_login" class = "info_signup_login"></td>
              </tr>
              <tr>
                <td><input type="checkbox" name="remember" style="float:right;">
                    </td>
                <td>Remember me on this computer</td>
              </tr>
              <tr>
                <td><a href="#" class="back_btn btn">Back</a></td>
                <td><input type="submit" name="email_login_service_provider" class="submit_btn btn" value="Login"></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
      <div id="email_signup" style="display: none;">
        <table>
          <tr>
            <td><a href="" id=""><input type="checkbox" name="sel_signup" id = "service_provider"></a>I am a service provider</td>
            <td><a href="" id=""><input type="checkbox" name="sel_signup" id = "patient"></a>I am a patient</td>
          </tr>
        </table>
        
        <div id="email_signup_content">
          <div id = "content_service_provider">
            <form action="" method="POST">
              <table>
                <tr>
                  <td><label>Name:</label></td>
                  <td><input type="text" name="name_signup_email" class = "info_signup_login"></td>
                </tr>
                <tr>
                  <td><label>Password:</label></td>
                  <td><input type="password" name="password_signup_email" class = "info_signup_login"></td>
                </tr>
                <tr>
                  <td><label>Address:</label></td>
                  <td><input type="text" name="address_signup_email" class = "info_signup_login"></td>
                </tr>
                <tr>
                  <td>Email:</td>
                  <td><input type="text" name="email_signup_email" class = "info_signup_login"></td>
                </tr>
                <tr>
                  <td>Phone:</td>
                  <td><input type="text" name="phone_signup_email" class = "info_signup_login"></td>
                </tr>
                <tr>
                  <td>Service:</td>
                  <td><input type="text" name="service_signup_email" class = "info_signup_login"></td>
                </tr>
                <tr>
                  <td>Image:</td>
                  <td><input type="file" name = "image_signup_email" class = "info_signup_login" multiple></td>
                </tr>
                <tr>
                  <td><a href="#" class="back_btn btn">Back</a></td>
                  <td><input type="submit" name="service_provider_submit" class = "submit_btn btn" value = "submit"></td>
                </tr>
              </table>
            </form>
          </div>
          <div id = "content_patient" style="display: none;">
            <form action="" method = "POST">
              <table>
                <tr>
                  <td><label>Name:</label></td>
                  <td><input type="text" name="name_signup_email_patient"></td>
                </tr>
                <tr>
                  <td><label>Email:</label></td>
                  <td><input type="text" name="email_signup_email_patient"></td>
                </tr>
                <tr>
                  <td><label>Password:</label></td>
                  <td><input type="text" name="password_signup_email_patient"></td>
                </tr>
                <tr>
                  <td><a href="#" class="back_btn btn">Back</a></td>
                  <td><input type="submit" name="patient_signup_submit" class = "submit_btn btn" value = "Submit"></td>
                </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

<div id = "tabs">
  
  <div id = "tab_all">
    <a href="#All">All</a>
  </div>
  <div id = "All" class = "content-lv1">
    <ul>
      <li id = "Endocrinology"><a href="#Endocrinology-content">Endocrinology</a>
      </li>
      <li>Comming Soon</li>
      <li>Comming Soon2</li>
    </ul>
  </div>
  <div id = "Endocrinology-content" class = "content-lv2" style="display: none;">
    <ul>
      <li>Diabetes</li>
      <li>Diabetes</li>
      <li>Diabetes</li>
    </ul>
  </div>
</div>

<nav class = "navbar navbar-default">
  <div id = "foot">
    <h2>IKOS</h2>
    <h4>Columbus, OH</h4>
    <h4>(614) 989-1685, info@ikos.me</h4>
    <div id = "Social_Media">
      <ul>
      <li><a href="https://www.instagram.com/ikosmed/"><img src="image/instagram-icon.png"></a></li>
      <li><a href="https://twitter.com/ikosMed"><img src="image/twitter.png"></a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></li>
    </ul>
    </div>
  </div>
  <div id = "copyright">
    <h6>copyright: VA 14-3765</h6>
  </div>
</nav>
</body>
</html>
