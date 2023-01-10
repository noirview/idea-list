<tr>
    <td>{{ $category->id }}</td>
    <td>{{ $category->title }}</td>
    <td>{{ $category->description }}</td>
    <td>{{ $category->ideas_count }}</td>
    <td>{{ $category->ideas_sum_count_likes ?? 0 }}</td>
    <td>{{ \App\Enums\CategoryStatus::getDescription($category->status) }}</td>
    <td>
        <div>
            <a href="{{ route('admin.category.edit', ['id' => $category->id]) }}">
                <svg>
                    <use xlink:href="{{ asset('img/admin/sprite.svg') }}#arrow"></use>
                </svg>
            </a>
            <a href="{{ route('admin.category.destroy', ['id' => $category->id]) }}">
                <svg>
                    <use xlink:href="{{ asset('img/admin/sprite.svg') }}#close"></use></svg></a>
        </div>
    </td>
</tr>
