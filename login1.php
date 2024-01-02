<?php
session_start();

include("config.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    if (!empty($question) && !empty($answer)) {

        $query = "SELECT * FROM users WHERE questions = '$question' AND answers = '$answer'";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user = mysqli_fetch_assoc($result);
                if ($user['answer'] === $answer) {
                    $_SESSION['question'] = $user['answer'];
                
                    header("Location: newpass.php");
                    die;
                }
            }     
        }echo "Invalid!";
        
    }

}

