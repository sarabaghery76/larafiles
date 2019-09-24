<tr>
    <td>{{ $category->id }}</td>
    <td>{{ $category->category_name }}</td>
    <td>
        @include('admin.category.operations',$category)
    </td>
</tr>