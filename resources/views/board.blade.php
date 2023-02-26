<x-app-layout>
    <x-breadcrumb title="Boards" :links="[
        ['text' => 'Home', 'url' => url('/')],
        ['text' => 'Board']
    ]" />

    <section class="contact__area pt-115 pb-120">
        <div class="container">
            <div class="row">
            	<div class="col-lg-8">
                
                <h2 class="mb-2">{{ $board->short_name }}</h2>
                <h4 class="mb-2">{{ $board->name }}</h4>
            	<div class="row my-5 "> 
	                @foreach($board->grades->pluck('name', 'id') as $id => $grade)
	                <div class="col-xxl-4 col-xl-4 col-lg-4">
	                    <div class="card my-2">
		                    <div class="card-body">
		                        <h5 class="section__title">
		                            <a href="{{ route('grade', $id) }}">   {{ $grade }} </a>
		                        </h5>
		                    </div>
		                    
	                    </div>
	                </div>
	                @endforeach 
	            </div>    
	            </div>
		         <div
                    class="col-lg-4 col-sm-6"
                >
                    <div class="contact__info white-bg p-relative z-index-1">
                        <div class="contact__info-inner white-bg">
                        	<h3 class="text-center">List of All Grades</h3>
                            <ul>
                            	@foreach($grades as $grade)
                                <li>
                                    <a href="{{ route('grade',[$grade]) }}"> {{ $grade->name }}</a>
                                </li>
                                @endforeach
                                
                               
                            </ul>
                        </div>
                    </div>
                </div>

        </div>
    </section>
    <!-- contact area end -->
</x-app-layout>
