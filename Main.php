<?php

namespace Rubikminecraft\Test Plugin;

use pocketmine\server;
use pocketmine\player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;
use pocketmine\event\PlayerJoinEvent;

use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener {

   public funtion onEnable () {
        $this->getserver()->getPluginManager()->registerEvents($this, $this);
   }



}