
<?php
include ('navbar.php');
?>
<style>

.fa-folder-open-o{
	font-size:120px;
	color: #064659;
}

</style>
<body>
<div class="container" style="margin-top:200px;">
<div class="row">


<?php foreach ($galleryFolder as $folder) { ?>
<div class="col-md-3">

<div class="card text-center" >
<i class="fa fa-folder-open-o" aria-hidden="true"></i>
  <div class="card-body">
    <h4 class="card-title"><?php echo $folder->title; ?></h4>
    <a href="<?= site_url("Pages/gallery/") ?><?php echo $folder->id; ?>" class="btn btn-primary btn_foler" >List Of Images</a>
  </div>
</div>
</div>

<?php } ?>

</div>




</div>

</body>
</html>

