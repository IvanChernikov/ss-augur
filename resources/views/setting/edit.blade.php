@extends ('layouts.app')

@push ('js-deferred')
    <script src="{{ asset('EdiEditor.js}}" defer></script>
@endpush

@section ('content')
    <div class="container">
        <h2>Editing: <i>{{ $universe->name }}</i>
            <button type="button" class="btn btn-link btn-lg" data-toggle="modal" data-target="#modal-universe-update">
                <i class="fa fa-edit"></i>
            </button>
        </h2>
        <div id="editor">
            <div class="d-flex flex-column align-items-center">
                <div class="text-info">
                    <i class="fa fa-5x fa-spinner fa-spin"></i>
                </div>
                <div class="text-xs-center" id="loading-progress">Loading editor...</div>
                <progress class="progress progress-striped progress-info" value="" max="100"
                          aria-describedby="loading-progress"></progress>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-universe-update" tabindex="-1" role="dialog"
         aria-labelledby="modal-universe-update-title"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-universe-update-title">Update Setting</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-universe-update" method="post" action="{{ route('universe.update', $universe) }}">
                        @csrf
                        @method ('put')
                        <div class="form-group">
                            <label for="name">Setting Name</label>
                            <input type="text" required
                                   name="name" id="name" class="form-control" placeholder="enter a setting name..."
                                   aria-describedby="form-universe-name" value="{{ $universe->name }}">
                            <small id="form-universe-name" class="text-muted">Give an epic name to your universe.
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description"
                                      rows="3" required>{{ $universe->description }}</textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" form="form-universe-update">Submit</button>
                </div>
            </div>
        </div>
    </div>
@stop
