<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichesTable extends Migration
{
    public function up()
    {
        Schema::create('fiches', function (Blueprint $table) {
            $table->id();
            $table->double('cons_str_acc')->default(0);
            $table->double('int_post_trav')->default(0);
            $table->double('apt_tech_trav')->default(0);
            $table->double('curio_prof')->default(0);
            $table->double('adress_presi')->default(0);
            $table->double('compr_eff_trav')->default(0);
            $table->double('cap_resou_probl')->default(0);
            $table->double('lang_termi')->default(0);
            $table->double('demon_cohe_cons')->default(0);
            $table->double('respet_loi_etabliss')->default(0);
            $table->double('ponct_tenue_vestim')->default(0);
            $table->double('regul_langa')->default(0);
            $table->double('honnet_resp_publ')->default(0);
            $table->double('initia_perso')->default(0);
            $table->foreignId('user_id')->constrained('users');
            $table->unsignedBigInteger('stagiaire_id')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fiches');
    }
}
