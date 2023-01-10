<!DOCTYPE html>
<html lang="en">

@include('admin.components.head', [
    'title' => 'Список идей | Вау! Список идей',
])

<body>

<div id="container">

    @include('admin.components.navigation')

    @include('admin.components.header')

    <div id="content">

        @include('admin.components.page-header', [
            'title' => 'Список идей',

            'createButton' => [
                'url' => route('admin.category.create'),
                'title' => 'Добавить категорию',
            ],

            'navigation' => [
                [
                    'title' => 'Инструкция',
                    'url' => '#'
                ],
                [
                    'title' => 'Категории идей',
                    'url' => route('admin.category.index'),
                    'active' => true,
                ],
                [
                    'title' => 'Список идей',
                    'url' => route('admin.idea.index'),
                ],
            ],
        ])

        @include('admin.components.filter')

        <div class="page-table">
            <div class="table-responsive">
                <table class="table with-action">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>Название</td>
                        <td>Описание</td>
                        <td>Кол-во идей</td>
                        <td>Кол-во лайков</td>
                        <td>Статус</td>
                        <td>Действие</td>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($categories as $category)
                        @include('admin.components.category.item', [
                            'category' => $category,
                        ])
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!-- Page table -->

    </div>
    <!-- Content -->

</div>

@include('admin.components.scripts')

</body>

</html>
