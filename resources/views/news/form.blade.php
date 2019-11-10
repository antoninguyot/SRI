@push('js')
    <script src="{{ asset('js/simplemde.js') }}"></script>
@endpush

@push('css')
    <link rel="stylesheet" href="{{ asset('css/simplemde.css') }}">
@endpush

<div class="card">
    <div class="card-body">
        <h6 class="card-title">Paramètres de l'actualité</h6>
        <div class="form-group">
            <label>Titre</label>
            <input type="text" class="form-control @error('title')form-control-danger @enderror" name="title"
                   placeholder="Titre de l'actualité" value="{{ $news->title ?? old('title') ?? '' }}">
            @error('title')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Contenu</label>
            <textarea class="form-control simplemde @error('content')form-control-danger @enderror" name="content"
                      placeholder="Contenu de l'actualité">{!! $news->content ?? old('content') ?? '' !!}</textarea>
            @error('content')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
    </div>
</div>
