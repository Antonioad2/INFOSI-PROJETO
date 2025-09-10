@component('mail::message')
# Confirmação da sua Reserva 🚗

Olá **{{ $reserve->clients->name }}**,

A sua reserva foi confirmada com sucesso! 🎉

### Detalhes da Reserva:
- **Carro:** {{ $reserve->cars->brand->name }} {{ $reserve->cars->modelo }}
- **Cor:** {{ $reserve->cars->color->name ?? 'Não especificada' }}
- **Combustível:** {{ $reserve->cars->fuel->name ?? 'Não especificado' }}
- **Data de Retirada:** {{ \Carbon\Carbon::parse($reserve->pickup_date)->format('d/m/Y H:i') }}
- **Local de Retirada:** {{ $reserve->pickup_location }}
- **Data de Devolução:** {{ \Carbon\Carbon::parse($reserve->dropoff_date)->format('d/m/Y H:i') }}
- **Local de Devolução:** {{ $reserve->dropoff_location }}
- **Estado da Reserva:** {{ ucfirst($reserve->status) }}

@component('mail::button', ['url' => route('reserves.show', $reserve->id)])
Ver Detalhes da Reserva
@endcomponent

Obrigado por escolher a **{{ config('app.name') }}**.  
Estamos ansiosos para lhe atender!  

Atenciosamente,  
**Equipe {{ config('app.name') }}**
@endcomponent

