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
    <h1>Youth</h1>
    <p>Youth is not a time of life; it is a state of mind; it is not a matter of rosy cheeks, red lips and suppleknees; it is a matter of the will, a quality of the imagination, a vigor of the emotions; it is the freshness of the deep springs of life.</p>
    <p>Youth means a tempera-mental predominance of courage over timidity, of the appetite for adventure over thelove of ease. This often exists in a man of 60 more than a boy of 20. Nobody grows old merely by a number of years. We grow old by deserting our ideals.</p>
    <p>Years may wrinkle the skin, but to give up enthusiasm wrinkles the soul. Worry, fear, self-distrust bows the heart and turns the spring back to dust.</p>
    <p>Whether 60 or 16, there is in every human being's heart the lure of wonder, the unfailing childlike appetite of what's next and the joy of the game of living. In the center of your heart and my heart there is a wireless station: so long as it receives messages of beauty, hope, cheer, courage and power from men and from the Infinite, so long are you young.</p>
    <p>When the aerials are down, and your spirit is covered with snows of cynicism and the ice of pessimism, then you are grown old, even at 20, but as long as your aerials are up, to catch waves of optimism, there is hope you may die young at 80.</p>
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