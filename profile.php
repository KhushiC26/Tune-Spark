<?php
session_start();
require 'db.php';



// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user = getUser($_SESSION['user_id']);
$courses = getUserCourses($_SESSION['user_id']);
$assignments = getUserAssignments($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile | MusicMaster</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="bg-gray-500 text-white font-sans">

        

  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-tealblue-800 p-5 hidden sm:block">
      <h2 class="text-2xl font-bold mb-8 flex items-center gap-2">
        <i class="ph ph-guitar text-3xl"></i> Dashboard
      </h2>
      <nav class="flex flex-col gap-4 text-white">
        <a href="index.php" class="hover:text-tealblue-800 px-4 py-2 rounded flex items-center gap-2">
          <i class="ph ph-house"></i> Home
        </a>
        <a href="classes.php" class="hover:text-tealblue-800 px-4 py-2 rounded flex items-center gap-2">
          <i class="ph ph-book"></i> Classes
        </a>
        <a href="assignments.php" class="hover:text-tealblue-800 px-4 py-2 rounded flex items-center gap-2">
          <i class="ph ph-note-pencil"></i> Assignments
        </a>
        <a href="schedule.php" class="hover:text-tealblue-800 px-4 py-2 rounded flex items-center gap-2">
          <i class="ph ph-calendar"></i> Schedule
        </a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <header class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold">
         
        </h1>
        <div class="flex items-center gap-4">
        <a href="profile.php" class="block w-10 h-10 rounded-full overflow-hidden border-2 border-white-900 hover:ring-2 hover:ring-white-900 transition duration-300">
        <img src="unknown.png"  alt="User Profile" class="w-full h-full object-cover">
      </a>
          <button onclick="location.href='logout.php'" 
                  class="bg-gray-700 text-white font-bold px-4 py-2 rounded hover:bg-gray-700">
            Sign Out
          </button>
        </div>
      </header>

      <!-- Dashboard Cards -->
      <?php if (empty($courses)): ?>
  <!-- Message for new users -->
  <div class="bg-yellow-100 text-black p-6 rounded-xl shadow-lg mb-8">
    <h2 class="text-2xl font-bold mb-2">Welcome to MusicMaster!</h2>
    <p class="text-lg">To get started, please enroll in a course. Once enrolled, you'll see your lessons, assignments, and progress here.</p>
    <a href="classes.php" class="inline-block mt-4 px-5 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700">
      Browse Classes
    </a>
  </div>
<?php else: ?>
  <!-- Dashboard Cards -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
    <div class="bg-gray-700 rounded-2xl p-5 shadow-lg">
      <h2 class="text-xl font-semibold mb-2">📅 Upcoming Lessons</h2>
      <p class="text-gray-200">
        You have <span class="font-bold text-tealblue-800"><?= count($courses) ?> lessons</span>
      </p>
    </div>

    <div class="bg-gray-700 rounded-2xl p-5 shadow-lg">
      <h2 class="text-xl font-semibold mb-2">📚 Assignments</h2>
      <p class="text-gray-200">
        <?php 
        $totalAssignments = array_reduce($assignments, fn($carry, $item) => $carry + count($item), 0);
        ?>
        <span class="font-bold text-tealblue-800"><?= $totalAssignments ?> assignments</span>
      </p>
    </div>

    <div class="bg-gray-700 rounded-2xl p-5 shadow-lg">
      <h2 class="text-xl font-semibold mb-2">📊 Progress</h2>
      <p class="text-gray-200">
        <span class="font-bold text-tealblue-800"><?= $user['progress'] ?>%</span> complete
      </p>
    </div>
  </div>
<?php endif; ?>


      <!-- Enrolled Courses -->
      <section class="mb-12">
        <h2 class="text-2xl font-bold mb-4 text-white">Your Courses</h2>
        <?php if (empty($courses)): ?>
          <p class="text-gray-200">You haven't enrolled in any courses yet.</p>
        <?php else: ?>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <?php foreach ($courses as $course): ?>
              <div class="bg-gray-700 p-4 rounded-xl shadow-lg">
                <h3 class="text-xl font-semibold"><?= htmlspecialchars($course['name']) ?></h3>
                <p class="text-gray-300">Instructor: <?= htmlspecialchars($course['instructor']) ?></p>
                <p class="text-gray-200 mt-2">Level: <?= ucfirst($course['level']) ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </section>
    </main>
  </div>
</body>
</html>
