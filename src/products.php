<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php include 'header.php';?>
	
	<div id="main">
		<div id="products">
            <form action='config.php' method='POST'>
			<div id="product-101" class="product">
                <?php
				$img1='<img src="images/football.png">';
				$title1='<h3 class="title"><a href="#">Product 101</a></h3>';
				$price1='<span>Price: $150.00</span>';
                
                
                
				
                $product1=array($img1,$title1,$price1,$button1);
                foreach($product1 as $val1)
                {
                    echo $val1;
                }
                ?>
                <input type='hidden' name='title101' value='101'>
                <input type='hidden' name='price101' value='$150.00'>
                <input type='hidden' name='image101' value='<img src="images/football.png">'>
                <input type='hidden' name='quantity101' value='1'>
                <input type="submit" name="addCart101" class="add-to-cart" value="Add To Cart"> 
				
			</div>
			<div id="product-102" class="product">
            <?php
			$img2 =	'<img src="images/tennis.png">';
            $title2='<h3 class="title"><a href="#">Product 102</a></h3>';
            $price2='<span>Price: $120.00</span>';
           
                $product2=array($img2,$title2, $price2,$button2);
                foreach($product2 as $val2)
                {
                    echo $val2;
                }
                ?>
                <input type='hidden' name='title102' value='102'>
                <input type='hidden' name='price102' value=' $120.00'>
                <input type='hidden' name='image102' value='<img src="images/tennis.png">'>
                <input type='hidden' name='quantity102' value='1'>
                <input type="submit" name="addCart102" class="add-to-cart" value="Add To Cart"> 
			</div>
			<div id="product-103" class="product">
            <?php
				$img3='<img src="images/basketball.png">';
				$title3='<h3 class="title"><a href="#">Product 103</a></h3>';
				$price3='<span>Price: $90.00</span>';
				
                $product3=array($img3,$title3, $price3,$button3);
                foreach($product3 as $val3)
                {
                    echo $val3;
                }
            
                ?>
                <input type='hidden' name='title103' value='103'>
                <input type='hidden' name='price103' value='$90.00'>
                <input type='hidden' name='image103' value='<img src="images/basketball.png">'>
                <input type='hidden' name='quantity103' value='1'>
                <input type="submit" name="addCart103" class="add-to-cart" value="Add To Cart"> 
			</div>
			<div id="product-104" class="product">
            <?php
				$img4='<img src="images/table-tennis.png">';
				$title4='<h3 class="title"><a href="#">Product 104</a></h3>';
				$price4='<span>Price: $110.00</span>';
				
                $product4=array($img4,$title4, $price4,$button4);
                foreach($product4 as $val4)
                {
                    echo $val4;
                }
                ?>
                <input type='hidden' name='title104' value='104'>
                <input type='hidden' name='price104' value='$110.00'>
                <input type='hidden' name='image104' value='<img src="images/table-tennis.png">'>
                <input type='hidden' name='quantity104' value='1'>
                <input type="submit" name="addCart104" class="add-to-cart" value="Add To Cart"> 
			</div>
			<div id="product-105" class="product">
            <?php
				$img5='<img src="images/soccer.png">';
				$title5='<h3 class="title"><a href="#">Product 105</a></h3>';
				$price5='<span>Price: $80.00</span>';
				
                $product5=array($img5,$title5, $price5,$button5);
                foreach($product5 as $val5)
                {
                    echo $val5;
                }
                ?>
                <input type='hidden' name='title105' value='105'>
                <input type='hidden' name='price105' value='$80.00'>
                <input type='hidden' name='image105' value='<img src="images/soccer.png">'>
                <input type='hidden' name='quantity105' value='1'>
                <input type="submit" name="addCart105" class="add-to-cart" value="Add To Cart"> 
			</div>
            </form>
		</div>
	</div>
	<?php include 'footer.php';?>
	
</body>
</html>