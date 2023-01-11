<tr>
    <td>{{ $idea->id }}</td>
    <td>{{ $idea->category->title }}</td>
    <td>{{ $idea->author_name }}</td>
    <td>{{ $idea->created_at->format('d.m.Y') }}</td>
    <td>{{ $idea->title }}</td>
    <td>{{ $idea->count_likes }}</td>
    <td>{{ \App\Enums\IdeaStatus::getDescription($idea->status) }}</td>
    <td>
        <div>
            <a href="{{ route('admin.idea.edit', ['id' => $idea->id]) }}">
                <svg>
                    <use xlink:href="{{ asset('img/admin/sprite.svg') }}#arrow"></use>
                </svg>
            </a>
            <a href="{{ route('admin.idea.destroy', ['id' => $idea->id]) }}">
                <svg>
                    <use xlink:href="{{ asset('img/admin/sprite.svg') }}#close"></use></svg></a>
        </div>
    </td>
</tr>
