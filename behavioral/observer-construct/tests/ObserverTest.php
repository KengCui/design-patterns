<?php
/**
 * 观察者模式单元测试
 *
 * @author Cui Keng
 * @since 1.0
 */

namespace design\patterns\behavioral\observer\construct\tests;

use design\patterns\behavioral\observer\construct\ConcreteSubject;
use design\patterns\behavioral\observer\construct\ConcreteObserver;

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
        $concreteSubject = new ConcreteSubject();
        $concreteObserver = new ConcreteObserver($concreteSubject);

        $concreteSubject->notifyObservers();
        
        $this->assertEquals(true, $concreteObserver->notified);
    }
    
}