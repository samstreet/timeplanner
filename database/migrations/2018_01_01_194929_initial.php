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
        DB::statement(" CREATE TABLE assignment (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, startDate DATE NOT NULL, endDate DATE NOT NULL, title VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_30C544BABF396750 (id), INDEX IDX_30C544BAA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;");
        DB::statement("CREATE TABLE family (id INT AUTO_INCREMENT NOT NULL, UNIQUE INDEX UNIQ_A5E6215BBF396750 (id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;");
        DB::statement("CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, dob DATE NOT NULL, created_date DATE NOT NULL, expiry_date DATE DEFAULT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, is_active VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649BF396750 (id), UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;");
        DB::statement("ALTER TABLE assignment ADD CONSTRAINT FK_30C544BAA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)");
        DB::statement("ALTER TABLE user ADD password VARCHAR(255) NOT NULL");
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
