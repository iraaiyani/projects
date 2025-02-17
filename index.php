// index.php
<?php
// Initialize any PHP variables or functions here
$skills = [
    ['name' => 'HTML/CSS', 'level' => 85],
    ['name' => 'PHP', 'level' => 80],
    ['name' => 'JavaScript', 'level' => 75],
    ['name' => 'MySQL', 'level' => 80],
    ['name' => 'React', 'level' => 70],
];

$projects = [
    [
        'title' => 'Campus-based Event Management System',
        'description' => 'A comprehensive web application for managing campus events, featuring event creation, registration, and attendance tracking. Built with PHP, MySQL, and modern web technologies.',
        'link' => 'http://eventumskal.great-site.net',
        'technologies' => ['PHP', 'MySQL', 'HTML/CSS', 'JavaScript']
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Developer Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav>
        <div class="container">
            <h1>Portfolio</h1>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <!-- About Section -->
        <section id="about" class="section">
            <div class="container">
                <h2>About Me</h2>
                <div class="content-card">
                    <p>I am an aspiring web developer with a strong foundation in HTML, CSS, and PHP. 
                    Currently seeking internship opportunities to apply and expand my skills in web development.</p>
                    <p>My passion lies in creating user-friendly web applications that solve real-world problems,
                    as demonstrated by my final year project in event management.</p>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="section">
            <div class="container">
                <h2>Technical Skills</h2>
                <div class="content-card">
                    <?php foreach ($skills as $skill): ?>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name"><?php echo $skill['name']; ?></span>
                            <span class="skill-level"><?php echo $skill['level']; ?>%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: <?php echo $skill['level']; ?>%"></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="section">
            <div class="container">
                <h2>Projects</h2>
                <div class="projects-grid">
                    <?php foreach ($projects as $project): ?>
                    <div class="project-card">
                        <div class="project-header">
                            <h3><?php echo $project['title']; ?></h3>
                            <a href="<?php echo $project['link']; ?>" target="_blank" class="project-link">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>
                        <p><?php echo $project['description']; ?></p>
                        <div class="project-tech">
                            <?php foreach ($project['technologies'] as $tech): ?>
                            <span class="tech-tag"><?php echo $tech; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="section">
            <div class="container">
                <h2>Contact Me</h2>
                <div class="content-card">
                    <div class="contact-links">
                        <a href="mailto:your.email@example.com" class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>your.email@example.com</span>
                        </a>
                        <a href="https://github.com/yourusername" target="_blank" class="contact-item">
                            <i class="fab fa-github"></i>
                            <span>GitHub Profile</span>
                        </a>
                        <a href="https://linkedin.com/in/yourusername" target="_blank" class="contact-item">
                            <i class="fab fa-linkedin"></i>
                            <span>LinkedIn Profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>
