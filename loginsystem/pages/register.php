<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="bg-gray-500 flex justify-center items-center h-screen">
        <form method="post" class="flex gap-5 flex-col w-1/2 justify-center items-center bg-white p-5" action="./../signup.php">
            <div>
                username: <input type="text" name="username" placeholder="Enter your name" required />
            </div>
            <div>
                email: <input type="email" name="email" placeholder="Enter your email" required />
            </div>
            <div>
                password: <input type="password" name="password" placeholder="Enter your password" required />
            </div>

            <input type="submit" value="Register" onclick="showMessage()" class="px-10 py-2 text-white cursor-pointer opacity-80 hover:opacity-100 hover:scale-105 transition-all duration-500 bg-gray-900" />

            <div>
                <p>Already have an account? <a href="./logIn.php">Login now</a>
            </div>
        </form>
    </div>


    <script>
        function showMessage() {
            if (mysqli_error($conn)) {
                alert(mysqli_error())
            } else {
                alert("Registered successfully");
            }
        }
    </script>
</body>

</html>