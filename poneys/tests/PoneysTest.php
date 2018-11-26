<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    /**
     * addPoneyFromField
     *
     * @return void
     */
    public function testaddPoneyFromField()
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->addPoneyFromField(3);

        // Assert
        $this->assertEquals(11, $Poneys->getCount());
    }

    /**
     * RemovePoneyFromField
     *
     * @return void
     */
    public function testRemovePoneyFromField()
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->removePoneyFromField(3);

        // Assert
        $this->assertEquals(5, $Poneys->getCount());
    }

    /**
     * RemoveExceptionPoneyFromField
     *
     * @return void
     */
    public function testRemoveExceptionPoneyFromField()
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->removePoneyFromField(16);

        // Assert
        $this->expectException(InvalidArgumentException::class);

    }

    /**
     * RemoveDataProviderPoneyFromField
     *
     * @dataProvider DataProviderPoneyFromField
     */
    public function testRemoveDataProviderPoneyFromField($number, $expected)
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->removePoneyFromField($number);

        // Assert
        $this->assertEquals($expected, $Poneys->getCount());
    }

    public function DataProviderPoneyFromField()
    {
        return [
            [1, 7],
            [2, 6]
        ];
    }

    /**
     * MockGetNames
     *
     * @return array
     */
    public function testMockGetNames()
    {
        // Assert
        $this->assertInternalType('array', $stub->getNames());
    }

}
?>
