<?php
    $allowType = [
        'image/png',
        'image/jpg',
        'image/jpeg',
    ];
    if($_FILES['file']){
        $total = count($_FILES['file']['name']);
        for($i = 0; $i < $total; $i++){
            if(in_array($_FILES['file']['type'][$i],$allowType) !== false && $_FILES['file']['size'][$i] < 5*1024*1024){
                move_uploaded_file($_FILES['file']['tmp_name'][$i],"files/".$_FILES['file']['name'][$i]);
             }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.0/milligram.css">
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="column column-60 column-offset-20">
           <h1>File Upload</h1>
    <p>lorem ispnam lorem ispnam lorem ispnam lorem ispnam </p>
    <pre>
        <p>
        <?php 
                            print_r($_POST);
                            print_r($_FILES);
                        ?>
        </p>
    </pre>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="fName">First Name</label>
        <input type="text" name="fName" id="fName">
        <label for="lName">Last Name</label>
        <input type="text" name="lName" id="lName">
        <label for="file">photo</label>
        <input type="file" name="file[]" id="file"><br>
        <input type="file" name="file[]" id="file"><br>
        <input type="file" name="file[]" id="file"><br>
        <button type="submit" name="submit">submit</button>
    </form>
           </div>
       </div>
   </div> 
   
</body>
</html>