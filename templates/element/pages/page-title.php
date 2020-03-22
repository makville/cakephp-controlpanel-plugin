<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="<?= isset($icon) ? $icon : ''; ?> icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>
                <?= isset($heading) ? $heading : '';?>
                <div class="page-title-subheading"><?= isset($subHeading) ? $subHeading : ''; ?></div>
            </div>
        </div>
        <?php if(isset($actions)): ?>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-ellipsis-v fa-w-20"></i>
                    </span>
                    More
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <?php foreach ($actions as $name => $path): ?>
                        <li class="nav-item">
                            <?= $this->Html->link("<i class='nav-link-icon'></i><span>$name</span>", $path, ['escape' => false, 'class' => 'nav-link']); ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>    
        <?php endif; ?>
    </div>
</div>