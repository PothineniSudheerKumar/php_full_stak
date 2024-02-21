<?php
	$products_array = array(
		array(
			'name' => 'Pen drive',
			'price' => 200,
			'description' =>'This is pen drive',
			'image' => 'https://www.jiomart.com/images/product/original/490998917/sandisk-32-gb-cruzer-blade-pen-drive-digital-o490998917-p590034486-0-202009260643.jpeg?im=Resize=(420,420)'
		),
		array(
			'name' => 'Watch',
			'price' => 2000,
			'description' =>'This is watch',
			'image' => 'https://www.titan.co.in/dw/image/v2/BKDD_PRD/on/demandware.static/-/Sites-titan-master-catalog/default/dw34d84041/images/Titan/Catalog/1698KM02_1.jpg?sw=800&sh=800'
		),
		array(
			'name' => 'Shoe',
			'price' => 20000,
			'description' =>'This is shoe',
			'image' => 'https://rukminim2.flixcart.com/image/450/500/xif0q/shoe/o/4/0/7-axe-white-7-hotstyle-white-original-imagtbnsgrhwaaa4.jpeg?q=90&crop=false'
		),
	);
	// echo '<pre>';print_r($products_array);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Products details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row">
  	<h1 class="text-center">Product details</h1>
  	<?php
  		foreach ($products_array as $key => $value) { ?>
  			<div class="col-sm-4">
  				<div class="product_details text-center" style="box-shadow: 3px 4px 9px 0px;border-radius: 10px;padding: 30px;margin-top:20px;">
  					<h3><?php echo $value['name'] ?></h3>
  					<p><?php echo $value['price'] ?></p>
  					<p><?php echo $value['description'] ?></p>
  					<img src="<?php echo $value['image'] ?>" alt="<?php echo $value['name'] ?>" height=50% width=50% style="border-radius: 100%;margin-bottom: 20px;"/>
  					<p><button class="btn btn-md btn-info">Add to cart</button></p>
  				</div>
  			</div>
  			
  	<?php	}
  	?>
  </div>
</div>

</body>
</html>
