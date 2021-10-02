<?php
// $data = $_REQUEST;
// $data['result'] = 'success';
// $data['method'] = $_SERVER['REQUEST_METHOD'];
// echo json_encode($data, JSON_PRETTY_PRINT);


function f($n){
    if($n === 0){
        echo "***********";
        echo PHP_EOL;
        return ;
    };
    for($i = 0; $i < $n; $i++){
        f($n - 1);
    };
};

f(3);
