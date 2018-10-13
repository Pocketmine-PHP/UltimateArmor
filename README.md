# UltimateArmor
The Ultimate Armor for pmmp servers
A cheatless Armor xD

#### BY : https://github.com/Pocketmine-PHP
##### This Armor give ou effect when you equip it
Basics configs
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
