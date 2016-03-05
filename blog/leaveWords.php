<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/leaveWords.css">
  <link rel="stylesheet" type="text/css" href="iconfont/iconfont.css">
</head>
<body>
  <div id="top-bar">
    <a href="photos.php"><i class="iconfont" id="album">&#xe628;</i></a>
    <a href="youth.php"><i class="iconfont">&#xe7c4;</i></a>
    <a href="write.php"><i class="iconfont" id="write">&#xe63f;</i></a>
    <a href="home.php"><i class="iconfont" id="home">&#xe607;</i></a>
  </div><!-- end top-bar -->
  <div id="tofriends">
    <h1>留言板</h1>
    <h3>主人寄语：</h3>
    <p>这家伙很懒，什么也没留下。</p>
    <a href="">对您的来客说点什么吧。</a>
  </div> 
  <div id="leavewords">
  <form action="backEnd/insert_ly.php" method="post">
    <textarea id="comment" name="content"></textarea>
    <input type="submit" class="btn" value="点击留言"></input>
    <input type="reset" class="btn" value="取消"></input>
    </form>
  </div>
     <div style="position: relative;left: 220px;top: -40px;">
      <?php
    include('backEnd/select_ly.php');
    foreach ($message as $key => $value) {
    ?>
    <p ><span style="color: gray;">----------------------------------------------------------------------------------------------------------------------------------</span></p>
    <h3><?php echo $value['id'].'楼:&nbsp;&nbsp;'.$value['content'] ?></h3>
    <p><?php echo $value['time'] ?></p>
    <?php
      }
    ?>
    </div>	
</body>
</html>