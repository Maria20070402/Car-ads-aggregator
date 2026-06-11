function full_premium_home() {
    ob_start();
    ?>

    <div class="sp-home">

        <!-- LEFT -->
        <div class="sp-left">

            <h1>
                Знайдіть автомобіль<br>
                своєї мрії
            </h1>

            <p>
                Premium Auto — сучасна платформа для пошуку автомобілів.
                Ми збираємо оголошення від дилерів та продавців
                в одному місці для швидкого та безпечного вибору авто.
            </p>

            <div class="sp-buttons">
                <a href="/listings-page/" class="sp-btn">
                    Перейти до каталогу
                </a>
            </div>

        </div>

        <div class="sp-right">
            <img src="https://www.premiumauto.website/wp-content/uploads/2026/05/BMW-vs-Audi-vs-Mercedes-Benz_-Which-Brand-is-The-Best-1110x577-1.webp" alt="Premium Car">
        </div>

    </div>


    <section class="sp-brands-intro">

        <div class="sp-brands-text">

            <h2>
                На нашій платформі ви знайдете 
            </h2>

            <p>
                Оголошення автомобілів провідних преміальних брендів,
                які формують стандарт якості, дизайну та надійності.
            </p>

        </div>

        <div class="sp-brands-grid">

            <div class="sp-brand-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/BMW.svg" alt="BMW">
                <h3>BMW</h3>
            </div>

            <div class="sp-brand-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/90/Mercedes-Logo.svg" alt="Mercedes">
                <h3>Mercedes-Benz</h3>
            </div>

            <div class="sp-brand-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/92/Audi-Logo_2016.svg" alt="Audi">
                <h3>Audi</h3>
            </div>

        </div>

    </section>


    <section class="sp-features">

        <h2>Переваги платформи</h2>

        <div class="sp-grid">

            <div class="sp-card">
                <div class="sp-icon">🔎</div>
                <h3>Єдиний пошук</h3>
                <p>Усі автомобілі в одному місці без зайвих сайтів.</p>
            </div>

            <div class="sp-card">
                <div class="sp-icon">🏢</div>
                <h3>Перевірені продавці</h3>
                <p>Дилери та реальні продавці з актуальними даними.</p>
            </div>

            <div class="sp-card">
                <div class="sp-icon">⚡</div>
                <h3>Швидкий пошук</h3>
                <p>Зручні фільтри та швидке порівняння автомобілів.</p>
            </div>

            <div class="sp-card">
                <div class="sp-icon">🌍</div>
                <h3>Актуальні оголошення</h3>
                <p>Платформа регулярно оновлює інформацію про автомобілі.</p>
            </div>

        </div>

    </section>

    <?php
    return ob_get_clean();
}

add_shortcode('home_full', 'full_premium_home');
