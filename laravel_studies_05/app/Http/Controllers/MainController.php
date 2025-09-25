<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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

        // Buscar dados de um id específico
        // $results = DB::table('products')
        //             ->find(10);

        // Utilizando consultas condicionais com where e like
        // $results = DB::table('clients as c')
        //     ->leftJoin('orders as o', 'c.id', '=', 'o.client_id')
        //     ->leftJoin('products as p', 'o.product_id', '=', 'p.id')
        //     ->where('p.product_name', '=', 'Pepino')
        //     ->orderBy('o.order_number')
        //     ->get(['c.client_name', 'c.email', 'o.order_number'])
        //     ->toArray();

        // Você pode utilizar mútiplos wheres
        // $results = DB::table('products')
        //            ->whereLike('product_name', '%A')
        //            ->where('price', '>', 50)
        //            ->get();

        // Você pode uma query que é uma ou outra com o orWhere
        // $results = DB::table('products')
        //            ->where('price', '>', 10)
        //            ->orWhereLike('product_name', '%A')
        //            ->get();

        // Clausulas where dentro de um array
        // $results = DB::table('products')
        //            ->where([
        //                 ['price', '>', 10],
        //                 ['product_name', 'like', '%A']
        //            ])
        //            ->get();

        // Buscar produtos na negativa
        // $results = DB::table('products')
        //             ->whereNotLike('product_name', 'M%')
        //             ->get();

        // Filtragem por duas ou mais colunas de uma tabela
        // $results = DB::table('clients')
        //             ->whereAny(['client_name', 'email'], 'like', 'Laura%')
        //             ->get()
        //             ->toArray();

        // Resgatar dados entre dois valores
        // $results = DB::table('products')
        //             ->whereBetween('price', [25,50])
        //             ->get();

        // Pegar os valores de uma coleção de dados
        // $results = DB::table('products')
        //     ->whereNotIn('id', [1,2,3])
        //     ->get();

        // $results = DB::table('clients')
        //     ->whereNull('deleted_at')
        //     ->get();

        // ------------------------ Dados agregado ---------------------------------

        // $results = DB::table('products')->count();
        // $results = DB::table('products')->max('price');
        // $results = DB::table('products')->min('price');
        // $results = DB::table('products')->avg('price');
        // $results = DB::table('products')->sum('price');

        // $this->showRawData($results);

        // -------------------------- Insert, update, delete -----------------------
        // Adicionar um novo client
        // $new_client = [
        //     'client_name' => 'Paulo Victor',
        //     'email' => 'paulovdbarbosa@gmail.com',
        //     'active' => 1,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ];

        // DB::table('clients')->insert($new_client);

        // Editar um client existente
        // DB::table('clients')
        // ->where('id', 1)
        // ->update([
        //     'client_name' => 'paulo'
        // ]);

        // DELETE - hard
        // DB::table('clients')
        // ->where('id', 502)
        // ->delete();

        // DELETE - soft
        // DB::table('clients')
        // ->where('id', 1)
        // ->update([
        //     'deleted_at' => Carbon::now()
        // ]);
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
        echo '<tr>';
        foreach ($data[0] as $key => $value) {
            echo '<th>' . $key . '</th>';
        }
        echo '</tr>';
        foreach ($data as $row) {
            echo '<tr>';
            foreach ($row as $key => $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}
