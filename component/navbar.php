<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Wantul</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php if(isset($_SESSION['login'])) : ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= $_SERVER['REQUEST_URI'] == '/index.php' ? 'active' : '' ?>" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $_SERVER['REQUEST_URI'] == '/admin-page.php' ? 'active' : '' ?>" aria-current="page" href="admin-page.php">Admin Page</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                    </li>
                </ul>
                <?php else : ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= $_SERVER['REQUEST_URI'] == '/index.php' ? 'active' : '' ?>" aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="register.php">Register</a>
                    </li>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>