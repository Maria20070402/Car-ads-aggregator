add_action('wp_footer', function () {
?>
<script>
document.addEventListener("submit", function(e){

    const form = e.target;
    if (!form || !form.matches("form")) return;

    if (!window.location.pathname.includes("/account/")) return;

    let hasError = false;

    let inputs = form.querySelectorAll("input, textarea, select");

    inputs.forEach(input => {

        if (input.type === "hidden" || input.type === "submit") return;

        let value = (input.value || "").trim();

        input.style.border = "";
        input.style.boxShadow = "";

        if (value === "") {
            input.style.border = "2px solid red";
            input.style.boxShadow = "0 0 8px rgba(255,0,0,0.5)";
            hasError = true;
        }

        if (
            input.name?.toLowerCase().includes("email") ||
            input.type === "email"
        ) {
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

            if (value !== "" && !emailPattern.test(value)) {
                input.style.border = "2px solid red";
                input.style.boxShadow = "0 0 8px rgba(255,0,0,0.5)";
                hasError = true;
            }
        }

    });

    if (hasError) {
        e.preventDefault();
        e.stopImmediatePropagation();

        let msg =
            form.querySelector(".stm-validation-message") ||
            form.querySelector(".stm-message") ||
            form.querySelector(".woocommerce-error");

        if (msg) {
            msg.innerHTML = "❌ Заповніть всі поля";
            msg.style.color = "red";
            msg.style.display = "block";
        }

        return false;
    }

}, true);
</script>
<?php
});
