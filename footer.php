<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div>
</div>
</main>

<footer id="footer" role="contentinfo" style="margin-top:40px">
  <div class="container">
    <div class="row">
      <div class="span12">
        <p>
          <center>
            &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
            Powerby <a href="http://www.typecho.org">Typecho</a>.
            Theme <a href="https://github.com/FireUnicornser/BaseHD">BaseHD</a> BY <a href="https://github.com/FireUnicornser">FireUnicornser</a>
          </center>
        </p>
      </div>
    </div>
  </div>
</footer>

<script type="text/javascript" src="<?php $this->options->themeUrl('./js/jquery-1.7.2.min.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('./js/bootstrap.min.js'); ?>"></script>
<!--[if lte IE 6]>
    <script type="text/javascript" src="<?php $this->options->themeUrl('./js/bootstrap-ie.js'); ?>"></script>
    <![endif]-->

<script type="text/javascript">
  (function($) {
    $(document).ready(function() {
      if ($.isFunction($.bootstrapIE6)) $.bootstrapIE6($(document));
    });
  })(jQuery);
</script>

<?php $this->footer(); ?>
</body>

</html>
