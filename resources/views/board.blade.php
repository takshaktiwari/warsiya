<x-app-layout>
    <x-breadcrumb title="Boards" :links="[['text' => 'Home', 'url' => url('/')], ['text' => 'Board']]" />

    <section class="contact__area pt-115 pb-120">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 col-sm-6">
                    <h2 class="mb-2">
                        <i class="fa-solid fa-building-columns"></i>
                        {{ $board->short_name }}
                    </h2>
                    <h4 class="mb-2">{{ $board->name }}</h4>
                    <div class="row g-3 mt-4">
                        @foreach ($board->grades->pluck('name', 'id') as $id => $grade)
                            <div class="col-lg-4 col-md-3 col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{ route('grade', $id) }}" class="fs-5">
                                            <i class="fa-solid fa-graduation-cap"></i> {{ $grade }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="my-2">
                                <i class="fa-solid fa-building-columns"></i>
                                Other Boards
                            </h3>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($boards as $board)
                                <a href="{{ route('board', [$board]) }}" class="list-group-item">
                                    <i class="fa-solid fa-caret-right me-2"></i>
                                    {{ $board->name }}
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
