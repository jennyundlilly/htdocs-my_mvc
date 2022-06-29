<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/htdocs-project/my-mvc/public/assets/">
    <link rel="stylesheet" href="client/css/style.css">
    <title>
        <?php  
            if (!empty($data['title'])) {
                echo $data['title'];
            } else {
                echo 'longcamau.de'; 
            }
        ?>
    </title>
</head>
<body>

<h1>Header</h1>

<hr>