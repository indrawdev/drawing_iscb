<!doctype html>
<html>
<head>
    <title><?php echo $this->template->title->default("Default title"); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $this->template->description; ?>">
    <?php echo $this->template->meta; ?>
    <?php echo $this->template->stylesheet; ?>
    <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/favicon.ico'; ?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet"> 
    <script src="<?php echo base_url() . 'assets/js/jquery.min.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/jquery-sortable.js'; ?>"></script>
</head>
<body>

<?php 
    // This is an example to show that you can load stuff from inside the template file
    echo $this->template->widget("navigation", array('title' => 'Drawing 16 Besar - ISC B'));
?>

<div class="container-fluid" style="margin-top: 50px;">

  <?php
    // This is the main content partial
    echo $this->template->content;
  ?>

  <hr>

</div>
<footer class="main-footer">
  <div class="main-footer-content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-xs-6 col-sm-1"><img src="<?php echo base_url() . 'assets/images/footer-cup-iscb.png';?>" class="img-responsive" /></div>
          <div class="col-xs-6 col-sm-5"><img src="<?php echo base_url() . 'assets/images/footer-babak-16-besar.png';?>" class="img-responsive"/></div>
          <div class="col-xs-6 col-sm-6"><img src="<?php echo base_url() . 'assets/images/footer-iscb.png';?>" class="img-responsive" /></div>
        </div>
      
    </div>
  </div>
    <p class="copyright"><?php echo $this->template->footer->prepend("Copyright &copy; PT. Gelora Trisula Semesta - " . date('Y')); ?></p>
</footer>

<?php echo $this->template->javascript; ?>

</body>
</html>