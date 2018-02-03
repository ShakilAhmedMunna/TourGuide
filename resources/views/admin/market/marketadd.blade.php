
	<form action="{{ route('marketCreate') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
		<div class="modal fade" id="create">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span>&times;</span>
						</button>
						<h5  style="padding-bottom: 0px;margin-bottom: 0px;margin-top: 0px;">Add Here</h5>
			</div>
		 


			<div class="modal-body" style="padding-bottom: 0px;margin-bottom: 0px;margin-top: 0px;">
				<label for="Contact Name">Market Name :</label>
				<input type="text" name="marketName" class="form-control input-sm">
			</div>


			<div class="modal-body" style="padding-bottom: 0px;margin-bottom: 0px;margin-top: 0px;">
				<label for="message-text" class="control-label">Address:</label>
				<textarea class="form-control" name="address" id="message-text"></textarea>
			</div>


		<div class="modal-body" style="padding-bottom: 0px;margin-bottom: 8px;margin-top: 0px;">
			<label for="" class="col-sm-2">Place</label>
				<select id = "" name = "place" class="form-control input-sm">
					@foreach ($places as $place)
							<option>  {{ $place->placeName }}</option>
					@endforeach
			</select>
			</div>

			<div class="modal-footer" style="margin-top: 10px;">
				<input type="submit" class="btn btn-primary" value="Submit">
				<input type="hidden" value="{{ Session::token() }}" name="_token">
			</div>
		</div>


</form>
	</div>
	</div>
