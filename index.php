 <!DOCTYPE html>
<html lang="en">
<?php 
include("partials/head.php");
?>
<body class="animsition">
	<?php
	include("partials/header.php");
	include("partials/sliders.php");
	include("partials/banner.php");
	?>
		

	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".3">
						Fiction
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".4">
						Non-Fiction
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".5">
						Motivational
					</button> 

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".6">
						Cooking
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".7">
						Aptitude
					</button>


					
				</div>

				<!-- <div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div> -->
				
				<!-- Search product -->
				

				<!-- Filter -->
				
					</div>
				</div>
			</div>

			<div class="container">
			<div class="row isotope-grid">
				<?php 
				include("partials/connect.php");
				$sql="SELECT * FROM products";

				$results=$connect->query($sql);

				while($final=$results->fetch_assoc()) {  ?> 

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $final['category_id'] ?>">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="/<?php  echo $final['picture'] ?>" alt="IMG-PRODUCT" style="min-height: 250px;  ">

							<a href="details.php?details_id=<?php echo $final['id'] ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="details.php?details_id=<?php echo $final['id'] ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $final['name']?>
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
		</div>		
		<!-- Load more -->
			
		</div>
	</section>

<?php
include("partials/footer.php");
?>
</body>
</html>