<?php

declare(strict_types=1);

namespace JavierLeon9966\ProperDuels\libs\_45854326f445bd2c\SOFe\InfoAPI;

use Closure;
use Generator;
use pocketmine\event\Event;
use pocketmine\plugin\Plugin;
use pocketmine\world\Position;
use JavierLeon9966\ProperDuels\libs\_45854326f445bd2c\SOFe\AwaitGenerator\GeneratorUtil;
use JavierLeon9966\ProperDuels\libs\_45854326f445bd2c\SOFe\AwaitGenerator\Traverser;
use JavierLeon9966\ProperDuels\libs\_45854326f445bd2c\SOFe\PmEvent\Blocks;
use JavierLeon9966\ProperDuels\libs\_45854326f445bd2c\SOFe\PmEvent\Events;
use JavierLeon9966\ProperDuels\libs\_45854326f445bd2c\SOFe\Zleep\Zleep;

interface InitContext {
	/**
	 * @template E of Event
	 * @param class-string<E>[] $events
	 * @param Closure(E): string $interpreter
	 * @return Traverser<E>
	 */
	public function watchEvent(array $events, string $key, Closure $interpreter) : Traverser;

	/**
	 * @return Traverser<null>
	 */
	public function watchBlock(Position $position) : Traverser;

	/**
	 * @return Generator<mixed, mixed, mixed, void>
	 */
	public function sleep(int $ticks) : Generator;
}