<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ely Mabunga</title>
    <link rel="icon" href="/favicon.ico">

    <!-- Clean Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --accent: #1976d2;
            --accent-dark: #0d47a1;
            --card-bg: rgba(30, 34, 45, 0.95);
            --card-shadow: 0 8px 32px rgba(25, 118, 210, 0.18);
            --avatar-bg: linear-gradient(135deg, #1976d2 60%, #0d47a1 100%);
        }
        body {
            background: linear-gradient(120deg, #232526 0%, #0f0f0f 100%);
            color: #e0e0e0;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 30px;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: var(--accent);
            margin-bottom: 10px;
            font-size: 2.7rem;
            letter-spacing: 2px;
            font-weight: 700;
            text-shadow: 0 2px 12px #0d47a1;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
            width: 90px;
            height: 90px;
            border-radius: 50%;
            box-shadow: 0 4px 24px #1976d2;
            background: var(--avatar-bg);
            position: relative;
        }
        .logo::after {
            content: "";
            display: block;
            width: 60px;
            height: 60px;
            background: url('/favicon.ico') center/cover no-repeat;
            border-radius: 50%;
            box-shadow: 0 2px 8px #0d47a1;
        }

        .main-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
            margin-top: 30px;
        }

        .form-container {
            flex: 1;
            min-width: 300px;
            max-width: 400px;
            backdrop-filter: blur(10px);
            background: var(--card-bg);
            border: 1px solid var(--accent);
            padding: 40px 32px 32px 32px;
            border-radius: 18px;
            box-shadow: var(--card-shadow);
        }

        input {
            font-family: inherit;
            padding: 13px;
            margin: 13px 0;
            border: none;
            border-radius: 10px;
            background: rgba(25, 118, 210, 0.13);
            color: #fff;
            width: 100%;
            text-align: left;
            backdrop-filter: blur(6px);
            font-size: 1.05rem;
            box-shadow: 0 2px 8px #1976d2;
        }

        input::placeholder {
            color: #b0bec5;
        }

        button {
            font-family: inherit;
            background: var(--accent);
            color: #fff;
            padding: 15px 24px;
            border: none;
            border-radius: 12px;
            margin-top: 28px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(.4,2,.3,.7);
            width: 100%;
            font-weight: 700;
            font-size: 1.13rem;
            box-shadow: 0 4px 24px #1976d2;
            letter-spacing: 1px;
        }

        button:hover {
            background: var(--accent-dark);
            color: #fff;
            transform: translateY(-2px) scale(1.04);
            box-shadow: 0 12px 48px #0d47a1;
        }

        .table-container {
            flex: 2;
            width: 100%;
            overflow-x: auto;
            background: var(--card-bg);
            border-radius: 18px;
            box-shadow: var(--card-shadow);
            padding: 32px 22px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            backdrop-filter: blur(10px);
            background: rgba(25, 118, 210, 0.07);
            border-radius: 14px;
            overflow: hidden;
            font-size: 1.09rem;
            box-shadow: 0 2px 12px #1976d2;
        }

        th, td {
            padding: 20px 14px;
            text-align: center;
            border-bottom: 1px solid #1976d2;
            color: #e0e0e0;
        }

        th {
            background: var(--accent);
            color: #fff;
            font-weight: 700;
            letter-spacing: 1px;
            border: none;
            font-size: 1.1rem;
            text-transform: uppercase;
        }

        td {
            background: rgba(25, 118, 210, 0.04);
            transition: background 0.2s;
        }

        tr:hover td {
            background: rgba(25, 118, 210, 0.13);
        }

        a {
            color: var(--accent);
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 700;
            border-radius: 6px;
            padding: 2px 8px;
        }

        a:hover {
            color: #fff;
            text-shadow: 0 2px 8px var(--accent);
            background: var(--accent);
        }

        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
                align-items: center;
            }
            .form-container, .table-container {
                width: 100%;
                margin-bottom: 18px;
            }
        }
    </style>
</head>
<body>

    <div class="logo"></div>
    <h1>Student List</h1>

    <div class="main-container">
        <!-- Add Student Form -->
        <div class="form-container">
            <form action="/CRUD2/students/create" method="POST">
                <input type="text" name="last_name" placeholder="Last Name" required><br>
                <input type="text" name="first_name" placeholder="First Name" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <button type="submit">Save Student</button>
            </form>
        </div>

        <!-- Students Table -->
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Lastname</th>
                        <th>Firstname</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($students)): ?>
                        <?php foreach ($students as $student): ?>
                            <tr>
                                <td><?= htmlspecialchars($student['id']) ?></td>
                                <td><?= htmlspecialchars($student['last_name']) ?></td>
                                <td><?= htmlspecialchars($student['first_name']) ?></td>
                                <td><?= htmlspecialchars($student['email']) ?></td>
                                <td>
                                    <a href="/CRUD2/students/edit/<?= $student['id'] ?>">✏ Edit</a> | 
                                    <a href="/CRUD2/students/delete/<?= $student['id'] ?>" onclick="return confirm('Are you sure you want to delete this student?');">🗑 Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="5">No students found.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
