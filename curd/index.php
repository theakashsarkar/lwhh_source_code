<?php require_once "inc/function.php"; 
   $info = '';
   $task = $_GET['task'] ?? 'report';
   if('seed' == $task){
       seed(DB);
       $info = 'Seeding is compleate';
   } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Example</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="container-fluid">
                <h2>project 2 -CURD</h2> 
                <?php include_once ('inc/template/nav.php')?>
                <hr/>
                <?php 
                    if($info != ''){
                        echo "<p>{$info}</p>";
                    }
                ?>
            </div>
        </div>
        <?php if('report' == $task):?>
        <div class="row">
            <?php  genartReport()?>
        </div>
        <?php endif ?>
    </div>
        
</body>
</html>