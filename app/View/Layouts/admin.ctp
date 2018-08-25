<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
  <?php
  /**
   * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
   * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
   *
   * Licensed under The MIT License
   * For full copyright and license information, please see the LICENSE.txt
   * Redistributions of files must retain the above copyright notice.
   *
   * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
   * @link          https://cakephp.org CakePHP(tm) Project
   * @package       app.View.Layouts
   * @since         CakePHP(tm) v 0.10.0.1076
   * @license       https://opensource.org/licenses/mit-license.php MIT License
   */
  ?>
  <!DOCTYPE html>
  <html>
      <head>
      	<title><?php echo $title; ?></title>
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
      	<?php
              echo $this->Html->css(array(
                  'bootstrap.min',
                  'skins/skin-blue.min',
                  'AdminLTE.min'
              ));
          ?>
          <?php echo '<style type="text/css">'.$this->fetch('cssHead').'</style>'; ?>

      </head>
      <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
        <header class="main-header"><?php echo $this->element('main')?></header>
        <aside class="main-sidebar"><?php echo $this->element('left-sidebar')?></aside>
      	<main>
      		<?php echo $this->Flash->render(); ?>
      		<?php echo '<div class="content-wrapper">'.$this->fetch('content').'</div>'; ?>
      	</main>
        <footer><?php echo $this->element('footer')?></footer>
        <aside class="control-sidebar control-sidebar-dark">
            <?php echo $this->element('right-sidebar')?>
        </aside>
        <div class="control-sidebar-bg"></div>
        </div>
      	<?php
              echo $this->Html->script(array(
                  'jquery',
                  'bootstrap.min',
                  'AdminLTE.min'
              ));
          ?>
          <script><?php echo $this->fetch('scriptBody'); ?></script>
      </body>
  </html>
