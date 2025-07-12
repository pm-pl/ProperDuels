<?php

declare(strict_types=1);

namespace JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\InfoAPI;

use Closure;
use Generator;
use pocketmine\event\Event;
use pocketmine\plugin\Plugin;
use pocketmine\world\Position;
use JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\AwaitGenerator\GeneratorUtil;
use JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\AwaitGenerator\Traverser;
use JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\PmEvent\Blocks;
use JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\PmEvent\Events;
use JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\Zleep\Zleep;















































final class MockInitContext implements InitContext {
	public function watchEvent(array $events, string $key, Closure $interpreter) : Traverser {
		return new Traverser(GeneratorUtil::empty());
	}

	public function watchBlock(Position $position) : Traverser {
		return new Traverser(GeneratorUtil::empty());
	}

	public function sleep(int $ticks) : Generator {
		return GeneratorUtil::pending();
	}
}