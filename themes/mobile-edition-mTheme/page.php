<?php get_header(); ?>
<div class="ot_article_pagination" style="padding-left:7px;">
<?php the_title(); ?>
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="ot_article ot_page">
<?php the_content();?>
<?php wp_link_pages('before=<strong>'.__('pages', 'fdx-lang').':&after=</strong>&next_or_number=number&pagelink= %'); ?>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>