<?php $this->load->view('public/partials/view_public_header.php'); ?>
	
	{vehicle}
	<!-- grow -->
	<div class="grow">
		<div class="container">
			<h2>{model_name}</h2>
		</div>
	</div>
	<!-- grow -->
	<div class="product">
		<div class="container">
			
			<div class="product-price1">
				<div class="top-sing">
					<div class="col-md-7 single-top">
						<div class="flexslider">
							<ul class="slides list-unstyled">
								<li data-thumb="images/si.jpg">
									<div class="thumb-image"> <img src="<?= base_url(); ?>uploads/{image}" data-imagezoom="true" class="img-responsive"> </div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<!-- slide -->
					</div>
					<div class="col-md-5 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
							<h4>{model_name}</h4>
							<hr>
							<p>{model_description}</p>
							</div>
						</div>
						<div class="clearfix"> </div>
						<hr>
						<div class="available">
							<ul>
								<li>
									Производитель: 
									<span>{manufacturer_name}</span>
								</li>
								<li>
									Цвет:
									<span>{color}</span>
								</li>
								<li>
									Категория:
									<span>{category}</span>
								</li>
								<li class="size-in">
									Пробег:
									<span>{mileage}</span>
								</li>
								<li class="size-in">
									Тип трансмиссии:
									<span>{gear}</span>
								</li>
								<li class="size-in">
									Число дверей:
									<span>{doors}</span>
								</li>
								<li class="size-in">
									Число сидений:
									<span>{seats}</span>
								</li>
								<li class="size-in">
									Объем бака:
									<span>{tank} литров</span>
								</li>
								<li class="size-in">
									Год регистрации:
									<span>{registration_year}</span>
								</li>
								<div class="clearfix"> </div>
							</ul>
						</div>
					</div>
					
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
{/vehicle}
<?php $this->load->view('public/partials/view_public_footer.php'); ?>