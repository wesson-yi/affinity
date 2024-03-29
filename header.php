<head>
  <meta charset="<?php $this->options->charset(); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="renderer" content="webkit">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>
    <?php $this->archiveTitle(array(
      'category'  =>  _t('分类 %s 下的文章'),
      'search'    =>  _t('包含关键字 %s 的文章'),
      'tag'       =>  _t('标签 %s 下的文章'),
      'author'    =>  _t('%s 发布的文章')
    ), '', ' - '); ?>
    <?php $this->options->title(); ?>
    <?php if ($this->is('index')) : ?> -
    <?php $this->options->description(); ?>
    <?php endif; ?>
  </title>
  <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
  <?php $this->header(); ?>
</head>
