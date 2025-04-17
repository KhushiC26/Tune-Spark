<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Music Classes | MusicMaster</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class=" bg-gradient-to-br from-grayindigo-800 via-gray-800 to-gray-800 text-white font-sans">

  <!-- Navbar -->
  <nav class="bg-gray-900 p-4 flex justify-between items-center">
    <div class="text-2xl font-bold text-white flex items-center gap-2">
      <i class="text-white text-3xl"></i>
      🎶 TuneSpark
    </div>
    <ul class="flex space-x-6 text-sm">
      <li><a href="index.php" class="hover:text-white">Home</a></li>
      <li><a href="instruments.php" class="hover:text-white">Instruments</a></li>
      <li><a href="classes.php" class="text-white font-semibold">Classes</a></li>
      <li><a href="schedule.php" class="hover:text-white">Schedule</a></li>
      <li><a href="about.php" class="hover:text-white">About Us</a></li>
    </ul>
    <a href="profile.php">
      <img src="unknown.png" alt="Profile" class="rounded-full w-10 h-10 border-2 border-white">
    </a>
  </nav>

  <!-- Hero Section -->
  <header class="text-center py-16 bg-gray-800 shadow-inner">
    <h1 class="text-4xl font-bold mb-4 text-white">Explore Our Music Classes</h1>
    <p class="text-gray-200 text-lg max-w-2xl mx-auto">Learn instruments at your own pace – beginner to advanced, with experienced mentors and flexible slots.</p>
  </header>

  <!-- Classes Section -->
  <section class="py-16 px-6 max-w-6xl mx-auto space-y-12">

    <!-- Beginner Class -->
    <div class="bg-white text-gray-900 rounded-xl shadow-lg p-6 md:flex gap-8">
      <img src="beginner.jpg" alt="Beginner Class" class="w-full md:w-1/3 h-64 object-cover rounded-lg">
      <div class="flex-1 mt-6 md:mt-0">
        <h2 class="text-2xl font-bold mb-2 text-gray-800">🎵 Beginner Classes</h2>
        <p class="mb-4">Perfect for students starting their musical journey. Learn fundamentals, posture, and basic melodies with easy-to-use instruments.</p>
        <ul class="mb-4 text-sm space-y-1">
          <li><strong>Instruments:</strong> Keyboard, Guitar, Tabla</li>
          <li><strong>Duration:</strong> 45 mins / session</li>
          <li><strong>Schedule:</strong> Mon, Wed, Fri – 5:00 PM to 5:45 PM</li>
          <li><strong>Instructor:</strong> Mr. Rohan Mehra</li>
        </ul>
        <a href="enroll.php?level=beginner" class="bg-gray-500 hover:bg-gray-700 text-white font-bold px-4 py-2 rounded transition">Enroll Now</a>
      </div>
    </div>

    <!-- Intermediate Class -->
    <div class="bg-white text-gray-900 rounded-xl shadow-lg p-6 md:flex gap-8 flex-row-reverse">
      <img src="intermidiate.jpg" alt="Intermediate Class" class="w-full md:w-1/3 h-64 object-cover rounded-lg">
      <div class="flex-1 mt-6 md:mt-0">
        <h2 class="text-2xl font-bold mb-2 text-gray-800">🎼 Intermediate Classes</h2>
        <p class="mb-4">Enhance your technique, sight-reading, and music theory. Start performing with confidence!</p>
        <ul class="mb-4 text-sm space-y-1">
          <li><strong>Instruments:</strong> Violin, Cajon, Electric Guitar</li>
          <li><strong>Duration:</strong> 60 mins / session</li>
          <li><strong>Schedule:</strong> Tue, Thu – 6:00 PM to 7:00 PM</li>
          <li><strong>Instructor:</strong> Ms. Ananya Kapoor</li>
        </ul>
        <a href="enroll.php?level=intermediate" class="bg-gray-500 hover:bg-gray-700 text-white  font-bold px-4 py-2 rounded transition">Enroll Now</a>
      </div>
    </div>

    <!-- Advanced Class -->
    <div class="bg-white text-gray-900 rounded-xl shadow-lg p-6 md:flex gap-8">
      <img src="advanced.jpg" alt="Advanced Class" class="w-full md:w-1/3 h-64 object-cover rounded-lg">
      <div class="flex-1 mt-6 md:mt-0">
        <h2 class="text-2xl font-bold mb-2 text-gray-800">🎹 Advanced Masterclass</h2>
        <p class="mb-4">For serious musicians aiming to perform or teach professionally. Learn improvisation, composition, and advanced music theory.</p>
        <ul class="mb-4 text-sm space-y-1">
          <li><strong>Instruments:</strong> Piano, Saxophone, Drums</li>
          <li><strong>Duration:</strong> 75 mins / session</li>
          <li><strong>Schedule:</strong> Sat, Sun – 4:00 PM to 5:15 PM</li>
          <li><strong>Instructor:</strong> Mr. Arjun Das</li>
        </ul>
        <a href="enroll.php?level=advanced" class="bg-gray-500 hover:bg-gray-700 text-white  font-bold px-4 py-2 rounded transition">Enroll Now</a>
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
