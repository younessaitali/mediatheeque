
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script >

</script>
</head>
<body>
<h1>hadik</h1>
<?php

$arr_tojson = array(
    'dt' => 1,
    'dt2' => 2,
);
 
echo "<br>",json_encode($arr_tojson);
//echo $arr;
?>
</body>
</html>