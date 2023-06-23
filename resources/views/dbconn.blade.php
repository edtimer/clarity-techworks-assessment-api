<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database connection</title>
</head>
<body>
    <h1>hello</h1>
    <?php
    if(DB::connection()->getPdo()){
        echo "database is connected";
    }
    ?>
</body>
</html>