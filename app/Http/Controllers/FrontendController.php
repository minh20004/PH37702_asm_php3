<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
// use App
class FrontendController extends Controller
{
      public function index()
      {
          // Lấy ngày tháng năm hiện tại của Việt Nam
          $currentDate = Carbon::now('Asia/Ho_Chi_Minh')->format('d/m/Y');
          // Lấy tất cả các danh mục từ cơ sở dữ liệu
          $categories = Category::all();  
          $tags = Tag::all();  
          // Lấy bài viết Biên tập
          $editorChoice = Article::where('status', 'DaXuatBan')
                                  ->where('is_editor_choice', true)
                                  ->first();
      
          // Lấy bài viết Xu hướng (3 bài có lượt view cao nhất)
          $trendingArticles = Article::where('status', 'DaXuatBan')
                                    ->where('is_editor_choice', true)
                                    ->orderBy('view', 'desc')
                                    ->take(3)
                                    ->get();
      
          // Lấy bài viết Phổ biến (dựa trên lượt tìm kiếm hoặc ngẫu nhiên nếu không có)
          $popularArticles = Article::where('status', 'DaXuatBan')
                                  ->orderBy('searches', 'desc')
                                  ->take(1)
                                  ->get();
      
          // Nếu không có bài viết dựa trên lượt tìm kiếm, lấy bài viết ngẫu nhiên
          if ($popularArticles->isEmpty()) {
              $popularArticles = Article::where('status', 'DaXuatBan')
                                      ->where('is_editor_choice', true)
                                      ->inRandomOrder()
                                      ->take(1)
                                      ->get();
          }
          // Hiển thị 5 bài viết trong danh mnục bí quyết làm đẹp
          $beautyful = Category::where('name', 'Bí quyết làm đẹp')->first()->id;
          $randomBeautyfull = Article::where('category_id', $beautyful)
                                        ->inRandomOrder()
                                        ->take(5)
                                        ->get();
          // Lấy 5 bài viết mới nhất với phân trang
          $latestArticles = Article::where('status', 'DaXuatBan')
          ->orderBy('created_at', 'desc')
          ->paginate(6); // Phân trang 5 bài mỗi trang
          $randomArticles = $this->getRandomArticlesByCategory();
          $menus = Menu::with('categories')->get();
          $videos = Video::all();
          // Truyền dữ liệu vào view
          return view('index', compact('categories', 'currentDate', 'tags', 
          'editorChoice', 'trendingArticles', 'popularArticles',
           'latestArticles', 'menus', 'randomArticles', 'randomBeautyfull', 'videos'));
      }
      public function getRandomArticlesByCategory(){
        $categories = Category::all();
        $randomCategorries = $categories->random(3);
        $randomArticles = [];
        foreach($randomCategorries AS $category){
            $article = $category->articles()->inRandomOrder()->first();
            if($article){
                $randomArticles[] = $article;
            }
        }
        return $randomArticles;
      }
      public function listMenuById($menuId)
      {
        $menu = Menu::with('categories.articles')->findOrFail($menuId);
        //lay cac danh muc cua menu
        $categories = $menu->categories;
        //lay tat ca bai viet cua menu nay
        $articles = $categories->flatMap(function($category){
            return $category->articles;
        });
        return view('client.page.list-menu', [
            'menu' =>$menu,
            'categories' => $categories,
            'articles' => $articles,
        ]);
      }
      public function category($slug)
      {
          
          // Lấy danh mục dựa trên slug
          $category = Category::where('slug', $slug)->firstOrFail();
          // Lấy các bài viết thuộc danh mục này
          $articles = $category->articles;
          // Truyền dữ liệu vào view
          return view('client.page.list-category', compact('category', 'articles'));
      }
      // Hiển thị chi tiết tin
      public function showArticle($id)
      {
          $article = Article::find($id);
          if (!$article) {
              return redirect()->route('searchNotFound');
          }
          return view('client.page.post-details', compact('article'));
      }
  
      // Hiển thị tin theo loại
      public function articlesByCategory($categoryId)
      {
          $category = Category::find($categoryId);
          if (!$category) {
              return redirect()->route('searchNotFound');
          }
          $articles = $category->articles; // assuming 'articles' is the relation name
          return view('client.page.articles-by-category', compact('articles', 'category'));
      }
  
      // Tìm kiếm bài viết
      public function search(Request $request)
      {
          $query = $request->input('s');
          if(!$query){
            return redirect()->route('searchNotFound');
          };
          $articles = Article::where('title', 'like', '%' . $query . '%')
                              ->orWhere('content', 'like', '%' . $query . '%')
                              ->get();
  
          if ($articles->isEmpty()) {
              return redirect()->route('searchNotFound');
          }
  
          return view('client.page.search-results', compact('articles', 'query'));
      }
      // Hiển thị trang không tìm thấy
      public function searchNotFound()
      {
          return view('client.page.search-not-found');
      }
      // Hiển thị trang lien he
      public function contact()
      {
          return view('client.page.contact');
      }
}