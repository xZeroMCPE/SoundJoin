<?php

namespace SoundJoin;

use BukkitPE\plugin\PluginBase;
use BukkitPE\event\Listener;
use BukkitPE\event\player\PlayerJoinEvent;
use BukkitPE\level\sound\Sound
use BukkitPE\level\sound\PopSound
use BukkitPE\utils\Config;

class Events extends PluginBase implements Listener{

public function onEnable() {
$this->getServer()->getPluginManager()->registerEvents($this, $this);
       $this->saveDefaultConfig();
        $this->getLogger()->info("[SoundMessage] Plugin has been enabled");
}

public function onJoin(PlayerJoinEvent $event){
       $JoinMessage = $this->getConfig()->get("JoinMessage"); // So it can pull the users config (Message) via config :)
        $Sound =$this->getConfig()->get("Sound");  // So it can pull the sound the user wants
        $player = $event->getPlayer();
        $event->getPlayer->sendMessage("$JoinMessage");
        $player->getLevel()->addSound(new $Sound($player), [$player]);
}
}