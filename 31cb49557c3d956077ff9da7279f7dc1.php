<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Low Fidelity Wireframe - Student Portal</title>
    <style>
        /* Bare Bones Wireframe CSS */
        body {
            font-family: 'Courier New', Courier, monospace; /* Monospace for raw structure feel */
            margin: 0;
            display: flex;
            height: 100vh;
            color: #000000;
            background-color: #ffffff;
        }

        /* Sidebar Wireframe */
        aside {
            width: 250px;
            border-right: 2px solid #000000;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        /* Main Content Wireframe */
        main {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
        }

        /* Typography & Elements */
        h1, h2, h3 { margin-top: 0; text-transform: uppercase; }
        ul { list-style: none; padding: 0; }
        li { margin-bottom: 10px; }
        a { color: #000000; text-decoration: underline; }
        
        /* Layout Boxes */
        .box {
            border: 2px solid #000000;
            padding: 15px;
            margin-bottom: 20px;
        }
        
        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .quick-links { display: flex; gap: 15px; flex-wrap: wrap; }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <aside>
        <div style="margin-bottom: 40px; text-align: center; border-bottom: 2px solid #000; padding-bottom: 20px;">
            <h1>PORTAL</h1>
            <small>College of Computer Studies</small>
        </div>
        
        <ul>
            <li>[🏠] <a href="#">Home</a></li>
            <li>[📊] <a href="#">Academic Record</a></li>
            <li>[📅] <a href="#">Class Schedule</a></li>
            <li>[💰] <a href="#">Financial Record</a></li>
            <li>[✅] <a href="#">Clearance</a></li>
            <li>[📚] <a href="#">Curriculum View</a></li>
            <li>[📂] <a href="#">Resources</a></li>
        </ul>

        <div style="margin-top: auto; border-top: 2px solid #000; padding-top: 20px;">
            <p>[👤] <a href="#">Profile</a></p>
            <p>[🚪] <a href="#">Logout</a></p>
        </div>
    </aside>

    <!-- Main Content -->
    <main>
        <div style="border-bottom: 2px solid #000; margin-bottom: 30px; padding-bottom: 10px;">
            <h2>Welcome, Nico Mahipus</h2>
            <p>Student ID: 240000001368 | BSIT - 2nd Year</p>
        </div>

        <!-- Quick Links -->
        <div class="box">
            <h3>📌 Quick Links</h3>
            <div class="quick-links">
                <a href="#">[Email]</a> <a href="#">[Google Classroom]</a> <a href="#">[Financial Record]</a>
                <a href="#">[Support Ticket]</a> <a href="#">[Handbook]</a> <a href="#">[Resources]</a>
            </div>
        </div>

        <!-- Dashboard Grid -->
        <div class="grid">
            <div class="box">
                <h3>📅 Today's Classes</h3>
                <ul>
                    <li>09:00 AM - CS404: Advanced Algorithms</li>
                    <li>11:00 AM - MATH203: Linear Algebra</li>
                    <li>02:00 PM - EE201: Circuit Theory Lab</li>
                </ul>
            </div>
            <div class="box">
                <h3>📊 Recent Grades</h3>
                <ul>
                    <li>PHYS101 Midterm: A (95%)</li>
                    <li>MATH203 Homework 5: 95%</li>
                    <li>CS404 Quiz 3: A-</li>
                </ul>
            </div>
            <div class="box">
                <h3>📢 Announcements</h3>
                <ul>
                    <li>- Campus-wide network maintenance</li>
                    <li>- Spring registration open</li>
                    <li>- Library extended hours</li>
                </ul>
            </div>
            <div class="box">
                <h3>🔔 Upcoming Events</h3>
                <ul>
                    <li>Oct 21-25: Midterm Exams</li>
                    <li>Oct 28: Career Fair</li>
                    <li>Nov 1-3: Thanksgiving Break</li>
                </ul>
            </div>
        </div>
    </main>
</body>
</html>
<?php /**PATH /Users/nico/Herd/Mahipus_Laravel/resources/views/welcome.blade.php ENDPATH**/ ?>