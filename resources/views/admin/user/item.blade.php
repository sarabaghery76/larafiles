<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->full_name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->wallet }}</td>
    <td>
        @include('admin.user.operations',$user)
    </td>
</tr>