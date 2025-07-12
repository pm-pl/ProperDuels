<?php

declare(strict_types=1);

namespace JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\InfoAPI\Template;

use Closure;
use Generator;
use RuntimeException;
use JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\AwaitGenerator\Await;
use JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\AwaitGenerator\Traverser;

use function count;
use function implode;
use function is_string;



























































































































interface RenderedWatchElement extends RenderedElement {
	/**
	 * @return Traverser<string>
	 */
	public function watch() : Traverser;
}