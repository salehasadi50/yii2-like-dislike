<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>

        <link type="text/css" rel="stylesheet" href="css/vote_style.css">
        <script type="text/javascript" src="css/js.js"></script>


    </head>
 
    <body>
        
    <?php
        $user_id = '909';
        $page_ID = '203';
        } ?>

<script>
    $(function(){ 
        var page_ID = <?php echo $page_ID;  ?>; 
        $('.like-btn').click(function(){
            $(this).addClass('like-h');
            $.ajax({
                type:"POST",
                url:"ajax.php",
                data:'act=like&pageID='+page_ID,
                success: function(){
                }
            });
        });
    });
</script>

    <div class="tab-cnt">
        <div class="tab-tr" id="t1">
            <div class="like-btn"></div>
        </div>
    </div>

</body>
</html>