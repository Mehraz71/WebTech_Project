<?php
require_once('../view/template.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="feedback.css" />
    <script src="../js/feedback.js" defer></script>
</head>
<body>
    <form>
        <table>
            <tr>
                <th>Enter your name:</th>
                <td><input type="text" id="username" name="username" /></td>
            </tr>
            <tr>
                <th>Enter your email:</th>
                <td><input type="email" id="email" name="email" /></td>
            </tr>
            <tr>
                <th>Your Feedback:</th>
                <td><textarea id="user_feedback" name="feedback"></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="button" id="btn" value="FeedBack" onclick="submitFeedback()" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p id="msg"></p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="home.php" style="text-decoration: none;">
                        <button type="button">Back</button>
                    </a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
