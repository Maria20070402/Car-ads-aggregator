function premiumauto_scroll_reveal_animation() {
    ?>
    
    <script>
    document.addEventListener('DOMContentLoaded', function () {

        const elements = document.querySelectorAll(
            '.sp-card, .sp-brand-card, .sp-left, .sp-right, .sp-features h2, .sp-brands-text'
        );
eal
        elements.forEach(el => {
            el.classList.add('reveal');
        });

        function revealOnScroll() {

            const windowHeight = window.innerHeight;

            elements.forEach(el => {

                const elementTop = el.getBoundingClientRect().top;

                if (elementTop < windowHeight - 100) {
                    el.classList.add('active');
                }

            });
        }

        revealOnScroll();

        window.addEventListener('scroll', revealOnScroll);

    });
    </script>

    <?php
}

add_action('wp_footer', 'premiumauto_scroll_reveal_animation');
