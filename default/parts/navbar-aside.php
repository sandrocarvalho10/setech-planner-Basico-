<aside id="menubar" class="menubar light">
		<div class="app-user">
			<div class="media">
				<div class="media-left">
					<div class="avatar avatar-md avatar-circle">
						<a href="javascript:void(0)"><img class="img-responsive" src="../assets/images/221.jpg" alt="avatar" /></a>
					</div><!-- .avatar -->
				</div>
				<div class="media-body">
					<div class="foldable">
						<h5><a href="javascript:void(0)" class="username"><?php echo $_SESSION['nome']; ?></a></h5>
						<ul>
							<li class="dropdown">
								<a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<small><?php echo $_SESSION['email']; ?></small>
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu animated flipInY">
									<li>
										<a class="text-color" href="/index.html">
											<span class="m-r-xs"><i class="fa fa-home"></i></span>
											<span>Home</span>
										</a>
									</li>
									<li>
										<a class="text-color" href="profile.html">
											<span class="m-r-xs"><i class="fa fa-user"></i></span>
											<span>Profile</span>
										</a>
									</li>
									<li>
										<a class="text-color" href="settings.html">
											<span class="m-r-xs"><i class="fa fa-gear"></i></span>
											<span>Settings</span>
										</a>
									</li>
									<li role="separator" class="divider"></li>
									<li>
										<a class="text-color" href="sair.php">
											<span class="m-r-xs"><i class="fa fa-power-off"></i></span>
											<span>Home</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div><!-- .media-body -->
			</div><!-- .media -->
		</div><!-- .app-user -->

		<div class="menubar-scroll">
			<div class="menubar-scroll-inner">
				<ul class="app-menu">
					<li>
						<a href="search.web.html">
							<i class="menu-icon zmdi zmdi-search zmdi-hc-lg"></i>
							<span class="menu-text">Search</span>
						</a>
					</li>
					
					<li class="has-submenu">
						<a href="javascript:void(0)" class="submenu-toggle">
							<i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
							<span class="menu-text">Tarefas</span>
							<i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
						</a>
						<ul class="submenu">
							<li><a href="../../../rh/default/tarefa_nova.php"><span class="menu-text">Adicionar Tarefa</span></a></li>
							<li><a href="../../../rh/default/listar.php"><span class="menu-text">Listar</span></a></li>
						</ul>
					</li>



					
<!--
					<li class="has-submenu">
						<a href="javascript:void(0)" class="submenu-toggle">
							<i class="menu-icon zmdi zmdi-apps zmdi-hc-lg"></i>
							<span class="menu-text">Contatos</span>
							<span class="label label-info menu-label">2</span>
							<i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
						</a>
						<ul class="submenu">
							<li><a href="#"><span class="menu-text">Adicionar novo</span></a></li>
							<li><a href="contacts.html"><span class="menu-text">Todos</span></a></li>
							<li><a href="contacts.html"><span class="menu-text">Pesquisar</span></a></li>
						</ul>
					</li>
-->

					<li class="menu-separator">
						<hr>
					</li>
<!--
					<li class="has-submenu">
						<a href="javascript:void(0)" class="submenu-toggle">
							<i class="menu-icon zmdi zmdi-pin zmdi-hc-lg"></i>
							<span class="menu-text">Maps</span>
							<i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
						</a>
						<ul class="submenu">
							<li><a href="map-google.html"><span class="menu-text">Google Maps</span></a></li>
							<li><a href="map-vector.html"><span class="menu-text">Vector Maps</span></a></li>
						</ul>
					</li>
-->

					
<!--
					<li class="has-submenu">
						<a href="javascript:void(0)" class="submenu-toggle">
							<i class="menu-icon zmdi zmdi-pages zmdi-hc-lg"></i>
							<span class="menu-text">Pages</span>
							<i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
						</a>
						<ul class="submenu">
							<li><a href="profile.html"><span class="menu-text">Profile</span></a></li>
							<li><a href="price.html"><span class="menu-text">Prices</span></a></li>
							<li><a href="invoice.html"><span class="menu-text">Invoice</span></a></li>
							<li><a href="gallery.1.html"><span class="menu-text">Gallery</span></a></li>
							<li><a href="gallery.2.html"><span class="menu-text">Gallery 2</span></a></li>
							<li><a href="support.html"><span class="menu-text">FAQ</span></a></li>
							<li class="has-submenu">
								<a href="javascript:void(0)" class="submenu-toggle">
									<i class="menu-icon zmdi zmdi-plus zmdi-hc-lg"></i>
									<span class="menu-text">Misc Pages</span>
									<i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
								</a>
								<ul class="submenu">
									<li><a href="login.html"><span class="menu-text">Login</span></a></li>
									<li><a href="signup.html"><span class="menu-text">Sign Up</span></a></li>
									<li><a href="password-forget.html"><span class="menu-text">Reset Password</span></a></li>
									<li><a href="unlock.html"><span class="menu-text">Unlock Screen</span></a></li>
									<li><a href="404.html"><span class="menu-text">404 Error</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
-->


<!--
					<li>
						<a href="documentation.html">
							<i class="menu-icon zmdi zmdi-file-text zmdi-hc-lg"></i>
							<span class="menu-text">Documentation</span>
						</a>
					</li>
-->

<!--
					<li>
						<a href="javascript:void(0)">
							<i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
							<span class="menu-text">Settings</span>
						</a>
						<ul class="submenu">
							<li><a href="profile.html"><span class="menu-text">Profile</span></a></li>
							<li><a href="price.html"><span class="menu-text">Prices</span></a></li>
							<li><a href="invoice.html"><span class="menu-text">Invoice</span></a></li>
							<li><a href="gallery.1.html"><span class="menu-text">Gallery</span></a></li>
							<li><a href="gallery.2.html"><span class="menu-text">Gallery 2</span></a></li>
							<li><a href="support.html"><span class="menu-text">FAQ</span></a></li>
							<li class="has-submenu">
								<a href="javascript:void(0)" class="submenu-toggle">
									<i class="menu-icon zmdi zmdi-plus zmdi-hc-lg"></i>
									<span class="menu-text">Misc Pages</span>
									<i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
								</a>
								<ul class="submenu">
									<li><a href="login.html"><span class="menu-text">Login</span></a></li>
									<li><a href="signup.html"><span class="menu-text">Sign Up</span></a></li>
									<li><a href="password-forget.html"><span class="menu-text">Reset Password</span></a></li>
									<li><a href="unlock.html"><span class="menu-text">Unlock Screen</span></a></li>
									<li><a href="404.html"><span class="menu-text">404 Error</span></a></li>
								</ul>
							</li>
						</ul>
					</li>

					<li>
						<a href="javascript:void(0)">
							<i class="menu-icon zmdi zmdi-language-javascript zmdi-hc-lg"></i>
							<span class="menu-text">Angular Version</span>
						</a>
					</li>
-->
				</ul><!-- .app-menu -->
			</div><!-- .menubar-scroll-inner -->
		</div><!-- .menubar-scroll -->
	</aside>