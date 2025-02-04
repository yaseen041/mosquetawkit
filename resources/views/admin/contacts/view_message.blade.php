<div>
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h5 class="modal-title">View Message</h5>
	</div>
	<div class="modal-body">
		<div class="mail-box-header">
			<div class="mail-tools tooltip-demo m-t-md">
				<h3 class="text-center pb-3">
					<span class="font-normal">Subject: </span><strong>{{ $contact->subject}}</strong>
				</h3>
				<h5>
					<span class="float-right font-normal">Recieved At: {{ date_time($contact->created_at) }}</span>
					<span class="font-normal">From: </span>{{ $contact->email}}
				</h5>
			</div>
			<div class="mail-tools tooltip-demo m-t-md">
				<h5>
					<span class="float-right font-normal">Email: <a href="mailto:{{ $contact->email}}"><strong>{{ $contact->email }}</strong></a></span>
					<span class="font-normal">Phone: </span><strong><a href="tel:{{ $contact->phone}}">{{ $contact->phone}}</a></strong>
				</h5>
			</div>
		</div>
		<div class="mail-box">
			<div class="mail-body">
				<p>
					{{ $contact->message}}
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="form-group mb-3 float-right">
			<button type="button" class="btn btn-secondary mt-3" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>