<?php
// session_start();
// require 'db.php';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $email = $_POST['email'] ?? '';
//     $password = $_POST['password'] ?? '';
    
//      $user = authenticate($email, $password);
    
//     if ($user) {
//         $_SESSION['user_id'] = $user['id'];
//         header('Location: profile.php');
//         exit;
//     } else {
//         $error = "Invalid email or password";
//     }

//     if ($user) {
//         $_SESSION['user_id'] = $user['id'];
//         $redirect_to = $_SESSION['redirect_to'] ?? 'profile.php';
//         unset($_SESSION['redirect_to']);
//         header("Location: $redirect_to");
//         exit;
//     }
// }
   


// $conn=mysqli_connect("localhost","root","","register");
// if(isset($_POST['submit'])) 
// {

//     // $phone=$_POST['phnumber'];
//     $email=$_POST['email'];
//     $password=$_POST['password'];

// $sql="INSERT INTO login_info (email,password) VALUES ('$email','$password')"; // Insert the phone number into the database

// if(mysqli_query($conn,$sql))
// {
//     echo "<script>alert('Logedin successfully')</script>";

// }
// else
// {
//     echo "Error: ". mysqli_error($conn);
// }
// mysqli_close($conn); // Close the database connection
// }
session_start();

$conn = mysqli_connect("localhost", "root", "", "register");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Simple login check (replace with secure logic in production)
    $query = "SELECT * FROM register_info WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id'] ?? $user['email']; // Assuming email as fallback ID
        header('Location: profile.php');
        exit;
    } else {
        $error = "Invalid email or password";
        echo "<script>alert('$error');</script>";
    }

    mysqli_close($conn);
}



?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | MusicMaster</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- <script>
    function goToPage(){
      window.location.href="profile.php";
    }
    </script> -->

</head>
<body class="bg-gradient-to-br from-gray-800 to-gray-700 min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">🎶 TuneSpark</h1>
    
  
    
    <form method="POST" class="space-y-4">
      <div>
        <label for="email" class="block text-gray-700 mb-2">Email</label>
        <input type="email" id="email" name="email" required
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500">
      </div>
      
      <div>
        <label for="password" class="block text-gray-700 mb-2">Password</label>
        <input type="password" id="password" name="password" required
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-500">
      </div>
      
      <button name="submit" type="submit" 
              class="w-full bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg transition">
        Login
      </button>
    </form>
    
    <p class="mt-4 text-center text-gray-600">
      Don't have an account? <a href="register.php" class="text-blue-600  hover:underline">Register</a>
    </p>
  </div>
</body>
</html>
