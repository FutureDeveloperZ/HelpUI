<?help

namespace ShopUI;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
//*Must Have FormAPI to Work*//
use jojoe77777\FormAPI;

class Main extends PluginBase implements Listener{

   public function onEnable() {
       $this->getLogger()->Info("HelpUI is ready to Help")
       $this->getServer()->getPluginManager()->registerEvents($this, $this);
   }
  
   public funtion onDisable() {
       $this->getLogger()->Info("HelpUI has been Disable WHYY")
   }
  
   public funtion onCommand(CommandSender $sender, Command
