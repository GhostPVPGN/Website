<?php
  if(isset($_GET['p'])) {
    $page = $_GET['p'];
  }else{
    $page = "?p=main";
  }
?>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?p=main"><?php echo $servertitle; ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <b>
	  <ul class="nav navbar-nav">
        <?php
		
			if($page == "status") {
          echo "<li class='active'><a href='?p=status'>SERVER STATUS</a></li>";
        }else{
          echo "<li><a href='?p=status'>SERVER STATUS</a></li>";
        }
		
        
		if($page == "mods") {
          echo "<li class='active'><a href='?p=mods'>GAME MOD</a></li>";
        }else{
          echo "<li><a href='?p=mods'>GAME MOD</a></li>";
        }
		
		        if($page == "downloads") {
          echo "<li class='active'><a href='?p=downloads'>DOWNLOAD</a></li>";
        }else{
          echo "<li><a href='?p=downloads'>DOWNLOAD</a></li>";
        }
		
		if($page == "connect") {
          echo "<li class='active'><a href='?p=connect'>HOW TO CONNECT?</a></li>";
        }else{
          echo "<li><a href='?p=connect'>HOW TO CONNECT?</a></li>";
        }


        ?>
      </ul></b>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="?p=info"><span class="glyphicon glyphicon-search"></span> Info</a></li>
      </ul>
    </div>
  </div>
</nav>

          
