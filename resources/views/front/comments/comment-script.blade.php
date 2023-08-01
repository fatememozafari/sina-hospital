<script type="text/javascript">

    function reply(caller) {
        document.getElementById('commentId').value = $(caller).attr('data-Commentid');
        $('.replyDiv').insertAfter($(caller));
        $('.replyDiv').show();
    }
    function reply_close(caller) {
        $('.replyDiv').hide();
    }






    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".deleteComment").click(function () {
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        var comment_div = $('#commentCard'+id);
        $.ajax(
            {
                url: '/comment-ajax/'+id,
                type: 'get',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function () {
                    console.log("delete successfully");
                    comment_div.remove();
                }
            });

    });


    $(".deleteReply").click(function () {
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        var reply_div = $('#replyCard'+id);
        $.ajax(
            {
                url: '/reply-ajax/'+id,
                type: 'get',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function () {
                    console.log("delete successfully");
                    reply_div.remove();
                }
            });

    });



</script>
