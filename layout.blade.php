<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            display: flex;
            height: 100vh;
            color: #000000;
            background-color: #ffffff;
        }

        aside {
            width: 250px;
            border-right: 2px solid #ff6600;
            padding: 20px;
            display: flex;
            flex-direction: column;
            background-color: #fff5eb;
        }

        main {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
        }

        h1, h2, h3, h4 { margin-top: 0; text-transform: uppercase; }
        ul { list-style: none; padding: 0; }
        li { margin-bottom: 10px; }
        a { color: #000000; text-decoration: underline; cursor: pointer; }
        
        .box {
            border: 2px solid #ff6600;
            padding: 15px;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            border: 2px solid #ff6600;
            background-color: #ff6600;
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
            margin-right: 10px;
        }
        
        .btn:hover {
            background-color: #ffffff;
            color: #ff6600;
        }
        
        .btn-outline {
            background-color: #ffffff;
            color: #ff6600;
        }
        
        .btn-outline:hover {
            background-color: #ff6600;
            color: #ffffff;
        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            border: 2px solid #ff6600;
            font-family: 'Courier New', Courier, monospace;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        
        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            background-color: #fff5eb;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid #ff6600;
        }
        
        th, td {
            border: 1px solid #ff6600;
            padding: 10px;
            text-align: left;
        }
        
        th {
            background-color: #ff6600;
            color: #ffffff;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .flex { display: flex; }
        .justify-between { justify-content: space-between; }
        .items-center { align-items: center; }
        .gap-4 { gap: 15px; }
        .mb-4 { margin-bottom: 20px; }
        .mb-6 { margin-bottom: 30px; }
        .mt-4 { margin-top: 20px; }
        .mt-6 { margin-top: 30px; }
        .text-center { text-align: center; }
        .w-full { width: 100%; }
    </style>
</head>
<body>
    <aside>
        <div style="margin-bottom: 40px; text-align: center; border-bottom: 2px solid #ff6600; padding-bottom: 20px;">
            <h1>PORTAL</h1>
            <small>Student Management</small>
        </div>
        
        <ul>
            <li>[🏠] <a href="{{ route('home') }}">Home</a></li>
            <li>[👥] <a href="{{ route('students.index') }}">Students</a></li>
            <li>[➕] <a href="{{ route('students.create') }}">Add Student</a></li>
        </ul>

        <div style="margin-top: auto; border-top: 2px solid #ff6600; padding-top: 20px;">
            <p>[👤] Profile</p>
            <p>[🚪] Logout</p>
        </div>
    </aside>

    <main>
        @yield('content')
    </main>
</body>
</html>

