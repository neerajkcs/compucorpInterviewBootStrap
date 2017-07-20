<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <section<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?> style="background-color: <?php print $view->render_field('field_section_background', $id); ?>;">
  	<div class="section__content">
    	<?php print $row; ?>
    </div>
  </section>
<?php endforeach; ?>