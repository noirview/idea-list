<div class="add-new__header">
    <div class="_container">
        <div class="add-new__header-body">
            <h2 class="add-new__title">{{ $title }}</h2>
            <div class="add-new__actions">
                <a href="{{ $cancelRoute }}" class="btn add-new__btn add-new__cancel">Отменить</a>
                @if(isset($createRoute))
                    <a href="{{ $createRoute }}" class="btn btn__main add-new__btn add-new__save">Создать</a>
                @elseif(isset($saveRoute))
                    <a href="{{ $saveRoute }}" class="btn btn__main add-new__btn add-new__save">Сохранить</a>
                @endif
            </div>
        </div>
    </div>
</div>
