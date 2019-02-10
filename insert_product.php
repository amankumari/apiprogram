<?php  
   $response = array();  

   $con=mysqli_connect("localhost","root","","demo");
   if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['description'])) {  
      $name = $_POST['name'];  
      $price = $_POST['price'];  
      $description = $_POST['description'];  
     
    
      
      $result = mysqli_query($con,"INSERT INTO products_api(name, price, description) VALUES('$name', '$price', '$description')");  
      // check if row inserted or not  
      if ($result) {  
         $response["success_msg"] = 1;  
         $response["message"] = "Product successfully Insert.";  
         echo json_encode($response);  
      } else {  
         // failed to insert row  
         $response["success_msg "] = 0;  
         $response["message"] = "Product not insert because Oops! An error occurred.";  
         // echoing JSON response  
         echo json_encode($response);  
      }  
   }  
?>  