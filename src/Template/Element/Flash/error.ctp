<script type="text/javascript">
    (function($){
        $(function(){

			var $toastContent = "<i class='material-icons'>error_outline</i>&nbsp;&nbsp;<?= addslashes(h($message)) ?>";
			Materialize.toast($toastContent, 5000, 'red');

        }); // end of document ready
    })(jQuery); // end of jQuery name space
</script>