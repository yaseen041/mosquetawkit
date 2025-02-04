<div>
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<h5 class="modal-title">Subject: {{ $contact->subject}}</h5>
	</div>
	<div class="modal-body">
		<div class="mail-box-header pt-0">
			<div class="mail-tools tooltip-demo m-t-md p-1">
				<h5>
					<span class="float-right font-normal"><strong>Recieved At:</strong> {{ date_time($contact->created_at) }}</span>
					<span class="font-normal"><strong>Email:</strong> </span><a href="mailto:{{ $contact->email}}"><strong>{{ $contact->email }}</strong></a>
				</h5>
				<br />
				<p>
					<strong class="font-bold">Message: </strong><br />
					{{ $contact->message}}
				</p>

			</div>
		</div>
		<div class="form-group mb-3 float-right">
			<button type="button" class="btn btn-secondary mt-3" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>