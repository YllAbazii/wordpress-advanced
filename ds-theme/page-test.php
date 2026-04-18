<?php get_header(); ?>

<main class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="hero-section bg-primary text-white text-center py-5 rounded shadow">
                <h1 class="display-4">Welcome to My Professional Page</h1>
                <p class="lead">Discover excellence in design and development</p>
                <a href="#about" class="btn btn-light btn-lg">Learn More</a>
            </div>
        </div>
    </div>

    <div id="about" class="row my-5">
        <div class="col-md-6">
            <h2>About Me</h2>
            <p class="text-muted">I am a passionate developer and designer committed to creating professional and stylish solutions. With years of experience, I bring creativity and expertise to every project.</p>
            <ul class="list-unstyled">
                <li><i class="fas fa-check text-success"></i> Expert in WordPress Development</li>
                <li><i class="fas fa-check text-success"></i> Proficient in Modern Web Technologies</li>
                <li><i class="fas fa-check text-success"></i> Focused on User-Centric Design</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg" alt="About Me" class="img-fluid rounded shadow">
        </div>
    </div>

    <div class="row my-5">
        <div class="col-12">
            <h2 class="text-center mb-4">My Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-code fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">Building robust and scalable websites using the latest technologies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-paint-brush fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">UI/UX Design</h5>
                            <p class="card-text">Creating intuitive and beautiful user interfaces that enhance user experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Responsive Design</h5>
                            <p class="card-text">Ensuring your website looks great on all devices and screen sizes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-12 text-center">
            <h2>Contact Me</h2>
            <p class="text-muted">Ready to start your project? Get in touch today!</p>
            <a href="mailto:contact@example.com" class="btn btn-primary btn-lg">Send Email</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>