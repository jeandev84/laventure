<?php
declare(strict_types=1);

namespace App\Generator\Demo;

use Laventure\Foundation\Generator\Class\ClassGenerator;

/**
 * DefaultClassGenerator
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  Laventure\Foundation\Generator\Class\ClassGenerator
*/
class DemoClassGenerator extends ClassGenerator
{

    /**
     * @inheritDoc
    */
    public function getNamespace(): string
    {
        return $this->config['demo.prefix'];
    }




    /**
     * @inheritDoc
    */
    public function getBaseDir(): string
    {
        return $this->trimPath($this->config['demo.dir']);
    }





    /**
     * @inheritDoc
    */
    public function getStubPath(): string
    {
        return __DIR__.'/stub/demo.stub';
    }
}