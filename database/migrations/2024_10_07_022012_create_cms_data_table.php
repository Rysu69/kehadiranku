<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsDataTable extends Migration
{
    public function up()
    {
        Schema::create('cms_data', function (Blueprint $table) {
            $table->id();
            $table->json('carousel_image')->nullable(); // Store video links as JSON

            $table->string('profile_title', 500)->nullable();
            $table->string('profile_image')->nullable();

            $table->string('features_section_title')->nullable();
            $table->text('features_description')->nullable();
            $table->json('features')->nullable(); // Store features as JSON

            $table->string('video_section_title')->nullable();
            $table->text('video_section_description')->nullable();
            $table->json('videos')->nullable(); // Store video links as JSON

            $table->string('testimonials_section_title')->nullable();
            $table->text('testimonials_section_description')->nullable();
            $table->json('userTestimonials')->nullable(); // Store testimonials as JSON

            $table->string('pricing_section_title')->nullable();
            $table->text('pricing_section_description')->nullable();
            $table->json('pricingPlans')->nullable(); // Store pricing plans as JSON

            $table->string('contact_section_title')->nullable();
            $table->text('contact_section_description')->nullable();
            $table->text('no_telp')->nullable();
            $table->text('no_wa')->nullable();
            $table->text('alamat_1')->nullable();
            $table->text('alamat_2')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cms_data');
    }
}
