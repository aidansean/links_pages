<?php
$title = 'Links' ;
$js_scripts  = array() ;
include($_SERVER['FILE_PREFIX'] . '/_core/preamble.php') ;
?>
  <div class="right">
    <div class="blurb center">
      <p>This page contains links to pages which contain links to pages.</p>
    </div>
  <div>
  
<div class="right">
  <h3>ATLAS links</h3>
  <div class="blurb_with_icon">
    <div class="image">
      <a href="atlas.php"><img class="icon" src="/images/atlas.png" alt="ATLAS links" /></a>
    </div>
    <p>Links to ATLAS pages.</p> 
  </div>
</div>

<div class="right">
  <h3>CMS links</h3>
  <div class="blurb_with_icon">
    <div class="image">
      <a href="CMS.php"><img class="icon" src="/images/cms.png" alt="CMS links" /></a>
    </div>
    <p>Links to CMS pages.</p>
  </div>
</div>

<?php foot() ; ?>
