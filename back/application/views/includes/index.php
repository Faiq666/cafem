
<?php $this->load->view('includes/head') ?>
	

<!--============= start main area -->

<!-- APP NAVBAR ==========-->
<?php $this->load->view('includes/header')?>
<!--========== END app navbar -->


<?php $this->load->view('includes/navbar')?>



<!-- APP MAIN ==========-->

    <?php $this->load->view("$this->view/$this->page")?>


    <!-- APP FOOTER -->
    <!-- /#app-footer -->
    <?php $this->load->view('includes/footer')?>

<!--========== END app main -->





<?php $this->load->view('includes/foot') ?>
