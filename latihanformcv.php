<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Email dan Password</title>
</head>
<body>
    <h2>Form Login</h2>
    <form method="POST" action="">
        <label for="username">Username:</label><br>
        <input type="username" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === "paturbae19@gmail.com" && $password === "password123") {
            echo "<h2>Curriculum Vitae</h2>";
            echo "<p><strong>Nama           :</strong> Muhammad Faturrahman</p>";
            echo "<p><strong>TTL            :</strong> Palembang, 19 April 2004</p>";
            echo "<p><strong>Jenis Kelamin  :</strong> Laki-laki</p>";
            echo "<p><strong>Agama          :</strong> Islam</p>";
            echo "<p><strong>Alamat         :</strong> Palembang</p>";
            echo "<p><strong>Telp           :</strong> 089527100054</p>";
            echo "<p><strong>Email          :</strong> paturbae19@gmail.com</p>";
        } else {
            echo "<p style='color: red;'>Email atau password salah!</p>";
        }
    }
    ?>
</body>
</html>
