<?php if(is_active_sidebar("sidebar-widget")): ?>
    <aside class="SidebarWidget">	
		<ul>
			<?php dynamic_sidebar("sidebar-widget"); ?>
		</ul>
	</aside>
<?php endif; ?>