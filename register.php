<?php

$conn=mysqli_connect("localhost","root","","register");
if(isset($_POST['submit'])) 
{

    $name =$_POST['name']; 
    $email=$_POST['email'];
    $password=$_POST['password'];

$sql="INSERT INTO register_info (name,email,password) VALUES ('$name','$email','$password')"; // Insert the phone number into the database

if(mysqli_query($conn,$sql))
{
    echo "<script>alert('Data inserted successfully')</script>";
    echo "<script>window.open('login.php','_self')</script>";
}
else
{
    echo "Error: ". mysqli_error($conn);
}
mysqli_close($conn); 
}

?>

<!-- HTML FORM -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | MusicMaster</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-gray-800 to-gray-700 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
        <h2 class="text-3xl font-bold text-center mb-6 text-gray-800">Create an Account</h2>
        
    

        <form method="POST" class="space-y-4">
            <input type="text" name="name" placeholder="Full Name" required autocomplete="name"
                class="w-full border p-2 rounded bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500" />

            <input type="email" name="email" placeholder="Email" required autocomplete="email"
                class="w-full border p-2 rounded bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500" />

            <input type="password" name="password" placeholder="Password" required autocomplete="new-password"
                class="w-full border p-2 rounded bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500" />

            <button name="submit" type="submit"
                class="w-full bg-gray-500 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded transition">
                Register
            </button>
        </form>

        <div class="mt-4 text-center text-sm text-gray-600">
            Already have an account? 
            <a href="login.php" class="text-blue-600 hover:underline">Login here</a>
        </div>

    </div>
</body>
</html>
