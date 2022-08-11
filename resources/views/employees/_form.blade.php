<div class="mb-4">
    <label for="name" class="mb-1"><strong>Name</strong></label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
        placeholder="Input name here" value="{{ old('name', $employee->name) }}" />
    @error('name')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<div class="mb-4">
    <label for="address" class="mb-1"><strong>Address</strong></label>
    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
        placeholder="Input address here" value="{{ old('address', $employee->address) }}" />
    @error('address')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<div class="mb-4">
    <label for="department" class="mb-1"><strong>Department</strong></label>
    <select name="department" id="department" class="form-control @error('department') is-invalid @enderror">
        <option disabled selected>Choose one!</option>
        @foreach ($departments as $department)
            <option {{ $department->id == $employee->department_id ? 'selected' : '' }} value="{{ $department->id }}">
                {{ $department->name }}</option>
        @endforeach
    </select>
    @error('department')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<div class="mb-4">
    <label for="skills" class="mb-1"><strong>Skill</strong></label>
    <select name="skills[]" id="skills" class="form-control @error('skills') is-invalid @enderror" multiple>
        <option disabled selected>Choose your skills!</option>
        @foreach ($employee->skills as $skill)
            <option selected value="{{ $skill->id }}">{{ $skill->name }}</option>
        @endforeach
        @foreach ($skills as $skill)
            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
        @endforeach
    </select>
    @error('skill')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<button type="submit" class="btn btn-primary btn-md">{{ $submit }}</button>
