   <?php wp_footer()?>
  <footer class="footer py--10">
      <div class="container">
        <div class="footer__wrapper">
          <h2>N<span>.</span>E<span>.</span>V</h2>
          <div class="footer__links">
            <div class="quicklinks d--flex justify--between">

              <?php if(have_rows('link_list')): ?>
                <?php while(have_rows('link_list')): the_row(); ?>
              <ul>
                <li><?php echo get_sub_field('link_list') ?></li>

                <?php if(have_rows('item_link')) :?>
                <?php while(have_rows('item_link')) : the_row(); ?>
                <li><a href="<?php the_sub_field('the_link')?>"><?php the_sub_field('link_text')?></a></li>
                <?php endwhile; ?>
              <?php endif; ?>
              </ul>
               <?php endwhile; ?>
              <?php endif; ?>
              
            </div>
            <div class="footer__btn">
              <p><a class="btn bg--primary" href="#">BOOK NOW!</a></p>
              <p><a class="btn--transparent" href="#">CALL US</a></p>
            </div>
          </div>
        </div>
        <div class="footer__socialLinks d--flex justify--between py--2">
          <p>
            <small>&copy; NEW 2022. All Right Reserved</small>
          </p>
          <div class="links d--flex align--center justify--center">
            <p><small>Follow us:</small></p>

             <?php if(have_rows('footer_social')): ?>
              <?php while(have_rows('footer_social')): the_row(); ?>

            <ul class="d--flex">
              <li>
                <a href="<?php the_sub_field('footer_link')?>"><i class="<?php the_sub_field('footer_icon')?>"></i></a>
              </li>
            </ul>
              <?php endwhile; ?>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </footer>

    <script>
      const nav = document.querySelector(".nav");
      const toggleMenu = document.querySelector(".toggle__menu");

      toggleMenu.addEventListener("click", () => {
        toggleMenu.classList.toggle("open");
        nav.classList.toggle("open");
      });
    </script>
  </body>
</html>