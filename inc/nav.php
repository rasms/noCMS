<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Project name</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php if ($q == 'home') { ?>class="active"<?php } ?> ><a href="/">Home</a></li>
        <li <?php if ($q == 'about') { ?>class="active"<?php } ?> ><a href="/about">About</a></li>
        <li <?php if ($q == 'contact') { ?>class="active"<?php } ?> ><a href="/contact">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Folder <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li <?php if (($f == 'folder')&&($q == 'page')) { ?>class="active"<?php } ?> ><a href="/folder/page">Page</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
