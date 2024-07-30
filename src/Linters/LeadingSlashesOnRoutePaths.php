<?php

namespace Tighten\TLint\Linters;

use Closure;
use PhpParser\Node;
use Tighten\TLint\BaseLinter;
use Tighten\TLint\Linters\Concerns\LintsRoutesFiles;

class LeadingSlashesOnRoutePaths extends BaseLinter
{
    use LintsRoutesFiles;

    public const DESCRIPTION = 'Leading slashes on route paths.';

    protected function visitor(): Closure
    {
        return static function (Node $node) {
            return $node instanceof Node\Expr\StaticCall
                && ($node->class instanceof Node\Name && $node->class->toString() === 'Route')
                && isset($node->args[0])
                && $node->args[0]->value instanceof Node\Scalar\String_
                && ! str_starts_with($node->args[0]->value->value, '/');
        };
    }
}
