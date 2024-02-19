@section('header')
    <header class="d-flex flex-column flex-md-row align-items-center pb-2 mb-2 mt-2 border-bottom justify-content-between">
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <div>
                <a class="btn me-3 btn-dark py-2 text-decoration-none" href="{{ back()->getTargetUrl() }}">Обратно</a>
            </div>
            <div>
                <a class="btn link-body-emphasis text-decoration-none" href="{{ route('groups.index') }}">Группы</a>
                <a class="btn link-body-emphasis text-decoration-none" href="{{ route('students.index') }}">Студенты</a>
            </div>
        </nav>
    </header>