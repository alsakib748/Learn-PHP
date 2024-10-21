;(function($){

    $(document).ready(function(){
        $("#login").on("click",function(){
            $("#registerFormId h1").html("Login");
            $("#action").val("login");
        });

        $("#register").on("click",function(){
            $("#registerFormId h1").html("Register");
            $("#action").val("register");     
        });

        $(".menu-item").on("click",function(){
            $(".helement").hide();
            var target = "#" + $(this).data("target");
            $(target).show();
        });
 
        $("#alphabets").on("change",function(){
           var char = $(this).val().toLowerCase();   
           $(".words tr:gt(0)").hide();  

           if("all" == char){
              $(".words tr").show();
              return true;
           }

           $(".words td").filter(function(){
               return $(this).text().indexOf(char)==0;
           }).parent().show(); 
        });

    });

})(jQuery);