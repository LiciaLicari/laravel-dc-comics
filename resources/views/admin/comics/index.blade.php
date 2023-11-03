@extends('layouts.admin')

@section('content')
    <section class="py-4">
        <div class="container position-relative">
            <h4 class="text-muted text-uppercase">All Comics</h4>
            <a class="btn btn-primary position-fixed bottom-0 end-0 m-4" href="{{ route('comics.create') }}">Add
                Comic</a>
            @if (session('message'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Success!</strong> {{ session('message') }}
                </div>
            @endif

            <a href="{{ route('comics.create') }}" class="btn btn-primary mb-3 text-end">Add Comic</a>


            <div class="card">

                <div class="table-responsive-sm">
                    <table class="table table-light mb-0">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>


                            @forelse ($comics as $comic)
                                <tr class="">
                                    <td scope="row">{{ $comic->id }}</td>
                                    <td>
                                        <img src="{{ $comic->thumb }}" alt="">

                                        @if (str_contains($comic->thumb, 'http'))
                                            <img src="{{ $comic->thumb }}" alt="">
                                        @else
                                            <img src="{{ asset('storage/' . $comic->thumb) }}" alt="">
                                        @endif
                                    </td>
                                    <td>{{ $comic->title }}</td>
                                    <td>

                                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">View</a>
                                        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-secondary">Edit</a>

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#modalId-{{ $comic->id }}">
                                            Delete
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalTitleId">Delete comic number
                                                            {{ $comic->id }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Attention! This is a destructive operation that cannot be undone.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <form action="{{ route('comics.destroy', $comic->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-danger">Delete</a>



                                    </td>
                                </tr>
                            @empty
                                <tr class="">

                                    <td>No Comics yet</td>

                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
@endsection
