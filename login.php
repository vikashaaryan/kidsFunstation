<?php
include_once "config/connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunStation Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-pink-400 to-yellow-300 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-xl shadow-lg max-w-md w-full text-center">
        <div class="flex justify-center">
            <img src="assets/images/logo1.png" alt="FunStation Logo" class="h-20">
        </div>
        <h2 class="text-3xl font-bold text-pink-600 mt-4">Welcome to FunStation</h2>
        <p class="text-gray-600 mb-6">Login to continue</p>

        <form action="" method="POST" class="space-y-4">
            <div class="text-left">
                <label class="text-lg font-semibold text-gray-700">Username</label>
                <input type="text" name="username" required placeholder="Enter your username"
                    class="w-full py-3 px-4 border border-gray-300 rounded-lg focus:ring-4 focus:ring-pink-300 outline-none">
            </div>

            <div class="text-left">
                <label class="text-lg font-semibold text-gray-700">Password</label>
                <input type="password" name="password" required placeholder="Enter your password"
                    class="w-full py-3 px-4 border border-gray-300 rounded-lg focus:ring-4 focus:ring-yellow-300 outline-none">
            </div>

            <button type="submit" name="login"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white font-semibold text-lg py-3 rounded-lg shadow-md transition">
                Login
            </button>
        </form>

        <?php
        if (isset($_POST['login'])) {
            $user_name = $_POST['username'];
            $password = md5($_POST['password']); 

            $query = $connect->query("SELECT * FROM admin WHERE user_name='$user_name'");
            $user = $query->fetch_assoc();

            if ($user) {
                if ($user['password'] === $password) { // Check password
                    $_SESSION['user_id'] = $user['id']; // Store user in session
                   redirect("index.php");
                } else {
                    msg('Invalid password!');
                }
            } else {
                msg('User not found!');
            }
        }
        ?>
    </div>
</body>

</html>