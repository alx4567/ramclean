<?php 
    foreach ($navItems as $item) {
        echo "<a href=\"$item[slug]\" class=\"$item[name]\">$item[title]</a>";
    }
?>