<?php
/**
 * Created by PhpStorm.
 * User: tokai
 * Date: 2018/03/18
 * Time: 19:51
 */

namespace bochi\event\quest;


use bochi\quest\Quest;
use pocketmine\Player;

class EntryQuestEvent extends QuestEvent
{
    public static $handlerList;

    public function __construct(Player $player, Quest $quest)
    {
        parent::__construct($player, $quest);
    }
}