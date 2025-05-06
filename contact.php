<?php 
$sent = false;
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    if ($name && $email && $message && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = 'primeinsulation9032@gmail.com'; // Change to your company email
        $subject = "Contact Form Submission from $name";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = "From: $email\r\nReply-To: $email";
        if (mail($to, $subject, $body, $headers)) {
            $sent = true;
        } else {
            $error = 'Sorry, there was a problem sending your message.';
        }
    } else {
        $error = 'Please fill in all fields with a valid email.';
    }
}
?>
<?php include 'header.php'; ?>
<section class="contact-hero-section">
    <div class="container">
        <h1 class="contact-hero-title section-title">Contact Us</h1>
        <p class="contact-hero-subtitle">Have a question or need a quote? Reach out to our team today.</p>
    </div>
</section>
<section class="contact-main-section container">
    <div class="contact-flex">
        <div class="contact-form-wrap">
            <?php if ($sent): ?>
                <p class="success-msg">Thank you for contacting us! We will get back to you soon.</p>
            <?php else: ?>
                <?php if ($error): ?><p class="error-msg"><?php echo $error; ?></p><?php endif; ?>
                <form class="contact-form" method="post" action="contact.php">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                    <button type="submit" class="cta-btn">Send Message</button>
                </form>
            <?php endif; ?>
        </div>
        <div class="contact-info">
            <h2 class="section-title">Company Info</h2>
            <ul>
                <li><strong>Email:</strong> primeinsulation9032@gmail.com</li>
                <li><strong>Phone:</strong> +91 99985 02284</li>
                <li><strong>Address:</strong>34, Om Kareshwar Nagar 2, Behind College, Kalol, Gujarat, India</li>
            </ul>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?> 