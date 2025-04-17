<?php
session_start();

$enrolled = $_SESSION['enrolled_courses'] ?? [];
$has_enrollments = !empty($enrolled);

// Sample timetable for all instruments
$timetable = [
    "Guitar" => ["Monday" => "4:00 – 5:00 PM", "Wednesday" => "5:00 – 6:00 PM", "Friday" => "6:00 – 7:00 PM"],
    "Piano" => ["Saturday" => "4:00 – 5:00 PM"],
    "Tabla" => ["Wednesday" => "4:00 – 5:00 PM", "Friday" => "5:00 – 6:00 PM"],
    "Violin" => ["Friday" => "4:00 – 5:00 PM"],
    "Drums" => ["Monday" => "6:00 – 7:00 PM"],
    "Flute" => ["Thursday" => "4:00 – 5:00 PM"],
    "Cajon" => ["Thursday" => "4:00 – 5:00 PM"],
    "Keyboard" => ["Tuesday" => "4:00 – 5:00 PM"],
    "Saxophone" => ["Saturday" => "6:00 – 7:00 PM"],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $day = $_POST['day'] ?? '';

    if (isset($_SESSION['booked_slots'][$day])) {
        $error_message = "You have already booked a slot for $day.";
    } else {
        $_SESSION['booked_slots'][$day] = ['name' => $name, 'email' => $email];
        $success_message = "Your slot for $day is booked!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instruments | MusicMaster</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body class="bg-gradient-to-br from-grayindigo-800 via-gray-800 to-gray-800 text-white font-sans m-0">
  <!-- Navbar -->
  <nav class="bg-gray-900 p-4 flex justify-between items-center shadow-lg">
    <div class="text-2xl font-bold text-white-950 flex items-center gap-2">
      <i class="text-white-950 text-3xl"></i>
      🎶 TuneSpark
    </div>
    <ul class="flex space-x-6 text-sm">
      <li><a href="index.php" class="hover:text-white-900">Home</a></li>
      <li><a href="instruments.php" class="hover:text-white-900 ">Instruments</a></li>
      <li><a href="classes.php" class="hover:text-white-900">Classes</a></li>
      <li><a href="schedule.php" class="hover:text-white-900 font-bold">Schedule</a></li>
      <li><a href="about.php" class="hover:text-white-900 ">About Us</a></li>
    </ul>
    <div class="flex items-center gap-4">
      <a href="profile.php" class="block w-10 h-10 rounded-full overflow-hidden border-2 border-white-900 hover:ring-2 hover:ring-white-900 transition duration-300">
        <img src="k.jpg"  alt="User Profile" class="w-full h-full object-cover">
      </a>
    </div>
  </nav>


    <div class="max-w-6xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-center text-gray-700 mb-6">🎵 Your Weekly Schedule</h1>

        <?php if ($has_enrollments): ?>
            <?php foreach ($enrolled as $course): ?>
                <div class="mb-6 p-4 bg-white rounded shadow">
                    <h2 class="text-xl font-semibold mb-2"><?= htmlspecialchars($course) ?></h2>
                    <ul class="list-disc pl-6">
                        <?php if (isset($timetable[$course])): ?>
                            <?php foreach ($timetable[$course] as $day => $time): ?>
                                <li><?= $day ?>: <?= $time ?></li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li>No schedule available</li>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center text-red-600 font-semibold mb-6">No courses enrolled yet. <a href="classes.php" class="text-gray-600 underline">Enroll Now</a></p>
        <?php endif; ?>

        <!-- Slot Booking Always Visible -->
        <div class="mt-12 bg-white rounded shadow p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-3">📅 Book Teacher Interaction</h2>
            <?php if (isset($success_message)): ?>
                <div class="bg-green-100 text-green-700 p-3 mb-3 rounded"><?= $success_message ?></div>
            <?php elseif (isset($error_message)): ?>
                <div class="bg-red-100 text-red-700 p-3 mb-3 rounded"><?= $error_message ?></div>
            <?php endif; ?>

            <form method="POST" class="space-y-4">
                <input type="text" name="name" placeholder="Your Name" required class="w-full border p-2 rounded">
                <input type="email" name="email" placeholder="Your Email" required class="w-full border p-2 rounded">
                <select name="day" class="w-full border p-2 rounded text-gray-900" required>
                    <option value="">Select Day</option>
                    <option value="Tuesday">Tuesday (5:00 PM - 6:00 PM)</option>
                    <option value="Friday">Friday (5:00 PM - 6:00 PM)</option>
                </select>
                <button type="submit" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Book Slot</button>
            </form>
        </div>
    </div>
</body>

   <!-- Footer -->
   <footer class="bg-gray-800 text-center text-gray-300 py-6 shadow-inner animate-fade-in mt-20">
        <div class="mb-2">
            <p>Contact us at: <a href="mailto:manvendrasinghshekhawat1141@gmail.com" class="text-blue-300 hover:underline">manvendrasinghshekhawat1141@gmail.com</a></p>
            <p>Visit us at: Phagwara , Punjab (144411)</p>
            <p>Phone: +91 6367393936</p>
        </div>
        <p>&copy; 2025 MusicMaster. All rights reserved.</p>
    </footer>
</html>
