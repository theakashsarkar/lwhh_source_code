<?php
require_once 'scrumbler.php';
$task = 'encode';
if ( isset( $_GET['task'] ) && $_GET['task'] != '' ) {
    $task = $_GET['task'];
}
$original_key = 'abcdefghijklmnopqrstuvwxyz1234567890';
$key = 'abcdefghijklmnopqrstuvwxyz1234567890';
if ( 'key' == $task ) {
    $key_original = str_split( $key );
    shuffle( $key_original );
    $key = join( '', $key_original );
}else if(isset($_POST['key']) && $_POST['key'] != ''){
    $task = $_POST['key'];
}
$scraumbleData = '';
if('encode' == $task){
    $data = $_POST['data']??'';
    if($data != ''){
        $scraumbleData = scraumbleData($data,$key);
        echo $scraumbleData;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Scrumber</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.0/milligram.css">
    <style>
        body {
            margin-top:30px;
        }
        #data{
            width: 100%; height: 160px;
        }
        #result{
            width:100%;
            height: 160px;
        }
        .hidden{
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Data Scrumbler</h2>
                <p>Use this application to scramble you data</p>
                <p>
                    <a href="/scrumber.php?task=encode">Encode</a> |
                    <a href="/scrumber.php?task=decode">Decode</a> |
                    <a href="/scrumber.php?task=key">Generate Key</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="scrumber.php" method="POST">
                    <label for="key">Key</label>
                    <input type="text" name="key" id="key" <?php displaykey( $key );?>>
                    <label for="data">Data</label>
                    <textarea name="data" id="data"><?php if(isset($_POST['data'])){echo $_POST['data'];}?></textarea>
                    <label for="result">Result</label>
                    <textarea id="result"><?php echo $scraumbleData ?></textarea>
                    <button type="submit">Do It For Me</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>