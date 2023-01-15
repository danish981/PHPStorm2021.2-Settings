<?php
//Tinker away!



\App\Models\Pen::updateOrCreate([
   'name' => 'Sample Pen',
   'weight' => 45.87,
   'color' => 'orange'
]);
