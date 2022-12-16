<div class="form-group {{ $errors->has('NamaSubcription') ? 'has-error' : ''}}">
    <label for="NamaSubcription" class="control-label">{{ 'Namasubcription' }}</label>
    <input class="form-control" name="NamaSubcription" type="text" id="NamaSubcription" value="{{ isset($subscription->NamaSubcription) ? $subscription->NamaSubcription : ''}}" >
    {!! $errors->first('NamaSubcription', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Deskripsi') ? 'has-error' : ''}}">
    <label for="Deskripsi" class="control-label">{{ 'Deskripsi' }}</label>
    <input class="form-control" name="Deskripsi" type="text" id="Deskripsi" value="{{ isset($subscription->Deskripsi) ? $subscription->Deskripsi : ''}}" >
    {!! $errors->first('Deskripsi', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
