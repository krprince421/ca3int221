<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if( DB::connection()->getPdo() ){
        echo "Connection Successfull" ;
    }

?>
</body>
</html><?php /**PATH C:\xampp\int221ca3\resources\views/dbconnection.blade.php ENDPATH**/ ?>