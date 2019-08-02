<div class="container-fluid">
	<div class="box bestseller" id="bestseller">
		<div class="box-name">Хиты продаж</div>

		<div class="box-wrapper">
			<?php for ($i = 1; $i <= 12; $i++) { ?>
				<div class="box-item">
					<?php if ($i%2==0) { ?>
						<div class="box-item-label-new">
							<span class="badge badge-danger">new</span>
						</div>
					<?php } ?>
					<div class="box-item-image">
						<img src="https://source.unsplash.com/200x305/?sig=<?php echo $i;?>" alt="">
					</div>
					<div class="box-item-title-manufacturer"><a href="#">Ascalini</a></div>
					<div class="box-item-title">
						<a href="#">Босоножки бежевые</a>
					</div>
					<?php if ($i%2==0) { ?>
						<div class="box-item-price">
							<span class="box-item-price-new">2 900 р.</span>
							<span class="box-item-price-old">5 750 р.</span>
						</div>
						<div class="box-item-rating">
							<div class="rating">
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							</div>
						</div>
					<?php } else { ?>
						<div class="box-item-price">
							<span class="box-item-price-new">2 900 р.</span>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function(){
        $('#bestseller .box-wrapper').slick({
            arrows: false,
            dots: true,
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 6,
            responsive: [
                {
                    breakpoint: 1259,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                }
            ]
        });
    });
</script>