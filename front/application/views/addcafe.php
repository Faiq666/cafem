<?php $this->load->view('includes/header') ?>
<br>
<br>*5


<!-- Content
================================================== -->


<!-- Container -->
<div class="container">

		<div class="row">
			<div class="col-lg-12">

				<div class="notification notice large margin-bottom-55">
					<h4>Hələdə sizin obyektiniz bizim saytda yoxdu? 🙂</h4>
					<p>Əgər sizində obyektin bizim səhifədə olmağını istiyirsizsə aşağıdakıları doldurun</p>
				</div>

				<div id="add-listing" class="separated-form">

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-doc"></i>Məlumatlar</h3>
						</div>

						<!-- Title -->
                        <form action="<?php echo base_url('Home/addAct') ?>" method="POST" enctype="multipart/form-data">
						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Ad<i class="tip" data-tip-content="Name of your business"></i></h5>
								<input class="search-field" type="text" name="name" required  placeholder="adı daxil edin"/>
							</div>
						</div>
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <h5>Əlaqə nömrəsi və email<i class="tip" data-tip-content="Name of your business"></i></h5>
                                <input class="search-field" type="text" name="number" required placeholder="əlaqə nömrəsi və email"/>
                            </div>
                        </div>
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <h5>Location<i class="tip" data-tip-content="Name of your business"></i></h5>
                                <input class="search-field" type="text" name="location" required  placeholder="locationu daxil edin"/>
                            </div>
                        </div>
                            <div class="row with-forms">
                                <div class="col-md-12">
                                    <h5>Haqqında<i class="tip" data-tip-content="Name of your business"></i></h5>
                                    <input class="search-field" type="text" name="description" required placeholder="əlavə məlumatlar"/>
                                </div>
                            </div>
                        <button class="btn btn-info" >Add</button>
                        </form>
						<!-- Row / End -->
						<!-- Checkboxes / End -->
<?php $this->load->view('includes/footer') ?>