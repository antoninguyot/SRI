<div class="card">
    <div class="card-body">
        <h6 class="card-title">Paramètres de la commande</h6>
        <div class="form-group">
            <label>Désignation</label>
            <input type="text" class="form-control @error('designation')form-control-danger @enderror" name="designation"
                   placeholder="Désignation de l'objet" value="{{ $order->designation ?? old('designation') ?? '' }}">
            @error('designation')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Fournisseur</label>
            <input type="text" class="form-control @error('supplier')form-control-danger @enderror" name="supplier"
                   placeholder="Fournisseur de l'objet" value="{{ $order->supplier ?? old('supplier') ?? '' }}">
            @error('supplier')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label>Valeur</label>
                <input type="number" step="0.01" class="form-control @error('value')form-control-danger @enderror"
                       name="value" placeholder="Valeur unitaire" value="{{ $order->value ?? old('value') ?? '' }}">
                @error('value')
                <label class="error mt-2 text-danger">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-group col-6">
                <label>Devise</label>
                <input type="text" class="form-control @error('currency')form-control-danger @enderror"
                       name="currency" placeholder="Devise" value="{{ $order->currency ?? old('currency') ?? '' }}">
                @error('currency')
                <label class="error mt-2 text-danger">{{ $message }}</label>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>Quantité</label>
            <input type="number" step="1" class="form-control @error('quantity')form-control-danger @enderror" name="quantity"
                   placeholder="Quantité d'achat" value="{{ $order->quantity ?? old('quantity') ?? '' }}">
            @error('quantity')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="text" class="form-control datepicker @error('date')form-control-danger @enderror" name="date"
                   placeholder="jj/mm/aa" value="{{ $order->date ?? old('date') ?? '' }}">
            @error('date')
            <label class="error mt-2 text-danger">{{ $message }}</label>
            @enderror
        </div>
    </div>
</div>
