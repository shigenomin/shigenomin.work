<div id="main">
    <p>掲示板のページです</p>
    <?php $hour = date('H');
        if(5<= $hour && $hour < 12):?>
        <p>おはようございます</p>
    <?php elseif(12<= $hour && $hour < 18):?>
        <p>こんにちは</p>
    <?php else:?>
        <p>こんばんは</p>
    <?php endif;?>

    <div>
        <form action="shigenomin/comment_post.php" method="post" style="display: inline;">
            コメント：<input type="text" name="user-comment">
            <input type="submit" name="shigenomin" value="セーブ" class="btn-blue">
        </form>
        <form action="shigenomin/comment_delete.php" method="post" style="display: inline; margin-left: 10px;">
            <input type="submit" name="shigenomin" value="削除" class="btn-blue">
        </form>
    </div>
    <div>
        <div id="comment1"></div>
        <div id="comment2"></div>
        <div id="comment3"></div>
        <div id="comment4"></div>
        <div id="comment5"></div>
        <div id="comment6"></div>
        <div id="comment7"></div>
        <div id="comment8"></div>
        <div id="comment9"></div>
        <div id="comment10"></div>
        <div id="comment11"></div>
        <div id="comment12"></div>
        <div id="comment13"></div>
        <div id="comment14"></div>
        <div id="comment15"></div>
        <div id="comment16"></div>
        <div id="comment17"></div>
        <div id="comment18"></div>
        <div id="comment19"></div>
        <div id="comment20"></div>
    </div>
    <div>
        <form action="" method="post">
            <input type="submit" name="shigenomin" value="再読み込み" class="btn-blue">
        </form>
        <form action="" method="post">
            <input type="submit" name="" value="ホームへ" class="btn-blue">
        </form>
    </div>
<script type="text/javascript">
    var request = new XMLHttpRequest();
    request.onload = function()
    {
    if (request.status == 200)
    {

    var response_data = request.responseText;
    var comment_list = response_data.split("@#KT@25#@");
    var user_comment_num = comment_list.length - 1;
    if (user_comment_num > 20)
    {
    user_comment_num = 20;
    }

    for (let count = 1; count <= user_comment_num; count++)
    {
    var user_comment = comment_list[count - 1];

    var comment_id = "comment" + count;
    var comment_data = "<div class=\"comment\">" + user_comment + "</div>";
    document.getElementById(comment_id).innerHTML = comment_data;
    }
    }
    };
    request.open('GET', 'https://shigenomin.work/shigenomin/comment_get.php', true);
    request.send();
</script>

</div>
