<tr>
    <td>{{ $payment->user->name }}</td>
    <td>{{ number_format($payment->payment_amount) }}</td>
    <td>{{ $payment->payment_method_format() }}</td>
    <td>{{ $payment->payment_gateway_name }}</td>
    <td>{{ $payment->payment_res_num }}</td>
    <td>{{ $payment->payment_ref_num }}</td>
    <td>{{ $payment->payment_created_at }}</td>
    <td>{{ $payment->payment_status_format() }}</td>
    <td>

    </td>

</tr>