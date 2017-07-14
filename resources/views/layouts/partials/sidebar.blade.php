<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="dist/img/default-user.png" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>{{ ucwords(Auth::user()->name) }}</p>
				<a href="#"><i class="fa fa-circle text-success"></i> En Línea</a>
			</div>
		</div>
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MENU DE NAVEGACIÓN</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-briefcase"></i>
					<span>Personal</span>
					<span class="pull-right-container">
						<span class="label label-primary pull-right">4</span>
					</span>
				</a>
			</li>
			<li class="header">CONFIGURACIONES</li>
			<li><a href="#"><i class="fa fa-sitemap"></i> <span>Categorías</span></a></li>
			<li><a href="#"><i class="fa fa-star"></i> <span>Marcas</span></a></li>
			<li class="treeview">
	        	<a href="#">
		            <i class="fa fa-cog"></i>
		            <span>Mantenimiento</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
	          	</a>
	          	<ul class="treeview-menu" style="display: none;">
		            <li><a href="general.html"><i class="fa fa-circle-o text-yellow"></i> Bitácora</a></li>
		            <li><a href="icons.html"><i class="fa fa-circle-o text-aqua"></i> Restauraciones</a></li>
		            <li><a href="buttons.html"><i class="fa fa-circle-o text-info"></i> Usuarios</a></li>
	          	</ul>
        	</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>