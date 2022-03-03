<div class="mb-3">
    <label class="form-label" for="name">Name</label>
    <input style="width: 50%" type="text" name="name" value="{{ $person->name ?? old("name") }}"class="form-control" required>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label" for="phone">Phone</label>
    <input style="width: 25%" type="text" name="phone_no" value="{{ $person->phone_no ?? old("phone_no")}}" class="form-control" required >
    @error('phone_no')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label" for="dob">Date of birth</label>
    <input style="width: 25%" type="date" name="date_of_birth" value="{{ $person->date_of_birth ?? old("date_of_birth")}}"class="form-control" required>
    @error('date_of_birth')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label" for="email">Email</label>
    <input style="width: 50%" type="email" name="email" value="{{ $person->email ?? old("email") }}" class="form-control" required>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label" for="age">Age</label>
    <input style="width: 20%" type="number" name="age" value="{{ $person->age ?? old("age") }}" class="form-control" required >
    @error('age')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
{{-- <div class="mb-3" class="form-">
    <label class="form-label" for="gender">Gender</label>
    <input type="radio" name="gender" class="form-control" value="male" class="form-check-input" checked> Male
    <input type="radio" name="gender" class="form-control" value="female" > Female
    <input type="radio" name="gender" class="form-control" value="other" > Other --}}

<div class="mb-3" class="form-check">
    <label class="form-label" for="gender">Gender</label><br>

    <input class="form-check-input" type="radio" name="gender" value="male" checked>
    <label class="form-check-label" for="gender">
        Male
    </label>
    <input class="form-check-input" type="radio" name="gender" value="female">
    <label class="form-check-label" for="gender">
        Female
    </label>
    <input class="form-check-input" type="radio" name="gender" value="other">
    <label class="form-check-label" for="gender">
        Other
    </label>
    @error('gender')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
{{-- <div class="mb-3">
    <label class="form-label" for="hobby">Name</label>
    <input type="text" name="hobby" class="form-control" required>
    @error('hobby')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div> --}}

<div class="mb-3" class="form-check">
    <label class="form-label" for="gender">Hobby</label><br>

    <input class="form-check-input" type="checkbox" value="Sports" name="hobby[]" checked>
    <label class="form-check-label" for="hobby[]">
      Sports
    </label>
    <input class="form-check-input" type="checkbox" value="Gaming" name="hobby[]">
    <label class="form-check-label" for="hobby[]">
      Gaming
    </label>
    <input class="form-check-input" type="checkbox" value="Reading" name="hobby[]">
    <label class="form-check-label" for="hobby[]">
      Reading
    </label>
    <input class="form-check-input" type="checkbox" value="Music" name="hobby[]">
    <label class="form-check-label" for="hobby[]">
      Music
    </label>
    <input class="form-check-input" type="checkbox" value="Movies" name="hobby[]">
    <label class="form-check-label" for="hobby[]">
      Movies
    </label>
  </div>
<div class="mb-3">
    <label class="form-label" for="description">Description</label>
    <textarea style="width: 50%" name="description" class="form-control" rows="4" required>{{ $person->description ?? old("description") }}</textarea>
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
