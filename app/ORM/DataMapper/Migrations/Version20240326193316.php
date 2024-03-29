<?php
declare(strict_types=1);

namespace App\ORM\DataMapper\Migrations;

use Laventure\Component\Database\Schema\Blueprint\Blueprint;
use Laventure\Component\Database\Schema\Migration\Migration;
use Laventure\Component\Database\Schema\SchemaInterface;


/**
 * Version20240326193316
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package  App\ORM\DataMapper\Migrations
 *
 * <Generated By Laventure 26/03/2024 19:33:16>
*/
class Version20240326193316 extends Migration
{

    /**
     * @inheritDoc
    */
    public function up(SchemaInterface $schema): void
    {
           $schema->create('categories', function (Blueprint $table) {
               $table->id();
               $table->string('title');
           });
    }




    /**
     * @inheritDoc
    */
    public function down(SchemaInterface $schema): void
    {
          $schema->drop('categories');
    }
}