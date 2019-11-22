<div class="card">
    <div class="card-body">
        <h6 class="card-title">Paramètres de la mission</h6>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="form-group">
                    <label>Prénom</label>
                    <input type="text" class="form-control @error('first_name')form-control-danger @enderror"
                           name="first_name"
                           placeholder="Prénom" value="{{ $mission->first_name ?? old('first_name') ?? '' }}">
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
                           placeholder="Nom de famille" value="{{ $mission->last_name ?? old('last_name') ?? '' }}">
                    @error('last_name')
                    <label class="error mt-2 text-danger">{{ $message }}</label>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Lieu</label>
            <input type="text" class="form-control @error('location')form-control-danger @enderror" name="location"
                   placeholder="Lieu du déplacement" value="{{ $mission->location ?? old('location') ?? '' }}">
            @error('location')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Motif</label>
            <input type="text" class="form-control @error('purpose')form-control-danger @enderror" name="purpose"
                   placeholder="Motif du déplacement" value="{{ $mission->purpose ?? old('purpose') ?? '' }}">
            @error('purpose')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Coût total</label>
            <div class="input-group">
                <input type="number" step="0.01" class="form-control @error('cost')form-control-danger @enderror"
                       name="cost" placeholder="Coût de la mission" value="{{ $mission->cost ?? old('cost') ?? '' }}">
                <div class="input-group-append">
                    <span class="input-group-text">{{ config('app.currency.symbol') }}</span>
                </div>
            </div>
            @error('cost')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="row">
            <div class="form-group col-lg-6 col-md-12">
                <label>Commence le</label>
                <input type="text" class="form-control datepicker @error('begins_at')form-control-danger @enderror"
                       name="begins_at"
                       placeholder="jj/mm/aa" value="{{ $mission->begins_at ?? old('begins_at') ?? '' }}">
                @error('begins_at')
                <label class="error mt-2 text-danger">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group col-lg-6 col-md-12">
                <label>Se termine le</label>
                <input type="text" class="form-control datepicker @error('ends_at')form-control-danger @enderror"
                       name="ends_at"
                       placeholder="jj/mm/aa" value="{{ $mission->ends_at ?? old('ends_at') ?? '' }}">
                @error('ends_at')
                <label class="error mt-2 text-danger">{{ $message }}</label>
                @enderror
            </div>
        </div>
    </div>
</div>
