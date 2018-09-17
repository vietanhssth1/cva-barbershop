$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // approved and refused click(posts)
    $(".approve-btn, .refuse-btn").click(function (e) {
        e.preventDefault();
        var postid = $(this).val();

        var id = this.id;   // Getting Button id
        var split_id = id.split("_");
        var text = split_id[0];
        //var postid = split_id[1];  // postid

        // Finding click type
        if (text == "approve") {
            type = 1;
        } else {
            type = 0;
        }
        //alert(type);

        // AJAX Request
        $.ajax({
            url: 'approval',
            type: 'post',
            data: { postid: postid, type: type },
            dataType: 'json',
            success: function (data) {
                var type= data['type'];

                if (type == 1) {
                    //Set text button
                    $("#status_" + postid).text(' Refuse');
                    $("#approve_" + postid).attr('id','refuse_' + postid);
                    //Set text status
                    $("#refused_" + postid).attr('id','approved_' + postid).removeClass('btn btn-danger btn-xs').addClass('btn btn-info btn-xs').text('Approved');
                }
                if (type == 0) {
                    //Set text button
                    $("#status_" + postid).text(' Approve');
                    $("#refuse_" + postid).attr('id','approve_' + postid);
                    //Set text status
                    $("#approved_" + postid).attr('id','refused_' + postid).removeClass('btn btn-info btn-xs').addClass('btn btn-danger btn-xs').text('Refused');
                }
                swal('Success');
            }
        });

    });
    
     // approved and refused click (comment)
     $(".approve-comment-btn, .refuse-comment-btn").click(function (e) {
        e.preventDefault();
        var comment_id = $(this).val();

        var id = this.id;   // Getting Button id
        var split_id = id.split("_");
        var text = split_id[0];
        //var postid = split_id[1];  // postid

        // Finding click type
        if (text == "approveComment") {
            type = 1;
        } else {
            type = 0;
        }
        //alert(type);

        // AJAX Request
        $.ajax({
            url: 'comment-approve',
            type: 'post',
            data: { comment_id: comment_id, type: type },
            dataType: 'json',
            success: function (data) {
                var type= data['type'];

                if (type == 1) {
                    //Set text button
                    $("#status_" + comment_id).text(' Refuse');
                    $("#approveComment_" + comment_id).attr('id','refuseComment_' + comment_id);
                    //Set text status
                    $("#refusedComment_" + comment_id).attr('id','approved_Comment' + comment_id).removeClass('btn btn-danger btn-xs').addClass('btn btn-info btn-xs').text('Approved');
                }
                if (type == 0) {
                    //Set text button
                    $("#status_" + comment_id).text(' Approve');
                    $("#refuse_" + comment_id).attr('id','approve_' + postid);
                    //Set text status
                    $("#approvedComment_" + comment_id).attr('id','refused_Comment' + comment_id).removeClass('btn btn-info btn-xs').addClass('btn btn-danger btn-xs').text('Refused');
                }
                swal('Success');
            }
        });

    });
});