<?php
include 'conn.php';
include '_layout.php';
?>

    <section id="order">
        <div class="menu">
            <ul>
                <h1>MENU</h1>
                <li><a href="#" class="menu-item" data-img="chocho.jpg">chocho</a></li>
                <li><a href="#" class="menu-item" data-img="vanilla-latte.jpg">vanilla latte</a></li>
                <li><a href="#" class="menu-item" data-img="barako.jpg">barako</a></li>
                <li><a href="#" class="menu-item" data-img="milo.jpg">milo</a></li>
            </ul>
        </div>
        <div class="image">
            <img src="./asset/img/vecteezy_ai-generated-iced-coffee-splash-in-a-cup-with-coffee-beans_35906997.png" alt="Item Image" id="item-image">
            <h1>$30.04</h1>
        </div>
        <div class="other-dish">
            <ul>
                <h1>Other Dishes</h1>
                <li><a href="#">burger</a></li>
                <li><a href="#">fries</a></li>
                <li><a href="#">morcha</a></li>
                <li><a href="#">spaghetti</a></li>
                <li><a href="#">nachos</a></li>
            </ul>
        </div>
    </section>
    
    <main>
        <footer>
            <p>&copy; 2024 Food & Brew. All rights reserved.</p>
        </footer>
    </main>

</body>
<script>
    function handleScrollAnimation() {
        const scrollCards = document.querySelectorAll('.scroll-card');
        scrollCards.forEach(card => {
            const cardPosition = card.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (cardPosition < windowHeight - 100) {
                card.classList.add('in-view');
            }
        });
    }

    window.addEventListener('scroll', handleScrollAnimation);
    window.addEventListener('load', handleScrollAnimation);
</script>
<script>
    let lastScrollTop = 0;
    const sidebar = document.querySelector("sidebar");

    window.addEventListener("scroll", () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Scroll down - hide the sidebar
            sidebar.classList.add("hide-sidebar");
        } else {
            // Scroll up - show the sidebar
            sidebar.classList.remove("hide-sidebar");
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
    });

</script>

</html>