$(window).on('load',function(){
    $("#formVote").on('submit', function(e){
        e.preventDefault();
        
        let email = $("#email").val();
        let comment = $.trim($("textarea").val())
        let vote = $("#vote").val();
        
        $.post("index.php", {
            request: "feedback",
            email: email,
            comment: comment,
            vote: vote
        },function (data) {
            alert("Thank you for your feedback!")
        }
        );
        
    })
});