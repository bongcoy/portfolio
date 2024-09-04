<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Skills Introduction Section -->
<section class="skills-intro text-center mt-5">
    <h1>My Skills</h1>
    <p>I have expertise in a wide range of technologies, from software development to data analysis. Below are some of the core skills I possess.</p>
</section>

<!-- Skills Grid -->
<section class="skills-grid mt-5">
    <h3 class="text-center">Core Skills</h3>
    <div class="row mt-4">
        <div class="col-md-3 text-center">
            <i class="fab fa-php fa-3x"></i>
            <h5 class="mt-2">PHP</h5>
        </div>
        <div class="col-md-3 text-center">
            <i class="fab fa-python fa-3x"></i>
            <h5 class="mt-2">Python</h5>
        </div>
        <div class="col-md-3 text-center">
            <i class="fab fa-js fa-3x"></i>
            <h5 class="mt-2">JavaScript</h5>
        </div>
        <div class="col-md-3 text-center">
            <i class="fas fa-database fa-3x"></i>
            <h5 class="mt-2">SQL</h5>
        </div>
    </div>
</section>

<!-- Skill Levels -->
<section class="skill-levels mt-5">
    <h3>Skill Proficiency</h3>

    <div class="mb-3">
        <label for="php-skill" class="form-label">PHP</label>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
        </div>
    </div>

    <div class="mb-3">
        <label for="python-skill" class="form-label">Python</label>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
        </div>
    </div>
</section>

<!-- Skills Summary -->
<section class="skills-summary mt-5">
    <h3>Summary</h3>
    <p>
        I am proficient in a variety of programming languages and frameworks, with a strong focus on full-stack web development and data analysis. My technical skills are complemented by my ability to adapt quickly and work effectively in diverse team environments.
    </p>
</section>

<!-- Download Resume -->
<div class="text-center mt-5">
    <a href="<?= base_url('uploads/resume.pdf') ?>" class="btn btn-primary" target="_blank">Download My Resume</a>
</div>

<?= $this->endSection() ?>