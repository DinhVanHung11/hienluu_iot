<div class="modal fade" id="addNode" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Mode</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add-new-node') }}" method="POST">
                    <div class="row">
                        <div class="col-4">
                            <label for="name" class="form-label">Node Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter node name...">
                        </div>
                        <div class="col-4">
                            <label for="measurement_time" class="form-label">Node Measurement Time</label>
                            <input type="number" name="measurement_time" class="form-control" id="measurement_time" placeholder="Enter node measurement_time...">
                        </div>
                        <div class="col-4">
                            <label for="" class="form-label">Status</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="status_active" checked value="1">
                                    <label class="form-check-label" for="status_active">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="status_inactive" value="2">
                                    <label class="form-check-label" for="status_inactive">
                                        Inactive
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @csrf
                    <div class="mt-3 modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
