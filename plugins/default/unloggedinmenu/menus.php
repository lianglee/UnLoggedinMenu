<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <?php if(com_is_active('OssnGroups')){  ?>
        <a class="nav-link" href="<?php echo ossn_site_url('search?type=groups&q=');?>"><?php echo ossn_print('groups');?></a>
	  <?php } ?>
      <?php if(com_is_active('Blog')){  ?>
        <a class="nav-link" href="<?php echo ossn_site_url('blog/all_blogs_by_date');?>"><?php echo ossn_print('blogs');?></a>
	  <?php } ?> 
      <?php if(com_is_active('Videos')){  ?>
        <a class="nav-link" href="<?php echo ossn_site_url('video/all');?>"><?php echo ossn_print('videos');?></a>
	  <?php } ?>       
      <?php if(com_is_active('MP3')){  ?>
        <a class="nav-link" href="<?php echo ossn_site_url('mp3/all');?>"><?php echo ossn_print('mp3file');?></a>
	  <?php } ?>   
      <?php if(com_is_active('Marketplace')){  ?>
        <a class="nav-link" href="<?php echo ossn_site_url('marketplace/list');?>"><?php echo ossn_print('marketplace');?></a>
	  <?php } ?>
      <?php if(com_is_active('Events')){  ?>
        <a class="nav-link" href="<?php echo ossn_site_url('event/list');?>"><?php echo ossn_print('events');?></a>
	  <?php } ?>    
      <?php if(com_is_active('Files')){  ?>
        <a class="nav-link" href="<?php echo ossn_site_url('files/all');?>"><?php echo ossn_print('files');?></a>
	  <?php } ?>     
      <?php if(com_is_active('Forum')){  ?>
      <li class="nav-item">
	  <?php } ?>   
      <?php if(com_is_active('BusinessPage')){  ?>
        <a class="nav-link" href="<?php echo ossn_site_url('page/all');?>"><?php echo ossn_print('bpage');?></a>
	  <?php } ?>  
      </div>
    </div>
  </div>
</nav>