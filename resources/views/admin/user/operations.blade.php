<a href="{{ route('admin.users.edit', $user->id) }}"> ویرایش </a>
<a href="{{ route('admin.users.delete', $user->id) }}"> حذف </a>
<a title="نمایش لیست پکیج های خریداری شده" href="{{ route('admin.users.packages', $user->id) }}"> پکیج </a>