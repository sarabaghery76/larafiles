<tr>
    <td> {{ $file -> file_id }}</td>
    <td> {{ $file -> file_title }}</td>
    <td> {{ $file -> file_type }}</td>
    <td> {{ $file -> file_size }}</td>
    <td> {{ $file -> file_name }}</td>
    <td>
        <a href="{{ route('admin.files.edit', [$file -> file_id]) }}"> ویرایش </a>
    </td>
</tr>