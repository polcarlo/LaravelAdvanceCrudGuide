@extends('layouts.app')


@section('content')
<div class="container body-container">
	<button type="button" id="add-data" class="btn btn-success">Add</button>
	<button type="button" id="refresh" class="btn btn-info">Rrefresh</button>
	<table id="student_table" class="table table-bordered" style="width: 100%">
		<thead>
			<tr>
				<th> First Name</th>
				<th> Last Name</th>
				<th>Action</th>
			</tr>
		</thead>
	</table>
</div>


<div class="modal" tabindex="-1" role="dialog" id="studentModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post" id="student_form">
      <div class="modal-header">
        <h5 class="modal-title">Add New Members</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	        <span id="form_output"></span>
    			<div class="form-group">
    				<label>Membership Number</label>
    				<input type="text" name="membership_number" id="membership_number" class="form-control">
    			</div>
    			<div class="form-group">
            {{csrf_field()}}
    				<label>Name</label>
    				<input type="text" name="name" id="name" class="form-control">
        		</div>
          		<div class="form-group">
    				<label>Contact</label>
    				<input type="text" name="contact" id="contact" class="form-control">
        		</div>
        		<div class="form-group">
    				<label>ID Number</label>
    				<input type="text" name="id_number" id="id_number" class="form-control">
        		</div>
      </div>
      <div class="modal-footer">
 				<input type="hidden" name="student_id" id="student_id" value="">
        		<input type="hidden" name="button_action" id="button_action" value="insert">
        		<input type="submit" name="submit" id="action" value="add" class="btn btn-info">
          </form>
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
       



@endsection


@section('script')

@include('members.script')


@endsection

