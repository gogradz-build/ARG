<?php

namespace Modules\Shop\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Modules\Shop\Http\Requests\Shoprequest;
use Illuminate\Contracts\Support\Renderable;
use Modules\Shop\Repositories\Interfaces\ShopRepositoryInterface;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
     protected $shopRepository;

    public function __construct(ShopRepositoryInterface $Shop_repository)
    {
        $this->shopRepository = $Shop_repository;
    }
    public function dataTable(Request $request) // Remove When start Backend
    {
        return ($this->shopRepository->dataTable($request));
    }
    public function index()
    {
        return Inertia::render('Modules/Shop/ShopManagement');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return Inertia::render('Modules/Shop/CreateShop');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(ShopRequest $request)
    {
        $validated = $request->validated();
        
        try{
            $shop = $this->shopRepository->create($validated);
            if($shop){
                return response()->json([
                'success' => true,
                'message' => 'Shop Successfully Created.',
                'redirect' => route('shop.index')]);
            }
              
        }catch(\Exception $error){
            Log::error('Shop Registration faild: ' . $error->getMessage());
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return '';
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $shop = $this->shopRepository->find($id);

        return Inertia::render('Modules/Shop/EditShop', ['shop' => $shop]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(ShopRequest $request)
    {
        $validated = $request->validated();
        try{
            $updated =$this->shopRepository->update($validated['id'], $validated);
            if($updated){
                return response()->json([
                'success' => true,
                'message' => 'Shop Successfully Updated.',
                'redirect' => route('shop.index')]);
            }
        }catch(\Exception $error){
            Log::error('Shop update fail: ' . $error->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Request $request)
    {
        try{
            $deleted = $this->shopRepository->delete($request->id);
            if($deleted){
                 return response()->json([
                'success' => true,
                'message' => 'Shop Successfully Deleted.',
                ]);
            }
           
        }catch(\Exception $error){
            Log::error('Shop Delete Fail : '. $error->getMessage());
        } 
    }
}
