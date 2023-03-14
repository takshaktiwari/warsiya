<x-app-layout>
    <x-breadcrumb title="Subjects" :links="[
        ['text' => $grade->board->short_name, 'url' => route('board', [$grade->board])],
        ['text' => $grade->name, 'url' => route('grade', [$grade])],
        ['text' => $subject->name],
    ]" />

    <section class="contact__area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-6">
                    <h2 class="mb-2">
                        <i class="fa-solid fa-book"></i>
                        {{ $subject->name }}
                    </h2>
                    <h4>{{ $grade->name }} ({{ $grade->board->name }})</h4>
                    <div class="row g-3 mt-4">
                        @foreach ($materials as $material)
                            <div class="col-md-6">
                                <div class="card my-2">
                                    <div class="card-body d-flex justify-content-between">
                                        <h5 class="my-auto">{{ $material->title }}</h5>
                                    </div>
                                    @if ($material->description)
                                        <div class="card-body border-top">
                                            {!! $material->description !!}
                                        </div>
                                    @endif
                                    <ul class="list-group list-group-flush">
                                        @foreach ($material->materialItems as $item)
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span class="my-auto fw-bold">
                                                    {{ str()->of($item->file_path)->afterLast('/') }}
                                                </span>
                                                <div class="my-auto">
                                                    <a href="{{ storage($item->file_path) }}"
                                                        class="btn btn-sm btn-success" download="">
                                                        <i class="fas fa-download"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="my-2">
                                <i class="fa-solid fa-book"></i>
                                Other Subjects
                            </h3>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($grade->subjects as $subject)
                                <a href="{{ route('subject', [$grade, $subject]) }}" class="list-group-item">
                                    <i class="fa-solid fa-caret-right me-2"></i>
                                    {{ $subject->name }}
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end -->
</x-app-layout>
