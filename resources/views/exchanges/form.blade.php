<div class="card">
    <div class="card-body">
        <h6 class="card-title">Paramètres de l'échange</h6>
        <div class="form-group">
            <label>Étudiant</label>
            <select class="form-control select2 @error('student_id')form-control-danger @enderror" name="student_id">
                @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
            @error('student_id')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Formation</label>
            <select class="form-control select2 @error('study_id')form-control-danger @enderror" name="study_id">
                @foreach($studies as $study)
                    <option value="{{ $study->id }}">{{ $study->name }}</option>
                @endforeach
            </select>
            @error('study_id')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Commence le</label>
            <input type="text" class="form-control @error('begins_at')form-control-danger @enderror" name="begins_at"
                   placeholder="jj/mm/aa" value="{{ isset($exchange) ? $exchange->begins_at->format('d/m/Y') : old('begins_at') ?? '' }}">
            @error('begins_at')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Se termine le</label>
            <input type="text" class="form-control @error('ends_at')form-control-danger @enderror" name="ends_at"
                   placeholder="jj/mm/aa" value="{{ isset($exchange) ? $exchange->ends_at->format('d/m/Y') : old('ends_at') ?? '' }}">
            @error('ends_at')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
    </div>
</div>
