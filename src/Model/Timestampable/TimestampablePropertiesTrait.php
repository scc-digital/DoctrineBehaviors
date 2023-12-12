<?php

declare(strict_types=1);

namespace Knp\DoctrineBehaviors\Model\Timestampable;

use Doctrine\ORM\Mapping as ORM;
use DateTimeInterface;

trait TimestampablePropertiesTrait
{
    #[ORM\Column(type: 'datetime', nullable: true)]
    protected DateTimeInterface $createdAt;

    #[ORM\Column(type: 'datetime', nullable: true)]
    protected DateTimeInterface $updatedAt;
}
