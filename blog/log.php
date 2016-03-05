
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Youth</title>
  <link rel="stylesheet" type="text/css" href="css/blog.css">
  <link rel="stylesheet" type="text/css" href="iconfont/iconfont.css">
</head>
<body>
  <div id="top-bar">
    <a href="leaveWords.php"><i class="iconfont" id="message">&#xe679;</i></a>
    <a href="photos.php"><i class="iconfont">&#xe628;</i></a>
    <a href="write.php"><i class="iconfont" id="write">&#xe63f;</i></a>
    <a href="home.php"><i class="iconfont" id="home">&#xe607;</i></a>
  </div><!-- end top-bar -->
  <div id="content">
  <?php
  include('backEnd/select_ct.php');
  $id = $_POST['id'];
  $title = $message[$id]['title'];
  $content = $message[$id]['content'];
  ?>
    <h1><?php echo $title; ?></h1>
    <p><?php echo "<font size=5><pre>$content</pre></font>"; ?></p>
  </div>
  <div id="footer">
  <?php
    include('backEnd/select.php');
    foreach ($message as $key => $value) {
    ?>
    <p ><span style="color: gray;">----------------------------------------------------------------------------------------------------------------------------------</span></p>
    <h3><?php echo $value['id'].'楼:&nbsp;&nbsp;'.$value['content'] ?></h3>
    <p><?php echo $value['time'] ?></p>
    <?php
      }
  ?>
    <form action="backEnd/insert_nb.php" method="post">
    <textarea id="comment" placeholder="请在这里发表你的评论" name="message" wrap="physical"></textarea>
    <button type="submit" class="btn" name="">发表评论</button>
    <button type="reset" class="btn">取消</button>
    </form>
  </div>
</body>
</html>