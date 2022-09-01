<div class="modal fade" id="category-modal" tabindex="-1" aria-labelledby="category-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form  action="" method="post" class="form-horizontal form">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="title" class="form-label">Post title</label>
            <input type="text" class="form-control" name="name">
            <input type="hidden" class="form-control" name="id" value="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="submit">Added</button>
        </div>
      </div>
    </form>
  </div>
</div>

