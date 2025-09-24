<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        // Devolvendo todos os dados de uma tabela
        // $clients = DB::table('clients')->get();
        // $this->showDataTable($clients);

        // apresentar numarray associativo
        // $clients = DB::table('clients')->get()->toArray();

        // $results = DB::table('products')->get();
        // foreach ($results as $products) {
        //     echo $products->product_name . "<br>";
        // }

        // Obter algumas colunas
        // $results = DB::table('products')->get(['product_name', 'price']);

        // Pegar os dados de uma única coluna
        // $results = DB::table('products')
        //             ->pluck('product_name')
        //             ->first();

        $results = DB::table('products')
                    ->find(10);

        $this->showRawData($results);
    }

    private function showRawData($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    private function showDataTable($data)
    {
        echo '<table border="1">';
        // header
        echo '<tr>';
        foreach($data[0] as $key => $value) {
            echo '<th>' . $key . '</th>';
        }
        echo '</tr>';
        foreach($data as $row) {
            echo '<tr>';
            foreach($row as $key => $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}
