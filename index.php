<?php
include 'questions.php'; // Import quiz questions
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="quiz-container">
        <h1>PHP Quiz</h1>
        <form action="submit.php" method="post">
            <?php foreach ($questions as $qIndex => $qData) { ?>
                <div class="question">
                    <h3><?php echo ($qIndex + 1) . ". " . $qData['question']; ?></h3>
                    <?php foreach ($qData['options'] as $optionIndex => $option) { ?>
                        <label>
                            <input type="radio" name="answer[<?php echo $qIndex; ?>]" value="<?php echo $optionIndex; ?>" required>
                            <?php echo $option; ?>
                        </label><br>
                    <?php } ?>
                </div>
            <?php } ?>
            <button type="submit">Submit Quiz</button>
        </form>
    </div>

</body>
</html>
