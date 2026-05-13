<?php
include "koneksi.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        /* Base */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f0f4f8 0%, #d9e2ec 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding-inline: 2.5rem;
        }

        /* Login Card */
        .login-card {
            background-color: white;
            padding: 1rem;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            text-align: center;
        }

        .login-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 2rem 1rem .5rem 1rem;
        }

        header img {
            height: 100px;
        }

        h1 {
            color: #1e40af;
            font-size: 1.5rem;
            line-height: 1.4;
            margin-bottom: 2.5rem;
        }

        h1 span {
            font-size: 0.9rem;
            color: #64748b;
            display: block;
            font-weight: normal;
            margin-bottom: 5px;
        }

        /* Form */
        form {
            width: 45%;
        }

        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: #475569;
            margin-bottom: 0.5rem;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 16px;
            border: 1.5px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        /* Button */
        input[type="submit"] {
            width: 100%;
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
            margin-top: 1rem;
        }

        input[type="submit"]:hover {
            background-color: #1d4ed8;
        }

        .alert {
            width: 75%;
            margin-inline: auto;
            background-color: #ffefef;
            color: #eb2525;
            padding: 12px;
            border-radius: 8px;
        }

        /* Footer */
        .footer-text {
            margin-top: 3rem;
            font-size: 0.75rem;
            color: #94a3b8;
        }

        .footer-text b {
            color: #1e40af;
        }

        /* Responsive */
        @media (max-width: 768px) {
            body {
                height: 125vh;
            }

            .login-card {
                height: 80%;
                overflow-y: auto;
                scrollbar-width: none;
            }

            .login-container {
                flex-direction: column;
            }

            form {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="login-card">
        <div class="login-container">
            <header>
                <img src="./public/SMKN1MAJA.webp" alt="SMKN 1 Maja logo">
                <h1><span>Selamat Datang di</span> SMK Negeri 1 Maja</h1>
            </header>

            <form action="./login/aksi_login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <input type="submit" value="Login">
            </form>
        </div>

        <?php
        if (isset($_SESSION['error'])) {
            $pesan = $_SESSION['error'];
            echo "<p class='alert'>$pesan</p>";

            unset($_SESSION['error']);
        }
        ?>

        <p class="footer-text">Copyright &copy; 2026 | Created by <b>Ari ZM</b></p>
    </div>

</body>

</html>