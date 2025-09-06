<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilitators – Rehan School</title>
    <style>
        /* Amazing CSS: Card-style profiles with hover effects, gradients for awesome look. */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: linear-gradient(to bottom, #f8f9fa, #e9ecef); color: #333; }
        header { background: #007bff; color: white; padding: 20px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        nav { background: #0056b3; padding: 10px; }
        nav ul { list-style: none; margin: 0; padding: 0; display: flex; justify-content: center; }
        nav li { margin: 0 15px; }
        nav a { color: white; text-decoration: none; font-weight: bold; transition: color 0.3s, transform 0.3s; }
        nav a:hover { color: #ffd700; transform: scale(1.1); }
        section { padding: 40px 20px; max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-around; }
        .profile { background: white; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); padding: 20px; margin: 10px; width: 30%; text-align: center; transition: transform 0.3s; animation: fadeIn 2s; }
        .profile:hover { transform: translateY(-10px); }
        .profile h3 { color: #007bff; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        @media (max-width: 768px) { .profile { width: 100%; } }
    </style>
</head>
<body>
    <header>
        <h1>Facilitators – Rehan School</h1>
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
        <section>
            <div class="profile">
                <h3>Rehan Allahwala</h3>
                <p>Founder</p>
                <p>I run a High School designed for the Internet & AI Era – RehanSchool.net</p>
                <!-- Social links placeholder -->
            </div>
            <div class="profile">
                <h3>Momina Allahwala</h3>
                <p>Director</p>
                <p>A Mind that is stretched by a new experience can never go back to its old dimension.</p>
            </div>
            <div class="profile">
                <h3>Altaf Educationwala</h3>
                <p>Principal Rehan School Korangi</p>
                <p>I make leaders who solve problems around them and earn $500 a month.</p>
            </div>
            <div class="profile">
                <h3>Misbah Altaf Talentwali</h3>
                <p>Facilitator</p>
                <p>Aspiring Graphic Designer, Freelancer in the making. Learning every day Let’s connect & create</p>
            </div>
        </section>
    </main>
    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>
