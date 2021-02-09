<?php>
use pocketmine\plugin\PluginBase;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\player\PlayerQuitEvent;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

use pocketmine\utils\TextFormat as C;

class Inactive-to-ReactiveExample extends PluginBase implements Listener{

          public function onLoad(){
                    $this->getLogger()->info("Plugin Loading");
          }
          public function onEnable(){
                    $this->getServer()->getPluginManager()->registerEvents($this,$this);
		    $this->getLogger()->info("Enabled Plugin");
          }
          public function onDisable(){
                    $this->getLogger()->info("Plugin Disabled");
          }
	  public function onJoin(PlayerJoinEvent $event){
  		 $player = $event->getPlayer();
   		$name = $player->getName();
   		$this->getServer()->broadcastMessage(C::GREEN."Please Welcome §l§1$name§r§a To The Server");
	}
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
      if($sender->hasPermission("adminChat.useAdminChat")){
          if($cmd->getName() == "ao"){
               $sender->sendMessage("[AO] $sender > $args");
          }
          return true;
      }
     }
}
</?php>
