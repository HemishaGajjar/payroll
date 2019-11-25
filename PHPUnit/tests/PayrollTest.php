<?php

use PHPUnit\Framework\TestCase;

class PayrollTest extends TestCase
{
	 public function testCheckfirstdateofmonthisworkingday()
    {
        $payroll = new Payroll;
        
        $this->assertEquals($payroll->getFirstworkingDayOftheMonth(),'2019-11-01');
    }   

	public function testCheckfifteendateofmonthisworkingday()
    {
        $payroll = new Payroll;
        
        $this->assertEquals($payroll->getFifteenworkingDayOftheMonth(),'2019-11-17');
    }

	public function testChecklastdateofmonthisworkingday()
    {
        $payroll = new Payroll;
        
        $this->assertEquals($payroll->getLastworkingDayOftheMonth(),'2019-11-29');
    }	
	
	
}
?>