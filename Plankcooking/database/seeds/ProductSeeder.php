<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //spices
        $product = new \App\Product([
            'categoryId'=>1,
            'name'=>'Ancho Chili Rub',
            'description'=>'Just a little spice, the Ancho Chili Rub has a rich-smoky chili flavor, with a very mild heat. Use it on chicken, pork, salmon, prawns, and ribs. The smoked ancho chili adds a smoky richness to the blend while the chipotle chili adds just a little zip. ',
            'price'=>6.00,
            'priceDescription'=>'NET WT. 3.65 oz\'s',
            'sortOrder'=>1,
            'active'=> true,
            'ounces'=> 3.65,
            'imagePath'=>'/images/shop/spice-rubs/ancho.png',
            'handlingCost'=>0.0,
            'taxExempt'=>true,
            'sku'=>'5a4a2db9-234a-4d90-ae42-a83ef6f93923',

        ]);
        $product->save();
        $product = new \App\Product([
            'categoryId'=>1,
            'name'=>'Salmon Rub',
            'description'=>'Chef Howie’s Original Signature Salmon Rub works great with the cedar, alder or BBQ planks. Imparts a subtle aromatic flavor to rich salmon. Made from dried herbs, fresh ground spices, brown sugar, kosher salt, garlic and lemon. Also great for searing, grilling and baking. ',
            'price'=>6.00,
            'priceDescription'=>'NET WT. 3.65 oz\'s',
            'sortOrder'=>2,
            'active'=> true,
            'ounces'=> 3.65,
            'imagePath'=>'/images/shop/spice-rubs/salmon.png',
            'handlingCost'=>0.0,
            'taxExempt'=>true,
            'sku'=>'fa7eee0f-fc25-4493-8936-b49d3a91fae0',

        ]);
        $product->save();
        $product = new \App\Product([
            'categoryId'=>1,
            'name'=>'Porcini Mushroom Rub',
            'description'=>'Chef Howie’s Porcini Mushroom Rub adds a rich mushroom flavor with a subtle hint of herb. Great with poultry, fish, seafood, pork and beef. Made from imported Italian porcini mushrooms, herbs, kosher salt, spices, and a hint of lemon. ',
            'price'=>12.50,
            'priceDescription'=>'NET WT. 2.0 oz\'s',
            'sortOrder'=>3,
            'active'=> true,
            'ounces'=> 2.00,
            'imagePath'=>'/images/shop/spice-rubs/porcini.png',
            'handlingCost'=>0.0,
            'taxExempt'=>true,
            'sku'=>'a325b021-4178-40ad-b57e-eee474633684',

        ]);
        $product->save();
        $product = new \App\Product([
            'categoryId'=>1,
            'name'=>'BBQ Spice Rub',
            'description'=>'Although Chef Howie’s BBQ Spice Rub is an aromatic blend of unique spices, star anise, ginger, allspice and more. Originally created for his Baby Back Ribs, we’ve since discovered that it works great for chicken, pork chops, ribs and roasts as well. Made from a unique blend of aromatic spices, brown sugar, kosher salt, onion and garlic.',
            'price'=>6.00,
            'priceDescription'=>'NET WT. 3.65 oz\'s',
            'sortOrder'=>4,
            'active'=> true,
            'ounces'=> 3.65,
            'imagePath'=>'/images/shop/spice-rubs/bbq.png',
            'handlingCost'=>0.0,
            'taxExempt'=>true,
            'sku'=>'90cc7928-cc2e-4457-accb-32363a8bf092',

        ]);
        $product->save();
        $product = new \App\Product([
            'categoryId'=>1,
            'name'=>'SPORT Steak Seasoning Rub',
            'description'=>'The perfect seasoning for great steaks. A nice blend of dried herbs, onion, garlic, spices and kosher salt. Created by Chef Howie’s youngest son as a gift for his teachers, it was so loved that Chef Howie decided to use it at SPORT.',
            'price'=>5.00,
            'priceDescription'=>'NET WT. 3.0 oz\'s',
            'sortOrder'=>5,
            'active'=> true,
            'ounces'=> 3.00,
            'imagePath'=>'/images/shop/spice-rubs/sport.png',
            'handlingCost'=>0.0,
            'taxExempt'=>true,
            'sku'=>'d31fff6a-e78d-47bb-8d79-55e67a6bbe6d',

        ]);
        $product->save();
        $product = new \App\Product([
            'categoryId'=>1,
            'name'=>'Gift Pack for All Four Rubs',
            'description'=>'All four the 3 Chef’s in a Tub, Spice Rubs and Seasoning Blends. The Ancho Chili Rub, Salmon Rub, Mushroom Rub, and the BBQ Spice Rub.',
            'price'=>26.00,
            'priceDescription'=>'',
            'sortOrder'=>6,
            'active'=> true,
            'ounces'=> 15.95,
            'imagePath'=>'/images/shop/spice-rubs/gift-pack.png',
            'handlingCost'=>0.0,
            'taxExempt'=>true,
            'sku'=>'884e4a28-d680-4cb1-aabf-0b57ed423c47',

        ]);
        $product->save();

        //cookbooks
        $product = new \App\Product([
            'categoryId'=>2,
            'name'=>'Passion & Palate',
            'description'=>'Chef Howie’s New Cookbook Passion & Palate is a collection of stories and recipes from Chef John Howie. The chef/proprietor who brought you the Award winning restaurants, Seastar Restaurant & Raw Bar, John Howie Steak, SPORT Restaurant & Bar, Adriatic Grill, Italian Cuisine & Wine Bar, and the culinary website plankcooking.com, now shares his creative culinary exploits with you. Passion & Palate will excite the senses with over 240 recipes, and 88 full color pictures. The recipe range is very eclectic with everything from some of Chef Howie’s best plank cooking recipes, to amazing soups, salads, seafood, meats, pastas, poultry, ceviche’s, poke, and sushi. All recipes were tested by home cooks. So you can be assured that these recipes will work in your home kitchen. Passion & Palate is the culmination of Chef Howie’s dream to bring exciting cuisine to the homes of his restaurant guests and fan of good food everywhere.',
            'price'=>42.00,
            'sortOrder'=>1,
            'active'=> true,
            'ounces'=> 5.00,
            'imagePath'=>'/images/shop/cookbooks/passion.png',
            'handlingCost'=>5.00,
            'taxExempt'=>false,
            'sku'=>'1cf55ebd-22d3-4caa-8eb9-3c6a509dd67c',

        ]);
        $product->save();
        $product = new \App\Product([
            'categoryId'=>2,
            'name'=>'The Cedar Plank Cookbook **Out of Stock**',
            'description'=>'Chef Howie’s original cookbook with fifteen recipes for the cedar plank. Including his signature salmon, crab stuffed mushrooms, halibut with lemon-chardonnay sauce, sage rubbed pork loin roast with cider glaze, Cornish game hens with apple-cranberry stuffing, and many more.',
            'price'=>6.50,
            'sortOrder'=>2,
            'active'=> true,
            'ounces'=> 5.00,
            'imagePath'=>'/images/shop/cookbooks/cedar.png',
            'handlingCost'=>5.00,
            'taxExempt'=>false,
            'sku'=>'f9e213ae-6399-4238-8ebc-0901f698d345',

        ]);
        $product->save();
        $product = new \App\Product([
            'categoryId'=>2,
            'name'=>'The Plank Cookbook',
            'description'=>'This is Chef Howie’s second cookbook with fifteen new recipes for your cedar, alder and BBQ grilling planks. Although each of the recipes in this cookbook were designed to be used with specific planks, they are not exclusive to the planks they were created for and can be used with either the cedar, alder or BBQ grilling planks. Includes recipes for lemon-garlic prawns, hazelnut salmon, lamb chops pepperonata, pork tenderloin with mango salsa, caramelized onion halibut and plank roasted turkey breast with cranberry compote, just to name a few.',
            'price'=>6.50,
            'sortOrder'=>3,
            'active'=> true,
            'ounces'=> 5.00,
            'imagePath'=>'/images/shop/cookbooks/plank.png',
            'handlingCost'=>5.00,
            'taxExempt'=>false,
            'sku'=>'7692b624-204f-4948-8113-c16b69a23d58',

        ]);
        $product->save();

        
        $product = new \App\Product([
            'categoryId'=>2,
            'name'=>'Both Plank Cookbooks **Out of Stock**',
            'description'=>'Both of Chef Howie’s Plank Cookbooks, The Cedar Plank Cookbook and The Plankcooking Cookbook, are included with this purchase.',
            'price'=>12.00,
            'sortOrder'=>4,
            'active'=> true,
            'ounces'=> 10.00,
  
            'handlingCost'=>5.00,
            'taxExempt'=>false,
            'sku'=>'f58af7dc-73da-43a0-b472-220d7157bca8',

        ]);
        $product->save();

        //baking planks
        $product = new \App\Product([
            'categoryId'=>3,
            'name'=>'Small Cedar Plank',
            'description'=>'The Small Cedar Plank is primarily used to prepare servings for one or two people (13"x9"x1.5").',
            'price'=>32.00,
            'sortOrder'=>1,
            'active'=> true,
            'ounces'=> 15.00,
            'imagePath'=>'/images/shop/baking-planks/sm-cedar.png',
            'handlingCost'=>5.00,
            'taxExempt'=>false,
            'sku'=>'1ac1e8fb-4c76-4c7d-940e-9b1b9ffcd5c2',

        ]);
        $product->save();

        $product = new \App\Product([
            'categoryId'=>3,
            'name'=>'Small Cedar Plank with both cookbooks **Out of Stock**',
            'description'=>'',
            'price'=>43.00,
            'sortOrder'=>2,
            'active'=> true,
            'ounces'=> 35.00,
            'imagePath'=>'',
            'handlingCost'=>5.00,
            'taxExempt'=>false,
            'sku'=>'47a1248b-dfbf-424c-bd4b-c068e8f1a472',

        ]);
        $product->save();
        $product = new \App\Product([
            'categoryId'=>3,
            'name'=>'Large Cedar Plank',
            'description'=>'The Large Cedar Plank is primarily used in cooking meals for two or more people (16"x9"x1.5").',
            'price'=>38.00,
            'sortOrder'=>3,
            'active'=> true,
            'ounces'=> 30.00,
            'imagePath'=>'/images/shop/baking-planks/lg-cedar.png',
            'handlingCost'=>5.00,
            'taxExempt'=>false,
            'sku'=>'9325e8d2-e88b-43ca-a50a-f9431a23b63a',

        ]);
        $product->save();
        $product = new \App\Product([
            'categoryId'=>3,
            'name'=>'Alder Plank',
            'description'=>'The Alder Planks are milder than the cedar planks, and impart a subtle woodsy flavor and aroma to anything roasted on them. Our alder planks are made from clear kiln dried alder. They come in one size only 16"x7"x1.5".',
            'price'=>42.00,
            'sortOrder'=>4,
            'active'=> true,
            'ounces'=> 30.00,
            'imagePath'=>'/images/shop/baking-planks/lg-alder.png',
            'handlingCost'=>5.00,
            'taxExempt'=>false,
            'sku'=>'a6d13931-fb11-42f1-baf8-4d47f0dda49a',

        ]);
        $product->save();
        $product = new \App\Product([
            'categoryId'=>3,
            'name'=>'Alder Plank with both cookbooks **Out of Stock**',
            'description'=>'',
            'price'=>52.00,
            'sortOrder'=>5,
            'active'=> true,
            'ounces'=> 30.00,
            'imagePath'=>'',
            'handlingCost'=>5.00,
            'taxExempt'=>false,
            'sku'=>'55d4dd77-b23d-45c8-877d-3517b53d16cb',

        ]);
        $product->save();

        //bbq
        $product = new \App\Product([
            'categoryId'=>4,
            'name'=>'Cedar Barbecue Grilling Planks',
            'description'=>'Made for use on your BBQ grill. Incredible smoky cedar flavors are infused into your foods. Convenient size, one size fits most BBQ grills. Use with gas or charcoal grills. Package includes 6 one-time use BBQ planks, and two recipes. Each plank can be used to cook for up to four eight-ounce portions. Make your summer barbeques unique and flavorful with the Cedar Barbeque Grilling Planks. ',
            'price'=>15.00,
            'sortOrder'=>5,
            'active'=> true,
            'ounces'=> 30.00,
            'imagePath'=>'/images/shop/bbq-planks/product.png',
            'handlingCost'=>5.00,
            'taxExempt'=>false,
            'sku'=>'710fe6ca-0c36-4ede-ad2d-3142eeb8d3cf',

        ]);
        $product->save();

        //nut
        $product = new \App\Product([
            'categoryId'=>5,
            'name'=>'Nut Driver',
            'description'=>'The nut driver is used to tighten the metal bolts that run through the baking planks. The bolts are there to help keep the plank from splitting and warping. Used with baking planks only, no bolts on the BBQ planks.',
            'price'=>3.00,
            'sortOrder'=>5,
            'active'=> true,
            'ounces'=> 5.00,
            'imagePath'=>'/images/shop/nut-driver/NutDriver.png',
            'handlingCost'=>5.00,
            'taxExempt'=>false,
            'sku'=>'82149268-844d-49be-ab75-c73191e4a61a',

        ]);
        $product->save();
    }
}
