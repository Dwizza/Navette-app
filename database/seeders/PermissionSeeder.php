<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $routes = Route::getRoutes();
        $count = 0;
        foreach ($routes as $route) {
            $path = $route->uri();
            $name = ucwords(str_replace(['/', '-'], ' ', $path)); // Convert "/admin/tags" to "Admin Tags"
            
            // Vérifier si la permission existe déjà
            if (!Permission::where('path', $path)->exists()) {
                Permission::create([
                    'name' => $name,
                    'path' => $path,
                    'is_existed' => 1,
                ]);
                // $this->info("Permission added: $path");
                $count++;
            }
    }
}
}
