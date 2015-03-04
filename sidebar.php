<div class="widget-area">
  <?php if(!dynamic_sidebar('Sidebar Widgets Test')) : ?>
    <aside id="archives" class="widgets">
      <h3 class="widget-title">Archives</h3>
      <ul>
      <?php wp_get_archives('type-monthly&limit=12'); ?>
      </ul>
    </aside>    
  <?php endif; ?>
</div>
