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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('image')->nullable(); 
            $table->string('slug')->unique();
            $table->unsignedBigInteger('tags_id'); // Thêm cột tags_id
            $table->timestamp('published')->nullable(); // Ngày xuất bản
            $table->enum('status', ['banNhap', 'DaXuatBan'])->default('DaXuatBan'); // Trạng thái bài viết
            $table->unsignedBigInteger('view')->default(0); // Số lượt xem
            $table->unsignedBigInteger('searches')->default(0); // Số lượt tìm kiếm
            $table->boolean('is_editor_choice')->default(false); // Bài viết được biên tập chọn
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Thêm khóa ngoại category_id
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Thêm khóa ngoại user_id
            $table->foreign('tags_id')->references('id')->on('tags')->onDelete('cascade'); // Khóa ngoại cho tags_id
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
