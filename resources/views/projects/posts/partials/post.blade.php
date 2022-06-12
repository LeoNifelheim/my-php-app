<div class="row">
    <div class="col-md-6">
        <h3><a href="{{ route('projects.posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a></h3>
    </div>
    <div class="col-md-6">
        <a href="{{ route('projects.posts.edit', ['post' => $post->id]) }}" class="btn btn-dark"><i class="fa-solid fa-pencil"></i></a>
        <form class="d-inline" action="{{ route('projects.posts.destroy', ['post' => $post->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
        </form>
    </div>
</div>
