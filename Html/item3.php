<?php
    include_once 'from3.php';
    $fruits = ['mango','orange','banana','apple'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drop Down</title>
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Select/dropDown</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptatum aut eius quaerat cum, dolores beatae nulla soluta architecto numquam voluptas commodi facilis incidunt quas aperiam ullam libero iste voluptates?</p>
                <p>
                    <?php 
                    // print_r($_POST);
                    //     if(isset($_POST['fruits']) && $_POST['fruits'] != ''){
                    //         printf("You Have selected : %s", filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING) );
                    //     }
                    $sfruits = filter_input(INPUT_POST,$_POST['fruits'] ?? array(),FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
                    if(count($sfruits) > 0){
                        echo "You Have Select: %s".join(",",$sfruits);
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="" method="post">
                    <label for="fruits">select some fruits</label>
                    <select name="fruits" id="fruits" multiple>
                        <option value="" disabled selected>Select Some Fruits</option>
                        <?php displayOption($fruits,$sfruits);?>
                    </select>
                    <button text="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>