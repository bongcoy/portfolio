<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Hero Section -->
<div class="hero" style="background-image: url('path_to_your_background_image.jpg'); background-size: cover; background-position: center; height: 400px;">
    <div class="text-center text-white" style="padding-top: 150px;">
        <h1 class="display-4">Welcome to Taufik's Portfolio</h1>
        <p class="lead">I'm a Software Developer and Data Analyst.</p>
        <a href="<?= base_url('/projects') ?>" class="btn btn-primary btn-lg">See My Projects</a>
    </div>
</div>

<!-- About Me Section -->
<section class="about-me mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="path_to_your_photo.jpg" alt="Your photo" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-6">
            <h2>About Me</h2>
            <p>
                Hi, I'm Taufik! With over 20 years of experience in software development and data analysis, I specialize in building efficient, scalable applications and extracting meaningful insights from data.
            </p>
            <a href="<?= base_url('/skills') ?>" class="btn btn-outline-secondary">Learn More About My Skills</a>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="skills mt-5">
    <h2 class="text-center">Core Skills</h2>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Software Development</h5>
                    <p class="card-text">Expertise in PHP, CodeIgniter, Laravel, and JavaScript frameworks.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Data Analysis</h5>
                    <p class="card-text">Proficient in Python, SQL, and visualization tools like Power BI.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Database Management</h5>
                    <p class="card-text">Designing scalable databases with MySQL, PostgreSQL, and SQLite.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects -->
<section class="projects mt-5">
    <h2 class="text-center">Featured Projects</h2>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <img src="path_to_project_image.jpg" class="card-img-top" alt="Project Image">
                <div class="card-body">
                    <h5 class="card-title">Project 1</h5>
                    <p class="card-text">A web application for e-commerce built with Laravel and Vue.js.</p>
                    <a href="<?= base_url('/projects') ?>" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <!-- Add more project cards -->
    </div>
</section>

<!-- Contact CTA -->
<section class="contact-cta mt-5 text-center py-5 bg-light">
    <h2>Interested in working together?</h2>
    <p>I'm always open to discussing new projects, creative ideas, or opportunities to be part of your visions.</p>
    <a href="<?= base_url('/contact') ?>" class="btn btn-success btn-lg">Contact Me</a>
</section>

<?= $this->endSection() ?>