<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Factories\Factory;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    // private $factory = new Factory;
    // private $faker = $factory->create();

    // private array $news = [
    //     [
    //         'id' => 1,
    //         'title' => 'News 1',
    //         'category' => [1],
    //         'description' => 'Some description'
    //     ],
    //     [
    //         'id' => 2,
    //         'title' => 'News 2',
    //         'category' => [1, 2],
    //         'description' => 'Some description'
    //     ],
    //     [
    //         'id' => 3,
    //         'title' => 'News 3',
    //         'category' => [1, 3],
    //         'description' => 'Some description'
    //     ],
    //     [
    //         'id' => 4,
    //         'title' => 'News 4',
    //         'category' => [1, 3, 4],
    //         'description' => 'Some description'
    //     ],
    //     [
    //         'id' => 5,
    //         'title' => 'News 5',
    //         'category' => [2, 3],
    //         'description' => 'Some description'
    //     ],
    //     [
    //         'id' => 6,
    //         'title' => 'News 6',
    //         'category' => [3, 5],
    //         'description' => 'Some description'
    //     ],
    //     [
    //         'id' => 7,
    //         'title' => 'News 7',
    //         'category' => [3, 4],
    //         'description' => 'Some description'
    //     ],
    //     [
    //         'id' => 8,
    //         'title' => 'News 8',
    //         'category' => [4, 5],
    //         'description' => 'Some description'
    //     ],
    //     [
    //         'id' => 9,
    //         'title' => 'News 9',
    //         'category' => [4],
    //         'description' => 'Some description'
    //     ],
    //     [
    //         'id' => 10,
    //         'title' => 'News 10',
    //         'category' => [3, 5],
    //         'description' => 'Some description'
    //     ],
    //     [
    //         'id' => 11,
    //         'title' => 'News 11',
    //         'category' => [3, 4],
    //         'description' => 'Some description'
    //     ],
    //     [
    //         'id' => 12,
    //         'title' => 'News 12',
    //         'category' => [4, 5],
    //         'description' => 'Some description'
    //     ],
    //     [
    //         'id' => 13,
    //         'title' => 'News 13',
    //         'category' => [2, 4, 5],
    //         'description' => 'Some description'
    //     ],
    // ];


    // private array $categories = [
    //     [
    //         'id' => 1,
    //         'name' => 'sports'
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'science'
    //     ],
    //     [
    //         'id' => 3,
    //         'name' => 'technologies'
    //     ],
    //     [
    //         'id' => 4,
    //         'name' => 'music'
    //     ],
    //     [
    //         'id' => 5,
    //         'name' => 'art'
    //     ],
    //     [
    //         'id' => 6,
    //         'name' => 'cinema'
    //     ],
    // ];



    // /**
    //  * Получить список всех новостей
    //  * @return array 
    //  */
    // protected function getNews(): array
    // {
    //     return $this->news;
    // }



    // /**
    //  * Получить список категорий
    //  *  @return array 
    //  */
    // protected function getCategories(): array
    // {
    //     return $this->categories;
    // }



    // /**
    //  * Получить список новостей данной категории
    //  * Get news list of a category 
    //  * 
    //  *  @param int $id Category ID
    //  *  @return array|null
    //  */
    // protected function getNewsCategory(int $id): ?array
    // {
    //     $news_category = [];
    //     foreach ($this->categories as $category) {
    //         if ($id === $category['id']) {
    //             $news_category['category']['name'] = $category['name'];
    //             break;
    //         }
    //     }
    //     if (empty($news_category['category']['name'])) return null;

    //     foreach ($this->news as $news) {
    //         if (in_array($id, $news['category'])) $news_category['news_list'][] = $news;
    //     }
    //     return $news_category;
    // }


    // /**
    //  * Получить одну новость по id
    //  * Get one news info by id
    //  * 
    //  * @param int $id News id
    //  * @return array|null
    //  */
    // protected function getOneNews(int $id): ?array
    // {
    //     foreach ($this->news as $one_news) {
    //         if ($one_news['id'] === $id) {
    //             return $one_news;
    //         }
    //     }
    //     return null;
    // }
}
