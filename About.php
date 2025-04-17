<?php
// Start session and simulate a logged-in user with profile picture
// session_start();
// $_SESSION['username'] = 'Khushi Chaudhary';
// $_SESSION['profile_pic'] = 'unknown.png'; // Change this to dynamic source if needed
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | TuneSpark</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body class="bg-gradient-to-br from-grayindigo-800 via-gray-800 to-gray-800 text-white font-sans">
  <!-- Navbar -->
  <nav class="bg-gray-900 p-4 flex justify-between items-center shadow-lg">
    <div class="text-2xl font-bold text-white-900 flex items-center gap-2">
      <i class="text-white-950 text-3xl"></i>
      🎶 TuneSpark
    </div>
    <ul class="flex space-x-6 text-sm">
      <li><a href="index.php" class="hover:text-white-900">Home</a></li>
      <li><a href="instruments.php" class="text-white-900 ">Instruments</a></li>
      <li><a href="classes.php" class="hover:text-white-900">Classes</a></li>
      <li><a href="schedule.php" class="hover:text-white-900">Schedule</a></li>
      <li><a href="about.php" class="text-white-900 font-bold">About Us</a></li>
    </ul>
    <div class="flex items-center gap-4">
            <a href="profile.php" class="block w-10 h-10 rounded-full overflow-hidden border-2 border-white-900 hover:ring-2 hover:ring-white-900 transition duration-300">
                <img src="unknown.png" alt="User Profile" class="w-full h-full object-cover">
            </a>
        </div>
  </nav>

  <!-- About Us Section -->
  <section class="py-20 px-6 max-w-5xl mx-auto">
  <h1 class="text-4xl font-bold text-blue-900 text-center mb-8">About TuneSpark</h1>
  
  <p class="text-lg leading-8 mb-6 text-gray-800">
    At <span class="text-blue-900 font-semibold">TuneSpark</span>, we believe that music isn't just an art—it's an experience, a discipline, and a lifelong journey. Our platform was born out of a passion to make high-quality music education accessible to everyone, from the curious beginner to the experienced performer. Whether you want to strum a guitar, tickle the ivories of a piano, or master the rhythm of drums, we’re here to guide you note by note.
  </p>
  
  <p class="text-lg leading-8 mb-6 text-gray-800">
    Our team of instructors is composed of <span class="text-blue-900 font-semibold">skilled, certified musicians</span> with years of stage and teaching experience. They’re more than just teachers—they’re mentors who tailor each lesson to fit the student’s pace and passion. With a mix of classical theory and modern techniques, we ensure that every learner not only plays but understands and feels the music.
  </p>
  
  <p class="text-lg leading-8 mb-6 text-gray-800">
    TuneSpark also provides <span class="text-blue-900 font-semibold">state-of-the-art facilities</span> for live virtual classes, instrument handling tutorials, and one-on-one sessions. Students can book personalized slots, submit assignments, track their progress, and interact directly with their mentors—all in one seamless dashboard. Our structured classes are designed for clarity, engagement, and growth.
  </p>
  
  <p class="text-lg leading-8 mb-6 text-gray-800">
    Behind TuneSpark is a vibrant team of developers, educators, and designers who work in harmony to keep the platform evolving. We’re musicians, coders, dreamers—and above all, believers in the transformative power of music. With every update, feature, and course, we aim to bring music education closer to your fingertips.
  </p>

  <!-- Contributors Section -->
<div class="mt-12 bg-gray-800 p-6 rounded-xl shadow-xl text-center">
  <div class="flex items-center justify-center space-x-2 text-xl text-white-950 font-semibold mb-4">
    <i class="ph ph-users-three"></i>
    <h4>Meet Our Team</h4>
  </div>

  <!-- Centered image container -->
  <div class="flex justify-center mb-4 space-x-4">
    <img class="inline-block h-14 w-14 rounded-full ring-2 ring-white" src="k.jpg" alt="Contributor 1" />
    <img class="inline-block h-14 w-14 rounded-full ring-2 ring-white" src="man.png" alt="Contributor 2" />
    <img class="flex items-center h-14 w-14 rounded-full ring-2 ring-white" src="Pan.jpg" alt="Contributor 3" />
    <img class="inline-block h-14 w-14 rounded-full ring-2 ring-white" src="unknown.png" alt="Contributor 4" />
  </div>

  <div class="text-sm text-gray-300">
    <p>Our dedicated contributors bring TuneSpark to life—blending creativity, code, and craftsmanship to build an environment where learning music feels inspiring and intuitive.</p>
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
        <p>&copy; 2025 TuneSpark. All rights reserved.</p>
    </footer>
</body>

</html>
