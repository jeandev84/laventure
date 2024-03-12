<?php
declare(strict_types=1);

namespace App\Console\Commands;

use Laventure\Component\Console\Command\Command;
use Laventure\Component\Console\Input\InputInterface;
use Laventure\Component\Console\Output\OutputInterface;


/**
 * BarTestCommand
 *
 * @package App\Console\Commands
 *
 * <Generated By Laventure 12/03/2024 16:48:18>
*/
class BarTestCommand extends Command
{

    /**
     * @var string
    */
    protected $name = 'bar:test';



    /**
     * @var array
    */
    protected array $description = [
       "bar:test description ..."
    ];





    /**
     * @inheritDoc
    */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        // put your logic here

        $output->success("You are ready for execution <bar:test>");

        return Command::SUCCESS;
    }
}