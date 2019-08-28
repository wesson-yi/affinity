<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>

<section class="section-sidebar">
  <div class="sidebar-header">
    <a href="<?php $this->options->siteUrl(); ?>" class="sidebar-header-logo">
      <img class="logo" alt="<?php $this->options->title() ?>" src="<?php $this->options->themeUrl('affinity.png'); ?>" />
    </a>
    <p><?php $this->options->description() ?></p>
    <ul class="nav">
      <li>
        <a<?php if ($this->is('index')) : ?> class="current" <?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
      </li>
      <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
      <?php while ($pages->next()) : ?>
      <li>
        <a<?php if ($this->is('page', $pages->slug)) : ?> class="current" <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
      </li>
      <?php endwhile; ?>
    </ul>

    <ul class="nav hide-sm">
      <li class="nav-"><a href="https://www.qianduanmei.com/">前端美</a></li>
      <li class="nav-"><a href="https://www.vpsmm.com/">小夜博客</a></li>
    </ul>
  </div>
  <div class="sidebar-footer"></div>
</section>
