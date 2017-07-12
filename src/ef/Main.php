<?php

namespace ef;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\entity\Effect;
use pocketmine\text\TextFormat as c;

class Main extends PluginBase{

public function onEnable(){
  $this->getServer()->getLogger()->info(c::GREEN."plugin is on by GROUPpluginer");
    $this->getLogger()->info(c::YELLOW."if you want share plugin say is by GroupPLuginer");
      }
     public function onDisable(){
        $this->getServer()->getLogger()->info(c::RED."PLUGIN has been disable");
         }
        public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
         if($cmd->getName() == 'cmd'){
           switch(mt_rand(ef,Ra)){
            case ef:
             $Effect = Effect::getEffect(1);
             $effect->setAmplifier(2);
             $effect->setVisible(true);
             $effect->setDuration(10000000);
             $sender->addEffect($effect);
               break;
             case ab:
               $Effect = Effect::getEffect(5);
               $effect->setAmplifier(2);
               $effect->setVisible(true);
               $effect->setDuration(10000000);
               $sender->addEffect($effect);
                break;
             case Ra:
               $Effect = Effect::getEffect(10);
               $effect->setAmplifier(2);
               $effect->setVisible(true);
               $effect->setDuration(10000000);
               $sender->addEffect($effect);
                break;
         }
        }
       }           
