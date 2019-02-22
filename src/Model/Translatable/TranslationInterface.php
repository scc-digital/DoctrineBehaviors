<?php

/*
 * This file is part of the KnpDoctrineBehaviors package.
 *
 * (c) KnpLabs <http://knplabs.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Knp\DoctrineBehaviors\Model\Translatable;

use Doctrine\Common\Collections\ArrayCollection;

interface TranslationInterface
{
    /**
     * Returns object id.
     *
     * @return mixed
     */
    public function getId();

    /**
     * Sets entity, that this translation should be mapped to.
     *
     * @param Translatable $translatable The translatable
     *
     * @return $this
     */
    public function setTranslatable($translatable);

    /**
     * Returns entity, that this translation is mapped to.
     *
     * @return Translatable
     */
    public function getTranslatable();

    /**
     * Sets locale name for this translation.
     *
     * @param string $locale The locale
     *
     * @return $this
     */
    public function setLocale($locale);

    /**
     * Returns this translation locale.
     *
     * @return string
     */
    public function getLocale();

    /**
     * Tells if translation is empty
     *
     * @return bool true if translation is not filled
     */
    public function isEmpty();
}