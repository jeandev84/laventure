<?php
declare(strict_types=1);

namespace App\Generator\Dummy;

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
class DummyClassGenerator extends ClassGenerator
{

    /**
     * @inheritDoc
    */
    public function getNamespace(): string
    {
        return $this->config['dummy.prefix'];
    }




    /**
     * @inheritDoc
    */
    public function getBaseDir(): string
    {
        return $this->trimPath($this->config['dummy.dir']);
    }





    /**
     * @inheritDoc
    */
    public function getStubPath(): string
    {
        return __DIR__.'/stub/dummy.stub';
    }
}