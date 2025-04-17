<?php
// Start session and simulate a logged-in user with profile picture
session_start();
$_SESSION['username'] = 'Khushi Chaudhary';
$_SESSION['profile_pic'] = 'unknown.png'; // Change this to dynamic source if needed
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Instrument Handling</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script>
        function showMessage() {
            alert("Thank you for showing interest! Redirecting you to enrollment...");
        }
    </script>
</head>

<body class="bg-gradient-to-br from-grayindigo-800 via-gray-800 to-gray-800 text-white font-sans m-0 -mt-12 p-0">

    <!-- Navbar -->
    <?php
    session_start();
    $is_logged_in = isset($_SESSION['username']);
    $profile_pic = $is_logged_in ? $_SESSION['profile_pic'] : null;
    ?>


    <nav class="bg-gray-900 p-5 flex justify-between items-center shadow-lg transition-all duration-300 ease-in-out hover:shadow-2xl">
        <div class="text-2xl font-bold text-sky-900 drop-shadow-lg animate-fade-in flex items-center gap-2">
            <i class=" text-gray-300 text-3xl"></i>
            🎶 TuneSpark
        </div>
        <ul class="flex space-x-6 text-sm">
      <li><a href="index.php" class="hover:text-white-900 font-bold">Home</a></li>
      <li><a href="instruments.php" class="hover:text-white-900">Instruments</a></li>
      <li><a href="classes.php" class="hover:text-white-900">Classes</a></li>
      <li><a href="schedule.php" class="hover:text-white-900">Schedule</a></li>
      <li><a href="about.php" class="hover:text-white-900">About Us</a></li>
    </ul>
            <!-- Right-side: profile or sign in -->
  <div class="ml-4">
    <?php if ($is_logged_in): ?>
      <a href="profile.php" class="block w-10 h-10 rounded-full overflow-hidden border-2 border-white-900 hover:ring-2 hover:ring-white-900 transition duration-300">
        <img src="<?= $profile_pic ?>" alt="User Profile" class="w-full h-full object-cover">
      </a>
    <?php else: ?>
      <a href="login.php" class="bg-blue-900 text-gray-900 px-4 py-2 rounded-full font-semibold text-sm hover:bg-blue-900 transition">Sign In / Register</a>
    <?php endif; ?>
  </div>
</div>

    </nav>

    <!-- Hero Section -->
    <section class="text-center py-24 bg-gradient-to-b from-gray-800 to-gray-800 shadow-inner animate-fade-in">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-md animate-fade-in">Master Your Favorite Instrument</h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 drop-shadow animate-fade-in">Learn from expert teachers and perfect your musical talent</p>
        <img src="https://images.unsplash.com/photo-1485579149621-3123dd979885" alt="Music Instruments" class="mx-auto rounded-lg shadow-xl mb-8 w-full max-w-4xl">

    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-100 text-gray-800 shadow-inner animate-fade-in">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-xl transform transition duration-300 hover:scale-105">
                <img src="a.jpg" alt="Instrument Variety" class="rounded-md mb-4 w-full h-40 object-cover">
                <h3 class="text-xl font-semibold mb-2 flex justify-center">Wide Range of Instruments</h3>
                <p>From piano to drums, we offer training for all popular instruments. Explore classical, western, and digital music instruments with ease. Our expert-curated instrument library is designed to give you hands-on experience.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-xl transform transition duration-300 hover:scale-105">
                <img src="b.jpg" alt="Personalized Classes" class="rounded-md mb-4 w-full h-40 object-cover">
                <h3 class="text-xl font-semibold mb-2 flex justify-center">Personalized Classes</h3>
                <p>Choose beginner, intermediate, or advanced levels tailored to you. Classes are flexible and adaptive to your pace and interest. You can learn solo, in groups, or live online via interactive sessions with mentors.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-xl transform transition duration-300 hover:scale-105">
                <img src="c.jpg" alt="Teacher Interaction" class="rounded-md mb-4 w-full h-40 object-cover">
                <h3 class="text-xl font-semibold mb-2 flex justify-center">One-on-One Interaction</h3>
                <p>Schedule time with teachers for doubt-clearing and deeper learning. Get personal feedback, curated practice routines, and continuous improvement plans through regular mentorship.</p>
            </div>
        </div>
    </section>

    <!-- Why Clients Love Us Section -->
    <section class="py-16 bg-gradient-to-br from-gray-300 via-black-200 to-gray-200 text-gray-800 shadow-md animate-fade-in">
        <div class="max-w-5xl mx-auto text-center">
            <p class="text-sm uppercase font-semibold text-gray-800 mb-2">Why Our Clients Love Us</p>
            <h2 class="text-3xl font-bold mb-4">Simplicity meets excellence<br>our products excel in every aspect</h2>
            <p class="mb-10 text-lg">We design our products to be the best in every way, so you get the most out of them. We focus on quality, ease of use, and great performance to make your life easier.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-bold text-xl mb-2 text-gray-800">Continuous Innovation</h3>
                    <p>We continuously research and develop our solutions and provide regular updates with new features to improve performance.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-bold text-xl mb-2 text-gray-800">Pricing</h3>
                    <p>Industry-low, transparent pricing models designed to scale your business.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-bold text-xl mb-2 text-gray-800">Simplicity</h3>
                    <p>User-centric design with creative interfaces to help you quickly learn and leverage the full potential of our solutions.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-bold text-xl mb-2 text-gray-800">24x7 Support</h3>
                    <p>Our dedicated support team is always ready to help you; you can reach out to us via call or email anytime.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-center text-gray-300 py-6 shadow-inner animate-fade-in">
        <div class="mb-2">
            <p>Contact us at: <a href="mailto:manvendrasinghshekhawat1141@gmail.com" class="text-blue-300 hover:underline">manvendrasinghshekhawat1141@gmail.com</a></p>
            <p>Visit us at: Phagwara , Punjab (144411)</p>
            <p>Phone: +91 6367393936</p>
        </div>
        <p>&copy; 2025 MusicMaster. All rights reserved.</p>
    </footer>

    
</body>

</html>
