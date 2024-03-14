<?php
declare(strict_types=1);

namespace App\ORM\Persistence\Migrations;

use Laventure\Component\Database\Schema\Blueprint\Blueprint;
use Laventure\Component\Database\Schema\Migration\Migration;
use Laventure\Component\Database\Schema\SchemaInterface;

/**
 * Version20240314140614
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\ORM\Mapper\Migrations
*/
class Version20240314140614 extends Migration
{

    /**
     * @inheritDoc
    */
    public function up(SchemaInterface $schema): void
    {
         /*
          $schema->create('users', function (Blueprint $table) {
             $table->increments('id');
             // ...
          });
         */
    }




    /**
     * @inheritDoc
    */
    public function down(SchemaInterface $schema): void
    {
        /*
         $schema->dropIfExists('users');
        */
    }
}