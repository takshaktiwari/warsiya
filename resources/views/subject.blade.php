<x-app-layout>
    <x-breadcrumb title="Subject" :links="[
        ['text' => 'Home', 'url' => url('/')],
        ['text' => 'Subject']
    ]" />

    <section class="contact__area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-6">
                    <h2 class="mb-2">{{ $subject->name }}</h2>
                    <h4>{{  $subject->grades->pluck('name')->implode(', ') }}</h4>
                    <div class="row">

                        @foreach($subject->material->pluck('title','id') as $id => $material)
                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                <div class="card my-2">
            	                    <div class="card-body">
            	                        <h5 class="section__title">
            	                            <a href="{{ route('material', $id) }}">   {{ $material }} </a>
            	                        </h5>
            	                    </div>
            	                    
                                </div>
                            </div>
                            
                        @endforeach 
                    </div> 
                </div> 
                <div class="col-lg-4 col-sm-6">
                    <div class="contact__info white-bg p-relative z-index-1">
                        <div class="contact__info-inner white-bg">
                            <h3 class="text-center">List of All Materials </h3>
                            <ul>
                                @foreach($materials as $material)
                                <li>
                                    <a href="{{ route('subject',[$material]) }}"> {{ $material->title }}</a>
                                </li>
                                @endforeach
                                
                               
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact area end -->
</x-app-layout>
