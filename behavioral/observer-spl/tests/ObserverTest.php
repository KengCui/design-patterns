<?php
/**
 * 观察者模式单元测试
 *
 * @author Cui Keng
 * @since 1.0
 */

namespace design\patterns\behavioral\observer\spl\tests;

use design\patterns\behavioral\observer\spl\ConcreteSubject;
use design\patterns\behavioral\observer\spl\ConcreteObserver;

class ObserverTest extends \PHPUnit_Framework_TestCase
{
    
    public function testConcreteObserverBeingNotified()
    {
        $concreteObserver = new ConcreteObserver();
        $concreteSubject = new ConcreteSubject();
        
        $concreteSubject->attach($concreteObserver);
        $concreteSubject->notify();
        
        $this->assertEquals(true, $concreteObserver->notified);
    }
    
}