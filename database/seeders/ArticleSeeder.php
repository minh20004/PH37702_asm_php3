<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'title' => 'New Fashion Trends 2024',
                'content' => 'Content about new fashion trends...',
                'image' => 'path/to/image1.jpg', // Thay thế bằng đường dẫn thực tế hoặc null nếu không có ảnh
                'slug' => Str::slug('New Fashion Trends 2024'),
                'published' => Carbon::now(),
                'status' => 'DaXuatBan',
                'view' => 100,
                'category_id' => 1, // Đảm bảo giá trị này tồn tại trong bảng categories
                'user_id' => 1, // Đảm bảo giá trị này tồn tại trong bảng users
            ],
            [
                'title' => 'How to Accessorize Your Outfit',
                'content' => 'Content about accessorizing...',
                'image' => 'path/to/image2.jpg', // Thay thế bằng đường dẫn thực tế hoặc null nếu không có ảnh
                'slug' => Str::slug('How to Accessorize Your Outfit'),
                'published' => Carbon::now(),
                'status' => 'DaXuatBan',
                'view' => 50,
                'category_id' => 1, // Đảm bảo giá trị này tồn tại trong bảng categories
                'user_id' => 1, // Đảm bảo giá trị này tồn tại trong bảng users
            ],
            // Thêm nhiều bài viết nếu cần
        ]);
    }
}
