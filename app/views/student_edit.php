<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student - Glass Monochrome</title>

    <!-- Clean, modern font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: #0f0f0f;
            color: #e0e0e0;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            padding: 40px 20px;
        }

        h1 {
            color: #ffffff;
            margin-bottom: 40px;
        }

        form {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            display: inline-block;
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 12px 0;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            font-family: inherit;
            font-size: 16px;
            backdrop-filter: blur(6px);
        }

        input::placeholder {
            color: #aaa;
        }

        button {
            width: 100%;
            padding: 14px;
            margin-top: 20px;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease, color 0.3s ease;
            font-family: inherit;
        }

        button:hover {
            background: rgba(255, 255, 255, 0.3);
            color: #000;
        }

        a.back {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
            background: rgba(255, 255, 255, 0.05);
            color: #e0e0e0;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        a.back:hover {
            background: rgba(255, 255, 255, 0.3);
            color: #000;
        }

        @media (max-width: 480px) {
            form {
                width: 100%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <h1>✏ Edit Student</h1>

    <form action="/CRUD2/students/update/<?= $student['id'] ?>" method="POST">
        <input type="text" name="lastname" placeholder="Last Name" value="<?= htmlspecialchars($student['lastname']) ?>" required>
        <input type="text" name="firstname" placeholder="First Name" value="<?= htmlspecialchars($student['firstname']) ?>" required>
        <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($student['email']) ?>" required>
        <button type="submit">Save Changes</button>
    </form>

    <a href="/CRUD2/students/index" class="back">⬅ Back to List</a>

</body>
</html>
