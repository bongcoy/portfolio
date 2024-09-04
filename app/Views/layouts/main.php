<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Default Light Mode */
        :root {
            --bg-color: #ffffff;
            --text-color: #000000;
            --navbar-bg: #f8f9fa;
            --footer-bg: #f8f9fa;
            --footer-text-color: #000000;
            --footer-link-color: #007bff;
        }

        /* Dark Mode */
        .dark-mode {
            --bg-color: #121212;
            --text-color: #ffffff;
            --navbar-bg: #333;
            --footer-bg: #1a1a1a;
            /* Darker footer background */
            --footer-text-color: #f1f1f1;
            /* Lighter footer text */
            --footer-link-color: #1e90ff;
            /* Lighter link color */
        }

        /* Apply the variables */
        body {
            background-color: var(--bg-color);
            color: var(--text-color);
        }

        .navbar,
        .footer {
            background-color: var(--navbar-bg);
        }

        a {
            color: var(--link-color);
        }

        /* Footer styles */
        .footer {
            background-color: var(--footer-bg);
            color: var(--footer-text-color);
        }

        .footer a {
            color: var(--footer-link-color);
        }

        /* Ensures content doesn't overlap with the sticky navbar */
        .container {
            margin-top: 100px;
        }

        /* Background color for active menu item */
        .navbar-nav .nav-link.active {
            background-color: #007bff;
            /* Bootstrap primary color */
            color: white;
            /* White text on active link */
            border-radius: 5px;
        }

        /* Optional: Add padding to make the link look more like a button */
        .navbar-nav .nav-link {
            padding: 0.5rem 1rem;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('/') ?>">Pascal's Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= (uri_string() == '') ? 'active' : '' ?>" href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (uri_string() == 'projects') ? 'active' : '' ?>" href="<?= base_url('/projects') ?>">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (uri_string() == 'skills') ? 'active' : '' ?>" href="<?= base_url('/skills') ?>">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (uri_string() == 'contact') ? 'active' : '' ?>" href="<?= base_url('/contact') ?>">Contact</a>
                    </li>
                </ul>
                <!-- Add the toggle button here -->
                <button id="themeToggle" class="btn btn-outline-secondary ms-auto">Dark Mode</button>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container mt-5">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Footer -->
    <footer class="footer text-center text-lg-start mt-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="text-uppercase">Pascal's Portfolio</h5>
                    <p>Thank you for visiting my portfolio. Feel free to reach out via the contact page or connect with me on social media!</p>
                </div>
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="text-uppercase">Connect with me</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://www.linkedin.com/in/muhammad-pascal-dewantara-15901815b/" target="_blank">LinkedIn</a></li>
                        <li><a href="https://github.com/bongcoy" target="_blank">GitHub</a></li>
                        <li><a href="https://www.instagram.com/mpascaldewantara/" target="_blank">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3 bg-dark text-white">
            &copy; <?= date('Y') ?> Pascal's Portfolio. All Rights Reserved.
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Dark mode toggle script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const themeToggle = document.getElementById('themeToggle');
            const body = document.body;

            // Check if a theme preference is stored in localStorage
            const currentTheme = localStorage.getItem('theme');
            if (currentTheme) {
                body.classList.toggle('dark-mode', currentTheme === 'dark');
                themeToggle.textContent = currentTheme === 'dark' ? 'Light Mode' : 'Dark Mode';
            }

            // Toggle dark and light mode
            themeToggle.addEventListener('click', function() {
                const isDarkMode = body.classList.toggle('dark-mode');
                themeToggle.textContent = isDarkMode ? 'Light Mode' : 'Dark Mode';
                localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
            });
        });
    </script>
</body>

</html>