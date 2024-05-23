@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-between align-items-center p-4">
        <h2 class="text-center text-secondary-emphasis ">Create a New Project</h2>


    </div>

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Project Title</label>
                <input type="text" class="form-control @error('title') is-inavlid @enderror" name="title"
                    id="title" aria-describedby="titleHelper" value="{{ old('title') }}" />
                <small id="titleHelper" class="form-text text-secondary">Type the title of your new project</small>
                @error('title')
                    <div class="text-danger py-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="subtitle" class="form-label">Project Subtitle</label>
                <input type="text" class="form-control @error('subtitle') is-inavlid @enderror" name="subtitle"
                    id="subtitle" aria-describedby="subtitleHelper" value="{{ old('subtitle') }}" />
                <small id="subtitleHelper" class="form-text text-secondary">Type the subtitle of your new
                    project</small>
                @error('subtitle')
                    <div class="text-danger py-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">
                    <i class="fa fa-image fa-xs fa fw" aria-hidden="true"></i>
                    Project image
                </label>
                <input type="file" class="form-control @error('image') is-inavlid @enderror" name="image"
                    id="image" aria-describedby="imageHelper" />
                <small id="imageHelper" class="form-text text-secondary">Type the image of your new
                    project</small l>
                @error('image')
                    <div class="text-danger py-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description of project</label>
                <textarea class="form-control @error('description') is-inavlid @enderror" name="description" id="description"
                    rows="5">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger py-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">

                <button type="submit" class="btn-outline-dark px-3 py-2 rounded">
                    <i class="fa fa-floppy-o pe-1" aria-hidden="true"></i>
                    Create
                </button>

                <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-dark py-2 px-3">
                    <i class="fa-solid fa-delete-left pe-1"></i>
                    Cancel
                </a>

            </div>



        </form>
    </div>
@endsection
