<style type="text/css" media="screen, projection">
.parallax-viewport {
  width: 100vw;
  /*max-width: 1366px;*/
  height: calc(100vh - 130px);
  /*background-color: #aebcc9;*/
  margin: 0 auto;
  margin-top: 63px;
}

</style>

<div class="parallax-viewport" id="parallax">
    <div class="parallax-layer" style="width:100vw; height:90vh;">
        <?php  require_once('views/clouds.php'); ?>
    </div>
    <!-- parallax layers -->
    <div class="parallax-layer" style="width:100vw; height:60vh;">
        <img src="img/parallax/04-cumbre.png" alt="" style="position:absolute; left:0px; bottom: -0px"/>
    </div>
    <div class="parallax-layer" style="width:100vw; height:70vh;">
        <img src="img/parallax/03-mounts.png" alt="" style="position:absolute; left:0px; bottom:-50px;"/>
    </div>
    <div class="parallax-layer" style="width:100vw; height:80vh;">
        <img src="img/parallax/02-rio.png" alt="" style="position:absolute; bottom:-50px; right:0;" />
    </div>
    <div class="parallax-layer" style="width:100vw; height:90vh;">
        <img src="img/parallax/01-falda.png" alt="" style="position:absolute; bottom: 0px; left:0;"/>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>


<script>
  jQuery(document).ready(function(){
    jQuery('#parallax .parallax-layer')
    .parallax({
      mouseport: jQuery('#parallax')
  });
});
</script>