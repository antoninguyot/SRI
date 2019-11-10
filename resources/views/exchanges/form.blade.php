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
    </div>
</div>
