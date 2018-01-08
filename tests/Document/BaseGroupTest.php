<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\UserBundle\Tests\Document;

use PHPUnit\Framework\TestCase;
use Sonata\UserBundle\Document\BaseGroup;

class BaseGroupTest extends TestCase
{
    public function testToString()
    {
        // Given
        $group = new BaseGroup('Group');

        // When
        $string = (string) $group;

        // Then
        $this->assertEquals('Group', $string, 'Should return the group name as string representation');
    }
}
