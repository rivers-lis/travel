
<!--<h1><?php /*bloginfo('name'); */?></h1>
<?php /*bloginfo('description'); */?>
<br>
<a href="<?php /*echo home_url(); */?>">Главная страница</a>
<br>
<?php /*bloginfo('template_url'); */?>
<br>

<hr>-->

<!--<h3><?php /*the_title(); */?></h3>
--><?php /*the_content(); */?>

<?php /*if (have_posts()) : while (have_posts()) : the_post(); */?><!--
    <h3><?php /*the_title(); */?></h3>
    <?php /*the_excerpt(); */?>
    <a href="<?php /*the_permalink(); */?>">Читать далее..</a>

<!-- post -->
<?php /*endwhile; */?>
<!-- post navigation -->
<?php /*else: */?>
<!-- no posts found -->
--><?php /*endif; */?>

<?php /*var_dump($post) */?>

<?php /*echo $post->post_content */?>

<?php /*var_dump($posts) */?>

<?php /*foreach ($posts as $item_post): */?><!--
    <h3><?php /*echo $item_post->post_title */?></h3>
    <?php /*echo $item_post->post_content */?>
--><?php /*endforeach; */?>

<?php get_header(); ?>
        <div class="content">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="post-main">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span>(<?php the_time('d.m.Y'); ?>)</span></h1>
                    <div class="post">
                        <?php the_post_thumbnail('full', 'class=imgstyle'); ?>
                        <?php the_excerpt(); ?>
                        <p><a href="<?php the_permalink(); ?>">Читать далее</a></p>
                        <p><?php the_tags(); ?></p>
                    </div>
                </div>

                <!-- post -->
            <?php endwhile; ?>
            <!-- post navigation -->
            <?php else: ?>
            <!-- no posts found -->
            <?php endif; ?>


        </div>
<?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>