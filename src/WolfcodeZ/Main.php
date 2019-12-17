<?php

namespace WolfcodeZ;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getLogger()->info("Die JoinMessages wurden erfolgreich überschrieben");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onJoin(PlayerJoinEvent $event)
    {
        $player = $event->getPlayer();
        if ($player->isOp()) {
            $event->setJoinMessage(" ");
        } else {
            $event->setJoinMessage(" ");
        }
    }

    public function onQuit(PlayerQuitEvent $event)
    {
        $player = $event->getPlayer();
        if ($player->isOp()){
            $event->setQuitMessage(" ");
        } else {
            $event->setQuitMessage(" ");
        }
    }
}