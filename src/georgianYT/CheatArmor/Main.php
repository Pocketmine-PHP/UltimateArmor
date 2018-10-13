<?php
  
namespace georgianYT\CheatArmor;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\scheduler\PluginTask;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\entity\EntityArmorChangeEvent;
use pocketmine\Player;
use pocketmine\entity\EffectInstance;
use pocketmine\entity\Effect;
use pocketmine\item\Item;
use pocketmine\inventory\PlayerInventory;
use pocketmine\inventory\ArmorInventory;


class Main extends PluginBase implements Listener{

	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
  }

  public function onLoad() {
    	$this->getLogger()->info(TF::GREEN . "Loading...");
  }

  public function onArmorChange(EntityArmorChangeEvent $ev){
  	$player = $ev->getEntity();
    $Nid = $ev->getNewItem()->getID();
    $Oid = $ev->getOldItem()->getID();

    if($player instanceof Player){
    //Helmet
    if($Nid === 302){
 $eff = new EffectInstance(Effect::getEffect(Effect::RESISTANCE) , 2 * 999999, 2, true);
$player->addEffect($eff);
      
    }elseif($Oid === 302){
      $player->removeEffect(11);
    }
    
    //Chestplate
    if($Nid === 303){
 $eff = new EffectInstance(Effect::getEffect(Effect::STRENGTH) , 1 * 999999, 1, true);
$player->addEffect($eff);
      
    }elseif($Oid === 303){
      $player->removeEffect(5);
    }
    
    //Leggings
    if($Nid === 304){
 $eff = new EffectInstance(Effect::getEffect(Effect::HEALTH_BOOST) , 5 * 99999, 5, true);
$player->addEffect($eff);
      
    }elseif($Oid === 304){
      $player->removeEffect(21);
    }
    
    //boots
    if($Nid === 305){
 $eff = new EffectInstance(Effect::getEffect(Effect::SPEED) , 1 * 999999, 1, true);
$player->addEffect($eff);
 $eff = new EffectInstance(Effect::getEffect(Effect::FIRE_RESISTANCE) , 2 * 999999, 2, true);
$player->addEffect($eff);
      
    }elseif($Oid === 305){
      $player->removeEffect(1);
      $player->removeEffect(12);
    }
  }
}
}
