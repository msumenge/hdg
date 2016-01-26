<div style="width: 100%; height: 50px;"></div>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>">
                <img alt="Brand" src="images/icon.png" style="width: auto; height: 20px;">
            </a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>">HOME</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GAMES <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url('dyadic'); ?>">DYADIC</a></li>
					</ul>
				</li>
                <li><a href="<?php echo base_url('devlog'); ?>">DEVLOG</a></li>
                <li><a href="<?php echo base_url('ourteam'); ?>">OUR TEAM</a></li>
                <li><a href="<?php echo base_url('contact'); ?>">CONTACT</a></li>
                <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-user"></i></a>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>