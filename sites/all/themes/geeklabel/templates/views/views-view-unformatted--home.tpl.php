<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?><script type="text/javascript">   (function($) {        $('document').ready(function(){            $(".home--sections section span a[href^='#']").on('click', function(e) {                e.preventDefault();                var hash = this.hash;                $('html, body').animate({                    scrollTop: $(this.hash).offset().top                }, 500, function(){                    window.location.hash = hash;                });            });        });    })(jQuery);</script><!-- If we don't need smooth scroll we can use bootstrap scrollspy like below:<div class="home--sections" data-spy="scroll" data-target=".scroll-section">--><div class="home--sections" data-spy="scroll" data-target=".scroll-section">
  <?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
  <?php foreach ($rows as $id => $row): ?>
    <section id="row--home-<?php print $id ?>" <?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?> style="background-color: <?php print $view->render_field('field_section_background', $id); ?>;">
      <div class="section__content"><div class="container">
        <?php print $row; ?>
      </div></div>      <?php          $rowCount = count($rows);          $sectionId = $id + 1;      ?>      <?php if ($rowCount > $sectionId): ?>          <span class="scroll-section"><a href="#row--home-<?php print $sectionId; ?>"><i class="fa fa-angle-down" aria-hidden="true"></i></a></span>      <?php endif; ?>
    </section>
  <?php endforeach; ?></div>