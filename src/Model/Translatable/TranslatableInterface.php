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

interface TranslatableInterface
{
    /**
     * Returns collection of translations.
     *
     * @return ArrayCollection
     */
    public function getTranslations();

    /**
     * Returns collection of new translations.
     *
     * @return ArrayCollection
     */
    public function getNewTranslations();

    /**
     * Adds new translation.
     *
     * @param Translation $translation The translation
     *
     * @return $this
     */
    public function addTranslation($translation);

    /**
     * Removes specific translation.
     *
     * @param Translation $translation The translation
     */
    public function removeTranslation($translation);

    /**
     * Returns translation for specific locale (creates new one if doesn't exists).
     * If requested translation doesn't exist, it will first try to fallback default locale
     * If any translation doesn't exist, it will be added to newTranslations collection.
     * In order to persist new translations, call mergeNewTranslations method, before flush
     *
     * @param string $locale The locale (en, ru, fr) | null If null, will try with current locale
     * @param bool $fallbackToDefault Whether fallback to default locale
     *
     * @return Translation
     */
    public function translate($locale = null, $fallbackToDefault = true);

    /**
     * Merges newly created translations into persisted translations.
     */
    public function mergeNewTranslations();

    /**
     * @param mixed $locale the current locale
     */
    public function setCurrentLocale($locale);


    public function getCurrentLocale();

    /**
     * @param mixed $locale the default locale
     */
    public function setDefaultLocale($locale);


    public function getDefaultLocale();

    /**
     * Returns translation entity class name.
     *
     * @return string
     */
    public static function getTranslationEntityClass();
}