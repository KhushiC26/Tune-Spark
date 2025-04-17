<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $instrument = $_POST['instrument'] ?? '';

    if ($instrument) {
        // Store enrolled courses in session
        if (!isset($_SESSION['enrolled_courses'])) {
            $_SESSION['enrolled_courses'] = [];
        }

         
        if (!in_array($instrument, $_SESSION['enrolled_courses'])) {
            $_SESSION['enrolled_courses'][] = $instrument;
        }

    }
}


header("Location: schedule.php");
exit;
?>
