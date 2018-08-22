
            <!-- SEKCJA POSTÓW -->

<?php 

require 'section_nine_array_posts.php'

 ?>



            <section id="posts">


                <h4 class="h4_or_spacing">NEWS</h4>
                <h2>Latest posts</h2>


                <div class="owl-carousel owl-theme">

                <?php foreach ($posts as $post) { ?>

                    <div class="item owl_posts">
                        <img src="http://www.themenesia.com/themeforest/linea-new/images/background/bg-side-1.jpg" class="img-fluid">

                        <div class="owl_posts_content">
                            <h3><?php echo $post['title']; ?></h3>
                            <p><?php echo $post['content']; ?></p>

                        </div>
                    </div>

        <?php } ?>

                </div>



    <!-- <div class="container">
  <div class="owl-carousel owl-theme">
    <div class="item"> Your Content </div>
    <div class="item"> Your Content </div>
    <div class="item"> Your Content </div>
    <div class="item"> Your Content </div>
    <div class="item"> Your Content </div>
    <div class="item"> Your Content </div>
    <div class="item"> Your Content </div>
  </div>
</div> -->

    </section>