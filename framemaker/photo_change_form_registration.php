<div class="modal fade" tabindex="-1" role="dialog" id="profile_pic_modal" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Upload Profile Picture</h5>
				<div>
					<button type="button" class="btn btn-primary photo_crop_btn" id="crop_btn_header">Crop &amp; Select</button>
					<button type="button" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			<div class="modal-body">
				<div class="img-container">
					<img id="edit_image" height="100%" width="100%">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal" data-bs-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary photo_crop_btn" id="crop">Crop &amp; Select</button>
			</div>
		</div>
	</div>
</div>

<script>
	document.getElementById('crop_btn_header').addEventListener('click', function() {
		$('#crop').trigger('click');
	});
</script>