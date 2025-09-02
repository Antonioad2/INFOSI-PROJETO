<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Model\Reserve;
use Illuminate\Http\Request;
use App\Model\Client;

class CarBookController extends Controller
{
    public function store(Request $request)
    {
        // 1. Busca cliente ou cria novo
        $client = Client::firstOrCreate(
            ['email' => $request->email],
            [
                'name'       => $request->name,
                'birth_date' => $request->birth_date,
                'phone'      => $request->phone,
                'address'    => $request->address,
            ]
        );

        // 2. Cria reserva
        $reservation = Reserve::create([
            'car_id'    => $request->car_id,
            'client_id' => $client->id,
            'status'    => 'pending',
            'total'     => 0, // podes calcular depois
        ]);

        // 3. Salvar pagamento (fake por agora)
        $reservation->payment()->create([
            'method'       => 'card',
            'card_name'    => $request->card_name,
            'bank'         => $request->bank,
            'card_number'  => substr($request->card_number, -4), // só últimos 4
            'expiry_date'  => $request->expiry_date,
        ]);

        return redirect()->route('site.home')->with('success', 'Reserva efetuada com sucesso!');
    }
}
