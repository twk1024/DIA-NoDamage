<?php

namespace dokidia;

use pocketmine\Player;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class NoDamage extends PluginBase implements Listener {

      public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
  
      public function NoDamage(EntityDamageEvent $damage){
        
       $damage->setCancelled(true);
      }
}
