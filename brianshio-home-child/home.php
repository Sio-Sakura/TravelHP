<?php /* Blog index & archives — BrianShio storybook design */
get_header( 'bs' ); ?>

<header class="bl-head"><div class="wrap">
  <svg class="bl-sun" viewBox="0 0 200 200" aria-hidden="true"><circle cx="100" cy="100" r="96" fill="url(#sunG)"/><circle cx="100" cy="100" r="58" fill="#fbe1b6" filter="url(#wcsoft)"/></svg>
  <div class="bl-wolves" aria-hidden="true"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/Wolves/03_crop.png" alt=""><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/Wolves/04_crop.png" alt=""></div>
  <div class="eyebrow">Our travel journal</div>
  <?php if ( is_category() ) : ?>
    <h1><?php single_cat_title(); ?></h1>
  <?php else : ?>
    <h1>Stories from <span class="ital">the road</span></h1>
    <p class="bl-sub">Guides, tips and honest reviews from two travelers &mdash; cabins, campfires, mountain towns and the restaurants worth the detour.</p>
  <?php endif; ?>
</div></header>

<div class="wrap">
  <div class="bl-cats">
    <a class="bl-cat<?php echo is_home() ? ' on' : ''; ?>" href="<?php echo esc_url( bs_blog_url() ); ?>">All posts</a>
    <a class="bl-cat g<?php echo is_category( 'guides' ) ? ' on' : ''; ?>" href="<?php echo esc_url( bs_cat_url( 'guides' ) ); ?>"><svg viewBox="0 0 40 40"><path d="M20 36c-6 0-11-4-11-9 0-4 4-7 11-7s11 3 11 7c0 5-5 9-11 9z"/><ellipse cx="9" cy="16" rx="3.4" ry="4.6"/><ellipse cx="16" cy="9" rx="3.4" ry="4.8"/><ellipse cx="24" cy="9" rx="3.4" ry="4.8"/><ellipse cx="31" cy="16" rx="3.4" ry="4.6"/></svg>Guides</a>
    <a class="bl-cat t<?php echo is_category( 'tips' ) ? ' on' : ''; ?>" href="<?php echo esc_url( bs_cat_url( 'tips' ) ); ?>"><svg viewBox="0 0 40 40"><path d="M20 36c-6 0-11-4-11-9 0-4 4-7 11-7s11 3 11 7c0 5-5 9-11 9z"/><ellipse cx="9" cy="16" rx="3.4" ry="4.6"/><ellipse cx="16" cy="9" rx="3.4" ry="4.8"/><ellipse cx="24" cy="9" rx="3.4" ry="4.8"/><ellipse cx="31" cy="16" rx="3.4" ry="4.6"/></svg>Tips</a>
    <a class="bl-cat r<?php echo is_category( 'reviews' ) ? ' on' : ''; ?>" href="<?php echo esc_url( bs_cat_url( 'reviews' ) ); ?>"><svg viewBox="0 0 40 40"><path d="M20 36c-6 0-11-4-11-9 0-4 4-7 11-7s11 3 11 7c0 5-5 9-11 9z"/><ellipse cx="9" cy="16" rx="3.4" ry="4.6"/><ellipse cx="16" cy="9" rx="3.4" ry="4.8"/><ellipse cx="24" cy="9" rx="3.4" ry="4.8"/><ellipse cx="31" cy="16" rx="3.4" ry="4.6"/></svg>Reviews</a>
  </div>

<?php
$bs_colors = array( 'guides' => '#6f8a6b', 'tips' => '#7d9aa8', 'reviews' => '#d2793f' );
$bs_fallback_img = get_stylesheet_directory_uri() . '/assets/Pics/HD/04.jpg';
$show_featured = is_home() && ! is_paged();
$i = 0; $grid_open = false;
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    $cats  = get_the_category();
    $cname = $cats ? $cats[0]->name : '';
    $cslug = $cats ? strtolower( $cats[0]->slug ) : '';
    $color = isset( $bs_colors[ $cslug ] ) ? $bs_colors[ $cslug ] : '#d2793f';
    $img   = get_the_post_thumbnail_url( get_the_ID(), 'large' );
    if ( ! $img ) { $img = $bs_fallback_img; }
    $date  = esc_html( get_the_date( 'M j, Y' ) );
    $badge = $cname ? '<span class="bl-badge" style="background:' . esc_attr( $color ) . '">' . esc_html( $cname ) . '</span>' : '';

    if ( $show_featured && 0 === $i ) : ?>
  <a class="bl-feat" href="<?php the_permalink(); ?>">
    <div class="im"><img src="<?php echo esc_url( $img ); ?>" alt=""><span class="bl-latest">Latest post</span></div>
    <div class="tx">
      <div class="bl-meta"><?php echo $badge; ?><span><?php echo $date; ?></span></div>
      <h2><?php the_title(); ?></h2>
      <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28 ) ); ?></p>
      <span class="bl-readmore">Read the story &rarr;</span>
    </div>
  </a>
<?php else :
      if ( ! $grid_open ) { echo '<div class="bl-grid">'; $grid_open = true; } ?>
    <a class="bl-post" href="<?php the_permalink(); ?>" style="--c:<?php echo esc_attr( $color ); ?>">
      <div class="im"><img src="<?php echo esc_url( $img ); ?>" alt="" loading="lazy"></div>
      <div class="tx">
        <div class="bl-meta"><?php echo $badge; ?><span><?php echo $date; ?></span></div>
        <h3><?php the_title(); ?></h3>
        <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
      </div>
    </a>
<?php endif;
    $i++;
  endwhile;
  if ( $grid_open ) { echo '</div>'; }
  $older = get_next_posts_link( 'Older stories &rarr;' );
  $newer = get_previous_posts_link( '&larr; Newer stories' );
  if ( $older || $newer ) : ?>
  <div class="bl-pawline" aria-hidden="true"><svg viewBox="0 0 40 40"><path d="M20 36c-6 0-11-4-11-9 0-4 4-7 11-7s11 3 11 7c0 5-5 9-11 9z"/><ellipse cx="9" cy="16" rx="3.4" ry="4.6"/><ellipse cx="16" cy="9" rx="3.4" ry="4.8"/><ellipse cx="24" cy="9" rx="3.4" ry="4.8"/><ellipse cx="31" cy="16" rx="3.4" ry="4.6"/></svg><svg viewBox="0 0 40 40"><path d="M20 36c-6 0-11-4-11-9 0-4 4-7 11-7s11 3 11 7c0 5-5 9-11 9z"/><ellipse cx="9" cy="16" rx="3.4" ry="4.6"/><ellipse cx="16" cy="9" rx="3.4" ry="4.8"/><ellipse cx="24" cy="9" rx="3.4" ry="4.8"/><ellipse cx="31" cy="16" rx="3.4" ry="4.6"/></svg><svg viewBox="0 0 40 40"><path d="M20 36c-6 0-11-4-11-9 0-4 4-7 11-7s11 3 11 7c0 5-5 9-11 9z"/><ellipse cx="9" cy="16" rx="3.4" ry="4.6"/><ellipse cx="16" cy="9" rx="3.4" ry="4.8"/><ellipse cx="24" cy="9" rx="3.4" ry="4.8"/><ellipse cx="31" cy="16" rx="3.4" ry="4.6"/></svg></div>
  <div class="bl-pager"><?php echo $newer ? $newer : ''; echo $older ? $older : ''; ?></div>
<?php endif;
else : ?>
  <p class="bl-none">No stories here yet &mdash; check back soon!</p>
<?php endif; ?>
</div>

<?php get_footer( 'bs' ); ?>
