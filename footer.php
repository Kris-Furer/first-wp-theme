<?php wp_footer(); ?>
<footer>
  <div class="row justify-content-center">


    <div class="footer-left col-sm-10 col-md-10 col-lg-4">
      <h5 class='footer-heading'>Menu</h5>
      <?php
      $menu_args = ['theme_location' => 'footer', 'menu_class' => "footer-nav"];
      wp_nav_menu($menu_args);
        ?>
      <!-- <h5 class="footer-heading">Menu</h5>
      <a href="#">About</a>
      <a href="#">Support Us</a>
      <a href="#">Blog</a>
      <a href="#">Supporters</a> -->
    </div>

    <div class="footer-center col-sm-10 col-md-10 col-lg-4">
      <h5 class="footer-heading">Contact</h5>
      <p>Sistema Aotearoa</p>
      <p>PO Box 61-171, Ōtara, Manukau, 2159</p>
      <p>Phone: 021 618 922</p>
      <p>Email: info@sistemaaotearoa.org.nz</p>
    </div>

    <div class="footer-right col-sm-10 col-md-10 col-lg-4">
      <h5 class="footer-heading">Join our mailing list</h5>
        <div class="d-flex my-4">

          <input type="email" placeholder="enter email">
          <button class="my-btn mx-2 light-fill" type="button" name="button">Submit</button>
        </div>
      </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
