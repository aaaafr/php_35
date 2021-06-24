<footer id="site_footer">
  <p><i class="fas fa-copyright fa-lg fa-fw"></i> Boolean</p>
</footer>
<!-- /#site_footer -->


<?php if ($_SERVER['REQUEST_URI'] === '/shop.php') :  ?>

  <!-- CDN AXIO -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- CDN VUE -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

  <!-- MY SCRIPT -->
  <script src="./assets/js/app.js"></script>
<?php endif; ?>
</body>

</html>