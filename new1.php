<div id="hot">	
	 <section class="bg-light py-4 my-5">
		<div class="container">
			<div class="row">
			<?php
while($run=mysqli_fetch_array($data))
{
	
	?>
				<div class="item">
								<div class="product">
								  <div class="flip-container">
									<div class="flipper">
									  <div class="front"><a href="detail.php"><img width="250" src="../uploads/<?php echo $run['foto']; ?>" alt="" class="img-fluid"></a></div>
									  <div class="back"><a href="detail.php"><img width="250" src="../uploads/<?php echo $run['foto']; ?>" alt="" class="img-fluid"></a></div>
									</div>
								  </div><a href="detail.php" class="invisible"><img width="250" src="../uploads/<?php echo $run['foto']; ?>" alt="" class="img-fluid"></a>
								  <div class="text">
									<h3><a href="detail.php?id=<?php echo $run['id_produk']; ?>"><?php echo $nama; ?></a></h3>
									<!-- Group of default radios - option 1 -->
									<div class="custom-control custom-radio">
									  <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios">
									  <label class="custom-control-label" for="defaultGroupExample1">2 Minggu <?php  echo' Rp.'. $run['hrg_mngg'];  ?></label>
									</div>

									<!-- Group of default radios - option 2 -->
									<div class="custom-control custom-radio">
									  <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" checked>
									  <label class="custom-control-label" for="defaultGroupExample2">4 Minggu/<?php  echo' Rp.'. $run['hrg_bln'];  ?></label>
									</div>
									<div class="d-grid px py-2">
										<a class="btn btn-dark" href="#" role="button"><i class="fa fa-shopping-cart"></i></a>
									</div>
								  </div>
								</div>
				</div>
				</div>
				</div>
				<?php
}
?>