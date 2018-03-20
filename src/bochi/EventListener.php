<?php
/**
 * Created by PhpStorm.
 * User: tokai
 * Date: 2018/03/18
 * Time: 20:06
 */

namespace bochi;

use bochi\event\quest\EntryQuestEvent;
use bochi\utils\Display;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\Server;

class EventListener implements Listener
{

    public function __construct()
    {
        BochiCore::getInstance()->getServer()->getPluginManager()->registerEvents($this, BochiCore::getInstance());
    }

    public function onPlayerLogin(PlayerLoginEvent $ev) {
        BochiCore::getInstance()->loginPlayer($ev);
    }

    public function onPlayerEntryQuest(EntryQuestEvent $ev) {
    }
}