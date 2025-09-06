<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum – Rehan School</title>
    <style>
        /* Amazing CSS: Consistent with homepage, vibrant gradients, animations for real professional feel. */
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: linear-gradient(to bottom, #f8f9fa, #e9ecef); color: #333; }
        header { background: #007bff; color: white; padding: 20px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        nav { background: #0056b3; padding: 10px; }
        nav ul { list-style: none; margin: 0; padding: 0; display: flex; justify-content: center; }
        nav li { margin: 0 15px; }
        nav a { color: white; text-decoration: none; font-weight: bold; transition: color 0.3s, transform 0.3s; }
        nav a:hover { color: #ffd700; transform: scale(1.1); }
        section { padding: 40px 20px; max-width: 1200px; margin: auto; animation: fadeIn 2s; }
        article { background: white; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); padding: 20px; margin: 20px 0; transition: transform 0.3s; }
        article:hover { transform: translateY(-10px); }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        @media (max-width: 768px) { article { width: 100%; } }
    </style>
</head>
<body>
    <header>
        <h1>Curriculum – Rehan School</h1>
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
            <h2>Overview</h2>
            <p>The curriculum is based on life experiences in travel, business, and networking. It evolves with new technologies, focusing on global citizenship and impacting 10 million lives.</p>
        </section>
        <article>
            <h3>5th Grade – Level One</h3>
            <p>Technologies: Graphic design, ChatGPT, interviews, videos, AI learning, yoga, meditation, ethics, TEDx.</p>
        </article>
        <article>
            <h3>6th Grade – Level Two</h3>
            <p>Continues Level One, assigns life mission "Wala", TEDx talks, networking, earn $100/month freelancing.</p>
        </article>
        <article>
            <h3>7th Grade – Level Three</h3>
            <p>Continues, earn $300/month.</p>
        </article>
        <article>
            <h3>8th Grade – Level Four</h3>
            <p>Start startup related to Wala, grow to sell for $1M by 12th grade.</p>
        </article>
        <article>
            <h3>12th Grade – Level Five</h3>
            <p>Advanced preparation.</p>
        </article>
        <article>
            <h3>13th Grade – Level Six</h3>
            <p>Prepare for GED and Matric exams.</p>
        </article>
    </main>
    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>
