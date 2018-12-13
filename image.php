<?php
include "includes/db.php";
?>



    <?php
include "includes/header.php";
?>


        <!-- Navigation -->
        <?php
include "includes/navigation.php";
?>
            <!-- Page Content -->
            <div class="container">

                <div class="row">

                    <!-- Blog Entries Column -->
                    <div class="col-md-8">

                        <?php
                        
                        if(isset($_GET['p_id'])) {
                            
                            $the_post_id = $_GET['p_id'];
                        }
                        
                        $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
                       $select_all_posts_query = mysqli_query($connection, $query);
                while($row=mysqli_fetch_assoc($select_all_posts_query)) {
                     $post_title = $row['post_title'];
                     $post_author = $row['post_author'];
                     $post_date = $row['post_date'];
                     $post_image = $row['post_image'];
                     $post_content = $row['post_content'];
                    
                     ?>



                            <!-- First Blog Post -->

                            <hr>
                            <a href="post.php?p_id=<?php echo $post_id; ?>">
                            <img class="img-responsive" src="images/<?php echo $post_image;?>" alt="">
                            </a>



                            <hr>

                            <?php } ?>


                    </div>

                    <!-- Blog Sidebar Widgets Column -->
                    <?php include "includes/sidebar.php"; ?>

                </div>
                <!-- /.row -->

                <hr>

                <?php include "includes/footer.php"; ?>
