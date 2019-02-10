<?php  
  
   $con=mysqli_connect("localhost","root","","demo");
   
   $response = array();  
 
  
      $result = mysqli_query($con,"SELECT *FROM products_api");  
  
      if (!empty($result)) {  
  
         
  
         if (mysqli_num_rows($result) > 0) {  
  
            $result = mysqli_fetch_array($result);  
  
            $product = array();  
  
            $product["pid"] = $result["pid"];  
  
            $product["name"] = $result["name"];  
  
            $product["price"] = $result["price"];  
  
            $product["description"] = $result["description"];  
  
            $product["created_at"] = $result["created_at"];  
  
            $product["updated_at"] = $result["updated_at"];  
  
            // success  
  
            $response["success"] = 1;  
  
            // user node  
  
            $response["product"] = array();  
  
            array_push($response["product"], $product);  
  
            // echoing JSON response  
  
            echo json_encode($response);  
  
         } else {  
  
            // no product found  
  
            $response["success"] = 0;  
  
            $response["message"] = "No product found";  
  
            // echo no users JSON  
  
            echo json_encode($response);  
  
         }  
  
      } else {  
  
         // no product found  
  
         $response["success"] = 0;  
  
         $response["message"] = "No product found";  
  
         // echo no users JSON  
  
         echo json_encode($response);  
  
      }  
  
   
  
?>