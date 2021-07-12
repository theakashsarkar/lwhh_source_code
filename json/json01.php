<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP to JavaScript</title>
</head>

<body>
    <h5>php to javaScript</h5>
    <input type="button" id="button" value="show somthing">
</body>
<script>
    <?php
        $data = array(
            "first_name" => "Akash",
            "last_name"  =>  "Sarkar",
            "email"      => "akashsarkar7@gmail.com",
        );
    ?>
    let data = <?php echo json_encode($data); ?>;
    document.getElementById("button").addEventListener("click",function(){
        alert(data.email);
        console.log(data);
    });
</script>
</html>