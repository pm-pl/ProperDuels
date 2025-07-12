<?php

declare(strict_types=1);

namespace JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\InfoAPI\Template;

use Closure;
use pocketmine\command\CommandSender;
use RuntimeException;
use Shared\SOFe\InfoAPI\Mapping;
use Shared\SOFe\InfoAPI\Parameter;
use JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\AwaitGenerator\Traverser;
use JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\InfoAPI\Ast;
use JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\InfoAPI\Ast\MappingCall;
use JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\InfoAPI\Pathfind;
use JavierLeon9966\ProperDuels\libs\_e2755df89d4a1f9f\SOFe\InfoAPI\ReadIndices;

use function array_keys;
use function array_map;
use function count;
use function implode;
use function json_decode;
use function range;
use function sprintf;


































































































































































































































































/**
 * @template R of RenderedElement
 */
interface EvalChain extends NestedEvalChain {
	/**
	 * Returns a RenderedElement that performs the steps executed in this chain so far.
	 *
	 * @return R
	 */
	public function getResultAsElement() : RenderedElement;
}