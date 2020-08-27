<?php 
define('DB','/home/akash/Desktop/lwhh_source_code/curd/data/db.txt');
function seed(){
    $data = array(
        array(
            'fname' => 'Kamal',
            'lname' => 'Ahamed',
            'roll'  => '12',
        ),
        array(
            'fname' => 'Sujan',
            'lname' => 'Sarkar',
            'roll'  => '13',
        ),
        array(
            'fname' => 'Nayem',
            'lname' => 'Pordan',
            'roll'  => '1',
        ),
        array(
            'fname' => 'Rajon',
            'lname' => 'Sarkar',
            'roll'  => '2',
        )
    );
    $serializeData = serialize($data); 
    file_put_contents(DB,$serializeData,LOCK_EX);
};
function genartReport(){
    $serializeData = file_get_contents(DB);
    $student = unserialize($serializeData);
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th>Action</th>
        </tr>
        <?php  
            foreach($student as $students){
                ?>
                <tr>
                    <td><?php printf('%s %s',$students['fname'],$students['lname']);?></td>
                    <td><?php printf('%s',$students['roll']);?></td>
                    <td><?php printf('<a href="#">Edit</a> | <a href="#">Delet</a>');?></td>
                </tr>
                <?
                
            }
        ?> 
    
    </table>

}