add_action('wp_footer', function () {

    if ( current_user_can('administrator') ) {
        return; 
    }
?>
<script>
jQuery(document).ready(function($){

    $('a[href*="/author/"]').each(function(){

        let text = $(this).text().trim();

        if (
            text.includes('Мої оголошення') ||
            text.includes('Показати мій публічний профіль')
        ) {
            $(this).remove();
        }
    });

});
</script>
<?php
});
