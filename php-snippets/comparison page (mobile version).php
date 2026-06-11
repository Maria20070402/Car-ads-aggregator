add_action('wp_footer', function () { ?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".add-to-compare, .compare-col-stm-empty a").forEach(function(el){
        el.setAttribute("href", "<?php echo home_url('/ listings-page/'); ?>");
    });
});
</script>
<?php });
