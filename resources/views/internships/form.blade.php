<div class="card">
    <div class="card-body">
        <h6 class="card-title">Paramètres du stage</h6>
        <div class="form-group">
            <label>Étudiant</label>
            <select class="form-control select2 @error('student_id')form-control-danger @enderror" name="student_id">
                @foreach($students as $student)
                    <option value="{{ $student->id }}"
                            @if(isset($internship) and $internship->student_id == $student->id)selected @endif>
                        {{ $student->name }}
                    </option>
                @endforeach
            </select>
            @error('student_id')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Entreprise</label>
            <input type="text" class="form-control @error('company')form-control-danger @enderror" name="company"
                   placeholder="Nom de l'entreprise" value="{{ $internship->company ?? old('company') ?? '' }}">
            @error('company')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Pays</label>
            <select class="form-control select2 @error('country')form-control-danger @enderror" name="country">
                @foreach(config('cc') as $cc => $name)
                    <option value="{{ $cc }}" @if(isset($internship) and $internship->country == $name)selected @endif>
                        {{ $name }}
                    </option>
                @endforeach
            </select>
            @error('country')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="row">
            <div class="form-group col-lg-6 col-md-12">
                <label>Commence le</label>
                <input type="text" class="form-control datepicker @error('begins_at')form-control-danger @enderror"
                       name="begins_at"
                       placeholder="jj/mm/aa" value="{{ $internship->begins_at ?? old('begins_at') ?? '' }}">
                @error('begins_at')
                <label class="error mt-2 text-danger">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group col-lg-6 col-md-12">
                <label>Se termine le</label>
                <input type="text" class="form-control datepicker @error('ends_at')form-control-danger @enderror"
                       name="ends_at"
                       placeholder="jj/mm/aa" value="{{ $internship->ends_at ?? old('ends_at') ?? '' }}">
                @error('ends_at')
                <label class="error mt-2 text-danger">{{ $message }}</label>
                @enderror
            </div>
        </div>
    </div>
</div>
