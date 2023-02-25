<x-app-layout>
    <x-breadcrumb title="Contact Us" :links="[
        ['text' => 'Home', 'url' => url('/')],
        ['text' => 'Grade']
    ]" />

    <section class="contact__area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <h2 class="mb-2">{{ $grade->name }}</h2>
                <h4>{{ $grade->board->short_name }}({{ $grade->board->name }})</h4>
            </div>
            <div class="row">
                @foreach($grade->subjects->pluck('name','id') as $id => $subject)
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="card my-2">
                    <div class="card-body">
                        <h5 class="section__title">
                            <a href="{{ route('subject',[$id]) }}">   {{ $subject }} </a>
                        </h5>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- contact area end -->
</x-app-layout>
