<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container"><img src="seamolec.png" width="50" />
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar"></button>

				<div class="navbar-header pull-left"><a href="index.php" class="navbar-brand"><small>SEAMOLEC</small></a></div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle"><span class="user-info">
								<small>Welcome,</small>
								<?=$_SESSION['level']?></span></a><ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close"><li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout									</a>
								</li>
							</ul>
					  </li>
				  </ul>
				</div>
  </div><!-- /.navbar-container -->
		</div>