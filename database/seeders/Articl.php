<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Articl extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'title' => 'Xu hướng thời trang năm 2024',
                'content' => 'Nội dung về xu hướng thời trang mới nhất năm 2024...',
                'image' => 'images/post/post-3.jpg',
                'slug' => Str::slug('Xu hướng thời trang năm 2024'),
                'published' => Carbon::now(),
                'status' => 'DaXuatBan',
                'view' => 100,
                'searches' => 50,
                'is_editor_choice' => true,
                'category_id' => 1,
                'tags_id' => 1,
                'user_id' => 1,
            ],
            [
                'title' => 'Cách phối đồ cho mùa đông 2024',
                'content' => 'Nội dung về cách phối đồ cho mùa đông năm nay...',
                'image' => 'images/post/post-4.jpg',
                'slug' => Str::slug('Cách phối đồ cho mùa đông 2024'),
                'published' => Carbon::now(),
                'status' => 'DaXuatBan',
                'view' => 150,
                'searches' => 60,
                'is_editor_choice' => false,
                'category_id' => 2,
                'tags_id' => 1,
                'user_id' => 2,
            ],
            [
                'title' => 'Những mẫu váy đẹp nhất cho mùa hè 2024',
                'content' => 'Nội dung về những mẫu váy đẹp nhất cho mùa hè năm nay...',
                'image' => 'images/post/post-5.jpg',
                'slug' => Str::slug('Những mẫu váy đẹp nhất cho mùa hè 2024'),
                'published' => Carbon::now(),
                'status' => 'DaXuatBan',
                'view' => 200,
                'searches' => 70,
                'is_editor_choice' => false,
                'category_id' => 3,
                'user_id' => 3,
                'tags_id' => 1,
            ],
            [
                'title' => 'Phụ kiện thời trang nổi bật 2024',
                'content' => 'Nội dung về các phụ kiện thời trang nổi bật trong năm 2024...',
                'image' => 'images/post/post-6.jpg',
                'slug' => Str::slug('Phụ kiện thời trang nổi bật 2024'),
                'published' => Carbon::now(),
                'status' => 'DaXuatBan',
                'view' => 250,
                'searches' => 80,
                'is_editor_choice' => true,
                'category_id' => 1,
                'user_id' => 1,
                'tags_id' => 1,
            ],
            [
                'title' => 'Phong cách thời trang công sở 2024',
                'content' => 'Nội dung về phong cách thời trang công sở hiện đại...',
                'image' => 'images/post/post-7.jpg',
                'slug' => Str::slug('Phong cách thời trang công sở 2024'),
                'published' => Carbon::now(),
                'status' => 'DaXuatBan',
                'view' => 300,
                'searches' => 90,
                'is_editor_choice' => false,
                'category_id' => 3,
                'user_id' => 3,
                'tags_id' => 1,
            ],
            [
                'title' => 'Thời trang dạo phố 2024',
                'content' => 'Nội dung về thời trang dạo phố năm 2024...',
                'image' => 'images/post/post-8.jpg',
                'slug' => Str::slug('Thời trang dạo phố 2024'),
                'published' => Carbon::now(),
                'status' => 'DaXuatBan',
                'view' => 350,
                'searches' => 100,
                'is_editor_choice' => true,
                'category_id' => 1,
                'user_id' => 1,
                'tags_id' => 1,
            ],
            [
                'title' => 'Những đôi giày hot nhất 2024',
                'content' => 'Nội dung về những đôi giày hot nhất năm 2024...',
                'image' => 'images/post/post-9.jpg',
                'slug' => Str::slug('Những đôi giày hot nhất 2024'),
                'published' => Carbon::now(),
                'status' => 'DaXuatBan',
                'view' => 400,
                'searches' => 110,
                'is_editor_choice' => false,
                'category_id' => 2,
                'user_id' => 2,
                'tags_id' => 1,
            ],
            [
                'title' => 'Trang phục thể thao 2024',
                'content' => 'Nội dung về trang phục thể thao 2024...',
                'image' => 'images/post/post-10.jpg',
                'slug' => Str::slug('Trang phục thể thao 2024'),
                'published' => Carbon::now(),
                'status' => 'DaXuatBan',
                'view' => 450,
                'searches' => 120,
                'is_editor_choice' => true,
                'category_id' => 3,
                'user_id' => 3,
                'tags_id' => 1,
            ],
            [
                'title' => 'Thời trang nam giới 2024',
                'content' => 'Nội dung về thời trang nam giới năm 2024...',
                'image' => 'images/post/post-11.jpg',
                'slug' => Str::slug('Thời trang nam giới 2024'),
                'published' => Carbon::now(),
                'status' => 'DaXuatBan',
                'view' => 500,
                'searches' => 130,
                'is_editor_choice' => false,
                'category_id' => 3,
                'user_id' => 3,
                'tags_id' => 1,
            ],
            [
                'title' => 'Phong cách thời trang vintage',
                'content' => 'Nội dung về phong cách thời trang vintage...',
                'image' => 'images/post/post-12.jpg',
                'slug' => Str::slug('Phong cách thời trang vintage'),
                'published' => Carbon::now(),
                'status' => 'DaXuatBan',
                'view' => 550,
                'searches' => 140,
                'is_editor_choice' => true,
                'category_id' => 3,
                'user_id' => 3,
                'tags_id' => 1,
            ],
            [
                'title' => 'Mẫu túi xách không thể bỏ qua 2024',
                'content' => 'Nội dung về mẫu túi xách hot nhất năm 2024...',
                'image' => 'images/post/post-13.jpg',
                'slug' => Str::slug('Mẫu túi xách không thể bỏ qua 2024'),
                'published' => Carbon::now(),
                'status' => 'DaXuatBan',
                'view' => 600,
                'searches' => 150,
                'is_editor_choice' => false,
                'category_id' => 1,
                'user_id' => 1,
                'tags_id' => 1,
            ],
        ]);
    }
}
