<?php
require("navbar.php");
include("db_sjet.php");
?>
<html>
<body>

       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
                <div class="flexslider set-flexi" id="main-section" >
                    <ul>
                        <!-- Slider 01 -->
                        <li>
                              <h3>National Institute of Technology Calicut</h3>
                              <h1>SILVER JUBILEE ENDOWMENT TRUST</h1>
                              <img src="assets/img/nitc_logo.png" height="150" width="150"></img>
                        </li>
                        
                      </ul>
                </div>
                   
     
              
              
            </div>
                
               </div>
                </div>
           </div>
           
       </div>
       <!--HOME SECTION END-->   
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> <?php
          $qry = "SELECT * from APPLICATION";
          $result = mysqli_query($conn,$qry);
          $row = mysqli_fetch_assoc($result);
          if($row["ready"]==1)
          {
            echo "<a style='text-decoration:none;color:green;font-weight:700' > Applications are open! </a>";
          } 
          else
          {
            echo "<a style='text-decoration:none;color:red;font-weight:700'>Applications are closed!</a>";
          } 

        ?>
        <i class="fa fa-circle-o-notch"></i> </h2>
                   </div>
               </div>
               <a href="news.php" data-scroll-reveal="enter from the bottom after 0.1s" >
          <p align="center" >NEWS/ANNOUNCEMENTS &gt;&gt;</p>
        </a>
             </div>
        
    </div>
    <!--HOME SECTION TAG LINE END-->   
         <div id="features-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">ABOUT US</h1>
                      <p data-scroll-reveal="enter from the bottom after 0.3s" >
                      <?php $sql ="select * from home_desc";
                        $result = mysqli_query($conn,$sql);
                        if($row = mysqli_fetch_assoc($result))
                        echo "$row[description]";?> 
                     
                 </div>

             </div>
             <!--/.HEADER LINE END-->

<br>
           <div class="row" >
           
               
               </div>
             </div>
   <!-- FEATURES SECTION END-->
    <div id="faculty-sec" >
    <div class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">OUR TRUSTEES </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      Executive members
                         </p>
                </div>

             </div>
             <!--/.HEADER LINE END-->

           <div class="row" >
           
               
                 <div class="col-lg-6  col-md-6 col-sm-6" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="faculty-div">
                     <img src="assets/img/trustees/chairman.jpeg"  class="img-rounded" height="280" width="300" />
                   <h3 >Dr. Shivaji Chakrovarti </h3>
                 <hr />
                         <h4>Director<br /> NITC</h4>
                   <p >
                       Phone: +91 3324146948 <br> email: director@nitc.ac.in 
                       
                   </p>
                </div>
                   </div>
                 <div class="col-lg-6  col-md-6 col-sm-6" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="faculty-div">
                     <img src="assets/img/trustees/sec.jpg"  class="img-rounded" height="280" width="320"/>
                   <h3 >Dr. S D Madhu Kumar</h3>
                 <hr />
                         <h4>Assosciate Professor<br /> Department of Computer Science and Engineering, NITC</h4>
                   <p >
                       Phone: 0495-2286806 <br> email: madhu@nitc.ac.in 
                       
                   </p>
                </div>
                   </div>
                     <a href="trustees.php"><p align="right" data-scroll-reveal="enter from the bottom after 0.3s">
                      Other members &gt;&gt;
                         </p></a>
                   </div>
                 
               </div>
             </div>
        </div>
    <!-- FACULTY SECTION END-->
      <div id="course-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line"> FAQs</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                     
                     </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->

           <div class="row text-center">
           <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
          
           <div class="row set-row-pad" >
           
           <table >
              <?php
              $sql="SELECT * FROM FAQ  ";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result))
                {
              echo "<tr><h3 data-scroll-reveal='enter from the bottom after 0.3s' align='left'  >". $row[faq_que]  . "</h3>";
              echo "<p data-scroll-reveal='enter from the bottom after 0.3s'  align='justify'>" . $row[faq_ans] . "</p>";
                  if($row = mysqli_fetch_assoc($result))
                    {
                echo "<h3 data-scroll-reveal='enter from the bottom after 0.3s' align='left'> ". $row[faq_que]  . "</h3>";
                      echo "<p data-scroll-reveal='enter from the bottom after 0.3s' align='justify'>" . $row[faq_ans] . "</p></tr>";
                }
                }
              ?>
           </table>


           </div>
            </div>
            </div>             
                 
                 
               </div>
             </div>
      <!-- COURSES SECTION END-->
    <div id="contact-sec"   >
           <div class="overlay">
 <div class="container set-pad">
      <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >CONTACT US  </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      You can send us a message by completing the form given below
                     </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->
           <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >
           
               
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form method="post" action="notification.php">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control "  required="required" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control " required="required"  placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control " required="required"  placeholder="Subject" />
                        </div>
                        
                        <div class="form-group">
                            <textarea name="message" required="required" class="form-control" style="min-height: 150px;" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block btn-lg">SEND MESSAGE</button>
                        </div>

                    </form>
                </div>

                   
     
              
              
                
               </div>
                </div>
          </div> 
       </div>
    
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
</body>
</html>
