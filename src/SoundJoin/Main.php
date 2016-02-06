<?php

namespace SoundJoin;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Events extends PluginBase implements Listener{

public function onEnable() {
$this->getServer()->getPluginManager()->registerEvents($this, $this);
}

public function onJoin(PlayerJoinEvent $event){
       $message = $this->getConfig()->get("JoinMessage") // So it can pull the users config (Message) via config ;) 
$event->getPlayer->sendMessage("$JoinMessage");
}
}
