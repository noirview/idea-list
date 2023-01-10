<!DOCTYPE html>
<html lang="en">

@include('admin.components.head', [
    'title' => 'Список идей | Добавление идеи | Вау! Список идей'
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

        <div class="add-new">

            @include('admin.components.form.header', [
                'title' => 'Добавление идеи',

                'cancelRoute' => route('admin.idea.index'),
                'createRoute' => '#',
            ])

            <div class="add-new__body">
                <div class="_container">
                    <div class="add-new__form">
                        <div class="add-new__form-group">
                            <div class="select add-new__select">
                                <button class="btn select__btn add-new__select-btn" type="button">
                                    <span>Категория</span>
                                    <svg><use xlink:href="./img/sprite.svg#drop"></use></svg>
                                </button>
                                <ul class="select__list add-new__select-list">
                                    <li class="select__item add-new__select-item">Категория 1</li>
                                    <li class="select__item add-new__select-item">Категория 2</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-new__form-group">
                            <input type="text" class="add-new__form-control form-control" placeholder="Имя создателя">
                        </div>
                        <div class="add-new__form-group">
                            <input type="text" class="add-new__form-control form-control" placeholder="Тема">
                        </div>
                        <div class="add-new__form-group">
                            <input type="text" class="add-new__form-control form-control" placeholder="Описание">
                        </div>
                        <div class="add-new__form-group">
                            <div class="add-new__row">
                                <div class="add-new__col col-sm-6">
                                    <div class="select add-new__select">
                                        <button class="btn select__btn add-new__select-btn" type="button">
                                            <span>Статус</span>
                                            <svg><use xlink:href="./img/sprite.svg#drop"></use></svg>
                                        </button>
                                        <ul class="select__list add-new__select-list">
                                            <li class="select__item add-new__select-item">Статус 1</li>
                                            <li class="select__item add-new__select-item">Статус 2</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-new__col col-sm-6">
                                    <label class="add-new__file w-100 h-100">
                                        <input type="file" name="file" id="file" accept=".png, .jpg, .jpeg" hidden/>
                                        <div class="btn btn__drop w-100 h-100">Прикрепить файл</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add new single -->

    </div>
    <!-- Content -->

</div>

@include('admin.components.scripts')

</body>

</html>
