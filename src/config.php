<?php
session_start();
 
//  session_destroy();


?>
<?php
if(isset($_POST['addCart101']))
{
    
$product_image=$_POST['image101'];
$product_title=$_POST['title101'];
$product_price=$_POST['price101'];
$product_quantity=$_POST['quantity101'];

$_SESSION['cart'][]=array('p_image' => $product_image ,
                          'p_title' =>$product_title ,
                          'p_price' =>$product_price ,
                          'p_quantity' => $product_quantity ,
);


 }
 if(isset($_POST['addCart102']))
{
    
$product_image=$_POST['image102'];
$product_title=$_POST['title102'];
$product_price=$_POST['price102'];
$product_quantity=$_POST['quantity102'];

$_SESSION['cart'][]=array('p_image' => $product_image ,
                          'p_title' =>$product_title ,
                          'p_price' =>$product_price ,
                          'p_quantity' => $product_quantity ,
);


 }
 if(isset($_POST['addCart103']))
{
    
$product_image=$_POST['image103'];
$product_title=$_POST['title103'];
$product_price=$_POST['price103'];
$product_quantity=$_POST['quantity103'];

$_SESSION['cart'][]=array('p_image' => $product_image ,
                          'p_title' =>$product_title ,
                          'p_price' =>$product_price ,
                          'p_quantity' => $product_quantity ,
);


 }
 if(isset($_POST['addCart104']))
{
    
$product_image=$_POST['image104'];
$product_title=$_POST['title104'];
$product_price=$_POST['price104'];
$product_quantity=$_POST['quantity101'];

$_SESSION['cart'][]=array('p_image' => $product_image ,
                          'p_title' =>$product_title ,
                          'p_price' =>$product_price ,
                          'p_quantity' => $product_quantity ,
);


 }
 if(isset($_POST['addCart105']))
{
    
$product_image=$_POST['image105'];
$product_title=$_POST['title105'];
$product_price=$_POST['price105'];
$product_quantity=$_POST['quantity105'];

$_SESSION['cart'][]=array('p_image' => $product_image ,
                          'p_title' =>$product_title ,
                          'p_price' =>$product_price ,
                          'p_quantity' => $product_quantity ,
);


 }
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>viewCart</title>
 </head>
 <body>
 <?php

include 'products.php';
 ?>
     <div class="container">
         <div class="row">             <div class="col-lg-12">
                <h1>MY CART</h1>
            </div>
        </div>
     </div>
     <div class="container-fluid">
         <div class="row">
             <div class="col">
                <table class="table table-borderblack text-center" >
                                            <th>INDEX</th>
                         <th>IMAGE</th>
                         <th>TITLE</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                    
                     <tbody>
                         <?php
                        
                        
                         if(isset($_SESSION['cart']))
                        {
foreach ($_SESSION['cart'] as $key=> $value)
{            echo" <tr>
            <td>$key</td>
               <td>$value[p_image]</td>
               <td>$value[p_title]</td>
                <td>$value[p_price]</td>
                <td>$value[p_quantity]</td>
                 </tr>";
}
 }
 ?>
 </tbody> </table>
</div>
</div>
 </div>
    
</body>
</html>
