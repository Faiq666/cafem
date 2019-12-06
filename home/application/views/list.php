<?php $this->load->view('includes/header') ?>
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Lists</h2><span>Istədiyini bizimlə tap!</span>

				<!-- Breadcrumbs -->


			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Search -->
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
                    <option>Q.Qarayev</option>
                    <option>Koroglu</option>
                    <option>Ulduz</option>
                    <option>N.Nerimanov</option>
                    <option>Genclik</option>
                    <option>28 May</option>
                    <option>Nizami</option>
                    <option>Elmler Akademiyası</option>
                    <option>İnsaatcilar</option>
                    <option>20 Yanvar</option>
                    <option>M.Ecemi</option>
                    <option>Nesimi</option>
                    <option>Azadlig</option>
                    <option>Dernegul</option>
                    <option>İceriseher</option>
                    <option>Sahil</option>
                    <option>Xetai</option>
                    <option>Avtovagzal</option>
                    <option>Bakmil</option>
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
		<!-- Search Section / End -->


		<div class="col-md-12">

			<!-- Sorting - Filtering Section -->
			<div class="row margin-bottom-25 margin-top-30">

				<div class="col-md-6">
					<!-- Layout Switcher -->
					<div class="layout-switcher">
						<a href="listings-grid-full-width.html" class="grid"><i class="fa fa-th"></i></a>
						<a href="#" class="list active"><i class="fa fa-align-justify"></i></a>
					</div>
				</div>

				<div class="col-md-6">
					<div class="fullwidth-filters">
						
						<!-- Panel Dropdown -->
						<div class="panel-dropdown wide float-right">
							<a href="#">More Filters</a>
							<div class="panel-dropdown-content checkboxes">

								<!-- Checkboxes -->
								<div class="row">
									<div class="col-md-6">
										<input id="check-a" type="checkbox" name="check">
										<label for="check-a">Elevator in building</label>

										<input id="check-b" type="checkbox" name="check">
										<label for="check-b">Friendly workspace</label>

										<input id="check-c" type="checkbox" name="check">
										<label for="check-c">Instant Book</label>

										<input id="check-d" type="checkbox" name="check">
										<label for="check-d">Wireless Internet</label>
									</div>	

									<div class="col-md-6">
										<input id="check-e" type="checkbox" name="check" >
										<label for="check-e">Free parking on premises</label>

										<input id="check-f" type="checkbox" name="check" >
										<label for="check-f">Free parking on street</label>

										<input id="check-g" type="checkbox" name="check">
										<label for="check-g">Smoking allowed</label>	

										<input id="check-h" type="checkbox" name="check">
										<label for="check-h">Events</label>
									</div>
								</div>
								
								<!-- Buttons -->
								<div class="panel-buttons">
									<button class="panel-cancel">Cancel</button>
									<button class="panel-apply">Apply</button>
								</div>

							</div>
						</div>
						<!-- Panel Dropdown / End -->

						<!-- Panel Dropdown-->
						<div class="panel-dropdown float-right">
							<a href="#">Distance Radius</a>
							<div class="panel-dropdown-content">
								<input class="distance-radius" type="range" min="1" max="100" step="1" value="50" data-title="Radius around selected destination">
								<div class="panel-buttons">
									<button class="panel-cancel">Disable</button>
									<button class="panel-apply">Apply</button>
								</div>
							</div>
						</div>
						<!-- Panel Dropdown / End -->

						<!-- Sort by -->
						<div class="sort-by">
							<div class="sort-by-select">
								<select data-placeholder="Default order" class="chosen-select-no-single">
									<option>Default Order</option>	
									<option>Highest Rated</option>
									<option>Most Reviewed</option>
									<option>Newest Listings</option>
									<option>Oldest Listings</option>
								</select>
							</div>
						</div>
						<!-- Sort by / End -->

					</div>
				</div>

			</div>
			<!-- Sorting - Filtering Section / End -->

			<div class="row">

				<!-- Listing Item -->

                 <?php foreach ($cafesss as $cafe){ ?>
                <div class="col-lg-12 col-md-12">
                    <div class="listing-item-container list-layout">
                        <a href="<?php echo base_url('Home/single/'.$cafe['id'])?>" class="listing-item">

                            <!-- Image -->
                            <div class="listing-item-image">
                                <img src="images/listing-item-01.jpg" alt="">
                                <span class="tag">Eat & Drink</span>
                            </div>

                            <!-- Content -->
                            <div class="listing-item-content">

								<div class="listing-item-inner">
									<h3> <i class="verified-icon"></i></h3>
									<span><?php echo $cafe['name'] ?></span>
                                    <br>
                                    <br>
									<div class="star-rating" data-rating="3.5">
										<div class="rating-counter">(12 reviews)</div>
									</div>
								</div>
                                <span class="like-icon"></span>
                            </div>
                        </a>
                    </div>
                </div>
                    <?php }; ?>


				<!-- Listing Item / End -->



			</div>

			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					<div class="pagination-container margin-top-20 margin-bottom-40">
						<nav class="pagination">
							<ul>
								<li><a href="#" class="current-page">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- Pagination / End -->

		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<?php $this->load->view('includes/footer') ?>