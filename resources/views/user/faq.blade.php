@extends('app')
@section('title', 'FAQ')
@section('content')
<section >
	<div class='container'>
		<div class='row' dir='ltr'>
			<h1>Tawkit Frequently Asked Questions</h1>
		</div>
	</div>
</section>

<section id='faq' class='faq'>
	<div class='container'>
		<div class='accordion-list'>
			<ul>
				<li>
					<i class='bx bx-help-circle icon-help'></i> 
					<a data-bs-toggle='collapse' class='collapsed' data-bs-target='#accordion-list-1'>
						How To Modify Prayers Times To Fit Your Mosque 
						<i class='bx bx-chevron-down icon-show'></i>
						<i class='bx bx-chevron-up icon-close'></i>
					</a>
					<div id='accordion-list-1' class='' data-bs-parent='.accordion-list'>
						<p>
							If included times of your city are not correct or you need exact times for your Mosque, then you have to modify the wtimes-file of your city "/tawkit/data/XX/" or to put your own times in the PERSONAL file "wtimes-00.000.js" located in the folder : /tawkit/data/00/<br><br>Hours must be in 24 format !<br>After modifications, save the file, and restart tawkit app.<br><br>Here you can create and adjust your Mosque times with the wtimes-file-maker : <br><a href='https://www.tawkit.net/wtimes/' target='_blank' >www.tawkit.net/wtimes/</a>
						</p>
					</div>
				</li>
				<li>
					<i class='bx bx-help-circle icon-help'></i>
					<a data-bs-toggle='collapse' class='collapsed' data-bs-target='#accordion-list-2'>
						Your Mosque Has Fixed Jamaat/Iqamat Times During Different Weeks
						<i class='bx bx-chevron-down icon-show'></i>
						<i class='bx bx-chevron-up icon-close'></i>
					</a>
					<div id='accordion-list-2' class='' data-bs-parent='.accordion-list'>
						<p>
							Tawkit app has solution for special Jamaat/Iqama times, you need to enable JAMAAT TIMES option in settings, and modify the file "wcsv.js" located in the root folder of the application.
						</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
@endsection
@push('scripts')

@endpush