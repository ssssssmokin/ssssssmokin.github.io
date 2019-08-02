<div class="container-fluid">
	<div class="box" id="popular_category">
		<div class="box-name">Популярные категории</div>

		<div class="box-wrapper">
			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=4" alt="">
				</div>
				<div class="box-item-title">
					Туфли
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=3" alt="">
				</div>
				<div class="box-item-title">
					Кросовки
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=2" alt="">
				</div>
				<div class="box-item-title">
					Мокасины
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=1" alt="">
				</div>
				<div class="box-item-title">
					Сабо
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=5" alt="">
				</div>
				<div class="box-item-title">
					Босоножки
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=6" alt="">
				</div>
				<div class="box-item-title">
					Сандалии
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function(){
	    $('#popular_category .box-wrapper').slick({
            arrows: false,
	        infinite: true,
	        slidesToShow: 6,
	        slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1259,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 3,
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
                        centerPadding: '100px',
                        dots: true
                    }
                }
            ]
	    });
    });
</script>