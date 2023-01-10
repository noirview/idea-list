<!DOCTYPE html>
<html lang="en">

@include('admin.components.head', [
    'title' => 'Список идей | Добавление категории | Вау! Список идей'
])

<body>

<div id="container">

    @include('admin.components.navigation')

    @include('admin.components.header')

    <div id="content">

        @include('admin.components.page-header', [
            'title' => 'Список идей',

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

        <div class="add-new">

            @include('admin.components.form.header', [
                'title' => 'Добавление категории',

                'cancelRoute' => route('admin.category.index'),
                'createRoute' => '#',
            ])

            <div class="add-new__body">
                <div class="_container">
                    <div class="add-new__form">
                        <div class="add-new__form-group">
                            <input type="text" class="add-new__form-control form-control" placeholder="Название">
                        </div>
                        <div class="add-new__form-group">
                            <textarea class="add-new__form-control form-control textarea" id="" placeholder="Описание"></textarea>
                        </div>
                        <div class="add-new__form-group">
                            <label class="add-new__drop-zone drop-zone">
                                <input type="file" name="file" id="file" class="drop-zone__input" accept=".png, .jpg, .jpeg" hidden/>
                                <p>Перетащите фото сюда или <span>выберите файл</span></p>
                                <div class="btn btn__drop">Загрузить</div>
                            </label>
                            <div class="drop-zone__thumb">
                                <a class="drop-zone__zoom" data-fancybox="dropfile"><svg><use xlink:href="./img/sprite.svg#arrow"></use></svg></a>
                                <a href="#"><svg><use xlink:href="./img/sprite.svg#close"></use></svg></a>
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
