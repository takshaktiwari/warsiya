<x-app-layout>
    <x-breadcrumb title="Contact Us" :links="[
        ['text' => 'Home', 'url' => url('/')],
        ['text' => 'Material']
    ]" />

    <section class="contact__area pt-115 pb-120">
        <div class="container">
            <div class="row">

            	
                <div class="col-xxl-7 col-xl-7 col-lg-6">
                	<h2 class="text-center mb-4" >{{ $material->title }}</h2>
                    <h4 class="my-3"> Grade:{{ $material->grade->name }}</h4>
                    <h5>Subject: {{ $material->subject->name }}</h5>
                    <p class="text-justify">{{ $material->description }}</p>
                	<h5 class="my-5">Download study Material:</h5>
                    <div class="row">
                    	@foreach($material->materialItems->pluck('file_path') as $pdf)
                    	<div class="col-lg-6">
                    		<div class="card">
                    			<div class="card-body">
	            					<a href="{{ url('storage/app/public/'.$pdf) }}" target="_blank">{{ substr($pdf,10) }}</a>   
			            		</div>
			            	</div>
			            </div>
	            		@endforeach
                    	
              
                    </div>
                </div>

                <div
                    class="col-xxl-4 offset-xxl-1 col-xl-4 offset-xl-1 col-lg-5 offset-lg-1"
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
        </div>
    </section>
    
</x-app-layout>
