<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category([
            'websiteId'=>1,
            'name'=>'Spice Rub',
            'sortOrder'=>1,
            'websitePath'=>'/Shop/SpiceRubs',
            'description'=>'Chef Howie created 3 Chefs In A Tub spice rubs and seasoning blends to bring professional flavor to home cooking. Very easy to use. Just season cook and serve. Made with all natural ingredients, dried herbs and mushrooms, spices, lemon, garlic, onion, brown sugar and kosher salt, no MSG or other chemical additives.',
            'imagePath'=>'/images/shop/spice-rubs/header.png',
   
            
        ]);
        $category->save();
        $category = new \App\Category([
            'websiteId'=>1,
            'name'=>'Cookbooks',
            'sortOrder'=>2,
            'websitePath'=>'/Shop/Cookbooks',
           
            'imagePath'=>'/images/shops/cookbooks/Cookbooks_Header.png',
           
            
        ]);
        $category->save();
        $category = new \App\Category([
            'websiteId'=>1,
            'name'=>'Baking Planks',
            'sortOrder'=>3,
            'websitePath'=>'/Shop/BakingPlanks',
           
            'imagePath'=>'/images/shops/baking-planks/BakingPlanks_Header.png',
           
            
        ]);
        $category->save();
        $category = new \App\Category([
            'websiteId'=>1,
            'name'=>'BBQ Planks',
            'sortOrder'=>4,
            'websitePath'=>'/Shop/BBQPlanks',
           
            'imagePath'=>'/images/shops/bbq-planks/BBQPlanks_Header.png',
           
            
        ]);
        $category->save();
        $category = new \App\Category([
            'websiteId'=>1,
            'name'=>'Nut Driver',
            'sortOrder'=>5,
            'websitePath'=>'/Shop/NutDriver',
           
            'imagePath'=>'/images/shop/nut-driver/Cookbooks_Header.png',
           
            
        ]);
        $category->save();
    }
}
