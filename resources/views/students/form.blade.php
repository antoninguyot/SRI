<div class="card">
    <div class="card-body">
        <h6 class="card-title">Paramètres de la formation</h6>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="form-group">
                    <label>Prénom</label>
                    <input type="text" class="form-control @error('first_name')form-control-danger @enderror"
                           name="first_name"
                           placeholder="Prénom" value="{{ $student->first_name ?? old('first_name') ?? '' }}">
                    @error('first_name')
                    <label class="error mt-2 text-danger">{{ $message }}</label>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" class="form-control @error('last_name')form-control-danger @enderror"
                           name="last_name"
                           placeholder="Nom de famille" value="{{ $student->last_name ?? old('last_name') ?? '' }}">
                    @error('last_name')
                    <label class="error mt-2 text-danger">{{ $message }}</label>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Adresse mail</label>
            <input type="text" class="form-control @error('email')form-control-danger @enderror" name="email"
                   placeholder="Adresse mail" value="{{ $student->email ?? old('email') ?? '' }}">
            @error('email')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Nationalité</label>
            <select class="form-control select2 @error('nationality')form-control-danger @enderror" name="nationality">
                @foreach(config('cc') as $cc => $name)
                    <option value="{{ $cc }}" @if(isset($student) and $student->nationality == $name)selected @endif>
                        {{ $name }}
                    </option>
                @endforeach
            </select>
            @error('nationality')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Statut de l'étudiant</label>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="type" value="local"
                               @if(!isset($student))checked @endif
                               @if(isset($student) and $student->type == 'Local')checked @endif>
                        Local (initialement à {{ config('app.university') }})
                        <i class="input-frame"></i><i class="input-frame"></i></label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="type" value="foreign"
                               @if(isset($student) and $student->type == 'Étranger')checked @endif>
                        Étranger (en provenance d'une autre université)
                        <i class="input-frame"></i><i class="input-frame"></i></label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Université</label>
            <input type="text" class="form-control @error('university')form-control-danger @enderror" name="university"
                   placeholder="Adresse mail" value="{{ $student->university ?? old('university') ?? '' }}">
            @error('university')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <label>Statut boursier</label>
        <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
                <input type="hidden" name="scholarship" value="0">
                <input type="checkbox" class="form-check-input" value="1"
                       @if(isset($student) and $student->scholarship)checked @endif name="scholarship">
                Étudiant boursier
                <i class="input-frame"></i></label>
            @error('scholarship')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
    </div>
</div>
