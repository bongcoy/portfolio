<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Hero Section -->
<div class="hero" style="background-image: url('<?= base_url('images/hero-background.png') ?>'); background-size: cover; background-position: center; height: 400px;">
    <div class="text-center text-white" style="padding-top: 150px;">
        <h1 class="display-4 title-highlight">Welcome to Pascal's Portfolio</h1>
        <p class="lead">I'm a Software Developer and Data Analyst.</p>
        <a href="<?= base_url('/projects') ?>" class="btn btn-primary btn-lg">See My Projects</a>
    </div>
</div>

<style>
    .title-highlight {
        background-color: rgba(0, 0, 0, 0.5);
        /* Semi-transparent black */
        display: inline-block;
        padding: 10px 20px;
        border-radius: 10px;
    }

    /* Default Light Mode */
    :root {
        --contact-bg: #f8f9fa;
        --contact-text-color: #000000;
        --contact-button-bg: #28a745;
        --contact-button-text-color: #ffffff;
    }

    /* Dark Mode */
    .dark-mode {
        --contact-bg: #2b2b2b;
        /* Dark background */
        --contact-text-color: #ffffff;
        /* Light text */
        --contact-button-bg: #28a745;
        /* Button background stays the same */
        --contact-button-text-color: #ffffff;
        /* Button text color stays white */
    }

    /* Apply variables */
    .contact-cta {
        background-color: var(--contact-bg);
        color: var(--contact-text-color);
    }

    .contact-cta a.btn {
        background-color: var(--contact-button-bg);
        color: var(--contact-button-text-color);
    }

    .contact-cta a.btn:hover {
        background-color: darken(var(--contact-button-bg), 10%);
    }
</style>

<!-- About Me Section -->
<section class="about-me mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="<?= base_url('images/profile.jpg') ?>" alt="Your photo" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-6">
            <h2>About Me</h2>
            <p>
                Hi, I'm Pascal! With over 20 years of experience in software development and data analysis, I specialize in building efficient, scalable applications and extracting meaningful insights from data.
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
<section class="contact-cta mt-5 text-center py-5">
    <h2>Interested in working together?</h2>
    <p>I'm always open to discussing new projects, creative ideas, or opportunities to be part of your visions.</p>
    <a href="<?= base_url('/contact') ?>" class="btn btn-success btn-lg">Contact Me</a>
</section>

<?= $this->endSection() ?>