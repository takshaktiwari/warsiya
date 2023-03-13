<x-app-layout>
    <x-breadcrumb title="Contact Us" :links="[['text' => 'Home', 'url' => url('/')], ['text' => 'Grade']]" />

    <section class="contact__area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-6">
                    <h2 class="mb-2">
                        <i class="fa-solid fa-graduation-cap"></i>
                        {{ $grade->name }}
                    </h2>
                    <h4>{{ $grade->board->name }}({{ $grade->board->short_name }})</h4>

                    <div class="row my-5">
                        @foreach ($grade->subjects->pluck('name', 'id') as $id => $subject)
                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                <div class="card my-2">
                                    <div class="card-body">
                                        <h5 class="section__title">
                                            <a href="{{ route('subject', [$id]) }}"> {{ $subject }} </a>
                                        </h5>
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
                                <i class="fa-solid fa-graduation-cap"></i>
                                Other Grades
                            </h3>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($grades as $grade)
                                <a href="{{ route('grade', [$grade]) }}" class="list-group-item">
                                    <i class="fa-solid fa-caret-right me-2"></i>
                                    {{ $grade->name }}
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
