<div class="container-fluid">
	<div class="box" id="popular_manufacturer">
		<div class="box-name">Популярные производители</div>

		<div class="box-wrapper">
			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=4" alt="">
				</div>
				<div class="box-item-title">
					Baden
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=3" alt="">
				</div>
				<div class="box-item-title">
					Covani
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=2" alt="">
				</div>
				<div class="box-item-title">
					Jana
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=1" alt="">
				</div>
				<div class="box-item-title">
					Rieker
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=5" alt="">
				</div>
				<div class="box-item-title">
					TOFA
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=6" alt="">
				</div>
				<div class="box-item-title">
					Marco Tozzi
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=6" alt="">
				</div>
				<div class="box-item-title">
					Baden
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=6" alt="">
				</div>
				<div class="box-item-title">
					Covani
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=6" alt="">
				</div>
				<div class="box-item-title">
					Jana
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=6" alt="">
				</div>
				<div class="box-item-title">
					Rieker
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=6" alt="">
				</div>
				<div class="box-item-title">
					TOFA
				</div>
			</div>

			<div class="box-item">
				<div class="box-item-image">
					<img src="https://source.unsplash.com/200x220/?sig=6" alt="">
				</div>
				<div class="box-item-title">
					Marco Tozzi
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function(){
        $('#popular_manufacturer .box-wrapper').slick({
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