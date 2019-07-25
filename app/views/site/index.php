<section>
    <div class="container">
        <ul class="auth">

            <?php if (\app\components\Auth::isGuest()) : ?>

            <li><a href="/register">Register</a></li>
            <li><a href="/login">Login</a></li>

            <?php else: ?>

            <li><a href="/logout">Logout</a></li>

            <?php endif; ?>

        </ul>
        <h1>Home Page</h1>
    </div>
</section>