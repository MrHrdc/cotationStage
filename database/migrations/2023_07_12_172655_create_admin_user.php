<?php

use App\Models\Fonction;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Création du rôle 'admin'
        DB::table('fonctions')->insert([
            'name' => 'admin',
        ]);

        // Création de l'utilisateur admin
        $admin = DB::table('users')->insertGetId([
            'nom' => 'rootadmin',
            'postnom' => 'choupole',
            'prenom' => 'choupole',
            'email' => 'admin@admin.com',
            'password' => Hash::make('choupole'),
        ]);

        // Ajout d'une fonction 'admin' à l'utilisateur admin
        $fonction = Fonction::where('name', 'admin')->first();

        if (!$fonction) {
            // La fonction n'existe pas, nous la créons
            $fonction = Fonction::create(['name' => 'admin']);
        }

        $user = User::find($admin);

        if ($user) {
            // Nous attachons la fonction à l'utilisateur
            $user->fonction()->associate($fonction);
            $user->save();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Suppression de l'utilisateur admin
        DB::table('users')->where('email', 'admin@example.com')->delete();

        // Suppression du rôle 'admin'
        DB::table('fonctions')->where('name', 'admin')->delete();
    }
};
