<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Image\Fixtures;

class Loader
{
    public static function getFixture($path)
    {
        $path = sprintf(__DIR__.'/Resources/'.$path);

        if (!file_exists($path)) {
            throw new \InvalidArgumentException(sprintf('Fixture %s not found', $path));
        }

        return $path;
    }
}
