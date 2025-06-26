<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jensen | Software Developer</title>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <!-- Navigation Header -->
    <header>
        <nav class="navbar">
            <div class="logo">SazzaD</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <div class="intro">
                <p class="greeting">Hello,</p>
                <h1>I am <span class="highlight">Sazzad</span></h1>
                <h2>Junior Software Developer</h2>
                <p class="description">
                    Passionate about creating innovative solutions and building amazing web experiences.
                    I love turning ideas into reality through clean, efficient code.
                </p>
                <div class="buttons">
                    <button class="btn primary">
                        <i class="fas fa-rocket"></i>
                        Got a project?
                    </button>
                    <button class="btn secondary">
                        <i class="fas fa-download"></i>
                        My Resume
                    </button>
                </div>
            </div>
            <div class="profile-section">
                <div class="profile-pic">
                    <img src="https://toppng.com/uploads/preview/cool-avatar-transparent-image-cool-boy-avatar-11562893383qsirclznyw.png" alt="Sazzad Profile" />
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills-section">
        <div class="container">
            <h2 class="section-title">My Skills</h2>
            <div class="skills-grid">
                <!-- Frontend Skills -->
                <div class="skill-category">
                    <h3>Frontend</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <i class="fab fa-html5"></i>
                            <span>HTML5</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-css3-alt"></i>
                            <span>CSS3</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-js-square"></i>
                            <span>JavaScript</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-react"></i>
                            <span>React</span>
                        </div>
                    </div>
                </div>

                <!-- Backend Skills -->
                <div class="skill-category">
                    <h3>Backend</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <i class="fab fa-node-js"></i>
                            <span>Node.js</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-database"></i>
                            <span>MongoDB</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-php"></i>
                            <span>PHP</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-server"></i>
                            <span>Express.js</span>
                        </div>
                    </div>
                </div>

                <!-- Tools & Others -->
                <div class="skill-category">
                    <h3>Tools & Others</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <i class="fab fa-git-alt"></i>
                            <span>Git</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-github"></i>
                            <span>GitHub</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-code"></i>
                            <span>VS Code</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-figma"></i>
                            <span>Figma</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2 class="section-title">About Me</h2>
                    <p>
                        I started my software journey from photography. Through that, I learned to love the process of creating from scratch. 
                        Since then, this has led me to software development as it fulfills my love for learning and building things.
                    </p>
                    <p>
                        As a junior software developer, I'm passionate about creating user-friendly applications and constantly learning new technologies. 
                        I believe in writing clean, maintainable code and following best practices in software development.
                    </p>
                    
                    <div class="stats">
                        <div class="stat-item">
                            <strong>50+</strong>
                            <span>Completed Projects</span>
                        </div>
                        <div class="stat-item">
                            <strong>95%</strong>
                            <span>Client Satisfaction</span>
                        </div>
                        <div class="stat-item">
                            <strong>2+</strong>
                            <span>Years of Experience</span>
                        </div>
                    </div>
                </div>

                <div class="services">
                    <h3>What I Do</h3>
                    <div class="service-grid">
                        <div class="service-item">
                            <i class="fas fa-laptop-code"></i>
                            <h4>Web Development</h4>
                            <p>Creating responsive and modern websites using latest technologies</p>
                        </div>
                        <div class="service-item">
                            <i class="fas fa-mobile-alt"></i>
                            <h4>App Development</h4>
                            <p>Building mobile applications with great user experience</p>
                        </div>
                        <div class="service-item">
                            <i class="fas fa-server"></i>
                            <h4>Backend Development</h4>
                            <p>Developing robust server-side applications and APIs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="education-section">
        <div class="container">
            <h2 class="section-title">Education & Experience</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">2022 - Present</div>
                    <div class="timeline-content">
                        <h3>Junior Software Developer</h3>
                        <h4>Tech Solutions Ltd.</h4>
                        <p>Working on web applications using React, Node.js, and MongoDB. Collaborating with senior developers to deliver high-quality software solutions.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">2020 - 2024</div>
                    <div class="timeline-content">
                        <h3>Bachelor in Computer Science</h3>
                        <h4>University of Dhaka</h4>
                        <p>Graduated with honors. Focused on software engineering, data structures, algorithms, and web technologies.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">2021</div>
                    <div class="timeline-content">
                        <h3>Full Stack Web Development Bootcamp</h3>
                        <h4>Creative IT Institute</h4>
                        <p>Intensive 6-month program covering HTML, CSS, JavaScript, React, Node.js, and database management.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">2018 - 2020</div>
                    <div class="timeline-content">
                        <h3>Higher Secondary Certificate</h3>
                        <h4>Dhaka College</h4>
                        <p>Science background with focus on Mathematics and Physics. GPA: 5.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section">
        <div class="container">
            <h2 class="section-title">My Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image">
                        <img src="https://www.sorryonmute.com/wp-content/uploads/2023/01/137_Best-project-management-software-ecommerce.png" alt="E-Commerce Project">
                    </div>
                    <div class="project-content">
                        <h3>E-Commerce Website</h3>
                        <p>A full-stack e-commerce platform built with React, Node.js, and MongoDB. Features include user authentication, product catalog, shopping cart, and payment integration.</p>
                        <div class="project-tech">
                            <span>React</span>
                            <span>Node.js</span>
                            <span>MongoDB</span>
                            <span>Stripe API</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="btn-link">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                            <a href="#" class="btn-link">
                                <i class="fab fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <img src="https://media.istockphoto.com/id/1492645918/photo/survey-form-concept-businessman-using-laptops-do-online-checklist-surveys-questionnaire-with.jpg?s=612x612&w=0&k=20&c=lqbzWDBLxqRe99kOz2GwfWDRzkVduf2BvUzn1NBGh7Q=" alt="Task Manager Project">
                    </div>
                    <div class="project-content">
                        <h3>Task Management App</h3>
                        <p>A productivity app for managing daily tasks with drag-and-drop functionality, priority levels, and team collaboration features.</p>
                        <div class="project-tech">
                            <span>React</span>
                            <span>Redux</span>
                            <span>Express.js</span>
                            <span>PostgreSQL</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="btn-link">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                            <a href="#" class="btn-link">
                                <i class="fab fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <img src="https://hype4-academy.s3.eu-central-1.amazonaws.com/inv-projects/1717431572550.png" alt="Weather App Project">
                    </div>
                    <div class="project-content">
                        <h3>Weather Forecast App</h3>
                        <p>A responsive weather application that provides real-time weather data and forecasts using OpenWeatherMap API with location-based services.</p>
                        <div class="project-tech">
                            <span>JavaScript</span>
                            <span>HTML5</span>
                            <span>CSS3</span>
                            <span>Weather API</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="btn-link">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                            <a href="#" class="btn-link">
                                <i class="fab fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <img src="https://via.placeholder.com/400x250/00d2ff/ffffff?text=Portfolio+Site" alt="Portfolio Project">
                    </div>
                    <div class="project-content">
                        <h3>Personal Portfolio</h3>
                        <p>A responsive portfolio website showcasing my projects and skills. Built with modern web technologies and optimized for performance.</p>
                        <div class="project-tech">
                            <span>HTML5</span>
                            <span>CSS3</span>
                            <span>JavaScript</span>
                            <span>Responsive Design</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="btn-link">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                            <a href="#" class="btn-link">
                                <i class="fab fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Let's Work Together</h3>
                    <p>I'm always interested in new opportunities and exciting projects. Feel free to reach out if you'd like to collaborate!</p>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>sazzad@email.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+880 123 456 789</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Dhaka, Bangladesh</span>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="#" class="social-link">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Your Message" rows="6" required></textarea>
                        </div>
                        <button type="submit" class="btn primary">
                            <i class="fas fa-paper-plane"></i>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>SazzaD</h3>
                    <p>Junior Software Developer passionate about creating amazing web experiences.</p>
                </div>
                
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#projects">Projects</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul>
                        <li>Web Development</li>
                        <li>App Development</li>
                        <li>Backend Development</li>
                        <li>UI/UX Design</li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <p><i class="fas fa-envelope"></i> sazzad@email.com</p>
                    <p><i class="fas fa-phone"></i> +880 123 456 789</p>
                    <p><i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 SazzaD. All rights reserved. | Designed with ❤️ by SazzaD</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
