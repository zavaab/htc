
<?php
// include ('navbar.php');
?>
<style>
.tree {
    min-height:20px;
    padding:19px;
    margin-bottom:20px;
    background-color:#fbfbfb;
    border:1px solid #999;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05)
}
.tree li {
    list-style-type:none;
    margin:0;
    padding:10px 5px 0 5px;
    position:relative
}
.tree li::before, .tree li::after {
    content:'';
    right:-20px;
    position:absolute;
    left:auto
}
.tree li::before {
    border-right:1px solid #999;
    bottom:50px;
    height:100%;
    top:0;
    width:1px
}
.tree li::after {
    border-top:1px solid #999;
    height:20px;
    top:25px;
    width:25px
}
.tree li span {
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border:1px solid #999;
    border-radius:5px;
    display:inline-block;
    padding:3px 8px;
    text-decoration:none
}
.tree li.parent_li>span {
    cursor:pointer
}
.tree>ul>li::before, .tree>ul>li::after {
    border:0
}
.tree li:last-child::before {
    height:30px
}
.tree li.parent_li>span:hover, .tree li.parent_li>span:hover+ul li span {
    background:#eee;
    border:1px solid #94a0b4;
    color:#000
}



</style>
<body>


<div class="container" style="margin-top: 125px;">
  <h3><span style="border-bottom: 3px solid #ff7878;"><?=$title ?></span></h3>
  <h3 class="pb-3 mb-4 border-bottom"> </h3>





  <!-- <div class="tree well">
    <ul>
        <li>
            <span><i class="icon-folder-open"></i> Parent</span> <a href="">Goes somewhere</a>
            <ul>
                <li>
                	<span><i class="icon-minus-sign"></i> Child</span> <a href="">Goes somewhere</a>
                    <ul>
                        <li>
	                        <span><i class="icon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
                        </li>
                    </ul>
                </li>
                <li>
                	<span><i class="icon-minus-sign"></i> Child</span> <a href="">Goes somewhere</a>
                    <ul>
                        <li>
	                        <span><i class="icon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
                        </li>
                        <li>
                        	<span><i class="icon-minus-sign"></i> Grand Child</span> <a href="">Goes somewhere</a>
                            <ul>
                                <li>
	                                <span><i class="icon-minus-sign"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
		                            <ul>
		                                <li>
			                                <span><i class="icon-leaf"></i> Great great Grand Child</span> <a href="">Goes somewhere</a>
		                                </li>
		                                <li>
			                                <span><i class="icon-leaf"></i> Great great Grand Child</span> <a href="">Goes somewhere</a>
		                                </li>
		                             </ul>
                                </li>
                                <li>
	                                <span><i class="icon-leaf"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
                                </li>
                                <li>
	                                <span><i class="icon-leaf"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
                                </li>
                            </ul>
                        </li>
                        <li>
	                        <span><i class="icon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <span><i class="icon-folder-open"></i> Parent2</span> <a href="">Goes somewhere</a>
            <ul>
                <li>
                	<span><i class="icon-leaf"></i> Child</span> <a href="">Goes somewhere</a>
		        </li>
		    </ul>
        </li>
    </ul>
</div> -->
<div class="tree">
    <ul>
        <li>
            <span><i class="icon-calendar"></i> Week 1 - July 2020</span>
            <ul>
                <li>
                	<span class="badge badge-success"><i class="icon-minus-sign"></i> Monday, January 7: 8.00 hours</span>
                    <ul>
                        <li>
	                        <a href=""><span><i class="icon-time"></i> 8.00</span> &ndash; Changed CSS to accomodate...</a>
                        </li>
                    </ul>
                </li>
                <li>
                	<span class="badge badge-success"><i class="icon-minus-sign"></i> Tuesday, January 8: 8.00 hours</span>
                    <ul>
                        <li>
	                        <span><i class="icon-time"></i> 6.00</span> &ndash; <a href="">Altered code...</a>
                        </li>
                        <li>
	                        <span><i class="icon-time"></i> 2.00</span> &ndash; <a href="">Simplified our approach to...</a>
                        </li>
                    </ul>
                </li>
                <li>
                	<span class="badge badge-warning"><i class="icon-minus-sign"></i> Wednesday, January 9: 6.00 hours</span>
                    <ul>
                        <li>
	                        <a href=""><span><i class="icon-time"></i> 3.00</span> &ndash; Fixed bug caused by...</a>
                        </li>
                        <li>
	                        <a href=""><span><i class="icon-time"></i> 3.00</span> &ndash; Comitting latest code to Git...</a>
                        </li>
                    </ul>
                </li>
                <li>
                	<span class="badge badge-important"><i class="icon-minus-sign"></i> Wednesday, January 9: 4.00 hours</span>
                    <ul>
                        <li>
	                        <a href=""><span><i class="icon-time"></i> 2.00</span> &ndash; Create component that...</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <span><i class="icon-calendar"></i> Week 2 - July 2020</span>
            <ul>
                <li>
                	<span class="badge badge-success"><i class="icon-minus-sign"></i> Monday, January 14: 8.00 hours</span>
                    <ul>
                        <li>
	                        <span><i class="icon-time"></i> 7.75</span> &ndash; <a href="">Writing documentation...</a>
                        </li>
                        <li>
	                        <span><i class="icon-time"></i> 0.25</span> &ndash; <a href="">Reverting code back to...</a>
                        </li>
                    </ul>
                </li>
		    </ul>
        </li>
    </ul>
</div>
</div>
<!-- /.container -->






<!-- <textarea name="editor1"></textarea>
		<script>
			CKEDITOR.replace( 'editor1' );
		</script> -->


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="<?php echo base_url(); ?>assets/lib/jquery/jquery.min.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/lib/touchSwipe/jquery.touchSwipe.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

   <script>
   
   function file_dpwnload(d_id) {
      alert(d_id);
				$.ajax({
							url: "<?php echo base_url()?>Admin/file_dpwnload",
							type: "POST",
							data:{d_id:d_id},
							success: function(result) {
                     $("#download_count_"+d_id).text(result);
							}
					});

	}


   
   // number count for stats, using jQuery animate

            $('.counting').each(function() {
            var $this = $(this),
                  countTo = $this.attr('data-count');
            
            $({ countNum: $this.text()}).animate({
               countNum: countTo
            },

            {

               duration: 2000,
               easing:'linear',
               step: function() {
                  $this.text(Math.floor(this.countNum));
               },
               complete: function() {
                  $this.text(this.countNum);
                  //alert('finished');
               }

            });  
            

            });


   </script>

   <script>
   // hove card
   $(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready
      console.log("document is ready");
      

      $( ".card" ).hover(
      function() {
         $(this).addClass('shadow-lg').css('cursor', 'pointer'); 
      }, function() {
         $(this).removeClass('shadow-lg');
      }
      );
      
      // document ready  
      });
   </script>


   <script>
   
   $(function () {
    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > span').on('click', function (e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).attr('title', 'Expand this branch').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
        } else {
            children.show('fast');
            $(this).attr('title', 'Collapse this branch').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
        }
        e.stopPropagation();
    });
});

   </script>
</body>
</html>

