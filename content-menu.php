<?php 
$menu = get_field('menu_item'); 
?>  

<div class="navigation">
		<ul class="menu-ul">
		<?php
			if($menu){
				foreach($menu as $item){ ?>
					<style>
						#<?php echo $item['slug']; ?> a
						{	background: url('<?php echo $item["image"]["url"]; ?>');
							background-size: cover; }
					</style>
						<li class="custom-menu nav" id="<?php echo $item['slug']; ?>">
							<a href="<?php echo $item['page']; ?>"><?php echo $item['name']; ?></a>							
						</li>
			<?php		}
				}
		?>
		</ul>
	</div>