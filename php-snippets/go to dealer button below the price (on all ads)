function premiumauto_insert_dealer_button() {

    if (!is_singular('listings')) {
        return;
    }

    $dealer_link = get_post_meta(get_the_ID(), 'dealer_link', true);

    if (empty($dealer_link)) {
        return;
    }

    ?>

    <script>
    document.addEventListener('DOMContentLoaded', function () {

        const priceBlock =
            document.querySelector('.single-regular-price') ||
            document.querySelector('.normal-price') ||
            document.querySelector('.stm-price') ||
            document.querySelector('.price-heading');

        if (!priceBlock) return;

        if (document.querySelector('.premiumauto-dealer-button-wrap')) {
            return;
        }

        const buttonWrap = document.createElement('div');
        buttonWrap.className = 'premiumauto-dealer-button-wrap';

        buttonWrap.innerHTML = `
            <a href="<?php echo esc_url($dealer_link); ?>"
               class="premiumauto-dealer-button"
               target="_blank"
               rel="nofollow noopener noreferrer">
               Перейти до першоджерела
            </a>
        `;

        const priceContainer =
            priceBlock.closest('.price-heading') ||
            priceBlock.parentElement;

        priceContainer.insertAdjacentElement('afterend', buttonWrap);

    });
    </script>

    <?php
}

add_action('wp_footer', 'premiumauto_insert_dealer_button');
