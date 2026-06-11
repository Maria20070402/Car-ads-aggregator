add_action('init', function () {

    if (!isset($_GET['custom_logout'])) {
        return;
    }

    if (is_user_logged_in()) {
        wp_logout();
    }

    wp_redirect('https://www.premiumauto.website/account/');
    exit;
});

add_action('wp_footer', function () {
    if (!is_user_logged_in()) return;
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const menu = document.querySelector(".stm-actions-list");

            if (!menu) return;

            const logoutBtn = document.createElement("a");

            logoutBtn.href = "https://www.premiumauto.website/?custom_logout=1";
            logoutBtn.innerHTML = '<i class="fas fa-sign-out-alt"></i> Вийти';

            menu.appendChild(logoutBtn);
        });
    </script>
    <?php
});
