<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Submission | Nduvho Bradley Netshitenzhe's CV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Nduvho Bradley Netshitenzhe</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="education.php">Education</a></li>
                <li><a href="work_experience.php">Work Experience</a></li>
                <li><a href="skills.php">Skills</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="contact-submission">
        <h2>Contact Submission</h2>
        <p>Thank you for your message, <strong><?php echo htmlspecialchars($_POST['name']); ?></strong>!</p>
        <p>Your email: <strong><?php echo htmlspecialchars($_POST['email']); ?></strong></p>
        <p>Your message: <strong><?php echo nl2br(htmlspecialchars($_POST['message'])); ?></strong></p>
        <p><a href="contact.php">Back to Contact Form</a></p>
    </section>

    <footer>
        <p>© 2024 Nduvho Bradley Netshitenzhe. All rights reserved.</p>
    </footer>
</body>
</html>
