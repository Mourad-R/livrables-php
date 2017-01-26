<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {

    public static function createMyWarrior() {
        $MyWarrior = new  StartrekWarrior($GLOBALS['warriorID']);
        $MyWarrior->SetImageUrl('http://wallsdream.com/uploads/originals/2016/08/31/video-games-league-of-legends-weapons-video-lance-red-eyes-running-warriors-arrows-helmets-glowing-eyes-pantheon-game-shields-6Bzn.jpg');
        $arme = new Weapon('lance', 100);
    	$arme->SetImageUrl('http://img.xooimage.com/files72/9/8/e/javelot-2b0ba91.jpg');
        $MyWarrior->SetWeapon($arme);
        $MyWarrior->SaveNew();
    }

    public static function createOtherWarrior() {

    	$OtherWarrior = new MarvelWarrior('Billy');
    	$OtherWarrior->SetImageUrl('http://www.desktopwallpaperhd.net/thumbs/3/1/warrior-mysterious-girl-which-game-female-legend-answer-gamersroute-wouldnt-found-34465.jpg');
    	$arme = new Weapon('Revolver', 80);
    	$arme->SetImageUrl('http://t1.gstatic.com/images?q=tbn:ANd9GcQmWvB98t_ZyV5l4orPL3NOPCm3btg1mCceDQeWLhN0xAZWdZYiaFb4FTA');
    	$OtherWarrior->SetWeapon($arme);
        $OtherWarrior->SaveNew();

    }

  }
