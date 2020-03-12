<script src="<?php echo base_url('assets') ?>/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url('assets') ?>/js/bootstrap.js"></script>
<script defer src="<?php echo base_url('assets') ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
</script>