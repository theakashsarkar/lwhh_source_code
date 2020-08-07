<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.0/milligram.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Hello World</h1>
                <h1>
                    <?php echo "Hello world"; ?>
                </h1>
                <p>
                    <?php if ( isset( $_GET['fname'] ) && !empty( $_GET['fname'] ) ): ?>
                    First Name : <?php echo $_GET["fname"]; ?>
                    <?php endif?>
                    <?php echo PHP_EOL ?>
                    <br />
                    <?php if ( isset( $_GET['lname'] ) && !empty( $_GET['lname'] ) ): ?>
                    Last Name  : <?php echo $_GET["lname"]; ?>
                    <?php endif?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-offset-20">
                <form action="">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">

                    <button type="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>