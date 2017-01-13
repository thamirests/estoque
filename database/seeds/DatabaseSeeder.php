<?php

use Illuminate\Database\Seeder;
use estoque\Categoria;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaTableSeeder::class);
    }
}

/**
* 
*/
/*class CategoriasTableSeeder extends Seeder
{
	public function run(){

		Categorias::create(['nome'=>'ELETRODOMESTICO']);
		Categorias::create(['nome'=>'ELETRONICO']);
		Categorias::create(['nome'=>'BRINQUEDO']);
		Categorias::create(['nome'=>'ESPORTES']);
	}
	
	function __construct(argument)
	{
		# code...
	}
}*/