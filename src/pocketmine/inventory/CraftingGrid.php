<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pocketmine\inventory;

use pocketmine\Player;

class CraftingGrid extends BaseInventory{

	public function __construct(Player $holder){
		parent::__construct($holder);
	}

	public function getDefaultSize() : int{
		return 4;
	}

	public function setSize(int $size){
		throw new \BadMethodCallException("Cannot change the size of a crafting grid");
	}

	public function getName() : string{
		return "Crafting";
	}

	public function sendSlot(int $index, $target){
		//we can't send a slot of a client-sided inventory window
	}

	public function sendContents($target){
		//no way to do this
	}
}