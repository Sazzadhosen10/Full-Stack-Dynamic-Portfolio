<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('infos', function (Blueprint $table) {
            $table->string('about_title')->nullable()->after('designation');
            $table->text('about_description')->nullable()->after('about_title');
            $table->string('about_subtitle')->nullable()->after('about_description');
            $table->string('hero_greeting')->nullable()->after('about_subtitle');
            $table->string('hero_name')->nullable()->after('hero_greeting');
            $table->string('hero_title')->nullable()->after('hero_name');
            $table->text('hero_description')->nullable()->after('hero_title');
            $table->string('contact_email')->nullable()->after('hero_description');
            $table->string('contact_phone')->nullable()->after('contact_email');
            $table->string('contact_address')->nullable()->after('contact_phone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('infos', function (Blueprint $table) {
            $table->dropColumn([
                'about_title',
                'about_description',
                'about_subtitle',
                'hero_greeting',
                'hero_name',
                'hero_title',
                'hero_description',
                'contact_email',
                'contact_phone',
                'contact_address'
            ]);
        });
    }
};
