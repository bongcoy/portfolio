<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Projects Introduction Section -->
<section class="projects-intro text-center mt-5">
    <h1>My Projects</h1>
    <p>Here are some of the projects I have worked on, spanning web development, data analysis, and software solutions. Each project reflects my commitment to solving problems with technology.</p>
</section>

<!-- Project Filters -->
<div class="btn-group mt-5" role="group" aria-label="Project Filters">
    <button type="button" class="btn btn-outline-primary" onclick="filterProjects('all')">All</button>
    <button type="button" class="btn btn-outline-secondary" onclick="filterProjects('web')">Web Development</button>
    <button type="button" class="btn btn-outline-success" onclick="filterProjects('data')">Data Analysis</button>
    <button type="button" class="btn btn-outline-info" onclick="filterProjects('software')">Software Solutions</button>
</div>

<!-- Projects Section -->
<section class="projects mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="path_to_project_image.jpg" class="card-img-top" alt="Project Image">
                <div class="card-body">
                    <h5 class="card-title">Project 1</h5>
                    <p class="card-text">A web application for e-commerce built with Laravel and Vue.js.</p>
                    <div>
                        <span class="badge bg-primary">Laravel</span>
                        <span class="badge bg-info">Vue.js</span>
                        <span class="badge bg-success">MySQL</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#project1Modal">View Project</a>
                </div>
            </div>
        </div>
        <!-- Repeat for more projects -->
    </div>
</section>

<!-- Modal for Project Details -->
<div class="modal fade" id="project1Modal" tabindex="-1" aria-labelledby="project1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="project1Label">Project 1</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Details about the project. What you built, how you built it, challenges you faced, and the outcome.</p>
                <img src="path_to_large_project_image.jpg" class="img-fluid" alt="Project Image">
            </div>
        </div>
    </div>
</div>

<script>
    function filterProjects(category) {
        // Add logic to filter project cards based on category
    }
</script>

<?= $this->endSection() ?>