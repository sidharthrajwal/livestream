
$( document ).ready(function() {

    function likeDislike(user_id, post_id, post_like_type){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url : 'http://127.0.0.1:8000/likedislike',
            data : {'post_id' : post_id, 'user_id' : user_id, 'post_like_type' : post_like_type },
            type : 'POST',
            dataType : 'json',
            success : function(result){
   
                // console.log("===== " + result.count + " =====");
                if(result.like_status == 'not_active'){
                    $("#total_likes").text(result.count);
                    $("#like_unlinke").addClass('text-primary');
                }
                if(result.is_like == '0'){
                    $("#total_likes").text(result.count);
                    $("#like_unlinke i").removeClass('text-primary');
                }else{
                    $("#like_unlinke i").addClass('text-primary');
                }
                
        
            }
        });
                }
    $("#like_unlinke").click(function(){

      likeDislike($(this).data('user-id'), $(this).data('post-id'), $(this).data('post-like-type'));
    })
    $("#dislike_unlinke").click(function(){

        likeDislike($(this).data('user-id'), $(this).data('post-id'), $(this).data('post-like-type'));
      })
})