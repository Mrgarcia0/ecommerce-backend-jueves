<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria_electro = new Category();
        $categoria_electro ->name =  "Electrodomestico";
        $categoria_electro -> description = "Esta es la categoria de electrodomesticos...";
        $categoria_electro -> save();

        $categoria_2 = new Category();
        $categoria_2 ->name =  "Ropa";
        $categoria_2 -> description = "Esta es la categoria de ropa...";
        $categoria_2 -> save();
    }
}
