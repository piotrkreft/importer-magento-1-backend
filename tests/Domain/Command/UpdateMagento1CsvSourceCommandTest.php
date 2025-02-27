<?php
/**
 * Copyright © Bold Brand Commerce Sp. z o.o. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Ergonode\ImporterMagento1\Tests\Domain\Command;

use Ergonode\Core\Domain\ValueObject\Language;
use Ergonode\ImporterMagento1\Domain\Command\UpdateMagento1CsvSourceCommand;
use Ergonode\SharedKernel\Domain\Aggregate\SourceId;
use PHPUnit\Framework\TestCase;

class UpdateMagento1CsvSourceCommandTest extends TestCase
{
    public function testCreation(): void
    {
        $id = $this->createMock(SourceId::class);
        $name = 'Any name';
        $defaultLanguage = $this->createMock(Language::class);
        $command = new UpdateMagento1CsvSourceCommand($id, $name, $defaultLanguage);
        self::assertEquals($id, $command->getId());
        self::assertEquals($name, $command->getName());
        self::assertEquals($defaultLanguage, $command->getDefaultLanguage());
    }
}
