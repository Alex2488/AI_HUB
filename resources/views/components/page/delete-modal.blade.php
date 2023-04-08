@props(['title'])

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Видалення</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <form id="delete-form" method="post">
                    @csrf
                    @method ('DELETE')

                    <button type="button" class="btn btn-danger btn-exit " data-dismiss="modal">No</button>

                    <span class="text-right">
                <button type="button" class="btn btn-primary btn-delete" data-dismiss="modal">Yes</button>
            </span>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
