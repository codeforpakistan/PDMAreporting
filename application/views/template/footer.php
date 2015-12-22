		<!--js files-->
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="<?php echo base_url();?>js/bootstrap.js"></script>
		<script src="<?php echo base_url();?>js/login_animation.js"></script>
		<script src="<?php echo base_url();?>js/angular.min.js"></script>
 	   	<script src="<?php echo base_url();?>js/angular-route.js"></script>
    	<script src="<?php echo base_url();?>js/app.js"></script>
    	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.noty.packaged.min.js"></script>
    	<script type="text/javascript">
    		 function generate(type, message) {
		        var n = noty({
		            text        : message,
		            type        : type,
		            dismissQueue: true,
		            timeout     : 10000,
		            closeWith   : ['click'],
		            layout      : 'topCenter',
		            theme       : 'defaultTheme',
		            maxVisible  : 10
		        });
		        console.log('html: ' + n.options.id);
		    }
    	</script>
	</body>	
</html>