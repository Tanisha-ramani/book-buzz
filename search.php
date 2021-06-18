<?php
include("partials/head.php");
include("partials/header.php");
$searchtext=$_GET["search"];
 ?>
<div class="container">			
			
				<?php 

				include("partials/connect.php");
				$sql="SELECT * FROM products WHERE name LIKE '%$searchtext%'";
				$results=$connect->query($sql);
if($results->num_rows > 0){ ?>

<div class="row isotope-grid">

	<?php			while($final=$results->fetch_assoc()){ 

				?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">

							<img src="<?php echo $final['picture']?>" alt="IMG-PRODUCT" style="min-height: 250px;  ">

							<a href="details.php?details_id=<?php echo $final['id'] ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $final['name'] ?>
								</a>

								<span class="stext-105 cl3">
									<?php echo $final['price']?>
								</span>
							</div>

						</div>
					</div>
				</div>
	<?php } ?>
</div>
	<?php
}else{ ?>
	<div style="height:50vh" class="min-vh-100 text-center d-flex justify-content-center align-items-center"><h2>No such products</h2></div>
<?php }
	 ?>
		
		
		</div>
		
<?php
include("partials/footer.php");
?>
