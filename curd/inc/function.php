<?php
define( 'DB', '/home/akash/Desktop/lwhh_source_code/curd/data/db.txt' );
function seed() {
    $data = array(
        array(
            'id'    => 1,
            'fname' => 'Kamal',
            'lname' => 'Ahamed',
            'roll'  => '12',
        ),
        array(
            'id'    => 2,
            'fname' => 'Sujan',
            'lname' => 'Sarkar',
            'roll'  => '13',
        ),
        array(
            'id'    => 3,
            'fname' => 'Nayem',
            'lname' => 'Pordan',
            'roll'  => '1',
        ),
        array(
            'id'    => 4,
            'fname' => 'Rajon',
            'lname' => 'Sarkar',
            'roll'  => '2',
        ),
    );
    $serializeData = serialize( $data );
    file_put_contents( DB, $serializeData, LOCK_EX );
};
function genartReport() {
    $serializeData = file_get_contents( DB );
    $students = unserialize( $serializeData );
    ?>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th>Action</th>
        </tr>
        <?php foreach ( $students as $student ): ?>
                <tr>
                    <td><?php printf( '%s %s', $student['fname'], $student['lname'] );?></td>
                    <td><?php printf( '%s', $student['roll'] );?></td>
                    <td><?php printf( '<a href="index.php?task=edit&id=%s">Edit</a> | <a href="index.php?task=delete&id=%s">Delete</a>', $student["id"], $student["id"] );?></td>
                </tr>
        <?php endforeach?>
    </table>
    <?php
}
function addStudent( $fname, $lname, $roll ) {
    $found = false;
    $serializeData = file_get_contents( DB );
    $students = unserialize( $serializeData );
    foreach ( $students as $_student ) {
        if ( $_student['roll'] == $roll ) {
            $found = true;
            break;
        }
    }
    if ( !$found ) {
        $newId = count( $students ) + 1;
        $student = array(
            'id'    => $newId,
            'fname' => $fname,
            'lname' => $lname,
            'roll'  => $roll,
        );
        array_push( $students, $student );
        $serializeData = serialize( $students );
        file_put_contents( DB, $serializeData, LOCK_EX );
        return true;
    }
    return false;
}
function getStudent( $id ) {
    $serializeData = file_get_contents( DB );
    $students = unserialize( $serializeData );
    foreach ( $students as $student ) {
        if ( $student['id'] == $id ) {
            return $student;
        }
    }
    return false;
}
function updateStudent( $id, $fname, $lname, $roll ) {
    $found = false;
    $serializeData = file_get_contents( DB );
    $students = unserialize( $serializeData );
    foreach ( $students as $_student ) {
        if ( $_student['roll'] == $roll && $_student['id'] != $id ) {
            $found = true;
            break;
        }
    }
    if ( !$found ) {
        $students[$id - 1]['fname'] = $fname;
        $students[$id - 1]['lname'] = $lname;
        $students[$id - 1]['roll']  = $roll;
        $serializeData = serialize( $students );
        file_put_contents( DB, $serializeData, LOCK_EX );
        return true;
    }
    return false;
}
function deleteStudent($id){
    $serializeData = file_get_contents( DB );
    $students      = unserialize( $serializeData );
    unset($students['id' -1]);
}