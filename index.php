<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darshan | Portfolio</title>
    <meta name="description" content="Personal portfolio showcasing web development skills and projects.">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Background Video (Full Page) -->
    <div class="hero-video-bg">
        <video
            id="hero-bg-video"
            autoplay
            muted
            loop
            playsinline
        >
            <source src="D.vidio.mp4" type="video/mp4">
        </video>
    </div>
    <div class="page-overlay"></div>

    <!-- Navbar -->
    <nav id="navbar">
        <div class="container nav-inner">
            <a href="#" class="nav-logo">Darshan</a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container hero-content">
            <p class="hero-greeting">
                <?php 
                    $hour = date('H');
                    if ($hour < 12) {
                        echo 'Good Morning, I\'m';
                    } elseif ($hour < 18) {
                        echo 'Good Afternoon, I\'m';
                    } else {
                        echo 'Good Evening, I\'m';
                    }
                ?>
            </p>
            <h1 class="hero-name">Darshan Avhad</h1>
            <p class="hero-tagline">IT Student &amp; Web Developer</p>
            <div class="hero-buttons">
                <a href="#projects" class="btn btn-primary">View Projects</a>
                <a href="#contact" class="btn btn-outline">Contact Me</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-grid">
                <div class="about-text">
                    <p>I am a second-year Information Technology student passionate about building clean and functional web applications. My coursework covers everything from front-end design with HTML, CSS, and JavaScript to back-end development with PHP and database management with MySQL.</p>
                    <p>I enjoy turning ideas into real, working projects and continuously learning new technologies.</p>
                </div>
                <div class="about-info">
                    <table class="info-table">
                        <tr>
                            <td><strong>Name</strong></td>
                            <td>Darshan</td>
                        </tr>
                        <tr>
                            <td><strong>Course</strong></td>
                            <td>B.Tech IT</td>
                        </tr>
                        <tr>
                            <td><strong>Year</strong></td>
                            <td>Second Year</td>
                        </tr>
                        <tr>
                            <td><strong>Interests</strong></td>
                            <td>Web Dev, UI Design</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section section-alt">
        <div class="container">
            <h2 class="section-title">Skills</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-icon">&#60;/&#62;</div>
                    <h3>HTML5</h3>
                    <p>Semantic markup, forms, tables, lists, iframes</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">&#123;&#125;</div>
                    <h3>CSS3</h3>
                    <p>Flexbox, Grid, animations, responsive design</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">JS</div>
                    <h3>JavaScript</h3>
                    <p>DOM, events, ES6+, validation, interactivity</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">&#128736;</div>
                    <h3>PHP</h3>
                    <p>Server-side logic, forms, authentication, APIs</p>
                </div>
                 <div class="skill-card">
                    <div class="skill-icon">&#128451;</div>
                    <h3>C/CPP</h3>
                    <p>Pointers, memory management, algorithms, data structures</p>
                </div> 
                <div class="skill-card">
                    <div class="skill-icon">&#128196;</div>
                    <h3>XML / JSP</h3>
                    <p>Data structures, DTD, Schema, Java Server Pages</p>
                </div>

                <div class="skill-card">
                    <div class="skill-icon">&#128196;</div>
                    <h3>Python</h3>
                    <p>Data analysis, scripting, automation, machine learning basics</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <div class="container">
            <h2 class="section-title">Projects</h2>
            <div class="projects-grid">
                <div class="project-card sara-project" onclick="window.location.href='https://sara-ai-ui.vercel.app'" title="Click to visit Sara - AI Assistant">
                    <div class="project-number">01</div>
                    <h3>Sara - Personal Ai Assistant</h3>
                    <p>Sara is a Personal AI Assistant designed to manage and control computer operations efficiently..</p>
                    <ul class="project-tags">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                        <li>python</li>
                        
                    </ul>
                </div>
                <div class="project-card gap-analyzer-project" onclick="window.location.href='https://dyp-gilt.vercel.app/'" title="Click to visit Smart Placement gap Analyzer">
                    <div class="project-number">02</div>
                    <h3>Smart Placement gap Analyzer</h3>
                    <p>Smart Placement Analyzer is an intelligent system that reads and analyzes resumes to identify suitable companies and job roles based on a candidate’s skills and qualifications.</p>
                    <ul class="project-tags">
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                        <li>Design</li>
                        <li>supabase</li>
                    </ul>
                </div>
                <div class="project-card">
                    <div class="project-number">03</div>
                    <h3>Portfolio</h3>
                    <p>Portfolio is a web-based application that displays my skills, projects, and professional details in one place.</p>                    <ul class="project-tags">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>PHP</li>    
                    <li>JavaScript</li>
                     
                    </ul>
                </div>
                <div class="project-card">
                    <div class="project-number">04</div>
                    <h3>Spotify Clone</h3>
                    <ul class="project-tags">
                        <p>A web application that mimics the functionality of Spotify, allowing users to browse and play music.</p>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>PHP</li>
                        <li>javaScript</li>
                    </ul>
                </div>
                <!-- <div class="project-card">
                    <div class="project-number">05</div>
                    <h3>Weather Dashboard</h3>
                    <p>Live weather data app using the OpenWeatherMap API built with PHP.</p>
                    <ul class="project-tags">
                        <li>PHP</li>
                        <li>API</li>
                    </ul>
                </div> -->
                <!-- <div class="project-card">
                    <div class="project-number">06</div>
                    <h3>Database CRUD System</h3>
                    <p>Full Create, Read, Update, Delete operations on MySQL using PHP.</p>
                    <ul class="project-tags">
                        <li>PHP</li>
                        <li>MySQL</li>
                    </ul>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section section-alt">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-wrapper">
                <form id="contact-form" onsubmit="handleSubmit(event)">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="you@example.com" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Write your message..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">Send Message</button>
                    <p id="form-status" class="form-status"></p>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container footer-inner">
            <p>&copy; <?php echo date("Y"); ?> Darshan. Built with HTML, CSS, JS &amp; PHP.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
