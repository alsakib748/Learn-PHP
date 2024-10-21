<?php 

// setcookie('username','php',time()+180,'/cookie/my');
// setcookie('username','php',1);
setcookie('cookie_name','setting cookie',time()+160);
echo $_COOKIE['cookie_name'];

// if(isset($_COOKIE['myname'])){
//     echo $_COOKIE['myname'];  
// }else{
//     echo "Cookie is not set on the scope";
// }

?>
<script src="
https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js
"></script>
<script type="text/javascript">
     alert(Cookies.get('cookie_name'));
</script>
