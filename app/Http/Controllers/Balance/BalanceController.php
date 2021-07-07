<?php

namespace App\Http\Controllers\Balance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BalanceModel;



class BalanceController extends Controller
{
    public function balance(){
        return response()->json(BalanceModel::get(),200);
    }


    public function getSecretKey(){
        $headers = getallheaders();
        $key = null;
        foreach ($headers as $header => $value) {
            if ($header == 'Key'){
                $key = $value;
            }
        }
        return $key;
    }

    public function balanceByUserId($userId){
        $seretKey = $this->getSecretKey();

        if ($seretKey != '123'){
            return response()->json([
                'message' => 'Wrong secretKey.'], 404);
        }

        $response = BalanceModel::where('user_id','=', $userId)
            ->take(50)
            ->orderBy('created_at', 'DESC')
            ->get();

        if (empty($response->count())){
            return response()->json([
                'message' => 'Record not found.'], 404);
        }

        return response()->json($response,200);

    }
}
