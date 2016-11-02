<?php
/**
 * 观察者接口
 *
 * @author Cui Keng
 * @since 1.0
 */

namespace design\patterns\behavioral\observer\construct;

interface Observer
{
	
    /**
     * 观察者要实现的唯一方法
     * 也是被 Subject 调用的方法
     *
     * @author cuikeng
     * @since 1.0
     */
    public function update();
	
}