<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> case-study <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    
    if(!empty($node->field_first_row_copy['und'][0]['value'])){
	    print '<div class="first-row">';
	    print $node->field_first_row_copy['und'][0]['value'];
	    print '</div>';
    }
    
    if(!empty($node->field_second_row_copy['und'][0]['value'])){
	    print views_embed_view('case_study', 'block_row2', $node->nid );
    }
    
    if(!empty($node->field_third_row_copy['und'][0]['value'])){
	    print '<div class="third-row">';
	    print $node->field_third_row_copy['und'][0]['value'];
	    print '</div>';
    }
    
    if(!empty($node->field_fourth_row_copy['und'][0]['value'])){
	    print views_embed_view('case_study', 'block_row4', $node->nid );
    }
    
    if(!empty($node->field_fifth_row_copy['und'][0]['value'])){
	    print '<div class="fifth-row">';
	    print $node->field_fifth_row_copy['und'][0]['value'];
	    print '</div>';
    }
    
    // print render($content);
  ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
