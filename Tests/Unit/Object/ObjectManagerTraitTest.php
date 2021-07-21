<?php

namespace DWenzel\T3extensionTools\Tests\Unit\Object;

use DWenzel\T3extensionTools\Object\ObjectManagerTrait;
use Nimut\TestingFramework\TestCase\UnitTestCase;
use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\CMS\Extbase\Object\ObjectManager;

/***************************************************************
 *  Copyright notice
 *  (c) 2019 Dirk Wenzel <dirk.wenzel@cps-it.de>
 *  All rights reserved
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
class ObjectManagerTraitTest extends UnitTestCase
{
    /**
     * @var ObjectManagerTrait
     */
    protected $subject;

    /**
     * set up
     */
    public function setUp()
    {
        $this->subject = $this->getMockForTrait(
            ObjectManagerTrait::class
        );
    }

    /**
     * @test
     */
    public function objectManagerCanBeInjected()
    {
        /** @var ObjectManager|MockObject $objectManager */
        $objectManager = $this->getMockBuilder(ObjectManager::class)->disableOriginalConstructor()->getMock();

        $this->subject->injectObjectManager($objectManager);

        $this->assertAttributeSame(
            $objectManager,
            'objectManager',
            $this->subject
        );
    }
}
