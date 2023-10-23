<?php 
use App\Models\Menu;
$mod_mainmenu = Menu::where([['status','=',1],['position','=','mainmenu'],['parent_id','=',$rowmenu->id]])
         ->orderBy('sort_order','ASC')
         ->get();
        // $rowmenu
?>
<?php if(count($mod_mainmenu)>0):?>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-white" href="<?=$rowmenu->link;?>" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <?=$rowmenu->name;?>
    </a>
    <ul class="dropdown-menu">
        <?php foreach($mod_mainmenu as $rowmenu1):?>
        <li><a class="dropdown-item text-main" href="$rowmenu1->link;?>"><?=$rowmenu1->name;?></a>
        </li>
        <?php endforeach;?>
    
    </ul>
</li>
<?php else :?>
    <li class="nav-item">
    <a class="nav-link text-white" href="<?=$rowmenu->link;?>"><?=$rowmenu->name;?></a>
</li>
<?php endif ;?>

