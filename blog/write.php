<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/write.css">
  <link rel="stylesheet" type="text/css" href="iconfont/iconfont.css">
</head>
<body>
  <div id="top-bar">
    <a href="leaveWords.php"><i class="iconfont" id="message">&#xe679;</i></a>
    <a href="photos.php"><i class="iconfont" id="album">&#xe628;</i></a>
    <a href="youth.php"><i class="iconfont" id="blog">&#xe7c4;</i></a>
    <a href="home.php"><i class="iconfont" id="home">&#xe607;</i></a>
  </div>
  <div id="main">
  <form action="backEnd/insert_ct.php" method="post">
    <div>
      <input type="text" placeholder="请在这里输入日志标题" id="title" name="title">
    </div>
    <div>
      <textarea id="content" name="content" placeholder="这里写日志正文哦" wrap="physical"></textarea>
    </div><!-- 这里写日志正文 -->
    <div>
      <button type="submit" class="btn" name="">发表</button>
      <button type="reset" class="btn">取消</button>
    </div><!-- 点击这个按钮发表日志 -->
  </form>
  </div>
</body>
</html>