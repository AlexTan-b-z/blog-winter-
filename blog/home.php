<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div id="bar">
    <ul>
      <li><a href="#home">HOME</a></li>  
      <li><a href="#blog">BLOG</a></li>  
      <li><a href="photos.php">ALBUM</a></li>  
      <li><a href="write.php">WRITE</a></li>  
      <li><a href="leaveWords.php">LEAVE WORDS</a></li>   
    </ul>
  </div><!-- end bar -->
  <div id="intro">
    <h1>
      <span>HELLO</span><br />
      <span>We are</span><br />
      <span class="name">Yoyo & Alex Tan</span><br />
    </h1>
  </div><!-- end intro -->
  <div id="blogs">
    <h2><a name="blog">My Blogs</a></h2>
    <div id="article">
      <div class="eassy 1">
        <a href="youth.php"><div class="blog-img youth"></div></a>
        <h3>Youth</h3>
        <p>Youth is not a time of life; it is a state of mind</p>
        <a href="youth.php">Read more...</a>
      </div>
      <div class="eassy 2">
        <a href="nobility.php"><div class="blog-img nobility"></div></a>
        <h3>True Nobility</h3>
        <p>The true nobility is in being superior to your previous self.</p>
        <a href="nobility.php">Read more...</a>
      </div>
      <?php
      include('backEnd/select_ct.php');
      $i = 0;
      foreach ($message as $key => $value) {
      	if ($i%2==0) {
      ?>
      <div class="eassy 1">
      <form action="log.php" method="post">
        <a href=""><div class="blog-img youth"><div style="display: none;"><input type="text" name="id" value="<?php echo $i; ?>"></div></div></a>
        <h3><?php echo $value['title']; $i++;?></h3>
        <p><?php $neirong = substr($value['content'],0,30); echo $neirong ?></p>
        <input type="submit" value="Read more..." style="border:none"></input>
      </form>  
      </div>
      <?php }
      else{  ?>
      <div class="eassy 2">
      <form action="log.php" method="post">
        <a href=""><div class="blog-img nobility"><div style="display: none;"><input type="text" name="id" value="<?php echo $i; ?>"></div></div></a>
        <h3><?php echo $value['title']; $i++;?></h3>
        <p><?php $neirong = substr($value['content'],0,30); echo $neirong ?></p>
        <input type="submit" value="Read more..." style="border:none"></input>
      </form>  
      </div>
      <?php
        }
        }
      ?>          
      
    </div>  
  </div><!-- end blogs -->
</body>
</html>
