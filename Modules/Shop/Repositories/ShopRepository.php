<?php
namespace Modules\Shop\Repositories;

use App\Models\User;
use App\Traits\ApiCrudTrait;
use Modules\Shop\Entities\Shop;
use Modules\Shop\Repositories\Interfaces\ShopRepositoryInterface;

class ShopRepository implements ShopRepositoryInterface{
    use ApiCrudTrait;

    protected $model;

    public function __construct(Shop $Shop)
    {
        $this->model = $Shop;
    }

    public function allData()
    {
        return $this->model->query();
    }
    
}
?>