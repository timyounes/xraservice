<?php
namespace App\Http\Controllers;
use App\Manpower;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;


class ManpowerController extends Controller
{
    public $manpower_id;
    public $manpower_name;
    public $manpower_address;
    public $manpower_sec_reg;
    public $mapower_tin;
    public $manpower_b_permit;
    public $user;
    public $password;
    public $email;


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $manpower = Manpower::all();
        try{
                $statusCode = 200;
                $response = [
                  'manpower'  => []
                ];
                $response = Manpower::all();
                //Check the recordcount
                //if(count($manpowers) != 0 ):
                    // foreach($manpowers as $manpower){
                    //     $response['manpower'][] = [
                    //         'manpower_id' => $manpower->mp_id,
                    //         'manpower_name' => $manpower->mp_name,
                    //         'manpower_address' => $manpower->sec_reg,
                    //         'manpower_sec_reg' => $manpower->manpower,
                    //         'manpower_tin' => $manpower->TIN,
                    //         'email' => $manpower->email,
                    //     ];
                    // }
                //else:
                    //$statusCode = 200;
                //endif;
         
            }catch (Exception $e){
                $statusCode = 400;
            }finally{
                return Response::json($response, $statusCode);
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
