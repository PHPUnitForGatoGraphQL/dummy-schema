<?php

declare(strict_types=1);

namespace PHPUnitForGatoGraphQL\DummySchema\DirectiveResolvers;

use PoP\ComponentModel\TypeResolvers\RelationalTypeResolverInterface;

class HelloWorldVersion010FieldDirectiveResolver extends AbstractHelloWorldFieldDirectiveResolver
{
    public function getPriorityToAttachToClasses(): int
    {
        // Higher priority => Process earlier
        return 20;
    }

    public function getDirectiveVersion(RelationalTypeResolverInterface $relationalTypeResolver): ?string
    {
        return '0.1.0';
    }
}
