<?php
// Start the session
session_start();

// Include the database connection file
include_once './../Include/config.php';

// Retrieve the questions from the quizzes table
$sql = "SELECT * FROM quizzes";
$result = mysqli_query($conn, $sql);
$questions = mysqli_fetch_all($result, MYSQLI_ASSOC);

// If the form is submitted
if (isset($_POST['submit'])) {
    // Process the student's responses
    // ...
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h1>Quiz</h1>
        <?php if (isset($error_msg)) { ?>
            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        <?php } ?>
        <?php if (isset($success_msg)) { ?>
            <div class="alert alert-success"><?php echo $success_msg; ?></div>
        <?php } ?>
        <form method="post">
            <?php foreach ($questions as $question) { ?>
                <div class="form-group">
                    <label for="question<?php echo $question['id']; ?>"><?php echo $question['question']; ?></label><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer<?php echo $question['id']; ?>" value="1">
                        <label class="form-check-label" for="answer<?php echo $question['id']; ?>_1"><?php echo $question['option1']; ?></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer<?php echo $question['id']; ?>" value="2">
                        <label class="form-check-label" for="answer<?php echo $question['id']; ?>_2"><?php echo $question['option2']; ?></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer<?php echo $question['id']; ?>" value="3">
                        <label class="form-check-label" for="answer<?php echo $question['id']; ?>_3"><?php echo $question['option3']; ?></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer<?php echo $question['id']; ?>" value="4">
                        <label class="form-check-label" for="answer<?php echo $question['id']; ?>_4"><?php echo $question['option4']; ?></label>
                    </div>
                </div>
            <?php } ?>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>