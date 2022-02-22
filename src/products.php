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
			<div id="product-101" class="product">
                <?php
				$img1='<img src="images/football.png">';
				$title1='<h3 class="title"><a href="#">Product 101</a></h3>';
				$price1='<span>Price: $150.00</span>';
				$button1='<a class="add-to-cart" href="#">Add To Cart</a> <i class="fa fa-cart-plus" aria-hidden="true"></i>';
                $product1=array($img1,$title1,$price1,$button1);
                foreach($product1 as $val1)
                {
                    echo $val1;
                }
                ?>
			</div>
			<div id="product-101" class="product">
            <?php
			$img2 =	'<img src="images/tennis.png">';
            $title2='<h3 class="title"><a href="#">Product 102</a></h3>';
            $price2='<span>Price: $120.00</span>';
            $button2='<a class="add-to-cart" href="#">Add To Cart</a>';
                $product2=array($img2,$title2, $price2,$button2);
                foreach($product2 as $val2)
                {
                    echo $val2;
                }
                ?>
			</div>
			<div id="product-101" class="product">
            <?php
				$img3='<img src="images/basketball.png">';
				$title3='<h3 class="title"><a href="#">Product 103</a></h3>';
				$price3='<span>Price: $90.00</span>';
				$button3='<a class="add-to-cart" href="#">Add To Cart</a>';
                $product3=array($img3,$title3, $price3,$button3);
                foreach($product3 as $val3)
                {
                    echo $val3;
                }
                ?>
			</div>
			<div id="product-101" class="product">
            <?php
				$img4='<img src="images/table-tennis.png">';
				$title4='<h3 class="title"><a href="#">Product 104</a></h3>';
				$price4='<span>Price: $110.00</span>';
				$button4='<a class="add-to-cart" href="#">Add To Cart</a>';
                $product4=array($img4,$title4, $price4,$button4);
                foreach($product4 as $val4)
                {
                    echo $val4;
                }
                ?>
			</div>
			<div id="product-101" class="product">
            <?php
				$img5='<img src="images/soccer.png">';
				$title5='<h3 class="title"><a href="#">Product 105</a></h3>';
				$price5='<span>Price: $80.00</span>';
				$button5='<a class="add-to-cart" href="#">Add To Cart</a>';
                $product5=array($img5,$title5, $price5,$button5);
                foreach($product5 as $val5)
                {
                    echo $val5;
                }
                ?>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
	
</body>
</html>