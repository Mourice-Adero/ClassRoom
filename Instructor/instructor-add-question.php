<?php
// Start the session
session_start();

// Include the database connection file
include_once './../Include/config.php';

if (isset($_GET['id'])) {
    $course_id = $_GET['id'];
} else {
    $course_id = "";
}

// If the form is submitted
if (isset($_POST['submit'])) {

    // Get the form data
    $question = $_POST['question'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $option4 = $_POST['option4'];
    $answer = $_POST['answer'];

    // If the question and answer are not empty
    if (!empty($question) && !empty($answer)) {

        // If the question ID is set, update the question
        if (isset($_SESSION['edit_question_id'])) {
            $question_id = $_SESSION['edit_question_id'];
            $sql = "UPDATE quizzes SET question='$question', option1='$option1', option2='$option2', option3='$option3', option4='$option4', answer='$answer' WHERE id=$question_id";
            $result = mysqli_query($conn, $sql);
            unset($_SESSION['edit_question_id']);
        } else {
            // Insert the question into the database
            $sql = "INSERT INTO quizzes (course_id, question, option1, option2, option3, option4, answer) VALUES ('$course_id', '$question', '$option1', '$option2', '$option3', '$option4', '$answer')";
            $result = mysqli_query($conn, $sql);
            // header('"location: ./nstructor-edit-course.php?" . $corse_id');
        }

        // If the query is successful, display a success message
        if ($result) {
            $success_msg = "Question saved successfully.";
        } else {
            $error_msg = "Error: " . mysqli_error($conn);
        }
    } else {
        $error_msg = "Question and answer fields are required.";
    }
}

// If the delete button is clicked
if (isset($_GET['delete'])) {
    $question_id = $_GET['delete'];
    $sql = "DELETE FROM quizzes WHERE id=$question_id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $success_msg = "Question deleted successfully.";
    } else {
        $error_msg = "Error: " . mysqli_error($conn);
    }
}

// If the edit button is clicked
if (isset($_GET['edit'])) {
    $question_id = $_GET['edit'];
    $_SESSION['edit_question_id'] = $question_id;
    $sql = "SELECT * FROM quizzes WHERE id=$question_id";
    $result = mysqli_query($conn, $sql);
    $question = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Quiz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h1>Create Quiz</h1>
        <?php if (isset($error_msg)) { ?>
            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        <?php } ?>
        <?php if (isset($success_msg)) { ?>
            <div class="alert alert-success"><?php echo $success_msg; ?></div>
        <?php } ?>
        <form method="post">
            <div class="form-group">
                <label for="question">Question:</label>
                <textarea class="form-control" id="question" name="question" rows="3"><?php $question ?></textarea>
            </div>
            <div class="form-group">
                <label for="option1">Option 1:</label>
                <input type="text" class="form-control" id="option1" name="option1" value="<?php $option1 ?>">
            </div>
            <div class="form-group">
                <label for="option2">Option 2:</label>
                <input type="text" class="form-control" id="option2" name="option2" value="<?php $option2 ?>">
            </div>
            <div class="form-group">
                <label for="option3">Option 3:</label>
                <input type="text" class="form-control" id="option3" name="option3" value="<?php $option3 ?>">
            </div>
            <div class="form-group">
                <label for="option4">Option 4:</label>
                <input type="text" class="form-control" id="option4" name="option4" value="<?php $option4 ?>">
            </div>
            <div class="form-group">
                <label for="answer">Answer:</label>
                <select class="form-control" id="answer" name="answer">
                    <option value="">Select answer</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                </select>
            </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
</body>

</html>