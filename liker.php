<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script
    			  src="https://code.jquery.com/jquery-3.3.1.slim.js"
    			  integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
    			  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <style type="text/css" >
      .content{
        border: 1px solid #ddd;
        padding:5px;
        margin: 10px;

      }

    </style>
    <script type=text/javascript>
      $(function(){

        $("a.like").click(function(){
          var obj=$(this);
          var id=obj.attr("id");

          var data="id="+id+"&durum=1";
          $.ajax({
              url="begen.php",
              data=data,
              type="post",
              dataType="json",
          })

          })

        })
    </script>

  </head>
  <body>

  </body>
</html>


<?php
require_once "conf.php";
require_once "pages.php";

$query=$db->prepare("SELECT * FROM content");
$query->execute();
$totalPost=$query->rowCount();
$a=pageShower($totalPost);
$queryPages=$db->prepare("SELECT * FROM content ORDER BY content_id desc LIMIT $a[1],$a[0]" );
$queryPages->execute();
$b=$queryPages->rowCount();
echo $b;
$fet=$queryPages->fetchAll(PDO::FETCH_ASSOC);


foreach ($fet as $key) {
  ?>
  <div class="content">
    <span style="float:right; merge:2px" class="begen" id=<?php echo $key["content_id"]?>><?php echo $key["content_like"]?> </span>
    <a style="float:right" class="like" id="<?php echo $key["content_id"]; ?>" href=""><i class="fas fa-thumbs-up"></i></a>
    <h3><?php echo $key["content_title"]." sent on ". $key["content_time"];?></h3>
    <p><?php echo $key["content_all"];?></p>

  </div>

<?php
}
?>

<span >
  <?php
  echo "BURADAN BASKA";
  for ($i=1;$i<=$a[2];$i++){
    if ($i != $a[3]){
        echo "<a href='liker.php?page=".$i."'>".$i."</a>";}
    else {
            echo $i;} }
        ?>
</span>
