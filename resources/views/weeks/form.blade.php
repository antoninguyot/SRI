<div class="card">
    <div class="card-body">
        <h6 class="card-title">Paramètres de la semaine internationale</h6>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="form-group">
                    <label>Intitulé</label>
                    <input type="text" class="form-control @error('name')form-control-danger @enderror"
                           name="name"
                           placeholder="Intitulé de la semaine" value="{{ $week->name ?? old('name') ?? '' }}">
                    @error('name')
                    <label class="error mt-2 text-danger">{{ $message }}</label>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="form-group">
                    <label>Type</label>
                    <select class="form-control select2 @error('type')form-control-danger @enderror"
                            name="type">
                        <option value="0">Entrante</option>
                        <option value="1" @if(isset($week) and $week->type == 1)selected @endif>Sortante</option>
                    </select>
                    @error('type')
                    <label class="error mt-2 text-danger">{{ $message }}</label>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="form-group">
                    <label>Nombre d'étudiants</label>
                    <input type="number" step="1" class="form-control @error('students')form-control-danger @enderror"
                           name="students"
                           placeholder="Nombre d'étudiants" value="{{ $week->students ?? old('students') ?? '' }}">
                    @error('students')
                    <label class="error mt-2 text-danger">{{ $message }}</label>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="form-group">
                    <label>Frais d'inscription (par étudiant)</label>
                    <input type="number" step="0.01" class="form-control @error('fee')form-control-danger @enderror"
                           name="fee"
                           placeholder="Frais d'inscriptions" value="{{ $week->fee ?? old('fee') ?? '' }}">
                    @error('fee')
                    <label class="error mt-2 text-danger">{{ $message }}</label>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6 col-md-12">
                <label>Commence le</label>
                <input type="text" class="form-control datepicker @error('begins_at')form-control-danger @enderror"
                       name="begins_at"
                       placeholder="jj/mm/aa" value="{{ $week->begins_at ?? old('begins_at') ?? '' }}">
                @error('begins_at')
                <label class="error mt-2 text-danger">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group col-lg-6 col-md-12">
                <label>Se termine le</label>
                <input type="text" class="form-control datepicker @error('ends_at')form-control-danger @enderror"
                       name="ends_at"
                       placeholder="jj/mm/aa" value="{{ $week->ends_at ?? old('ends_at') ?? '' }}">
                @error('ends_at')
                <label class="error mt-2 text-danger">{{ $message }}</label>
                @enderror
            </div>
        </div>
    </div>
</div>
