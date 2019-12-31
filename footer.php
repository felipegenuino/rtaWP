<?php
/**
 * Footer template partial
 *
 * @package RTA_Theme
 *
 */
?>
     </div>
     <!-- /.row -->
  </div>
  <!-- /.container -->


 


<!-- Footer -->
<footer class="ui-footer">
  <?php get_template_part('template-parts/footer/newslatter/widget'); ?>
  <?php get_template_part('template-parts/footer/nav-info/widget'); ?>
</footer>


  


<!-- Modal Hero -->
<div class="modal modal--dark fade" id="heroModal" tabindex="-1" role="dialog" aria-labelledby="heroModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="heroModalLabel">Video de apresentação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="close-text">Fechar video</span>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" allowfullscreen></iframe> 
      </div> <!-- // embed-responsive -->
  
      </div> <!-- // modal-body -->
       
    </div>
  </div>
</div>


 




<?php wp_footer(); ?>

</body>
</html>