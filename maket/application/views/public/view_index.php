<?php $this->load->view('public/partials/view_public_header.php'); ?>
<div class="banner">
	<div class="container">
		<script src="<?= base_url('assets/js/responsiveslides.min.js'); ?>"></script>
		<script>
		$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
		namespace: "callbacks",
		pager: true,
		});
		});
		</script>
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
				<li>
					
					<div class="banner-text">
						<h3>УНИКАЛЬНАЯ ВОЗМОЖНОСТЬ   </h3>
						<p>Получить автомобиль в аренду от молодой и амбициозной компании CarRent в сотрудничестве с Радитехническим колледжем</p>
						
					</div>
					
				</li>
				<li>
					
					<div class="banner-text">
						<h3>ОБШИРНЫЙ СПИСОК АВТОМОБИЛЕЙ  </h3>
						<p>Наша компания сотрудничает с большим количеством производителей и может предложить обширный модельный ряд</p>
						
					</div>
					
				</li>
				<li>
					<div class="banner-text">
						<h3>МЫ ГАРАНТИРУЕМ ЭТАЛАЛОННОЕ КАЧЕСТВО</h3>
						<p>Вы можете быть уверены: мы предоставим всевозможные отзывы и гарантии! Все для Вас!</p>
						
					</div>
					
				</li>
			</ul>
		</div>
	</div>
</div>
<!--content-->
<div class="container">
	<div class="cont">
		<div class="content">
			<div class="content-top-bottom">
				<h2>Рекомендуемые ПРОДУКТЫ</h2>
				<?php foreach($featured as $feature) : ?>
					<div class="col-md-4 men">
						<a href="<?php echo base_url('pages/show') . '/' . $feature['vehicle_id']; ?> " class="b-link-stripe b-animate-go  thickbox">
							<img style="height: 260px;" class="img-responsive" src="<?= base_url('uploads'); ?>/<?php echo $feature['image']; ?>" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in   b-delay03 ">
								<span><?php echo $feature['model_name']; ?></span>
								</h3>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
				<div class="clearfix"> </div>
			</div>
			<div class="content-top">
				<h1>НОВЫЕ ПОСТУПЛЕНИЯ</h1>
				
				<div class="grid-in">
					{vehicles}
						<div class="col-md-3 grid-top simpleCart_shelfItem">
							<a href="<?= base_url(); ?>pages/show/{vehicle_id}" class="b-link-stripe b-animate-go  thickbox">
							<img class="img-responsive" src="<?= base_url('uploads/'); ?>/{image}" alt="">
								<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
									<span>{model_name}</span>
									
									</h3>
								</div>
							</a>
							
							<p><a href="single.html">{model_name}</a></p>
						</div>
					{/vehicles}
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		
	</div>
	
</div>
<?php $this->load->view('public/partials/view_public_footer.php'); ?>