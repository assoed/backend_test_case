<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;

class UpdateClosureTable extends Command
{
    protected $signature = 'closure-table:update';
    protected $description = 'Update the category_closure table';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $category = new Category();
        $category->updateClosureTable();
        $this->info('Category closure table has been updated.');
    }
}
