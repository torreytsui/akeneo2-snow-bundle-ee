<?php

namespace Snowio\Bundle\CsvConnectorEeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Pim\Bundle\EnrichBundle\DependencyInjection\Reference\ReferenceFactory;

/**
 * Class SnowioCsvConnectorBundleEe
 * @package Snowio\Bundle\SnowioCsvConnectorBundleEe
 * @author A Hill <ah@amp.co>
 *
 * This Bundle is used to create new csv export jobs that are applicable to Enterprise Edition Akeneo
 * Allows to export published products
 *
 */
class SnowioCsvConnectorEeBundle extends Bundle
{
    /** Increment the version number if exported data has BC break changes. */
    const VERSION = 1;
}
