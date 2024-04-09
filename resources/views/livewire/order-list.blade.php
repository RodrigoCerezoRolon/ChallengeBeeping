
<div class="container mx-auto my-5">
    <table class="table table-primary">
        <thead>
          <tr>
            <th scope="col">Order Ref</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Total Quantity</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{$order->order_ref}}</td>
                    <td>{{$order->customer_name}}</td>
                    <td>{{$order->lines()->get()->sum('qty')}}</td>
                   
                </tr>
            @endforeach
        </tbody>
      </table>
      <p>
        <strong>Pedidos: {{$last_execution->total_orders}}</strong>
        <strong>Total: {{$last_execution->total_cost}} - {{$last_execution->created_at}}</strong>
    </p>
</div>