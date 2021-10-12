<?php
$products = [
    ["name" => 'koszulka', "price" => 20],
    ["name" => 'koszulka2', "price" => 30],
    ["name" => 'koszulka3', "price" => 40]
];
?>
	<?php include "essunia/header.php" ; ?>
	<?php include "essunia/InnerWraper.php" ; ?>
	<div class="content">
		<div class="wrapper">
			<h3>O sklepie</h3>
			<p>Nasz sklep jest super</p>
			<ul>
				<?php
				$suma = 0;
				foreach($products as $product){
					$suma = $suma + $product["price"];
					echo "<li>nazwa: " . $product["name"]. " cena: " .$product["price"] . "</li>";
					
				}
				?>
			</ul>
			<p>Suma: <?php echo $suma;?> zł</p>
		</div>
	</div>
	<div class="rightSidebar">

	</div>
</div>
	<?php include "essunia/footer.php";?>