<?php 

class MyException extends Exception{}
class NetworkException extends Exception{}

function testExceptions(){
    // throw new MyException();
    throw new NetworkException();
}

try{
   testExceptions(); 
}
catch(MyException $e){
   echo "MyException caught\n";
}
catch(NetworkException $n){
   echo "NetworkException caught\n";
}
catch(Exception $ex){
    echo "Exception caught\n"; 
}
finally{
    echo "Cleaned up\n";
}

?>