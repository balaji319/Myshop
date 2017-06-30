<?php
 
 include 'includes/db.php';
?>


<html>
    <head>
        <title>
            inser_product
        </title>
         <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
        
    </head>
    <body bgcolor="pink">
        <div>
        <form action="insert_product.php" method="post">
            <table width="800" align="center" border="1" bgcolor="silver">
                <tr align="center">
                    <td colspan="2"><h2>Insert new Product</h2></td>
                </tr>
                
                <tr>
                    <td>Product Tilte</td>
                    <td><input  type="text" name="product_title" size="50"></td>
                </tr>
                
                
                
                <tr>
                    <td>Select Catogries</td>
                    <td>
                        <select name="product_cat">
                            <option>select catogries</option>
                           <?php 
                        
                         $get_cats="select * from catogries";
                         
                         $run_cats= mysqli_query($con,$get_cats);
                         
                         while($row_cats= mysqli_fetch_array($run_cats)){
                       
                             $cat_id=$row_cats['cat_id'];
                             $cat_title = $row_cats['cat_title'];
                        echo "<option value='$cat_id'>$cat_title</option>";
                       
                         }    
                                
                         ?>      
                            
                            
                            
                        </select>   
                    </td>
                </tr>
                
                <tr>
                     <td>Select Brand</td>
                    <td>
                        <select name="product_brand">
                            <option>select brand</option>
                        <?php 
                        
                         $get_brands="select * from brands";
                         
                         $run_brands= mysqli_query($con,$get_brands);
                         
                         while($row_brands= mysqli_fetch_array($run_brands)){
                       
                             $brands_id=$row_brands['brand_id'];
                             $brands_title = $row_brands['brand_title'];
                        echo "<option value='$brands_id'>$brands_title</option>";
                       
                         }    
                                
                         ?> 
                            </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Select Image1</td>
                    <td><input  type="file" name="product_img1"></td>
                </tr>
                
                <tr>
                     <td>Select Image2</td>
                    <td><input  type="file" name="product_img2"></td>
                </tr>
                
                <tr>
                     <td>Select Image3</td>
                    <td><input  type="file" name="product_img3"></td>
                </tr>
                
                <tr>
                    <td>Enter Prize</td>
                    <td><input  type="text" name="product_prize"></td>
                </tr>
                
                <tr>
                    <td>Write Description</td>
                    <td><textarea name="product_desc" cols="30" rows="10"></textarea></td>
                </tr>
                
                <tr>
                    <td>Product Keyword</td>
                    <td><input  type="text" name="product_keywords" size="50"></td>
                </tr>
                
                <tr align="center">
                    <td colspan="2"><input  type="submit" name="product_insert" value="insert product"></td>
                </tr>
                
                
            </table>  
            
            
        </form>
        </div>
    </body>    
</html>

<?php 

 if(isset($_POST['product_insert'])){
     
     //Variables name  
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_brand = $_POST['product_brand'];
    $product_prize = $_POST['product_prize'];
    $product_desc = $_POST['product_desc'];
    $status="on";
    $product_keywords = $_POST['product_keywords'];

    //img names
    $product_img1 =$_POST['product_img1']['name'];
    $product_img2 =$_POST['product_img2']['name'];
    $product_img3 =$_POST['product_img3']['name'];

    //img temp name
    //$temp_name1 = $_POST['product_img1']['tmp_name'];
    //$temp_name2 = $_POST['product_img2']['tmp_name'];
    //$temp_name3 = $_POST['product_img3']['tmp_name'];
    
    
    if($product_title=='' or $product_cat=='' or $product_brand=='' or $product_prize=='' or $product_desc=='' or $product_keywords=='' or $product_img1==''){
    
        echo '<script>alert("plz enter all data")</script>';
        
    }else{
        
        $insert_product="INSERT INTO products (cat_id,brand_id,date,product_title,product_img1,product_img2,product_img3,product_prize,product_desc,status) VALUES ('$product_cat','$product_brand',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_prize','$product_desc','$status')";
        
        $run_product = mysqli_query($con, $insert_product);
        if($run_product){
            echo "<script>alert('successfully entered')<script>";
            
        }
    }
    
    
}





?>