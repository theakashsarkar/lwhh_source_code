<?php
$name = 'Rakib';
$strin1 = "i am $name";

$herdoc = <<<EOD 
data 1
new line {$name}
more text
EOD;
$herdoc = <<<'EOD'//now doc
data 1
EOD;
echo $herdoc;