<?php $this->load->view('includes/header') ?>
<!-- Banner
================================================== -->
<div class="main-search-container centered" data-background-image="<?php echo base_url('public/assets/') ?>images/main-search-background-01.jpg">
	<div class="main-search-inner">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>
						Tap yaxınlıqdakı
						<!-- Typed words can be configured in script settings at the bottom of this HTML file -->
						<span class="typed-words"></span>
					</h2>
					<h4>İstədiyinizi bizimlə tapın!</h4>

					<div class="main-search-input">
                        <div class="main-search-input-item">
                            <select data-placeholder="All Categories" class="chosen-select" >
                                <option>Ailəvi</option>
                                <option>Ümumi</option>


                            </select>
                        </div>


						<div class="main-search-input-item">
                            <select data-placeholder="All Categories" class="chosen-select" >
                                <option>Bütün kateqoriyalar</option>
                                <option>Hezi Aslanov</option>
                                <option>Ehmedli</option>
                                <option>Xalqlar dostlugu</option>
                                <option>Neftciler</option>

                            </select>
						</div>

						<div class="main-search-input-item">
							<select data-placeholder="All Categories" class="chosen-select" >
								<option>Bütün kateqoriyalar</option>
								<option>Restoran</option>
								<option>Lounge</option>
								<option>Çayxana</option>
								<option>Playstation</option>

							</select>
						</div>

						<button class="button" onclick="window.location.href='listings-half-screen-map-list.html'">Axtar</button>

					</div>
				</div>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <h5 class="highlighted-categories-headline">Or browse featured categories:</h5>

                    <div class="highlighted-categories">
                        <!-- Box -->
                        <a href="listings-list-with-sidebar.html" class="highlighted-category">
                            <i class="im im-icon-Home"></i>
                            <h4>Apartments</h4>
                        </a>

                        <!-- Box -->
                        <a href="listings-list-full-width.html" class="highlighted-category">
                            <i class="im im-icon-Hamburger"></i>
                            <h4>Eat &amp; Drink</h4>
                        </a>

                        <!-- Box -->
                        <a href="listings-half-screen-map-list.html" class="highlighted-category">
                            <i class="im im-icon-Electric-Guitar"></i>
                            <h4>Events</h4>
                        </a>

                        <!-- Box -->
                        <a href="listings-half-screen-map-list.html" class="highlighted-category">
                            <i class="im im-icon-Dumbbell"></i>
                            <h4>Fitness</h4>
                        </a>
                    </div>

                </div>
            </div>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-top-75">
				<strong class="headline-with-separator">Popular Kateqoriyalar</strong>
			</h3>
		</div>

		<div class="col-md-12">
			<div class="categories-boxes-container margin-top-5 margin-bottom-30">

				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box">
					<i class="im im-icon-Hamburger"></i>
					<h4>Restoranlar</h4>
					<span class="category-box-counter">12</span>
				</a>

				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box">
					<i class="im  im-icon-Sleeping"></i>
					<h4>Loungelər</h4>
					<span class="category-box-counter">32</span>
				</a>

				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box">
					<i class="im im-icon-Shopping-Bag"></i>
					<h4>Bərbərxanalar</h4>
					<span class="category-box-counter">11</span>
				</a>

				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box">
					<i class="im im-icon-Cocktail"></i>
					<h4>Playstationlar</h4>
					<span class="category-box-counter">15</span>
				</a>

				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box">
					<i class="im im-icon-Electric-Guitar"></i>
					<h4>Çayxanalar</h4>
					<span class="category-box-counter">21</span>
				</a>

				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box">
					<i class="im im-icon-Dumbbell"></i>
					<h4>Publar</h4>
					<span class="category-box-counter">28</span>
				</a>

			</div>
		</div>
	</div>
</div>
<!-- Category Boxes / End -->




<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
					<strong class="headline-with-separator">Ən çox ziyarət edilənlər</strong>
				</h3>
			</div>

			<div class="col-md-12">
				<div class="simple-slick-carousel dots-nav">

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="listings-single-page.html" class="listing-item-container">
						<div class="listing-item">
							<img src="<?php echo base_url('public/assets/') ?>images/listing-item-01.jpg" alt="">

							<div class="listing-badge now-open">Now Open</div>

							<div class="listing-item-content">
								<span class="tag">Restoran</span>
								<h3>50 Qəpik <i class="verified-icon"></i></h3>
								<span>28 May</span>
							</div>
							<span class="like-icon"></span>
						</div>
						<div class="star-rating" data-rating="3.5">
							<div class="rating-counter">(12 reviews)</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="listings-single-page.html" class="listing-item-container">
						<div class="listing-item">
							<img src="<?php echo base_url('public/assets/') ?>images/listing-item-02.jpg" alt="">
							<div class="listing-item-details">
								<ul>
									<li>Friday, August 10</li>
								</ul>
							</div>
							<div class="listing-item-content">
								<span class="tag">Pub</span>
								<h3>Old Baku</h3>
								<span>Nizami küçəsi</span>
							</div>
							<span class="like-icon"></span>
						</div>
						<div class="star-rating" data-rating="5.0">
							<div class="rating-counter">(23 reviews)</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="listings-single-page.html" class="listing-item-container">
						<div class="listing-item">
							<img src="<?php echo base_url('public/assets/') ?>images/listing-item-03.jpg" alt="">
							<div class="listing-item-details">
								<ul>
									<li>Starting from $59 per night</li>
								</ul>
							</div>
							<div class="listing-item-content">
								<span class="tag">Playstation</span>
								<h3>ES club</h3>
								<span>28 May</span>
							</div>
							<span class="like-icon"></span>
						</div>
						<div class="star-rating" data-rating="2.0">
							<div class="rating-counter">(17 reviews)</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="listings-single-page.html" class="listing-item-container">
						<div class="listing-item">
							<img src="<?php echo base_url('public/assets/') ?>images/listing-item-04.jpg" alt="">

							<div class="listing-badge now-open">Now Open</div>

							<div class="listing-item-content">
								<span class="tag">Eat & Drink</span>
								<h3>Burger House <i class="verified-icon"></i></h3>
								<span>2726 Shinn Street, New York</span>
							</div>
							<span class="like-icon"></span>
						</div>
						<div class="star-rating" data-rating="5.0">
							<div class="rating-counter">(31 reviews)</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="listings-single-page.html" class="listing-item-container">
						<div class="listing-item">
							<img src="<?php echo base_url('public/assets/') ?>images/listing-item-05.jpg" alt="">
							<div class="listing-item-content">
								<span class="tag">Other</span>
								<h3>Airport</h3>
								<span>1512 Duncan Avenue, New York</span>
							</div>
							<span class="like-icon"></span>
						</div>
						<div class="star-rating" data-rating="3.5">
							<div class="rating-counter">(46 reviews)</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->

				<!-- Listing Item -->
				<div class="carousel-item">
					<a href="listings-single-page.html" class="listing-item-container">
						<div class="listing-item">
							<img src="<?php echo base_url('public/assets/') ?>images/listing-item-06.jpg" alt="">

							<div class="listing-badge now-closed">Now Closed</div>

							<div class="listing-item-content">
								<span class="tag">Eat & Drink</span>
								<h3>Think Coffee</h3>
								<span>215 Terry Lane, New York</span>
							</div>
							<span class="like-icon"></span>
						</div>
						<div class="star-rating" data-rating="4.5">
							<div class="rating-counter">(15 reviews)</div>
						</div>
					</a>
				</div>
				<!-- Listing Item / End -->
				</div>

			</div>

		</div>
	</div>

</section>
<!-- Fullwidth Section / End -->


<!-- Footer
================================================== -->
<?php $this->load->view('includes/footer') ?>