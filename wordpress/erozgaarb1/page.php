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
                        <time><?php the_time("Y-M-D:h-m"); ?></time>                          
                         <i class="fa fa-folder"></i>
                         <a href="">Tutorials</a>,<a href="">Coding</a>
                         <i class="fa fa-tags"></i>Tagged <a href="">wordpress</a>, <a href="">premium</a>, <a href="">another</a>, <a href="">yayaayy ayyaya</a>
                         <div class="post-comments-badge">
                            <a href=""><i class="fa fa-comments"></i> 168</a>
                         </div>    <!-- post-comments-badge -->                            
                    </div> <!-- post-detail -->
                </header>
                
                <div class="post-excerpt">
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div> <!-- post-content -->
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