<nav class="navbar navbar-default" style="border: 0">
  <div class="container top-nav-container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img class="img-responsive hide-xs top-logo" src="/img/1-small.png" border="0"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
<?php 
  $pages_keys = array_keys($global_pages);
  for ( $i = 0 ; $i < count($pages_keys) ; $i++ ) {
    if ($page_name == $pages_keys[$i]) $menu_class = "active top-nav";
    else $menu_class = "top-nav";
?>
    <li class="<?php echo $menu_class; ?>"><a href="<?php echo $global_pages[$pages_keys[$i]]; ?>"><?php echo $menu_items[$global_lang][$pages_keys[$i]]; ?></a></li>
<?php
  }
?>
       <li class="dropdown">
          <button class="btn btn-default dropdown-toggle btn-language" data-toggle="dropdown" aria-haspopup="true"><img src=<? echo "\"/img/$global_lang-flag.svg\""; ?> width="20" border="0">&nbsp;<?php echo $languages[$global_lang]; ?>&nbsp;<span class="caret"></span></button>
          <ul class="dropdown-menu">
 <?php
	$lang_keys = array_keys($languages);
	for ( $i = 0 ; $i < count($lang_keys) ; $i++ ) {
		if ($global_lang != $lang_keys[$i]) {
?>
            <li><a href="?lang=<?php echo $lang_keys[$i];?>"><img src=<?php echo "\"/img/$lang_keys[$i]-flag.svg\""; ?> width="20" border="0">&nbsp;<?php echo $languages[$lang_keys[$i]]; ?></a></li>
<?php
		}
	}
?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>