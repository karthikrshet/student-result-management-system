<?php
error_reporting(0);
include('includes/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Surana College Autonomous</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style>

 /* Cascading Style Sheets */

 *{
    margin: 0;
    padding: 0;
    /* border: 1px solid yellow; */
}

.course{
  width: 80%;
  margin: auto;
  text-align: center;
  padding-top: 100px;
}
h1{
  font-size: 40px;
  font-weight: 0;
  font-family:Arial;

}
p{
  color:#777;
  font-size: 14px;
  font-weight: 300;
  line-height: 22px;
  padding: 10px;
}
.row{
  margin-top: 5%;
  display: flex;
  justify-content: space-between;
}
.course-col{
  flex-basis: 31%;
  background: lightyellow;
  border-radius: 10px;
  margin-bottom:5%;
  padding: 20px 12px;
  box-sizing: border-box;
  transition: 0.5s;
}
h3{
  text-align: center;
  font-weight: 600;
  margin: 10px 0px;
}
.course-col:hover{
  box-shadow: 10px 10px 24px 0px rgba(0,0,0,0.4);
}


  /*Campus*/

.campus{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
}
.campus-col{
    flex-basis: 32%;
    border-radius: 10px;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
    height: inherit;
}
.campus-col img{
    width: 100%;
    display: block;

}
.layer{
    background: transparent;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0%;
    left: 0%;
    transition: 0.5s;
}

.layer:hover{
    background: rgba(0, 45, 53, 0.534);
    /* rgba(253, 0, 0, 0.7); */
}

.layer h3{
    width: 100%;
    font-weight: 500;
    color: #fff;
    font-size: 26px;
    bottom: 0%;
    left: 50%;
    transform: translate(-50%);
    position: absolute;
    opacity: 0;
    transition: 0.5s;
}

.layer:hover h3{
    opacity: 1;
    bottom: 49%;
}

/* Facilities */

.facilities{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
}

.facilities-col{
    flex-basis: 31%;
    border-radius: 10px;
    margin-bottom: 5%;
    text-align: left;
}
.facilities-col img{
    width: 100%;
    border-radius: 10px;
    transition: 0.5s;
}
.facilities-col p{
    padding: 0%;
}

.facilities-col h3{
    margin-top: 16px;
    margin-bottom: 15px;
    text-align: left;
}

.facilities-col img:hover{
    box-shadow: 3.5px 5px 15px 10px rgba(0, 0, 0, 0.308);
}

/* Call To Action */

.ctn{
    margin: 100px auto;
    width: 80%;
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(../image/banner_ggu.jpg);
    background-position: center;
    background-size: cover;
    border-radius: 10px;
    text-align: center;
    padding: 100px 0;
    transition: 0.5s;
}
.ctn h1{
    color: #fff;
    margin-bottom: 40px;
    padding: 0;
}
.ctn:hover{
    margin: 100px auto;
    width: 80%;
    background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(../image/banner_ggu.jpg);
    background-position: center;
    background-size: cover;
    border-radius: 10px;
    padding: 100px 0;
    box-shadow: 10px 10px 24px 0px rgba(0, 0, 0, 0.664);
}


            </style>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Surana College Autonomous</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="find-result.php">Results</a></li>
                        <li class="nav-item"><a class="nav-link active" href="admin-login.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header - set the background image for the header in the line below-->
        <header class="py-5 bg-image-full" style="background-image: url('images/WhatsApp Image 2024-10-23 at 17.46.44_0dcb26a9.jpg">
    
        </header>




        <section class="campus">
        <h1> <b> Our Campus </b></h1>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quisquam atque non voluptate</p> -->

            <div class="row">
                <div class="campus-col">
                    <img src="images/WhatsApp Image 2024-10-23 at 17.46.42_327b6d25.jpg" alt="">
                    <div class="layer">
                        <h3>Innovation instigators</h3>
                    </div>
                </div>

                <div class="campus-col">
                    <img src="images/kavya.jpg" alt="">
                    <div class="layer">
                        <h3>Admission</h3>
                    </div>
                </div>

                <div class="campus-col">
                    <img src="images/WhatsApp Image 2024-10-23 at 17.46.42_2f4293fb.jpg" alt="">
                    <div class="layer">
                        <h3>Error Crackers</h3>
                    </div>
                </div>
            </div>
    </section>

    <!--Facilities Section-->
 <!--Course of Collage-->


 <section class="course" id="course_call">
        <h1> <b> Course We Offer</b></h1>
        <p>We are offer to three best computer science course for student by Gokul Global University</p>

        <div class="row">
            <div class="course-col">
                <h2>MCA</h2>
                <p>MCA (Master of Computer Applications) focuses on advanced computing, software development, and system management. This degree emphasizes programming, data structures, and application development, preparing students for careers in technology and IT management.</p>
            </div>

            <div class="course-col">
                <h2>MBA </h2>
                <p>MBA (Master of Business Administration) is designed to develop managerial skills and business acumen. This degree covers key areas such as finance, marketing, operations, and leadership, equipping students to excel in diverse corporate environments.</p>
            </div>

            <div class="course-col">
                <h2>MCom</h2>
                <p>MCom (Master of Commerce) focuses on advanced business concepts, financial management, and strategic decision-making. This degree emphasizes areas such as accounting, economics, and marketing, preparing students for leadership roles in the corporate world.</p>
            </div>


        </div>
    </section>

    <!--Campus Section-->
    
    <!--Campus Section-->



    <section class="facilities">
        <h1>  <b>Our facilities </b></h1>
        <p>Facilities provide for Students by Gokul Global University</p>

        <div class="row">
            <div class="facilities-col">
                <img src="images/download.jpg" alt="">
                <h3>Canteen</h3>
                <p>The objective of the Canteen and meal service is to protect by reducing the risk of foodborne illness, with proper sanitary conditions.</p>
            </div>

            <div class="facilities-col">
                <img src="images/Auditorium1-2-1-1536x1024.jpg" alt="">
                <h3>Auditorium</h3>
                <p>The college is having a huge indoor auditorium with a professionally-deployed acoustic system and a seating capacity of about 200 people.</p>
            </div>

            <div class="facilities-col">
                <img src="images/download (1).jpg" alt="">
                <h3>Library</h3>
                <p>Library consists of a separate mess, administrative office, warden quarter. In addition to well furnished rooms.</p>
            </div>
        </div>
        </section>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Notice Board</h2>
                        <hr color="#000" />
                        <marquee direction="up"  onmouseover="this.stop();" onmouseout="this.start();">
                   <ul>
 <?php $sql = "SELECT * from tblnotice";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>                      
<li><a href="notice-details.php?nid=<?php echo htmlentities($result->id);?>" target="_blank"><?php echo htmlentities($result->noticeTitle);?></li>
<?php }} ?>

                   </ul>
               </marquee>

                    </div>
                </div>
            </div>
        </section>


        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Surana College Autonomous ( Bengaluru )</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
