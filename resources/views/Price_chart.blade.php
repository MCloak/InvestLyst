@if(isset($tradeHistory))
    <table>
        <thead>
            <tr>
                <th>Tarih</th>
                <th>Fiyat</th>
                <th>Miktar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tradeHistory as $trade)
                <tr>
                    <td>{{ date('Y-m-d H:i:s', $trade['timestamp'] / 1000) }}</td>
                    <td>{{ $trade['price'] }}</td>
                    <td>{{ $trade['amount'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else   
    <p>Veri bulunamadı veya bir hata oluştu.</p>
@endif
        @if(isset($error))
         <p>{{ $error }}</p>
        @endif