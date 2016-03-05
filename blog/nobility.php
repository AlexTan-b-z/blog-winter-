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
    <h1>True Nobility</h1>
    <p>In a calm sea every man is a pilot.</p>
    <p>But all sunshine without shade, all pleasure without pain, is not life at all.Take the lot of the happiest ,it is a tangled yarn.Bereavements and blessings,one following another, make us sad and blessed by turns. Even death itself makes life more loving. Men come closest to their true selves in the sober moments of life, under the shadows of sorrow and loss.</p>
    <p>In the affairs of life or of business, it is not intellect that tells so much as character, not brains so much as heart, not genius so much as self-control, patience, and discipline, regulated by judgment.
    </p>
    <p>I have always believed that the man who has begun to live more seriously within begins to live more simplywithout. In an age of extravagance and waste, I wish I could show to the world how few the real wants of humanity are.</p>
    <p>To regret one's errors to the point of not repeating them is true repentance.There is nothing noble in being superior to some other man. The true nobility is in being superior to your previous self.</p>
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







