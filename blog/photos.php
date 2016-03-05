<!DOCTYPE html>
<html>

<head lang="en">
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/pos.css">
  <link rel="stylesheet" type="text/css" href="iconfont/iconfont.css">
  <link rel="stylesheet" type="text/css" href="iconfont/pos/iconfont.css">
</head>
<body>
  <div id="box">
    <div id="main">
      <div id="col-left">
        <div id="bigpos">
          <img src="" id="showPhoto">
        </div>
        <div id="smallpos">
          <div id="previous" class="change"><</div>
          <div id="phos">
          <ul>
          <?php
          include('backEnd/select_img.php');
          foreach ($message as $key => $value) {
          ?>
            <li><img src="<?php echo 'upload_img/uploads'.$value['file_url'] ?>" class="pho" alt="照片"></li>
            <?php } ?></ul> 
            </div>
          <div id="next" class="change">></div> 
        </div>
      </div>
      <div id="col-right">
        <div id="close">X</div>
        <form action="backEnd/insert_img_ly.php" method="post">
        <textarea id="comment" placeholder="说说你对照片的看法吧" name="content"></textarea>
        <button type="submit" class="btn">发表评论</button>
        <button type="reset" class="btn">取消</button>
        </form>
        <div style="position: relative;">
        <?php
        include('backEnd/select_img_ly.php');
        foreach ($message as $key => $value) {
        ?>
        <p ><span style="color: gray;">-------------------------------------------</span></p>
        <h3><?php echo $value['id'].'楼:&nbsp;&nbsp;'.$value['content'] ?></h3>
        <p><?php echo $value['time'] ?></p>
        <?php
          }
        ?>
        </div>
      </div>
    </div>    
  </div><!-- end box -->
  <div id="top-bar">
    <a href="leaveWords.php"><i class="iconfont" id="message">&#xe679;</i></a>
    <a href="youth.php"><i class="iconfont">&#xe7c4;</i></a>
    <a href="write.php"><i class="iconfont" id="write">&#xe63f;</i></a>
    <a href="home.php"><i class="iconfont" id="home">&#xe607;</i></a>
  </div><!-- end top-bar -->
  <div id="content">
    <a href="upload_img/index.html" >上传图片</a>
    <div id="show-case">
      <?php
      include 'backEnd/img_page.php'; 
      while ($row = $rst->fetch()){
      ?> 
      <img src="<?php echo 'upload_img/uploads'.$row['file_url'] ?>" class="photo" alt="照片">
      <?php }  ?>  
    </div>
  </div><!-- end content -->
  <div id="footer">
    <?php echo $pagenav; ?>   
  </div>
  <script src="js/photos.js"></script>
</body>
</html>