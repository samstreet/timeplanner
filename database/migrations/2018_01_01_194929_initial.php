<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class Initial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statment(
            "CREATE TABLE assignment (id INT AUTO_INCREMENT NOT NULL, startDate DATE NOT NULL, endDate DATE NOT NULL, UNIQUE INDEX UNIQ_30C544BABF396750 (id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;     
             CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, UNIQUE INDEX UNIQ_8D93D649BF396750 (id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
