let name;

;(function($){
    $(document).ready(function(){
        $(".chat-message").height($("body").height() - $(".chat-message").offset().top);
        $("#chat-text").height($("#chat-text").parent().height()-8);
        name = prompt("What is your name?");
        $("#chat-text").focus();
    });

    $("#chat-text").on("keypress",function(e){
        if(e.keyCode == 13){
            let msg = name+" :  "+$("#chat-text").val();
            $("#chat-text").val('');
            $("<p/>").html(msg).appendTo($(".chat-body"));
            $(".chat-body").scrollTop($(".chat-body").prop("scrollHeight"));
            return false;
        }
    });
})(jQuery);

