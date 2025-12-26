<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Tests;

use App\Entity\Visite;
use DateTime;
use PHPUnit\Framework\TestCase;

/**
 * Description of VisiteTest
 *
 * @author lil2n
 */
class VisiteTest extends TestCase{
    
    public function testGetDatecreationString() {
        $visite = new Visite();
        $visite->setDatecreation(new \DateTime("2025-12-26"));
        $this->assertEquals("26/12/2025", $visite->getDatecreationString());        
    }
}
