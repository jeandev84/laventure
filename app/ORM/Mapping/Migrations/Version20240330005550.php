<?php
declare(strict_types=1);

namespace App\ORM\Mapping\Migrations;

use Laventure\Component\Database\Schema\Blueprint\Blueprint;
use Laventure\Component\Database\Schema\Constraints\Contract\ForeignKeyInterface;
use Laventure\Component\Database\Schema\Migration\Migration;
use Laventure\Component\Database\Schema\SchemaInterface;


/**
 * Version20240330005550
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @package  App\ORM\Mapping\Migrations
 *
 * <Generated By Laventure 30/03/2024 00:55:50>
*/
class Version20240330005550 extends Migration
{

    /**
     * @inheritDoc
    */
    public function up(SchemaInterface $schema): void
    {
           $schema->create('books', function (Blueprint $table) {
               $table->id();
               $table->string('title');
               $table->text('description');
               $table->float('price')->default(0);
               $table->bigIntegerNullable('user_id');
               $table->foreign('user_id', function (ForeignKeyInterface $foreign) {
                   return $foreign->references('id')->on('users')->onDelete();
               });
           });
    }




    /**
     * @inheritDoc
    */
    public function down(SchemaInterface $schema): void
    {
         $schema->drop('books');
    }
}