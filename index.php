<?php 
    include __DIR__ . "/includes/database.php";
    include __DIR__ . "/includes/validations.php";

    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errors['name'] = validateName($_POST['Name'] ?? null);
        $errors['email'] = validateEmail($_POST['Email'] ?? null);
        $errors['projectType'] = validateProjectType($_POST['ProjectType'] ?? null);
        $errors['message'] = validateMessage($_POST['Message'] ?? null);
        $errors['checkBox'] = validateCheckbox($_POST['CheckBox'] ?? null);

        if (isblank($errors)) {
            $name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
            $companyName = filter_input(INPUT_POST, 'CompanyName', FILTER_SANITIZE_SPECIAL_CHARS);
            $message = filter_input(INPUT_POST, 'Message', FILTER_SANITIZE_SPECIAL_CHARS);
            $projectType = $_POST["ProjectType"];
            
            $sql = "INSERT INTO contactForm (Name, Email, CompanyName, ProjectType, Message) VALUES ('$name', '$email', '$companyName', '$projectType', '$message')";
            mysqli_query($conn, $sql);

            header("Location: " . $_SERVER['PHP_SELF'] . "#contact");
            exit;
        }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" type="image/png" href="images/jalaldevs_favicon.png">
</head>
<body>
    <div class="wrapper">
        <header>
            <img class="logo_image" src="images/jalaldevs_logo.png" alt="My Logo">
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
            <div id="js-projects-wrapper" class="projects_wrapper">
            </div>    
        </section>
        <h2 id="about" class="about_title">About Me</h2>
        <section class="about_section">
            <div class="about_wrapper">
                <div class="about_grid">
                    <div class="about_image">
                        <img src="images/carnet.jpg" alt="My Picture">
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
                            <img src="images/github.svg" alt="github-logo Logo">
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
                        <a href="https://www.tiktok.com/@jalaldevs" class="social-icon tiktok" aria-label="TikTok" target="_blank" rel="noopener noreferrer">
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
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>#contact" method="post" id="form" novalidate>
                <h2>Let’s Talk!!</h2>
                <div class="form-grid">
                    <div class="form-name">
                        <label>Name*
                            <input class="js-form-element <?= isset($errors['name']) ? 'php-input-error' : '' ?>" value="<?= htmlspecialchars($_POST['Name'] ?? '') ?>"  id="name" name="Name" placeholder="Name" type="text" required>
                        </label>
                        <div style="color: #bc2c2cff;" class="error-message js-name-error-message"><?= isset($errors['name']) ? $errors['name'] : '' ?></div>
                    </div>
                    <div class="form-email">
                        <label>Email Address*
                            <input class="js-form-element <?= isset($errors['email']) ? 'php-input-error' : '' ?>" value="<?= htmlspecialchars($_POST['Email'] ?? '') ?>"  id="email" name="Email" placeholder="Email Address" type="email" required>
                        </label>
                        <div style="color: #bc2c2cff;" class="error-message js-email-error-message"><?= isset($errors['email']) ? $errors['email'] : '' ?></div>
                    </div>
                    <div class="form-company">
                        <label>Company Name
                            <input value="<?= htmlspecialchars($_POST['CompanyName'] ?? '') ?>"  id="companyName" name="CompanyName" placeholder="Company Name" type="text">
                        </label>
                    </div>
                    <div class="project-type">
                        <label>Project Type*
                            <select class="js-form-element <?= isset($errors['projectType']) ? 'php-input-error' : '' ?>" id="projectType" name="ProjectType" required>
                                <option value="" disabled selected>Select Project Type</option>
                                <option value="Front-end">Front-end</option>
                                <option value="Back-end">Back-end</option>
                                <option value="Full-Stack">Full-Stack</option>
                                <option value="Company Request">Company Request</option>
                            </select>
                        </label>
                        <div style="color: #bc2c2cff;" class="error-message js-projectType-error-message"><?= isset($errors['projectType']) ? $errors['projectType'] : '' ?></div>
                    </div>
                </div>   
                <div class="form-message">
                    <label>Message*
                        <textarea class="js-form-element <?= isset($errors['message']) ? 'php-input-error' : '' ?>" id="message" name="Message" placeholder="Your Message" required><?= htmlspecialchars($_POST['Message'] ?? '') ?></textarea>
                    </label>
                    <div style="color: #bc2c2cff;" class="error-message js-message-error-message"><?= isset($errors['message']) ? $errors['message'] : '' ?></div>
                </div>
                <div class="form-checkbox">
                    <p>
                        <input class="js-form-element" id="checkbox" name="CheckBox" value="agreed" type="checkbox">I agree to the
                        <a href="#"> Privacy Policy.</a>
                        <span style="color: #bc2c2cff;" class="error-message js-checkBox-error-message">
                            <?= isset($errors['checkBox']) ? $errors['checkBox'] : '' ?>
                        </span>
                    </p>
                </div>
                <div class="form-submit">
                    <button type="submit">Send Message</button>
                </div> 
            </form>
        </section>
        <section id="faq" class="faq_section">
            <h2 class="faq_title">Frequently Asked Questions</h2>
            <div class="faq">
                <details>
                    <summary>What services do you offer?</summary>
                    <p>I specialize in web development using technologies like HTML, CSS, JavaScript, TypeScript and PHP.</p>
                </details>
                <details>
                    <summary>How can I request a project quote?</summary>
                    <p>You can reach out via the contact form on my portfolio.</p>
                </details>
                <details>
                    <summary>Do you work with databases?</summary>
                    <p>Yes! I work with both SQL databases, including MySQL and PostgreSQL depending on the project requirements.</p>
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
        <img class="logo_image" src="images/jalaldevs_logo.png" alt="My logo">
        <p>Coded by JalalDevs</p>
    </footer>
    <script type="module" src="js/generatedHtml.js"></script>
    <script src="js/script.js"></script>
</body>
</html>