<?php
/**
 * 观察者模式单元测试
 *
 * @author Cui Keng
 * @since 1.0
 */

namespace design\patterns\behavioral\observer\tests;

use design\patterns\behavioral\observer\ConcreteObserver;
use design\patterns\behavioral\observer\ConcreteSubject;

class ObserverTest extends \PHPUnit_Framework_TestCase
{
    
    /**
     * 测试观察者模式通知动作
     *
     * @author cuikeng
     * @since 1.0
     */
    public function testConcreteObserverBeingNotified()
    {
        $concreteObserver = new ConcreteObserver();
        $concreteSubject = new ConcreteSubject();
        
        $concreteSubject->registerObserver($concreteObserver);
        $concreteSubject->notifyObservers();
        
        $this->assertEquals(true, $concreteObserver->notified);
    }
    
}