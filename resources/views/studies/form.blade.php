<div class="card">
    <div class="card-body">
        <h6 class="card-title">Paramètres de la formation</h6>
        <div class="form-group">
            <label>Intitulé</label>
            <input type="text" class="form-control @error('name')form-control-danger @enderror" name="name"
                   placeholder="Intitulé de la formation" value="{{ $study->name ?? old('name') ?? '' }}">
            @error('name')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Dispensée par</label>
            <input type="text" class="form-control @error('university')form-control-danger @enderror" name="university"
                   placeholder="Université dispensant la formation"
                   value="{{ $study->university ?? old('university') ?? config('app.university') }}">
            @error('university')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Pays</label>
            <select class="form-control select2 @error('country')form-control-danger @enderror" name="country">
                @foreach(config('cc') as $cc => $name)
                    <option value="{{ $cc }}" @if(isset($study) and $study->country == $name)selected @endif>
                        {{ $name }}
                    </option>
                @endforeach
            </select>
            @error('country')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Durée (heures)</label>
            <input type="number" step="1" class="form-control @error('duration')form-control-danger @enderror"
                   name="duration" placeholder="Durée de la formation"
                   value="{{ $study->duration ?? old('duration') ?? '' }}">
            @error('duration')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Équivalent ECTS</label>
            <input type="text" class="form-control @error('ects')form-control-danger @enderror" name="ects"
                   placeholder="Équivalent ECTS proposé" value="{{ $study->ects ?? old('ects') ?? '' }}">
            @error('ects')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
    </div>
</div>
