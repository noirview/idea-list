<!DOCTYPE html>
<html lang="en">

@include('admin.components.head', [
    'title' => 'Список идей | Список идей | Вау! Список идей'
])

<body>

<div id="container">

    @include('admin.components.navigation')

    @include('admin.components.header')

    <div id="content">

        @include('admin.components.page-header', [
            'title' => 'Список идей',

            'createButton' => [
                'url' => route('admin.idea.create'),
                'title' => 'Добавить идею',
            ],

            'navigation' => [
                [
                    'title' => 'Инструкция',
                    'url' => '#'
                ],
                [
                    'title' => 'Категории идей',
                    'url' => route('admin.category.index'),
                ],
                [
                    'title' => 'Список идей',
                    'url' => route('admin.idea.index'),
                    'active' => true,
                ],
            ],
        ])

        <div class="filter">
            <div class="_container">
                <div class="filter__body">
                    <div class="filter-drops">
                        <div class="select filter-select">
                            <button class="btn select__btn filter-select__btn">
                                <span>Статус</span>
                                <svg>
                                    <use xlink:href="./img/sprite.svg#drop"></use>
                                </svg>
                            </button>
                            <ul class="select__list filter-select__list">
                                <li class="select__item filter-select__item">Статус 1</li>
                                <li class="select__item filter-select__item">Статус 2</li>
                                <li class="select__item filter-select__item">Статус 3</li>
                            </ul>
                        </div>
                        <div class="select filter-select">
                            <button class="btn select__btn filter-select__btn">
                                <span>Дата</span>
                                <svg>
                                    <use xlink:href="./img/sprite.svg#drop"></use>
                                </svg>
                            </button>
                            <ul class="select__list filter-select__list">
                                <li class="select__item filter-select__item">Дата 1</li>
                                <li class="select__item filter-select__item">Дата 2</li>
                                <li class="select__item filter-select__item">Дата 3</li>
                            </ul>
                        </div>
                        <div class="select filter-select filter-select__search">
                            <div class="filter-select__search-froup">
                                <input type="text" class="filter-select__btn form-control" placeholder="Поиск...">
                                <button class="btn filter-select__search-btn">
                                    <svg>
                                        <use xlink:href="./img/sprite.svg#search"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="filter-act">
                        <div class="select filter-select">
                            <button class="btn select__btn filter-select__btn">
                                <span>Сортировать по...</span>
                                <svg>
                                    <use xlink:href="./img/sprite.svg#drop"></use>
                                </svg>
                            </button>
                            <ul class="select__list filter-select__list">
                                <li class="select__item filter-select__item">По возрастанию</li>
                                <li class="select__item filter-select__item">По убыванию</li>
                                <li class="select__item filter-select__item">Цена</li>
                                <li class="select__item filter-select__item">Доступно</li>
                                <li class="select__item filter-select__item">Статус</li>
                            </ul>
                        </div>
                        <div class="filter-actions">
                            <button class="btn filter-reset">
                                <svg>
                                    <use xlink:href="./img/sprite.svg#close"></use>
                                </svg>
                                Сбросить
                            </button>
                            <button class="btn btn__main filter-submit">
                                <svg>
                                    <use xlink:href="./img/sprite.svg#check"></use>
                                </svg>
                                Применить
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Filter -->

        <div class="page-table">
            <div class="table-responsive">
                <table class="table with-action">
                    <thead>
                    <tr>
                        <td></td>
                        <td>Категория</td>
                        <td>Имя создателя</td>
                        <td>Дата создания</td>
                        <td>Тема</td>
                        <td>Кол-во лайков</td>
                        <td>Статус</td>
                        <td>Действие</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ideas as $idea)
                        @include('admin.components.idea.item', [
                            'idea' => $idea,
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

<!-- JQuery -->
</body>

</html>
