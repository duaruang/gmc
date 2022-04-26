pr<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateArticlesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('articles', function (Blueprint $table) {
                $table->char('article_id', 36)->primary();
                $table->string('title');
                $table->string('slug');
                $table->text('image');
                $table->text('content');
                $table->dateTime('published_at')->nullable();
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('articles');
        }
    }
