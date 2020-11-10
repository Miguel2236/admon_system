 <!-- Modal -->
 <div class="modal fade" id="newPrf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Profile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('profile_store') }}" method="POST" name="frmProfile" id="frmProfile">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="menu_name">Description</label>
                    <input type="text" class="form-control" name="description" autocomplete="off">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" form="frmProfile"><i class="far fa-save"></i> Save</button>
        </div>
      </div>
    </div>
  </div>