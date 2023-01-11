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
                'saveRoute' => route('admin.idea.update', ['id' => $idea->id]),
            ])

            <div class="add-new__body">
                <div class="_container">
                    <div class="add-new__form">
                        <div class="add-new__form-group">
                            <div id="category_id" class="select add-new__select">
                                <button class="btn select__btn add-new__select-btn" type="button">
                                    <span>{{ $categories->where('id', $idea->category_id)->first()->title }}</span>
                                    <svg>
                                        <use xlink:href="{{ asset('img/sprite.svg') }}#drop"></use>
                                    </svg>
                                </button>
                                <ul class="select__list add-new__select-list">
                                    @foreach($categories as $category)
                                        <li data-id="{{ $category->id }}" class="select__item add-new__select-item @if($idea->category_id == $category->id) active @endif">{{ $category->title }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="add-new__form-group">
                            <input id="author_name" type="text" class="add-new__form-control form-control"
                                   value="{{ $idea->author_name }}" placeholder="Имя создателя">
                        </div>
                        <div class="add-new__form-group">
                            <input id="title" type="text" class="add-new__form-control form-control" value="{{ $idea->title }}"
                                   placeholder="Тема">
                        </div>
                        <div class="add-new__form-group">
                            <input id="description" type="text" class="add-new__form-control form-control"
                                   value="{{ $idea->description }}" placeholder="Описание">
                        </div>
                        <div class="add-new__form-group">
                            <div class="add-new__row">
                                <div class="add-new__col col-sm-6">
                                    <div id="status" class="select add-new__select">
                                        <button class="btn select__btn add-new__select-btn" type="button">
                                            <span>{{ \App\Enums\IdeaStatus::getDescription($idea->status) }}</span>
                                            <svg>
                                                <use xlink:href="{{ asset('img/sprite.svg') }}#drop"></use>
                                            </svg>
                                        </button>
                                        <ul class="select__list add-new__select-list">
                                            @foreach(\App\Enums\IdeaStatus::getValues() as $status)
                                                <li data-id="{{ $status }}" class="select__item add-new__select-item @if($idea->status == $status) active @endif">{{ \App\Enums\IdeaStatus::getDescription($status) }}</li>
                                            @endforeach
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
