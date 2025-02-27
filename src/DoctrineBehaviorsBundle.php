<?php

declare(strict_types=1);

namespace Knp\DoctrineBehaviors;

use Knp\DoctrineBehaviors\Bundle\DependencyInjection\DoctrineBehaviorsExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class DoctrineBehaviorsBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new DoctrineBehaviorsExtension();
    }
}
