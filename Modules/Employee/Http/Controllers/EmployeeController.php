<?php

namespace Modules\Employee\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Collection;// Remove When start Backend
use Illuminate\Pagination\LengthAwarePaginator; // Remove When start Backend

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function dataTable(Request $request) // Remove When start Backend
    {
        // Sample items
        $items = [
            ['id' => 1,  'first_name' => 'Kamal',     'last_name' => 'Perera',   'nic' => '901234567V',   'contact_number' => '0771234567', 'address' => 'Colombo 01',     'email' => 'kamal.perera@example.com'],
            ['id' => 2,  'first_name' => 'Nimal',     'last_name' => 'Fernando', 'nic' => '911234568V',   'contact_number' => '0772234567', 'address' => 'Kandy',          'email' => 'nimal.fernando@example.com'],
            ['id' => 3,  'first_name' => 'Sunil',     'last_name' => 'Silva',    'nic' => '921234569V',   'contact_number' => '0773234567', 'address' => 'Galle',          'email' => 'sunil.silva@example.com'],
            ['id' => 4,  'first_name' => 'Chathura',  'last_name' => 'Jayasinghe', 'nic' => '931234570V',  'contact_number' => '0774234567', 'address' => 'Kurunegala',     'email' => 'chathura.jayasinghe@example.com'],
            ['id' => 5,  'first_name' => 'Ruwan',     'last_name' => 'Bandara',  'nic' => '941234571V',   'contact_number' => '0775234567', 'address' => 'Anuradhapura',   'email' => 'ruwan.bandara@example.com'],
            ['id' => 6,  'first_name' => 'Harsha',    'last_name' => 'Karunaratne', 'nic' => '951234572V', 'contact_number' => '0776234567', 'address' => 'Matara',         'email' => 'harsha.karunaratne@example.com'],
            ['id' => 7,  'first_name' => 'Anuradha',  'last_name' => 'Dias',     'nic' => '961234573V',   'contact_number' => '0777234567', 'address' => 'Negombo',        'email' => 'anuradha.dias@example.com'],
            ['id' => 8,  'first_name' => 'Pradeep',   'last_name' => 'Samarasinghe', 'nic' => '971234574V', 'contact_number' => '0778234567', 'address' => 'Rathnapura',     'email' => 'pradeep.samara@example.com'],
            ['id' => 9,  'first_name' => 'Supun',     'last_name' => 'Wijesinghe', 'nic' => '981234575V',  'contact_number' => '0779234567', 'address' => 'Badulla',        'email' => 'supun.wijesinghe@example.com'],
            ['id' => 10, 'first_name' => 'Lakmal',    'last_name' => 'Gunasekara', 'nic' => '991234576V',  'contact_number' => '0711234567', 'address' => 'Hambantota',     'email' => 'lakmal.gunasekara@example.com'],
            ['id' => 11, 'first_name' => 'Dilan',     'last_name' => 'Rajapaksha', 'nic' => '2000123577V', 'contact_number' => '0712234567', 'address' => 'Jaffna',         'email' => 'dilan.rajapaksha@example.com'],
            ['id' => 12, 'first_name' => 'Kasun',     'last_name' => 'Herath',   'nic' => '2001123578V',  'contact_number' => '0713234567', 'address' => 'Polonnaruwa',    'email' => 'kasun.herath@example.com'],
            ['id' => 13, 'first_name' => 'Dinusha',   'last_name' => 'Abeysekara', 'nic' => '2002123579V', 'contact_number' => '0714234567', 'address' => 'Trincomalee',    'email' => 'dinusha.abeysekara@example.com'],
            ['id' => 14, 'first_name' => 'Gayan',     'last_name' => 'Ranasinghe', 'nic' => '2003123580V', 'contact_number' => '0715234567', 'address' => 'Batticaloa',     'email' => 'gayan.ranasinghe@example.com'],
            ['id' => 15, 'first_name' => 'Shehan',    'last_name' => 'Liyanage', 'nic' => '2004123581V',  'contact_number' => '0716234567', 'address' => 'Ampara',         'email' => 'shehan.liyanage@example.com'],
            ['id' => 16, 'first_name' => 'Roshan',    'last_name' => 'Dias',     'nic' => '2005123582V',  'contact_number' => '0717234567', 'address' => 'Monaragala',     'email' => 'roshan.dias@example.com'],
            ['id' => 17, 'first_name' => 'Isuru',     'last_name' => 'Ekanayake', 'nic' => '2006123583V',  'contact_number' => '0718234567', 'address' => 'Puttalam',       'email' => 'isuru.ekanayake@example.com'],
            ['id' => 18, 'first_name' => 'Chaminda',  'last_name' => 'Fonseka',  'nic' => '2007123584V',  'contact_number' => '0719234567', 'address' => 'Kalutara',       'email' => 'chaminda.fonseka@example.com'],
            ['id' => 19, 'first_name' => 'Tharindu',  'last_name' => 'Peiris',   'nic' => '2008123585V',  'contact_number' => '0721234567', 'address' => 'Matale',         'email' => 'tharindu.peiris@example.com'],
            ['id' => 20, 'first_name' => 'Madushanka', 'last_name' => 'Senanayake', 'nic' => '2009123586V', 'contact_number' => '0722234567', 'address' => 'Nuwara Eliya',   'email' => 'madushanka.senanayake@example.com'],
        ];


        $collection = new Collection($items);

        // Manual pagination example
        $perPage = 10;
        $page = request()->get('page', 1);
        $paginatedResults = new LengthAwarePaginator(
            $collection->forPage($page, $perPage),
            $collection->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        // Return response in your expected format
        return [
            'data' => $paginatedResults->items(),
            'total' => $paginatedResults->total(),
            'current_page' => $paginatedResults->currentPage(),
            'last_page' => $paginatedResults->lastPage(),
        ];
    }
    public function index()
    {
       return Inertia::render("Modules/Employee/EmployeeManagement");
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
       return Inertia::render("Modules/Employee/CreateEmployee");
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('employee::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return Inertia::render("Modules/Employee/EditEmployee");
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
