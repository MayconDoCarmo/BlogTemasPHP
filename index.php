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
          <h2 class="post-title"><a href="<?php echo $BASE_URL . "/post.php?id=" . $post['id'] ?>"><?php echo $post['title']?></a></h2>
          <p class="post-description"><?php echo $post['description'] ?></p>
          <ul class="tags-container">
          <?php $tags = $post['tags'];?>
            <?php foreach($tags as $tecnologia):?>
            <li><a href=""><?php echo $tecnologia ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php $i++; endforeach; ?>
    </section>
  </main>
<?php 
  include_once("templates/footer.php")
?>
