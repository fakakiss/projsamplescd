        <?php if($_SESSION["sess_id1"]){ } else {?>
				<div class="row">
				<div class="one whole padded">
					<a href="incs/homelogin_m.php"><button class="block" type="submit">Login</button></a>
					</div>
				</div>
				<?php } ?>
				
<nav>
	<ul>
		<li><a href="./index_m.php?page_ren=m">STAGE 1 - Get Your Passport</a></li>
                
        <li><a href="./index_m.php?page_ren=s2">STAGE 2 (Optional) - Shop with us and get more entries</a></li>
		
		<li><a href="./index_m.php?page_ren=s3">STAGE 3 - Share with friends</a></li>
		
		<li><a  href="./index_m.php?page_ren=s4">STAGE 4 - SMS 5 friends</a></li>
	</ul>
</nav>
<br />


<script type="text/javascript">

    (function($){
        $.fn.overlayMask = function (action) {
            var mask = this.find('.overlay-mask');

            // Create the required mask

            if (!mask.length) {
                this.css({
                    position: 'relative'
                });
                mask = $('<div class="overlay-mask"></div>');
                mask.css({
                    position: 'absolute',
                    width: '100%',
                    height: '100%',
                    top: '0px',
                    left: '0px',
                    zIndex: 100,
                    background: "#333333",
                    padding: "5px 0",
                    "opacity": 0.4
                }).appendTo(this);
            }

            // Act based on params

            if (!action || action === 'show') {
                mask.show();
            } else if (action === 'hide') {
                mask.hide();
            }

            return this;
        };
    })(jQuery);

    jQuery('#mask-wrap').overlayMask();


</script>