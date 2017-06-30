<?php

 include 'includes/db.php';

?>


<html>
    <head>
        <title>My First Shop </title>
        <link rel="stylesheet" href="styles/style.css" media="all" />
    </head>

    <body>
       
        <div class="main_wrapper">

            <!--header start-->
            <div class="header_warpper">
                <img src="images/shop3.png" style="height: 100px" width="900px">

            </div>
            <!--header end-->
            
            <!--Navbar Start-->
            <div class="navbar">
                <ul id="menu">
                    <li><a href="#">Home</li>
                    <li><a href="#">All Products</li>
                    <li><a href="#">My Account</li>
                    <li><a href="#">Sing Up</li>
                    <li><a href="#">Shopping</li>
                    <li><a href="#">Contact</li>
                    
                </ul>
                <div id="form">
                    <form method="get" action="results.php" enctype="multipart/form-data">
                        <input type="text" name="user_qurey" placeholder="Search a product" >
                        <input type="submit" name="search" value="search">
                        
                    </form>
                    
                    
                    
                </div>
                
                
                
                
            </div>
            <!--Navbar end-->
            
            <!--main bady-->
            <div class="content_wrapper">
                 <div id="left_sidebar"> 
                  
                    <div id="sidebar-title">Catogries</div>
                    <ul id="cats">
                        <?php 
                        
                         $get_cats="select * from catogries";
                         
                         $run_cats= mysqli_query($con,$get_cats);
                         
                         while($row_cats= mysqli_fetch_array($run_cats)){
                       
                             $cat_id=$row_cats['cat_id'];
                             $cat_title = $row_cats['cat_title'];
                        echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
                       
                         }    
                                
                         ?>       
                    </ul>
                    
                    <div id="sidebar-title">Brands</div>
                    <ul id="cats">
                        
                        <?php 
                        
                         $get_brands="select * from brands";
                         
                         $run_brands= mysqli_query($con,$get_brands);
                         
                         while($row_brands= mysqli_fetch_array($run_brands)){
                       
                             $brands_id=$row_brands['brand_id'];
                             $brands_title = $row_brands['brand_title'];
                        echo "<li><a href='index.php?brand=$brands_id'>$brands_title</a></li>";
                       
                         }    
                                
                         ?> 
                        
                    </ul>
                 
                </div>
                <div id="Right_content">Right content</div>
            </div>
            <!--end main body-->
            
            <!--Footer start-->
            <div class="footer">
                <h1 style="text-align: center;padding-top:30px "><span class="glyphicon glyphicon-copyright-mark">
                    2017- Www.OnlineUasdat.com
                    </span></h1>
            
            
            
            
            </div>
            <!--end Footer-->
        </div>    


        




    </body>


</html>
