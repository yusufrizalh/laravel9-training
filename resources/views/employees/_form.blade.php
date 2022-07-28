<div class="mb-4">
    <label for="name" class="mb-1"><strong>Name</strong></label>
    <input type="text" name="name" 
        class="form-control @error('name') is-invalid @enderror"
        placeholder="Input name here" value="{{ old('name', $employee->name) }}" />
    @error('name')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<div class="mb-4">
    <label for="address" class="mb-1"><strong>Address</strong></label>
    <input type="text" name="address" 
    class="form-control @error('address') is-invalid @enderror" 
        placeholder="Input address here" value="{{ old('address', $employee->address) }}" />
    @error('address')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<button type="submit" class="btn btn-primary btn-md">{{ $submit }}</button>

