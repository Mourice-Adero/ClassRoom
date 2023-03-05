<?php 
// include "./config.php";

/**
 * Get the first 10 courses.
 *
 * @return array|bool Returns an array of courses on success, or false on failure.
 */
function get_courses($limit)
{
    global $conn;

    $sql = "SELECT * FROM course LIMIT $limit";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        return false;
    }

    $courses = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $courses[] = $row;
    }

    return $courses;
}


function get_course($course_id)
{
    global $conn;

    $stmt = $conn->prepare('SELECT * FROM course WHERE course_id = ?');
    $stmt->bind_param('i', $course_id);
    $stmt->execute();
    $result = $stmt->get_result();

    return $result->fetch_assoc();
}

?>