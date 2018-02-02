<?php 
$servername='127.0.0.1';
$username='root';
$password='vivify';
$dbname='blog';
try {
       $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException $e)
   {
       echo $e->getMessage();
   }
$sql = "SELECT id, title, body, author, created_at FROM posts ORDER BY created_at DESC";
               $statement = $connection->prepare($sql);
               $statement->execute();
               $statement->setFetchMode(PDO::FETCH_ASSOC);
               $posts = $statement->fetchAll();
?>
<link rel="stylesheet" href="styles/styles.css">
<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Latest posts</h4>
    <?php
        foreach ($posts as $post) { ?>
        <h5><a style="color: #b34848;" href="single-post.php?post_id=<?php echo($post['id']) ?>"><?php echo($post['title']) ?></a></h5>
    <?php
}
?>
    </div>
</aside>