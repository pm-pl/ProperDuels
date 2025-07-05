<?php

declare(strict_types=1);

namespace JavierLeon9966\ProperDuels\libs\_a3e67a8444f8d3fb\SOFe\InfoAPI;

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