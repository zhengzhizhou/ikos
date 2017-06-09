<?php
  include("php/register.php");
  include("php/login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>iKos</title>
  <link rel="stylesheet" type="text/css" href="css/style_ForAll.css">
  <link rel="stylesheet" type="text/css" href="css/styleForAll.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/Styleform.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src = "js/jquery.leanModal.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
        $("#title a").click(function(e){
          e.preventDefault();
          $(".toggle").hide();
          var toShow = $(this).attr('href');
          $(toShow).show();
      });
        $(".search-bar").click(function() {
          $(".search-menu").slideToggle(500);
          $("#content").slideDown(500);
      });
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
        <li><a id = "signup_trigger" href="#modal" id = "signup_login_trigger">SignUp & Login</a></li>
      </ul>
      <ul id = "logged_in_content" style="display: none;">
        <li>webcome</li>
        <li><a href=""><?php echo $_SESSION["username"];?></a></li>
        <li><a href=""><?php 
                  unset($_SESSSION["username"]);
                  ?>helloworld</a></li>
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

<div id = "content">
    <div id = "inner-content">
        <div id = "tab">
            <ul id="title">
                <li><a href="#content1" class = "TapStyle">About iKos</a></li>
                <li><a href="#content2" class = "TapStyle">Our Team</a></li>
            </ul>
        </div>
        <div id ="contentField">
            <div id="content1" class="toggle">
            <h3 class = "IHStyle" style="font-family:font1; font-style: italic; text-align: center;">
                iKos is here!
            </h3>
            <h4 class = "SubTitleStyle">
                Let us put the power in your hands.
            </h4>
            <p class = "ContentStyle">
                While doctors should be recognized for their experience and expertise, you don't have to rely solely on one opinion about medical products that affect your life daily. Why shouldn't you have prior knowledge about medical devices before you meet with your doctor? Why shouldn't you be able to have an informed conversation with your physician so you can choose the products that are right for you? iKos gives you the power of knowledge and enables you to educate yourself and others about products that truly effect your body, your health, and your life.
            </p>
            <h4 class = "SubTitleStyle">
                Let us find products and doctors within your budget or insurance plan. 
            </h4>
            <p class = "ContentStyle">
                Use our site to find the information you need. Explore the different companies who have products for every budget and lifestyle. Learn about your diagnoses. Discover what you can do to improve your life or the life of someone you love. iKos has the information pertinent to you, so you can see how others have benefited, or otherwise, from medical products of various costs and procedures. If you’re unsure about the doctor you’ve chosen, find the product that works for you first; then find the doctors who use that product in your area!
            </p>
            <h4 class = "SubTitleStyle">
                Let us inform you with up-to-date opinions, reviews, and studies.
            </h4>
            <p class = "ContentStyle">
                We will stay up-to-date and work hard to bring you quality information on the products you need. Trust us to stay unbiased, because we care about you and your family. Find reviews from users just like you and form your own opinions. We treat the users of our site as extensions of our own families, and we will only provide truly unbiased, scientific information. We believe that’s the right thing to do.
            </p>

            <h4 class = "SubTitleStyle">
                Let us stand alongside you.
            </h4>
            <p class = "ContentStyle">
                At iKos Med, we want you to know that you are not alone in your healthcare journey. We strive to bring you the most updated material and information on medical devices and the conditions that merit their use so that you can make informed decisions about your healthcare. We have created a reliable resource to help you make these decisions about products, doctors, and to hear how others are managing their lives. It is our goal to help you discover products that will improve your life.
            </p>
        </div> 
        <div id="content2" class="toggle" style="display:none">
            <div id = "tony">
                <img src="image/Tony Corven.png">
                <p class = "ContentStyle">
                    Tony is the co-founder and CEO of iKos. 
                    Tony comes with 5 years of successful experience selling for the two largest medical device companies in the world. He spent three years with Zimmer Biomet leading a team of sales people to becoming the second largest and fastest growing new product line in the nation. At Stryker, he took over a dying territory and consistently posted growth each quarter.
                  </p>
            </div>
            <div id = "grant">
                <img src="image/Grant Corven.png">
                  <p class = "ContentStyle">
                    Grant is the co-founder and COO of iKos. 
                    Grant has 4 years of clinical healthcare experience working in endocrinology. He has worked closely with families and insurance companies, working to get approval for different medical supplies and medications. He has overseen multiple large scale medical research projects, as well as cross analyzing clinical data with national and international healthcare statistics. 
                  </p>
            </div>
            <div id = "zhou">
                <img src="image/zhengzhi.jpg">
                  <p class = "ContentStyle">
                    Zhengzhi is the CTO and co-founder of iKos.
                    Zhengzhi has more than 4 years working experience in China. He has worked in Sany, which is one of the largest company in China, and then moved a sub-company owned by Chinese central research center, fucos on designing and programming different system based on clients' requirement. He has strong understanding about computer science and bring a valuable wealth of knowledge to iKos.
                  </p>
            </div>
            <div id = "Ben">
                <img src="image/Ben Stefaniak.png">
                <p class = "ContentStyle">Student at Lindner College of Business, University of Cincinnati. Marketing Manager @IKOS Medical</p>
            </div>
            <div id = "Joe">
                <img src="image/Joe.png">
                <p class = "ContentStyle">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <div id = "Jeff">
                <img src="image/Jeff Merkel.png">
                <p class = "ContentStyle">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            </div>
        </div>
    </div>
</div>
<nav class = "navbar navbar-default">
  <div id = "foot">
    <h2>IKOS</h2>
    <h4>Columbus, OH</h4>
    <h4>(614) 989-1685, info@ikos.me</h4>
    <div id = "Social_Media">
      <ul>
      <li><a href="https://www.instagram.com/ikosmed/"><img src="image/facebook.png"></a></li>
      <li><a href="https://twitter.com/ikosMed" class="twitter-follow-button" data-show-count="false">Follow @ikosMed</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></li>
    </ul>
    </div>
  </div>
  <div id = "copyright">
    <h6>copyright: VA 14-3765</h6>
  </div>
</nav>

</body>
</html>