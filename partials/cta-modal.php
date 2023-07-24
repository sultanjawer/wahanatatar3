<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
	<div class="modal-dialog modal-lg  modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="forms/contact.php" method="post" role="form" class="php-email-form">
					<div class="row">
						<div class="col-md-6 form-group">
							<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
						</div>
						<div class="col-md-6 form-group mt-3 mt-md-0">
							<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
						</div>
					</div>
					<div class="form-group mt-3">
						<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
					</div>
					<div class="form-group mt-3">
						<textarea class="form-control" name="message" placeholder="Message" required></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</div>
</div>