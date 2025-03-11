<?php 
  include_once("templates/header.php");

  if(isset($_GET['id'])){
    $postId = $_GET['id'];
    print_r($postId);
    $currentPost;

    foreach($posts as $post){

      if($post['id'] == $postId){
        $currentPost = $post;
      }
    }
  }
?>

<main class="post-container">
  <section>
    <h1 class="title-conteiner"><?php echo $currentPost['title']?></h1>
    <p class="post-description"><?php echo $currentPost['description']?></p>
    <div class="img container">
      <img src="<?php print_r($BASE_URL) ?>/img/<?php echo $currentPost['img']?>" alt="<?php $currentPost['title'] ?>">
    </div>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolor quae quis corrupti ullam, obcaecati cumque at fuga soluta repellendus a repudiandae sapiente illum nemo voluptates blanditiis unde hic architecto?
    Quibusdam minima eius dignissimos voluptas animi soluta veritatis libero quam et eaque dolores officiis dicta perspiciatis laborum itaque aspernatur, mollitia reprehenderit quidem! Laudantium cum reiciendis laboriosam, repudiandae sed enim vitae.
    Nobis corporis a repellat molestiae, aut culpa necessitatibus atque nihil quod saepe officia natus magnam maiores possimus rerum non, ipsa, iure vitae. Error repellendus a, illo debitis ad velit neque.
    Ullam architecto fugit aperiam rerum? Aut minus tenetur saepe minima eius. Fugiat, temporibus tenetur nulla perspiciatis asperiores omnis unde quam, veniam, doloribus dolorum voluptatibus architecto. Quis repellat nisi eius saepe!
    Non debitis quidem recusandae, cupiditate doloribus laboriosam, eveniet velit expedita ea nulla praesentium delectus aspernatur placeat facilis dolore soluta asperiores esse ipsa iusto cum repellendus iure! Ad commodi ullam odit.
  </p>
</section>
</main>
<aside class="nav-container">
  <h3 class="tags-title">Tags</h3>
  <ul class="tags-container">
    <?php $tags = $currentPost['tags'];?>
    <?php foreach($tags as $tecnologia):?>
    <li><a href=""><?php echo $tecnologia ?></a></li>
    <?php endforeach; ?>
  </ul>
  <h3>Categorias</h3>
  <ul class="categories-list">
    <?php foreach($categories as $category):?>
      <li><a href="#"><?php echo $category?></a></li>
    <?php endforeach; ?>
  </ul>
</aside>


<?php 
  include_once("templates/footer.php");
?>