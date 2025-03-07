<?php 
  include_once("templates/header.php");
?>
  <main>
    <div id="title-container">
      <h1>Blog Sem Money</h1>
      <p>O seu blog de finanças</p>
    </div>
    <section id="posts-container">
      <?php $i = 0; foreach($posts as $post): ?>
        <div class="post-box">
          <img src="<?php print_r($BASE_URL) ?>/img/<?php echo $post['img']?>" alt="<?php $post['title'] ?>">
        </div>
        <div>
          <h2><a href="<?php $BASE_URL ?>post.php?id=<?php $post['id'] ?>"><?php echo $post['title']?></a></h2>
          <p><?php echo $post['description'] ?></p>
        </div>
        <ul>
          <li><?php print_r(implode("  ", $categories[$i]))?></li>
        </ul >
      <?php $i++; endforeach; ?>
    </section>
  </main>
<?php 
  include_once("templates/footer.php")
?>
