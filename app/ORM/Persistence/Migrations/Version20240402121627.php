<?php
declare(strict_types=1);

namespace App\ORM\Persistence\Migrations;

use Laventure\Component\Database\Schema\Blueprint\Blueprint;
use Laventure\Component\Database\Schema\Migration\Migration;
use Laventure\Component\Database\Schema\SchemaInterface;


/**
 * Version20240402121627
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package  App\ORM\Persistence\Migrations
 *
 * <Generated By Laventure 02/04/2024 12:16:27>
*/
class Version20240402121627 extends Migration
{

    /**
     * @inheritDoc
    */
    public function up(SchemaInterface $schema): void
    {
           $schema->update('users', function (Blueprint $table) {
               $table->string('some_column_to_delete')->nullable();
               $table->string('some_column_to_rename')->nullable();
           });
    }




    /**
     * @inheritDoc
    */
    public function down(SchemaInterface $schema): void
    {
           $schema->drop('users');
    }
}