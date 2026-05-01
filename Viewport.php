<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard Wireframe</title>
    <style>
        /* --- Minimalistic Wireframe Look --- */
        body {
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            display: flex;
            height: 100vh;
            color: #000;
            background-color: #fff;
        }

        aside {
            width: 240px;
            border-right: 2px solid #000;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
        }

        h1, h2, h3 {
            margin-top: 0;
            text-transform: uppercase;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            color: #000;
            text-decoration: underline;
        }

        .section {
            border: 2px solid #000;
            padding: 15px;
            margin-bottom: 25px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .flex-links {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .sidebar-footer {
            margin-top: auto;
            border-top: 2px solid #000;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <aside>
        <div style="text-align: center; border-bottom: 2px solid #000; padding-bottom: 15px; margin-bottom: 30px;">
            <h1>PORTAL</h1>
            <small>College of Computing & Information</small>
        </div>

        <ul>
            <li>[🏠] <a href="#">Dashboard</a></li>
            <li>[📖] <a href="#">Courses</a></li>
            <li>[🧾] <a href="#">Grades</a></li>
            <li>[📅] <a href="#">Schedule</a></li>
            <li>[💼] <a href="#">Payments</a></li>
            <li>[📋] <a href="#">Clearance</a></li>
            <li>[🗂️] <a href="#">Documents</a></li>
        </ul>

        <div class="sidebar-footer">
            <p>[👤] <a href="#">My Profile</a></p>
            <p>[🚪] <a href="#">Sign Out</a></p>
        </div>
    </aside>

    <!-- Main Area -->
    <main>
        <header style="border-bottom: 2px solid #000; margin-bottom: 30px; padding-bottom: 10px;">
            <h2>Welcome, Bobby Malaga</h2>
            <p>ID: 240000001368 | Program: BSIT – Sophomore</p>
        </header>

        <div class="section">
            <h3>📌 Shortcuts</h3>
            <div class="flex-links">
                <a href="#">[Inbox]</a>
                <a href="#">[Classroom]</a>
                <a href="#">[Finance]</a>
                <a href="#">[Support]</a>
                <a href="#">[Student Handbook]</a>
                <a href="#">[Downloads]</a>
            </div>
        </div>

        <div class="grid">
            <div class="section">
                <h3>📅 Today’s Schedule</h3>
                <ul>
                    <li>08:30 AM — CS301: Data Structures</li>
                    <li>10:30 AM — MATH102: Discrete Math</li>
                    <li>01:30 PM — IT210: Web Development</li>
                </ul>
            </div>

            <div class="section">
                <h3>📊 Latest Grades</h3>
                <ul>
                    <li>CS301 Quiz 2 — 94%</li>
                    <li>IT210 Project — 98%</li>
                    <li>MATH102 Midterm — A</li>
                </ul>
            </div>

            <div class="section">
                <h3>📢 Announcements</h3>
                <ul>
                    <li>• Maintenance: System downtime on May 5</li>
                    <li>• Enrollment for Summer Term is Open</li>
                    <li>• Library Week: May 10–14</li>
                </ul>
            </div>

            <div class="section">
                <h3>🎓 Upcoming Events</h3>
                <ul>
                    <li>May 6–10: Finals Week</li>
                    <li>May 15: Career Expo</li>
                    <li>May 25: Term Break Begins</li>
                </ul>
            </div>
        </div>
    </main>
</body>
</html>
php /**PATH /Users/Bobby Jr/Herd/Malaga_Laravel/resources/views/welcome.blade.php ENDPATH**/ ?>php /**PATH /Users/Bobby Jr/Herd/Malaga_Laravel/resources/views/welcome.blade.php ENDPATH**/ ?>
