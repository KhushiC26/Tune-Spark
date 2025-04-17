<?php
session_start();
require_once 'db.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Get user data
$assignments = getUserAssignments($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Assignments</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-500 text-gray-900 p-6">

    <h1 class="text-3xl font-bold mb-6 text-center text-white
    ">📚 Your Assignments</h1>

    <div id="assignmentsContainer" class="space-y-6">
      <!-- if condition -->
            <div class="bg-gray-700 p-6 rounded-xl shadow-md text-center">
                <h2 class="text-xl font-semibold text-gray-700">No Courses Enrolled</h2>
                <p class="text-gray-500 mt-2">You haven't enrolled in any courses yet. Please enroll to see your assignments.</p>
            </div>
       <!-- else condition -->
            <?php foreach ($assignments as $course => $courseAssignments): ?>
                <div class="bg-gray-700 rounded-xl shadow-md p-5">
                    <h2 class="text-2xl font-semibold text-white
                     mb-3"><?php echo htmlspecialchars($course); ?> Assignments</h2>
                    <ul class="space-y-4">
                        <?php foreach ($courseAssignments as $task): ?>
                            <li class="flex justify-between items-center p-4 bg-gray-50 rounded-lg border border-gray-200">
                                <div>
                                    <p class="text-lg font-medium"><?php echo htmlspecialchars($task['title']); ?></p>
                                    <p class="text-sm text-gray-600">Deadline: <?php echo htmlspecialchars($task['deadline']); ?></p>
                                    <p class="text-sm font-semibold <?php 
                                        echo $task['status'] == 'Completed' ? 'text-green-600' : 
                                             ($task['status'] == 'Pending' ? 'text-red-600' : 'text-red-600'); ?>">
                                        Status: <?php echo htmlspecialchars($task['status']); ?>
                                    </p>
                                </div>
                                <div class="flex space-x-2 items-center">
                                    <label class="cursor-pointer bg-gray-200 hover:bg-gray-200 text-gray-700 px-3 py-2 rounded-md transition inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                        </svg>
                                        Upload
                                        <input type="file" class="hidden" data-course="<?php echo htmlspecialchars($course); ?>" data-title="<?php echo htmlspecialchars($task['title']); ?>">
                                    </label>
                                    <button class="submit-btn bg-blue-600 hover:bg-blue-700 text-gray-700 px-4 py-2 rounded-md transition"
                                        data-course="<?php echo htmlspecialchars($course); ?>" data-title="<?php echo htmlspecialchars($task['title']); ?>">
                                        Submit
                                    </button>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        
    </div>

    <!-- JavaScript remains the same -->

        
    <script>
        const uploadedFiles = {};

        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', function () {
                const course = this.dataset.course;
                const title = this.dataset.title;
                const file = this.files[0];
                if (file) {
                    uploadedFiles[`${course}-${title}`] = file.name;
                }
            });
        });

        document.querySelectorAll('.submit-btn').forEach(button => {
            button.addEventListener('click', function () {
                const course = this.dataset.course;
                const title = this.dataset.title;
                const key = `${course}-${title}`;
                if (uploadedFiles[key]) {
                    alert(`✅ Submitted "${title}" for ${course} with file "${uploadedFiles[key]}".`);
                } else {
                    alert(`⚠️ Please upload a file before submitting "${title}" for ${course}.`);
                }
            });
        });
    </script>
    

</body>
</html>
