
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Assignment seven</title>
    <link rel="stylesheet" href="css/style.css">
    <?php
    $result = "";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstName = $_POST['FirstName'];
        $age = $_POST['Age'];
        $gender = $_POST['Gender'];
        $result = 'My name is ' . $firstName . '. I am ' . $age . ' years old. I am ' . $gender . ".";
    }
    ?>
</head>
<body>
<section>
    <form method="post">
        <input type="text" name="FirstName">
        <br/>
        <input type="text" name="Age">
        <br/>
        <input type="radio" name="Gender" value="male">Male
        <input type="radio" name="Gender" value="female">Female
        <br/>
        <input type="submit">
    </form>
    <?php echo($result) ?>
</section>
</body>
</html>


