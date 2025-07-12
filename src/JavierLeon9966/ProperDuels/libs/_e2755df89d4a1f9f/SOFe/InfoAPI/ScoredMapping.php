<?php

declare(strict_types=1);

namespace JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\InfoAPI;

use Shared\SOFe\InfoAPI\Mapping;

use function array_filter;
use function array_unshift;
use function count;



























































final class ScoredMapping {
	public function __construct(
		public int $score,
		public Mapping $mapping,
	) {
	}
}