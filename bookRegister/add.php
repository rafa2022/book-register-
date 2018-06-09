<!DOCTYPE html>
<html>
    <head>
        <title>Add contact</title>
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="../src/add.php" method="post">
            <input class="input-group-text" type="text" name="txtName" required placeholder="name">
            <input class="input-group-text" type="text" name="txtLastName" required placeholder="lastname">
            <input class="input-group-text" type="text" name="txtPhone" required placeholder="phone">
            <button  class="btn btn-info" type="submit">Add</button>
            <button class="btn btn-danger" type="button" onclick="pageBack()">Cancel</button>
        </form>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/pageBack.js" type="text/javascript"></script>
    </body>
</html>

