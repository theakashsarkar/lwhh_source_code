<?php require_once "inc/function.php";
$info = '';
$task = $_GET['task'] ?? 'report';
$error = $_GET['error'] ?? '0';
if('delete' == $task ){
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    if($id > 0){
        deleteStudent($id);
    }
}
if ( 'seed' == $task ) {
    seed( DB );
    $info = 'Seeding is compleate';
}
$fname = '';
$lname = '';
$roll = '';
if ( isset( $_POST['submit'] ) ) {
    $fname = filter_input( INPUT_POST, 'fname', FILTER_SANITIZE_STRING );
    $lname = filter_input( INPUT_POST, 'lname', FILTER_SANITIZE_STRING );
    $roll = filter_input( INPUT_POST, 'roll', FILTER_SANITIZE_STRING );
    $id = filter_input( INPUT_POST, 'id', FILTER_SANITIZE_STRING );
    if ( $id ) {
        if ( $fname != '' && $lname != '' && $roll != ''){
            updateStudent( $id, $fname,$lname,$roll);
            header('location:index.php?task=report');
        }
    } else {

        if ( $fname != '' && $lname != '' && $roll != '' ) {
            $result = addStudent( $fname, $lname, $roll );
            if ( $result ) {
                header( 'location:index.php?task=report' );
            } else {
                $error = 1;
            }
        }
    }
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
                <?php include_once 'inc/template/nav.php'?>
                <hr/>
                <?php
if ( $info != '' ) {
    echo "<p>{$info}</p>";
}
?>
            </div>
        </div>
        <?php if ( '1' == $error ): ?>
            <div class="row">
                <div class="alert alert-primary" role="alert">
                  Duplicate Roll Number
                </div>
            </div>
        <?php endif?>
        <?php if ( 'report' == $task ): ?>
            <div class="row">
             <?php genartReport()?>
            </div>
        <?php endif?>
        <?php if ( 'add' == $task ): ?>
            <div class="row">
                <form action="index.php?task=add" method="POST">
                    <div class="form-group">
                        <label for="exampleInputName">First Name</label>
                        <input type="text" class="form-control" id="exampleInputName" name="fname" aria-describedby="nameHelp" placeholder="First Name" value = "<?php echo $fname ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLast">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputLast" name="lname" placeholder="Last Name" value="<?php echo $lname ?>">
                    </div>
                    <div class="form-group">
                        <label for="roll">Roll</label>
                        <input type="number" class="form-control" id="roll" placeholder="Roll" name="roll" value="<?php echo $roll ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Save</button>
                </form>
            </div>
        <?php endif?>
        <?php
if ( 'edit' == $task ):
    $id = filter_input( INPUT_GET, 'id', FILTER_SANITIZE_STRING );
    $student = getStudent( $id );
    if ( $student ):
    ?>
	            <div class="row">
	                <form action="index.php?task=edit" method="POST">
	                    <input type="hidden" value="<?php echo $id?>" name ="id">
	                    <div class="form-group">
	                        <label for="exampleInputName">First Name</label>
	                        <input type="text" class="form-control" id="exampleInputName" name="fname" aria-describedby="nameHelp" placeholder="First Name" value = "<?php echo $student['fname'] ?>">
	                    </div>
	                    <div class="form-group">
	                        <label for="exampleInputLast">Last Name</label>
	                        <input type="text" class="form-control" id="exampleInputLast" name="lname" placeholder="Last Name" value="<?php echo $student['lname'] ?>">
	                    </div>
	                    <div class="form-group">
	                        <label for="roll">Roll</label>
	                        <input type="number" class="form-control" id="roll" placeholder="Roll" name="roll" value="<?php echo $student['roll'] ?>">
	                    </div>
	                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
	                </form>
	            </div>
	        <?php
endif;
endif;
?>
    </div>

</body>
</html>