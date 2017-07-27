<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="../js/jquery-2.0.3.min.js" type="text/javascript"></script>
    <script src="../js/jquery.form.js" type="text/javascript"></script>
</head>
<body>
<form id="myForm" action="" method="post" enctype="multipart/form-data">
    <?php
    date_default_timezone_set("PRC");
    echo date("Y-m-d H:i:s") . "<br/><br/>";
    ?>
    <div id="img"></div>
    <input type="file" name="file">
    <br/>
    <input type="submit" name="submit" value="提交">
</form>

<script type="text/javascript">
    $(document).ready(function () {
        $("input[type=submit]").click(function (e) {
            e.preventDefault();
            $("#myForm").ajaxSubmit({
                url: "http://react.dev/ajaxform/upload.php",
                type: 'POST',
                dataType: 'json',
                success: function (data) {
                    $("#img").html("<img src=\"" + data.img_url + "\"/>");
                }
            });
        })
    })
</script>
</body>
</html>