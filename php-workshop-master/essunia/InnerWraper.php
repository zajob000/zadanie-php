<div class="innerWrapper">
	<div class="leftSidebar">
		<?php
		?>
		<ul>
			<?php
		// TODO: podmień statyczne linki na te pobierane dynamicznie
		// z pages
		$catalog = scandir( __DIR__ .'/../pages');
		
				foreach($catalog as $item) {
					$ittt = str_replace(".php", "", $item);
					if (strlen($item)>2){ ?>
					    <li><a href="./pages/<?= $item; ?>"><?= $ittt; ?> </a></li>
                    <?php }
			}

		?>
		</ul>
			</div>
