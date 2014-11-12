<?php

namespace AG\Form\Types\Input;


class InputBasicsTest extends \PHPUnit_Framework_TestCase
{
    public function testVerificaSeOTipoDaClasseEstaCorreto()
    {
        $this->assertInstanceOf("\AG\Form\Types\Input\InputBasic", new \AG\Form\Types\Input\InputBasic('text','nome', new \AG\Form\Utils\Label('nome','Nome:')));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testVerificaSeOsParametrosEstaoCorretos()
    {
        new \AG\Form\Types\Input\InputBasic(0,1);
    }
} 