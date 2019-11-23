<div class="card">
    <div class="card-body">
        <h6 class="card-title">Paramètres du virement</h6>
        <div class="form-group">
            <label>Bénéficiaire</label>
            <input type="text" class="form-control @error('payee')form-control-danger @enderror" name="payee"
                   placeholder="Bénéficiaire du virement" value="{{ $transfer->payee ?? old('payee') ?? '' }}">
            @error('payee')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Motif</label>
            <input type="text" class="form-control @error('purpose')form-control-danger @enderror" name="purpose"
                   placeholder="Motif du virement" value="{{ $transfer->purpose ?? old('purpose') ?? '' }}">
            @error('purpose')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Montant</label>
            <div class="input-group">
                <input type="text" class="form-control @error('amount')form-control-danger @enderror" name="amount"
                       placeholder="Montant du virement" value="{{ $transfer->amount ?? old('amount') ?? '' }}">
                <div class="input-group-append">
                    <span class="input-group-text">{{ config('app.currency.symbol') }}</span>
                </div>
            </div>
            @error('amount')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="text" class="form-control datepicker @error('date')form-control-danger @enderror" name="date"
                   placeholder="jj/mm/aa" value="{{ $transfer->date ?? old('date') ?? '' }}">
            @error('date')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
    </div>
</div>
