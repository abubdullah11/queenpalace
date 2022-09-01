<?php
include "../config/db.php";

if (isset($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $password = $_POST["phonenumber"];  
    $address = $_POST["address"];
    $email = $_POST["email"];
    $message= $_POST["message"];
   


    if (empty($fullname) or empty($email) or empty($phonenumber) or empty($address)or empty($message)) {
        $alert = "All fields required";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $alert = "Email not valid";
    }
    
    else {
        $sqli = " INSERT INTO order (fullname,phonenumber,address,email,message)VALUES('$fullname','$phonenumber','$address','$email','$message')";
        $result = mysqli_query($con,$sqli);
    

    
                if ($result) {
                $alert = "Order successfull";
                 }
                     else {
                echo mysqli_error($con);
             }
     }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../public/css/index.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo "<span style='color:green; font-weight:600;'>". @$alert ."</span>";   ?> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: aliceblue;">
          <div class="container-fluid">
            <p style="font-size: larger;font-weight:bolder;color:red;">QUEEN PALACE</p>
            <a class="navbar-brand" href="#" ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="#o  rder">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                  </li>
            </ul>
            <form class="d-flex" role="search" method="POST">
             <input class="form-control me-2" type="text" placeholder="Search" id="search-item">
           <a href="index2.php">  <button class="btn btn-success">search</button></a>
             
         </form>
            </div>
          </div>
        </nav> 
    </section>
    <div class="section1">
        <h1 style="text-align: center;color:white;padding-top: 20%;font-weight: bolder;font-family: sans-serif;font-style: italic;">QUEEN  PALACE  RESTAURANT</h1>
        <h2 style="text-align: center;color:orange;font-weight: bolder;font-family: sans-serif;font-style: italic;">THE PERFECT  FOOD AT YOUR DOOR STEP</h2>
      <a href="#menu">  <div class="btn btn-danger" style="margin-left:45%;">ORDER NOW</div></a>
    </div>
    

 <div  class="section2" id="gallery">
        <h3 style="text-align: center; padding-top:5%; color: black;">Food Gallery</h3>
        <div class="line" style="height: 2px; background-color: orange; width: 8%;margin-left: 45%;"></div>
      <div class="food">
        <div class="container-fluid">
            <div class="row">               
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible;">
                        <a href="../images/gallery-img1.jpg" data-lightbox-gallery="zenda-gallery"><img src="../images/gallery-img1.jpg" alt="gallery img" style="height: 180px;"></a>
                        <div>
                            <h3>Lemon-Rosemary Prawn</h3>
                            <span>Seafood / Shrimp / Lemon</span>
                        </div>
                        <a href="../images/gallery-img2.jpg" data-lightbox-gallery="zenda-gallery"><img src="../images/gallery-img2.jpg" alt="gallery img" style="height: 180px;"></a>
                        <div>
                            <h3>Lemon-Rosemary Vegetables</h3>
                            <span>Tomato / Rosemary / Lemon</span>
                        </div>
                </div>
           
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible;">
                <a href="../images/gallery-img3.jpg" data-lightbox-gallery="zenda-gallery"><img src="../images/gallery-img3.jpg" alt="gallery img" style="height: 400px;"></a>
                <div>
                    <h3>Lemon-Rosemary Bakery</h3>
                    <span>Bread / Rosemary / Orange</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s" style="visibility: visible;">
                <a href="../images/gallery-img4.jpg" data-lightbox-gallery="zenda-gallery"><img src="../images/gallery-img4.jpg" alt="gallery img" style="height: 180px;"></a>
                <div>
                    <h3>Lemon-Rosemary Salad</h3>
                    <span>Chicken / Rosemary / Green</span>
                </div>
                <a href="../images/gallery-img5.jpg" data-lightbox-gallery="zenda-gallery"><img src="../images/gallery-img5.jpg" alt="gallery img" style="height: 180px;"></a>
                <div>
                    <h3>Lemon-Rosemary Pizza</h3>
                    <span>Pasta / Rosemary / Green</span>
                </div>
            </div>
        </div>
             </div>
            </div>
            <section id="menu" class="parallax-section" style="margin-bottom: 10%;">
                <div class="header">
                    <h1 style="text-align: center;font-style:italic;margin-top:10%;">Special <span>Menu</span></h1>
                </div>
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-md-3 col-sm-3 col-lg-3"> -->
                            <!-- <div class="row" style="display:contents;flex-wrap:wrap;padding:0px 100px 100px 100px"> -->
                            <?php
                                        $sql = "SELECT * FROM addfood";
                                        $result = mysqli_query($con, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($arr = mysqli_fetch_array($result)) {
                                                $id= $arr['id'];
                                                $fullname = $arr['fullname'];
                                                $price = $arr['price'];
                                                $imagename = $arr['imagename'];

                                                echo"
                                                <div class='col-lg-4'>
                                                    <div class='row'>
                                                        <div class='col-lg-6'>
                                                            <img src='../public/images/$imagename' style='max-width:100%;'>                                                         
                                                        </div>
                                                        <div class='col-lg-6'>
                                                        <p style='font-size:22px; font-weight:bold;'>$fullname</p>
                                                        <p style='font-size:22px; font-weight:bold;'>$price</p>
                                                        <a href='check.php?id=$id' style='text-decoration:none;background-color:black;color:white;padding:10px;'>ORDER</a>
                                                        </div>
                                                    
                                                    </div>

                                                </div>

                                                <hr>

                                                ";
                                            }
                                        }

                                        ?>
                            <!-- </div> -->
                        
                        <!-- </div> -->
        
                    </div>    
                </div>                 
            </section>
            <div class="contact">
           
        </div>
        <div class="footer">
        <footer class="parallax-section">
            <div class="container">
                <div class="row" style="display: flex; flex-wrap:wrap;">
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible;">
                        <h2 class="heading" style="font-size: 25px; font-weight:500;color: red;">Contact Info.</h2>
                        <div class="ph" style="padding-top: 12px; padding-bottom:6px;">
                            <p style="color: white;"><i class="fa fa-phone"></i> Phone</p>
                            <p style="color: white; font-size: small;">090-3407-8282</p>
                        </div>
                        <div class="address">
                            <p style="color: white;"><i class="fa fa-map-marker"></i> Our Location</p>
                            <p style="color: white; font-size:small;">Opposite Overcomers Church, Tanke, Ilorin, Kwara State.</p>
                            <a  href="login.php" style="color:white;font-size:small;">Admin</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible;">
                        <h2 class="heading" style="color: red;">Open Hours</h2>
                        <p>Sunday <span>10:30 AM - 10:00 PM</span></p>
                        <p>Mon-Fri <span>9:00 AM - 8:00 PM</span></p>
                        <p>Saturday <span>11:30 AM - 10:00 PM</span></p>
                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible;">
                        <h2 class="heading" style="color: red;">Follow Us</h2>
                        <ul class="social-icon">
                            <li>
                            <a href="" class="fas fa-facebook ">
                                      <i class="fas fa-facebook   -area fa-fw me-3"></i>
                             </a>
                            </li>
                            <li>
                                <a href="#" class="fas fa-twitter " data-wow-delay="0.6s" style="visibility: visible;"></a>
                            </li>   
                            <li>
                                <a href="#" class="fas fa-whatsapp wow bounceIn" data-wow-delay="0.9s" style="visibility: visible;"></a>
                            </li>
                            <li>
                                <a href="#" class="fas fa-instagram wow bounceIn" data-wow-delay="0.9s" style="visibility: visible;"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="about" id="about" style="text-align: center; padding-top:5%;padding-bottom: 10%;background-color: lightgrey;">
        <h4 style="color: orange;">About <span style="color: black;">us</span></h4>

        <div class="t" style="text-align: center;margin-left:30%;margin-right:25%;">
         <P><h19>King &amp; Queen Resturance is a proudly Nigerian company, operating in the hospitality sectors   of  the Nigerian economy. The brand is one of the business units operated by Smackers Ltd and has operational presence via multiple outlets,
                across different states in Nigeria. Our operations span different aspects of the hospitality sector: Restaurants and cafe. Our goal is to be the most sought after experience within our sectors of play and we are guided by our core
                values of INNOVATION, QUALITY, UNPARALLELED AMBIENCE &amp; CONSISTENCY
            </P>
        </div>
        <div class="card" style="margin-left:25%;width: 50%;height: 150px;text-align: center;">
             <h3>KING &amp; QUEEN</h3>
             <span>Copyright © 2022 King &amp; Queen Restaurant.</span>
         </div>
    </div>
   

       <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
        $(document).ready(function(){
            $("#search-item").keyup(function(){
                var input = $(this).val();
                // alert(input);

                if (input !="") {
                    $.ajax({
                        url: "search.php",
                        method: "POST",
                        data: {input: input},

                        success: function(data){
                            $("index2").php(data);
                        }
                    })
                    
                } else {
                    $("index2").php("display", "none");
                }

            });
        });
    </script>
</body>
</html>