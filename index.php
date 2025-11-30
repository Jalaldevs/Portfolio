<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" th:href="@{/css/style.css}" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script th:src="@{/js/script.js}" src="js/script.js" defer></script>
    <link rel="icon" type="image/png" th:href="@{/images/jalaldevs_favicon.png}" href="images/jalaldevs_favicon.png">
</head>
<body>
    <div class="wrapper">
        <span class="pointer" aria-hidden="true"></span>
        <header>
            <img class="logo_image" th:src="@{/images/jalaldevs_logo.png}" src="images/jalaldevs_logo.png" alt="My Logo">
            <span class="hamburger-menu js-hamburger-menu"><i class="fa-solid fa-bars"></i></span>
            <nav class="nav js-nav">
                <ul class="nav_ul js-nav-ul">
                    <li class="nav_li js-nav-list">
                        <a href="#projects" class="nav_link js-nav-link"><i class="fas fa-briefcase"></i> Projects</a>
                        <a href="#about" class="nav_link js-nav-link"><i class="fas fa-user"></i> About</a>
                        <a href="#faq" class="nav_link js-nav-link"><i class="fas fa-circle-question"></i> FAQ</a>
                        <a href="#contact" class="nav_link contact-link contact-toggle"><span><i class="fas fa-envelope"></i></span> Contact</a>
                    </li>
                </ul>
            </nav>
        </header>
        <section class="hero_section">
            <div class="hero_info">
                <a target="_blank" class="cv_link" href="#"><span><i class="fas fa-download"></i></span>Download CV</a>
                <h1>SOFTWARE ENGINEER</h1>
                <div class="paragraf_box">
                    <p>Hi! I'm <em>Jalal Charraout</em>, a web developer who loves turning ideas into clean and functional code.</p>
                </div>
                <div class="links_box">
                    <a class="linkedin_link" href="https://www.linkedin.com/in/jalal-charraout-73b119384/" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>
                    <a class="github_link" href="https://github.com/Jalaldevs/" target="_blank"><i class="fab fa-github"></i> GitHub</a>
                </div>
                <div class="hero-cta">
                    <a class="hero-cta_link" href="#projects"><i class="fa-solid fa-arrow-down"></i> Projects</a>
                </div>
            </div>
        </section>
    </div>
    <main>
        <h2 id="projects" class="projects_title">My Projects</h2>
        <section class="projects_section">
            <div class="projects_wrapper">
                <div class="project_card">
                    <a href="#">
                        <div class="project_media project-video">
                            <video autoplay plasinline loop muted th:src="@{/videos/hero_aquacraft_portfolio.mp4}" src="videos/hero_aquacraft_portfolio.mp4"></video>
                        </div>
                    </a>
                    <div class="project_info">
                        <div class="project_links">
                            <a class="website_link" href="#">Website <i class="fa-solid fa-globe"></i></a>
                            <a class="github_link" href="https://github.com/Jalaldevs/AquaCraft" target="_blank">GitHub <i class="fab fa-github"></i></a>
                            <a class="sql_link" href="#">SQL <i class="fa-solid fa-database"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project_card">
                    <a href="#">
                        <div class="project_media project-image">
                            <img th:src="@{/images/hero_voltix_for_portfolio.png}" src="images/hero_voltix_for_portfolio.png" alt="">
                        </div>
                    </a>
                    <div class="project_info">
                        <div class="project_links">
                            <a class="website_link" href="#">Website <i class="fa-solid fa-globe"></i></a>
                            <a class="github_link" href="https://github.com/Jalaldevs/Voltix" target="_blank">GitHub <i class="fab fa-github"></i></a>
                            <a class="sql_link" href="#">SQL <i class="fa-solid fa-database"></i></a>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
        <h2 id="about" class="about_title">About Me</h2>
        <section class="about_section">
            <div class="about_wrapper">
                <div class="about_grid">
                    <div class="about_image">
                        <img th:src="@{/images/carnet.jpg}" src="images/carnet.jpg" alt="My Picture">
                    </div>
                    <div class="about_info info-top">
                        <div class="info_wrapper">
                            <p>Hello! My name is Jalal, and I am a passionate software engineer with a strong interest in creating website applicattions.</p>
                            <p class="secondary-paragraf">I work mainly as a web developer, but I’m learning mobile and desktop development to grow beyond the browser.</p>
                        </div>
                    </div>
                    <div class="about_info info-bottom">
                        <div class="info_wrapper">
                            <p>I’m always open to collaborating with companies and taking on freelance projects where I can apply my skills and contribute to meaningful work.</p>
                        </div>
                    </div>
                    <div class="about_github js-about-github-link">
                        <div class="github-logo">
                            <img th:src="@{/images/github.svg}" src="images/github.svg" alt="github-logo Logo">
                        </div>
                        <div class="My-github-link">
                            <a href="#">All Projects</a>
                        </div>
                    </div>
                    <div class="about_cv">
                        <a target="_blank" class="cv_link" href="#"><span><i class="fas fa-download"></i></span>Download CV</a>
                    </div>
                    <div class="about_socials">
                        <a href="#" class="social-icon" aria-label="Twitter">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="#" class="social-icon" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon" aria-label="YouTube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a href="https://www.tiktok.com/@yourprofile" class="social-icon tiktok" aria-label="TikTok" target="_blank" rel="noopener noreferrer">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                        <a href="#" class="social-icon" aria-label="LinkedIn">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="contact_section">
            <h2 class="contact_title">Contact Me</h2>
            <form action="/index.php" method="post" id="form" novalidate>
                <h2>Let’s Talk!!</h2> <span id="js-validations-errors"></span>
                <div class="form-grid">
                    <div class="form-name">
                        <label>Full Name
                            <input id="fullName" name="FullName" placeholder="Full Name" type="text" required>
                        </label>
                    </div>
                    <div class="form-company">
                        <label>Company Name
                            <input id="companyName" name="CompanyName" placeholder="Company Name" type="text">
                        </label>
                    </div>
                    <div class="form-email">
                        <label>Email Address
                            <input id="email" name="Email" placeholder="Email Address" type="email" required>
                        </label>
                    </div>
                    <div class="project-type">
                        <label>Project Type
                            <select id="projectType" name="ProjectType" required>
                                <option value="" disabled selected>Select Project Type</option>
                                <option value="Front-end">Front-end</option>
                                <option value="Back-end">Back-end</option>
                                <option value="Full-Stack">Full-Stack</option>
                                <option value="Company Request">Company Request</option>
                            </select>
                        </label>
                    </div>
                </div>   
                <div class="form-message">
                    <label>Message
                        <textarea id="message" name="Message" placeholder="Your Message" required></textarea>
                    </label>
                </div>
                <div class="form-checkbox">
                    <p><input id="checkbox" name="CheckBox" type="checkbox">I agree to the <a href="#"> Privacy Policy.</a></p>
                </div>
                <div class="form-submit">
                    <button>Send Message</button>
                </div> 
            </form>
        </section>
        <section id="faq" class="faq_section">
            <h2 class="faq_title">Frequently Asked Questions</h2>
            <div class="faq">
                <details>
                    <summary>What services do you offer?</summary>
                    <p>I specialize in web development using technologies like HTML, CSS, JavaScript, and Spring Boot.</p>
                </details>
                <details>
                    <summary>How can I request a project quote?</summary>
                    <p>You can reach out via the contact form on my portfolio.</p>
                </details>
                <details>
                    <summary>Do you work with databases?</summary>
                    <p>Yes! I work with both SQL and NoSQL databases, including MySQL, PostgreSQL, and MongoDB, depending on the project requirements.</p>
                </details>
                <details>
                    <summary>Can you handle both small and large projects?</summary>
                    <p>Yes, I take on projects of all sizes, from simple websites to complex web applications and full-scale digital products.</p>
                </details>
                <details>
                    <summary>Do you provide ongoing support after delivery?</summary>
                    <p>Absolutely! I offer post-launch support, updates, and maintenance to ensure your project runs smoothly.</p>
                </details>
            </div>
        </section>
    </main>
    <footer>
        <img class="logo_image" th:src="@{/images/jalaldevs_logo.png}" src="images/jalaldevs_logo.png" alt="My logo">
        <p>Coded by JalalDevs</p>
    </footer>
</body>
</html>