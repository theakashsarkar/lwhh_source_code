<?php
interface PasswordHashInterface {
    function hash($data);
}

class MD5HashEngine implements PasswordHashInterface {
    function hash($data){
        return md5($data);
    }
}
class SH1HashEngine implements PasswordHashInterface{
    function hash($data){
        return sha1($data);
    }
}

class NativeHashEngine implements PasswordHashInterface{
    function hash($data){
        return password_hash($data, PASSWORD_BCRYPT);
    }
}

class PasswordHaser{
    private $hasingEngine;
    function __construct(PasswordHashINterface $hasingEngine = null){
        if($hasingEngine){
            $this->hasingEngine = $hasingEngine;
        }
    }
    function getHash($data){
        return $this->hasingEngine->hash($data);
    }
    function setHashEngine(PasswordHashINterface $hasingEngine){
        $this->hasingEngine = $hasingEngine;
    }
}
$md5sh  = new MD5HashEngine();
$sha1sh = new SH1HashEngine();
$nhe    = new NativeHashEngine();
$password = "SomePassword";
$ph = new PasswordHaser($md5sh);
echo $ph->getHash($password);
echo "\n";
$ph->setHashEngine($sha1sh);
echo $ph->getHash($password);