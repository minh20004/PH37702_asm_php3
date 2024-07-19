<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Thay thế giá trị user_id và article_id bằng các giá trị hợp lệ đã tồn tại trong bảng users và articles
        DB::table('comments')->insert([
            [
                'user_id' => 1, // Đảm bảo giá trị này tồn tại trong bảng users
                'article_id' => 1, // Đảm bảo giá trị này tồn tại trong bảng articles
                'content' => 'Great article on fashion trends! I really enjoyed reading it.',
            ],
            [
                'user_id' => 1, // Đảm bảo giá trị này tồn tại trong bảng users
                'article_id' => 2, // Đảm bảo giá trị này tồn tại trong bảng articles
                'content' => 'Very informative post about accessorizing. Thanks for the tips!',
            ],
            // Thêm nhiều bình luận nếu cần
        ]);

    }
}
