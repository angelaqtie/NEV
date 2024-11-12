 <?php wp_head()?>
 <header class="header">
        <div class="container">
          <div class="header__wrapper d--flex justify--between align--center">
            <?php the_custom_logo() ?>

            <nav class="nav">
              <ul class="d--flex">
                <?php wp_menu_li()?>
              </ul>
            </nav>

            <div class="toggle__menu">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </header>
