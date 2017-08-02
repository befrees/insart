<div class="header__menu">
            <nav>
            <?php /* ?>
              <a href="/<?php //echo get_category_link(2) ?>" data-number="block-1" class="click-true" onclick="javascript: return true">Home</a>
              <a href="<?php echo get_category_link(70) ?>" data-number="block-2">CTO Insights</a>
              <a href="<?php echo get_category_link(5) ?>" data-number="block-3">Featured Articles</a>
              */ ?>
              <ul>
              <?php if($nav =  wp_get_nav_menu_items( 'top-cats' )): ?>
                <?php foreach($nav as $k => $li): ?>
                <li><a href="<?= $li->object == 'category' ? '/?c='. $li->object_id : '/' ?>" class="ajax-cat-link <?= $k===0 ? 'active' : '' ?>" rel="nofollow"><?= $li->title ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
                <li><a href="<?php echo get_permalink(134) ?>" data-number="block-5"  rel="nofollow">Contacts</a></li>
              </ul>
            </nav>
            <!-- <button class="btn btn-clear">
              <svg class="icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-down"></use>
              </svg>
            </button>  -->
          </div>