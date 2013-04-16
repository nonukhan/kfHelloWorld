<?php

/**
 * kfHelloWorld
 *
 * @author Team phpManufaktur <team@phpmanufaktur.de>
 * @link https://kit2.phpmanufaktur.de
 * @copyright 2013 Ralf Hertsch <ralf.hertsch@phpmanufaktur.de>
 * @license MIT License (MIT) http://www.opensource.org/licenses/MIT
 */

namespace thirdParty\HelloWorld\Control;


class Sample06 {
    
    /**
     * Return "Hello World" and the __METHOD__ name
     * 
     * @return string
     */
    public function sayHello()
    {
        return 'Hello World, this is '.__METHOD__;
    }
}