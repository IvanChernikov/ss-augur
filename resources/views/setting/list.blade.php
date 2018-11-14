@extends ('layouts.app')

@section ('content')
    <div class="container">
        <h2>My Campaign Settings</h2>
        <ul class="list-group">
            <li class="list-group-item" data-modal="#create-universe">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal"
                        data-target="#create-universe">
                    Create a new campaign setting
                </button>
            </li>
            @foreach ($universes as $universe)
                <li class="list-group-item">
                    <h3>{{ $universe->name }}</h3>
                    <p>{{ $universe->description }}</p>
                    <a href="{{ route('setting.edit', $universe->id) }}">Edit</a>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="create-universe" tabindex="-1" role="dialog" aria-labelledby="create-universe-title"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="create-universe-title">New Campaign Setting</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('universe.store') }}" method="post" id="create-universe-form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Setting Name</label>
                            <input type="text" required
                                   name="name" id="name" class="form-control" placeholder="enter a setting name..."
                                   aria-describedby="universe-name-help">
                            <small id="universe-name-help" class="text-muted">Give an epic name to your new setting.
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3"
                                      required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" form="create-universe-form">Create</button>
                </div>
            </div>
        </div>
    </div>

@stop