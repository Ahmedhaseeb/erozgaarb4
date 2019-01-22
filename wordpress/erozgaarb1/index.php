<?php get_header(); ?>


<!-- BLOG CONTENT
=================-->
<div class="container">
    <div class="row" id="primary">
        <main id="content" class="col-sm-8" role="main">
        <?php if(have_posts()): 
            while (have_posts()):
                the_post();
        ?>

            <article class="post">
                <header>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
                    <div class="post-details">
                        <i class="fa fa-user"></i>
                        <?php the_author(); ?>  
                        <i class="fa fa-clock-o"></i>
                        <time><?php the_time("Y-M-D:h-m a"); ?></time>                          
                         <i class="fa fa-folder"></i>
                         <a href="">Tutorials</a>,<a href="">Coding</a>
                         <i class="fa fa-tags"></i>Tagged <a href="">wordpress</a>, <a href="">premium</a>, <a href="">another</a>, <a href="">yayaayy ayyaya</a>
                         <div class="post-comments-badge">
                            <a href=""><i class="fa fa-comments"></i> 168</a>
                         </div>    <!-- post-comments-badge -->                            
                    </div> <!-- post-detail -->
                </header>
                <?php if(has_post_thumbnail()): ?>
                <div class="post-image">
                    
                    <?php echo get_the_post_thumbnail(); ?>
                    <!-- <img src="assets/img/_hero-bg.png" alt="Here image"> -->
                </div> <!-- POst-image -->
                <?php endif; ?>
                <div class="post-excerpt">
                    <p>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">continue reading &raquo;</a></p>
                </div> <!-- post-excerpt -->
            </article> <!-- post-->

        <?php 
            endwhile;
        else:
            echo "<p>No Post Found</p>";
        endif; 

        ?>
        </main> <!-- content -->
        <?php get_sidebar(); ?>
    </div> <!-- row -->
</div><!-- container-->


<?php get_footer(); ?>