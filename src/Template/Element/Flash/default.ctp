<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<script type="text/javascript">
    (function($){
        $(function(){

			var $toastContent = "<div class='<?= h($class) ?>'><?= h($message) ?></div>";
			Materialize.toast($toastContent, 5000);

        }); // end of document ready
    })(jQuery); // end of jQuery name space
</script>