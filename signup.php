<?php   session_start();  ?>
<html>
<style type="text/css">

 

       .login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
h2{
  color: white;
}
h3{
  color: white;
}
.form{
            max-width: 700px;
            margin: 40px auto;
            width:300px;
            height: auto;
            background-color:  rgba(247, 247, 247, .5);
            box-shadow: 1px 2px 4px rgba(0 ,0 ,0 ,0.5),
                        1px 2px 4px rgba(0 , 0 , 0,0.3),
                        1px 2px 4px rgba(0 , 0 , 0,0.1);
            border-radius: 5px;
            margin: 0px auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 40px;
        
       }

.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: red;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: red;
  text-decoration: none;
}
.form .register-form {
  display: none;
}

body {
  background-image: url(https://media.foody.vn/images/5600326113_ca05db4e6f_b.jpg);

  background-size: cover;
  background-repeat: no-repeat;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}

</style>
      <ul class="nav navbar-nav navbar-right">
         <li>
                <?php
                  if( (!( isset( $_SESSION['login_status']))) || ($_SESSION['login_status'] != "ready")) {
            echo "<a href='signup.php' style='padding-right:0.2px'>  Đăng ký</a>
              

            ";
          }
          else{
            echo "<a>Hi ".$_SESSION["name"]."</a>";
          }
          ?>
                </li>
                <li>
                <?php
                  if( (!( isset( $_SESSION['login_status']))) || ($_SESSION['login_status'] != "ready")) {
              echo '<a href="login_form.php">Đăng nhập</a>
        ';
             }
           else{
              echo '<a href="logout.php">Logout</a>';
           }
           ?>
                </li>
      </ul>
    </div>
</div>
  </div>
</nav>
<section id="register" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s">
        <h2>Register Here</h2>
        <h3>Quý khách vui lòng nhập đầy đủ các thông tin.</h3>
      </div>

      <div class="wow fadeInUp col-md-5 col-sm-5" data-wow-delay="1s">
        <form action="#" method="post">
          <input name="username" type="text" class="form-control" id="username" placeholder="Username">
          <input name="password" type="password" class="form-control" id="password" placeholder="Password">
          <input name="phone" type="telephone" class="form-control" id="phone" placeholder="Phone Number">
          <input name="email" type="email" class="form-control" id="email" placeholder="Email Address">
          <div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
            <input name="register" type="submit" class="form-control" id="submit" value="REGISTER">
          </div>
        </form>
      </div>

      <div class="col-md-1"></div>

    </div>
  </div>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if( isset( $_POST["register"]) ) {
    $_username = $_POST['username'];
    $_password = $_POST['password'];
    $_phone = $_POST['phone'];
    // $_lname = $_POST['lname'];
    $_email = $_POST['email'];
    echo '<script language="javascript">';
      echo 'alert("Đăng ký thành công")';
      echo '</script>';
    }
}
?>

<?php

require 'database-config.php';
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_username;
    $password = $_password;
    $phone = $_phone;
    $email =$_email;
    $sql = "INSERT INTO account(username, password,email,phone) VALUES('".$username."','".$password."','".$email."','".$phone."')";
    $result = mysqli_query($conn,$sql);
    }
?>
</section>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
