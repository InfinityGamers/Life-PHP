<?php
namespace InfinityGamers\Life;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase {
 public function onEnable(){ 
  @mkdir($this->getDataFolder());
  $this->saveDefaultConfig();
  $this->config = new Config($this->getDataFolder() . 'config.yml', CONFIG::YAML);
 }
}
