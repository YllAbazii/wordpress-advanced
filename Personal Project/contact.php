<?php include 'header.php'; ?>

<h1>Contact Us</h1>

<form method="post">
    <input type="text" name="name" placeholder="Your Name"><br><br>
    <textarea name="message" placeholder="Your Message"></textarea><br><br>
    <button type="submit">Send</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "<p>Thanks, $name! Your message has been sent.</p>";
}
?>

<?php include 'footer.php'; ?>