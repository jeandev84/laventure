<?php
declare(strict_types=1);

namespace App\Console\Commands;

use Laventure\Component\Console\Command\Command;
use Laventure\Component\Console\Input\InputInterface;
use Laventure\Component\Console\Output\OutputInterface;


/**
 * DummyCommand
 *
 * @package App\Console\Commands
 *
 * <Generated By Laventure 12/03/2024 15:40:03>
*/
class DummyCommand extends Command
{

    /**
     * @var string
    */
    protected $name = 'dummy';



    /**
     * @var array
    */
    protected array $description = [
       "dummy description ..."
    ];





    /**
     * @inheritDoc
    */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        // put your logic here

        $output->success("You are ready for execution <dummy>");

        return Command::SUCCESS;
    }
}