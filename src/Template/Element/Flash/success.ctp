<script type="text/javascript">
    (function($){
        $(function(){

			var $toastContent = "<i class='material-icons'>done</i>&nbsp;&nbsp;<?= h($message) ?>";
			Materialize.toast($toastContent, 5000, 'green');

        }); // end of document ready
    })(jQuery); // end of jQuery name space
</script>
