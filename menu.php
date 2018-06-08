<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<!--<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>-->

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="index.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Data Master
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="tabel-pegawai.php" >
									<i class="menu-icon fa fa-caret-right"></i>
									Data Pegawai
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="tabel-provinsi.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Data Provinsi
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="tabel-kota.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Data Kota
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="tabel-surat-tugas.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Jadwal </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="tabel-arsip.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Arsip </span>
						</a>

						<b class="arrow"></b>
					</li>
					<?php
					if($_SESSION['level'] == 'admin'){
					?>
					<li class="">
						<a href="tabel-admin.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Administrator </span>
						</a>

						<b class="arrow"></b>
					</li>
					<?php
					}
					?>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>