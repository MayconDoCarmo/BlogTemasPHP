<?php 
  include_once("templates/header.php");
?>
  <main>
    <section class="title-container">
      <h1>Blog Sem Money</h1>
      <p>O seu blog de finanças</p>
    </section>
    <section class="posts-container">
      <?php $i = 0; foreach($posts as $post): ?>
        <div class="post-box">
          <img src="<?php print_r($BASE_URL) ?>/img/<?php echo $post['img']?>" alt="<?php $post['title'] ?>">
          <h2><a href="<?php $BASE_URL ?>post.php?id=<?php $post['id'] ?>"><?php echo $post['title']?></a></h2>
          <p><?php echo $post['description'] ?></p>
        </div>
        <ul class="tags-container">
          <li><?php print_r(implode("  ", $categories[$i]))?></li>
        </ul >
      <?php $i++; endforeach; ?>
    </section>
  </main>
<?php 
  include_once("templates/footer.php")
?>
