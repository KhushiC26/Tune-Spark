<?php
// Simulated data storage
$users = [
    1 => [
        'id' => 1,
        'username' => 'Khushi Chaudhary',
        'email' => 'khushi@gmail.com',
        'profile_pic' => 'unknown.png',
        'progress' => '33.33' ,
        'password' => password_hash('password123', PASSWORD_DEFAULT)
    ]

    // 2 => [
    //         'id' => 2,
    //         'username' => 'Manvendra Singh',
    //         'email' => 'manvendra@gmail.com',
    //         'profile_pic' => 'unknown.png',
    //         'progress' => '0%',
    //         'password' => password_hash('password123', PASSWORD_DEFAULT)
    //     ]
];

$courses = [
    ['id' => 1, 'name' => 'Beginner Guitar', 'level' => 'beginner', 'instructor' => 'Mr. Rohan Mehra'],
    ['id' => 2, 'name' => 'Intermediate Piano', 'level' => 'intermediate', 'instructor' => 'Ms. Ananya Kapoor'],
    ['id' => 3, 'name' => 'Advanced Drums', 'level' => 'advanced', 'instructor' => 'Mr. Arjun Das']
];

$enrollments = [
    ['user_id' => 1, 'course_id' => 1],
    ['user_id' => 1, 'course_id' => 2],
    ['user_id' => 1, 'course_id' => 3],
    ['user_id' => 2, 'course_id' => 1],
    ['user_id' => 2, 'course_id' => 2],
    ['user_id' => 2, 'course_id' => 3],
    ['user_id' => 3, 'course_id' => 1],
    ['user_id' => 3, 'course_id' => 2],
    ['user_id' => 3, 'course_id' => 3],
    ['user_id' => 4, 'course_id' => 1],
    ['user_id' => 4, 'course_id' => 3],
    
];

$assignments = [
    ['course_id' => 1, 'title' => 'Scales Practice', 'deadline' => '2025-04-20', 'status' => 'Pending'],
    ['course_id' => 1, 'title' => 'Chords & Progressions', 'deadline' => '2025-04-25', 'status' => 'Completed'],
    ['course_id' => 2, 'title' => 'Finger Exercises', 'deadline' => '2025-04-22', 'status' => 'Pending']
];

// Helper functions
function getUser($userId) {
    global $users;
    return $users[$userId] ?? null;
}

function getUserCourses($userId) {
    global $enrollments, $courses;
    $userCourses = [];
    
    foreach ($enrollments as $enrollment) {
        if ($enrollment['user_id'] == $userId) {
            foreach ($courses as $course) {
                if ($course['id'] == $enrollment['course_id']) {
                    $userCourses[] = $course;
                }
            }
        }
    }
    
    return $userCourses;
}

function getUserAssignments($userId) {
    global $assignments, $enrollments, $courses;
    $userAssignments = [];
    
    // Get course IDs the user is enrolled in
    $userCourseIds = array_column(array_filter($enrollments, fn($e) => $e['user_id'] == $userId), 'course_id');
    
    foreach ($assignments as $assignment) {
        if (in_array($assignment['course_id'], $userCourseIds)) {
            $course = current(array_filter($courses, fn($c) => $c['id'] == $assignment['course_id']));
            $userAssignments[$course['name']][] = $assignment;
        }
    }
    
    return $userAssignments;
}

function authenticate($email, $password) {
    global $users;
    foreach ($users as $user) {
        if ($user['email'] === $email && password_verify($password, $user['password'])) {
            return $user;
        }
    }
    return false;
}
?>
