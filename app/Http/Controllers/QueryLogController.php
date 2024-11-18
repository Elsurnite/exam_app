<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QueryLog;

class QueryLogController extends Controller
{
    public function store()
    {
        // Yeni bir sorgu kaydı oluştur
        $queryLog = new QueryLog();
        $queryLog->query_time = now();
        $queryLog->save();

        // Toplam sorgu sayısını geri döndür
        $queryCount = QueryLog::count();

        return response()->json(['queryCount' => $queryCount]);
    }
}

