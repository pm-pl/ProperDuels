<?php

declare(strict_types=1);

namespace JavierLeon9966\ProperDuels\libs\_b680bb6a8dc4d618\muqsit\simplepackethandler;

use InvalidArgumentException;
use JavierLeon9966\ProperDuels\libs\_b680bb6a8dc4d618\muqsit\simplepackethandler\interceptor\IPacketInterceptor;
use JavierLeon9966\ProperDuels\libs\_b680bb6a8dc4d618\muqsit\simplepackethandler\interceptor\PacketInterceptor;
use JavierLeon9966\ProperDuels\libs\_b680bb6a8dc4d618\muqsit\simplepackethandler\monitor\IPacketMonitor;
use JavierLeon9966\ProperDuels\libs\_b680bb6a8dc4d618\muqsit\simplepackethandler\monitor\PacketMonitor;
use pocketmine\event\EventPriority;
use pocketmine\plugin\Plugin;

final class SimplePacketHandler{

	public static function createInterceptor(Plugin $registerer, int $priority = EventPriority::NORMAL, bool $handle_cancelled = false) : IPacketInterceptor{
		if($priority === EventPriority::MONITOR){
			throw new InvalidArgumentException("Cannot intercept packets at MONITOR priority");
		}
		return new PacketInterceptor($registerer, $priority, $handle_cancelled);
	}

	public static function createMonitor(Plugin $registerer, bool $handle_cancelled = false) : IPacketMonitor{
		return new PacketMonitor($registerer, $handle_cancelled);
	}
}