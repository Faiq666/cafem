<?php $this->load->view('includes/header') ?>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Slider
================================================== -->
<div class="listing-slider mfp-gallery-container margin-bottom-0">
    <?php foreach ($images as $image){ ?>
	<a href="<?php echo base_url('../uploads/cafe_gallery/'.$image['image']) ?>" data-background-image="<?php echo base_url('../uploads/cafe_gallery/'.$image['image']) ?>" class="item mfp-gallery" title="<?php echo $image['image'] ?>"></a>
    <?php } ?>
</div>


<!-- Content
================================================== -->

<div class="container">
	<div class="row sticky-wrapper">
		<div class="col-lg-8 col-md-8 padding-right-30">

			<!-- Titlebar -->
			<div id="titlebar" class="listing-titlebar">
				<div class="listing-titlebar-title">
					<h2><?php echo $cafe['name'] ?> <span class="listing-tag"><?php echo $cafe['name'] ?></span></h2>
					<span>
						<a href="#listing-location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							2726 Shinn Street, New York
						</a>
					</span>
					<div class="star-rating" data-rating="5">
						<div class="rating-counter"><a href="#listing-reviews">(31 reviews)</a></div>
					</div>
				</div>
			</div>

			<!-- Listing Nav -->
			<div id="listing-nav" class="listing-nav-container">
				<ul class="listing-nav">
					<li><a href="#listing-overview">Overview</a></li>
					<li><a href="#listing-pricing-list">Pricing</a></li>
					<li><a href="#listing-location">Locat ion</a></li>

				</ul>
			</div>
			
			<!-- Overview -->
			<div id="listing-overview" class="listing-section">

				<!-- Description -->

				<p>
					şş
				</p>

				<p>
					..
				</p>
				
				
				<!-- Listing Contacts -->
				<div class="listing-links-container">

					<ul class="listing-links contact-links">
						<li><a href="tel:12-345-678" class="listing-links"><i class="fa fa-phone"></i> +12 345 6578</a></li>
						<li><a href="http://www.vasterad.com/cdn-cgi/l/email-protection#5c313d35301c39243d312c3039723f3331" class="listing-links"><i class="fa fa-envelope-o"></i> <span class="__cf_email__" data-cfemail="5d303c34311d38253c302d3138733e3230">[email&#160;protected]</span></a>
						</li>
						<li><a href="#" target="_blank"  class="listing-links"><i class="fa fa-link"></i> www.example.com</a></li>
					</ul>
					<div class="clearfix"></div>

					<ul class="listing-links">
						<li><a href="#" target="_blank" class="listing-links-fb"><i class="fa fa-facebook-square"></i> Facebook</a></li>
						<li><a href="#" target="_blank" class="listing-links-yt"><i class="fa fa-youtube-play"></i> YouTube</a></li>
						<li><a href="#" target="_blank" class="listing-links-ig"><i class="fa fa-instagram"></i> Instagram</a></li>
						<li><a href="#" target="_blank" class="listing-links-tt"><i class="fa fa-twitter"></i> Twitter</a></li>
					</ul>
					<div class="clearfix"></div>

				</div>
				<div class="clearfix"></div>


				<!-- Amenities -->
				<h3 class="listing-desc-headline">Amenities</h3>
				<ul class="listing-features checkboxes margin-top-0">
					<li>Elevator in building</li>
					<li>Friendly workspace</li>
					<li>Instant Book</li>
					<li>Wireless Internet</li>
					<li>Free parking on premises</li>
					<li>Free parking on street</li>
				</ul>
			</div>


			<!-- Food Menu -->
			<div id="listing-pricing-list" class="listing-section">
				<h3 class="listing-desc-headline margin-top-70 margin-bottom-30">Pricing</h3>

				<div class="show-more">
					<div class="pricing-list-container">
						
						<!-- Food List -->
                        <?php foreach (array_slice($menu_t,2)   as  $sub){ if ($menu[0][$sub] != 0){ ?>

						<h4><?php echo $sub ?></h4>


						<ul>
                            <?php foreach (array_slice(array_keys(${$sub}[0]),1) as $item){ ?>
                                <?php if (${$sub}[0][$item] != 0){ ?>
							<li>
								<h5><?php echo $item ?></h5>
								<p>Beef, salad, mayonnaise, spicey relish, cheese</p>
								<span><?php echo ${$sub}[0][$item] ?></span>
							</li>
                                <?php } ?>
                            <?php } ?>
						</ul>


                        <?php } } ?>

						<!-- Food List -->


					</div>
				</div>
				<a href="#" class="show-more-button" data-more-title="Show More" data-less-title="Show Less"><i class="fa fa-angle-down"></i></a>
			</div>
			<!-- Food Menu / End -->

		
			<!-- Location -->
			<div id="listing-location" class="listing-section">
				<h3 class="listing-desc-headline margin-top-60 margin-bottom-30">Location</h3>

				<div id="singleListingMap-container">
					<div id="singleListingMap" data-latitude="40.70437865245596" data-longitude="-73.98674011230469" data-map-icon="im im-icon-Hamburger"></div>
					<a href="#" id="streetView">Street View</a>
				</div>
			</div>



<?php $this->load->view('includes/footer') ?>