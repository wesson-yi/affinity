<!--
/**
 * 这是 前端美博客制作的一款typecho博客程序 原创设计来自开源主题Affinity 地址：https://github.com/Showfom/Affinity
 *
 * @package Typecho Replica Theme
 * @author Typecho.ME Team
 * @version 2017.07.28
 * @link https://typecho.me/
 */
-->

<!DOCTYPE HTML>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
  exit;
} ?>

<html>
  <?php $this->need('header.php'); ?>

  <body>
    <section class="section">
      <?php $this->need('section-sider.php'); ?>
      <?php $this->need('section-content.php'); ?>
      <?php $this->need('section-footer.php'); ?>
    </section>
    <?php $this->footer(); ?>
  </body>
</html>
