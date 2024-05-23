@extends ('layouts.admin')

@section('content')
    <section class="bg-body-tertiary">

        <h2 class="text-center py-4 bg-dark text-secondary">Project: {{ $project->title }}</h2>

        <div class="container">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session('status') }}
                </div>
            @endif

            <div>
                <h3>{{ $project->title }}</h3>
                <h5>{{ $project->subtitle }}</h5>
            </div>
            <div class="d-flex align-items-center py-5">
                <div>
                    @if (Str::startsWith($project->image, 'https://'))
                        <img loading="lazy" src="{{ $project->image }}" alt="{{ $project->title }}">
                    @else
                        <img loading="lazy" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                    @endif
                    <p class="fw-lighter">{{ $project->slug }}</p>
                </div>

                <div class="ps-3">
                    <p>{{ $project->description }}</p>
                    <a href="{{ $project->url }}">
                        <span>{{ $project->url }}</span>
                    </a>
                </div>
            </div>
            </tbody>
            </table>

            <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-dark py-2 px-3">
                <i class="fa fa-long-arrow-left pe-1" aria-hidden="true"></i>
                Back
            </a>
        </div>

    </section>
@endsection
