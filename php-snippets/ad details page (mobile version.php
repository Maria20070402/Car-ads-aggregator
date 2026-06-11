add_action('wp_footer', function () {
?>
<script>
(function () {

    function isMobile() {
        return window.innerWidth <= 768;
    }

    function moveLayout() {

        if (!isMobile()) return;

        const gallery = document.querySelector('.stm-big-car-gallery, .stm-thumbs-car-gallery');
        const side = document.querySelector('.stm_single_car_side');

        if (!gallery || !side) return;

        if (side.dataset.moved === "1") return;

        gallery.insertAdjacentElement('afterend', side);
        side.dataset.moved = "1";
    }

    function init() {

        moveLayout();

        const observer = new MutationObserver(function () {
            moveLayout();
        });

        observer.observe(document.body, {
            childList: true,
            subtree: true
        });
    }

    document.addEventListener('DOMContentLoaded', init);

})();
</script>
<?php
});
