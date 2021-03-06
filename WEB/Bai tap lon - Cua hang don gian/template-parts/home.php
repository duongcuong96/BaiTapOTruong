		<div class="body-left">
			<?php 
				$sidebar = get_config("left-sidebar");
				if( $sidebar ){
					echo $sidebar;
				}
			?>	
		</div><!---end .body-right-->



			<div class="body-main">
			
				<div id="banner-main">
					<?php echo get_config("banner-main");  ?>
				</div>


				<div class="block-body-title">
					<h2>Sản phẩm tiêu biểu</h2>
				</div>
				
				<div class="block-body-list">
				
					<?php 
						$rs = mysqli_query( $conn , "SELECT * FROM sp" );
						while(  $r = mysqli_fetch_array($rs, MYSQLI_ASSOC) ):
					?>
						
						
						<div class="block-product">	
							<div class="block-body-item">
								<img src="upload/<?php echo $r["avatar"] ?>" title="<?php echo $r["name"];?>" alt="<?php echo $r["name"]; ?>" style="width=100% ; max-width:200px ; height:auto ; display:block "  />
									
									<p class="block-body-title">
										<a href="index.php?r=single&id=<?php echo $r['id'];?>"><?php echo $r["name"];?></a>
									</p>
									
									<p> 
										<?php echo $r["excerpt"];?>
									</p>
									<p>
										</br><a href="index.php?r=cart&action=add&id=<?php echo $r['id']; ?>"><?php echo $r["price"];?></a>
									</p>
									<p class="block-body-button-tieu-bieu">
										<a href="index.php?r=cart&action=add&id=<?php echo $r['id']; ?>">Mua ngay</a>
									</p>
							</div>
						</div>

					<?php endwhile;?>


	
					
				</div><!-- end .block-body-list -->
			</div><!-- end .block-body -->
		




			<div class="body-right">
				<h3>Xin chào : <?php echo empty($_SESSION["username"]) ? "Khách" : trim($_SESSION["username"]) ?> !</h3>
				<div class="body-right-title">
					<h2>Sản phẩm đã mua</h2>


					<p class="block-body-button">
						<a href="index.php?r=cart&action=checkout">Tiến hành thanh toán</a>
					</p>
				</div>
				
				<?php 
					if( empty( $_SESSION["products"])){
						return;
					}
				?>
				<ul>
					<?php for( $i = 0 ; $i < sizeof($_SESSION["products"]) ; $i++ ):

							$p = $_SESSION["products"][$i];
					?>

					<li>	
						<div class="body-right-item">
							<img src="upload/<?php echo $p['avatar'] ;?>" title="<?php echo $p['name'];?>" alt="<?php echo $p['name'];?>" style="width=100% ; max-width:200px ; height:auto ; display:block "  />
							<p class="body-right-title">
								<a href="index.php?r=single&id=<?php echo $p['id'];?>"><?php echo $p['name'];?></a>
							</p>
							<p> 
								<?php echo $p['excerpt'];?>
							</p>
							<p>
								</br><a href="#"><?php echo vnd_format($p['price']) . " VND ". " x " . $p['amount'];?></a>
							</p>
							<p class="block-body-button">
								<a href="index.php?r=cart&action=add&id=<?php echo $p['id'];?>">Mua thêm</a>
							</p>
						</div>
					</li>

				<?php endfor;?>
					
				</ul>
			</div><!---end .body-right-->