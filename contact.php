<?php
include 'db.php'; // Include DB connection

$success = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stmt = $pdo->prepare("INSERT INTO inquiries (name, email, message) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $message]);
    $success = true;

    // Use JS for redirect after success
    echo '<script>window.location.href = "contact.php?success=1";</script>';
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us – Rehan School</title>
    <style>
        /* Amazing CSS: Form with gradients, shadows, validation effects for awesome user experience. */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: linear-gradient(to bottom, #f8f9fa, #e9ecef); color: #333; }
        header { background: #007bff; color: white; padding: 20px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        nav { background: #0056b3; padding: 10px; }
        nav ul { list-style: none; margin: 0; padding: 0; display: flex; justify-content: center; }
        nav li { margin: 0 15px; }
        nav a { color: white; text-decoration: none; font-weight: bold; transition: color 0.3s, transform 0.3s; }
        nav a:hover { color: #ffd700; transform: scale(1.1); }
        section { padding: 40px 20px; max-width: 1200px; margin: auto; }
        #contact-info { background: white; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); padding: 20px; margin-bottom: 20px; }
        form { background: white; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); padding: 20px; max-width: 600px; margin: auto; animation: fadeIn 2s; }
        input, textarea { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; transition: border 0.3s; }
        input:focus, textarea:focus { border: 1px solid #007bff; }
        button { background: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background 0.3s; }
        button:hover { background: #218838; }
        .success { color: #28a745; text-align: center; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        @media (max-width: 768px) { form { width: 100%; } }
    </style>
</head>
<body>
    <header>
        <h1>Contact Us – Rehan School</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="curriculum.php">Curriculum</a></li>
            <li><a href="facilitator.php">Facilitators</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main>
        <section id="contact-info">
            <h2>Contact Details</h2>
            <p>Phone: +92-304-111-6044</p>
            <p>Address: R554+WF9, Sector 50 C Korangi, Karachi, Karachi City, Sindh</p>
        </section>
        <section>
            <h2>Send a Message</h2>
            <?php if (isset($_GET['success'])): ?>
                <p class="success">Message sent successfully!</p>
            <?php endif; ?>
            <form method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>
    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>
