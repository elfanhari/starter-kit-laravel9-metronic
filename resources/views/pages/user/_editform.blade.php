<div class="row mb-4">
  <label class="col-lg-3 col-form-label required fw-bold fs-6">Nama User</label>
  <div class="col-lg-9 fv-row">
    <input type="text" name="name" class="form-control form-control-md mb-3 mb-lg-0 @error('name') is-invalid @enderror" placeholder="Ketik Nama User" value="{{ old('name', $user->name) }}" required>
    @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
  </div>
</div>
<div class="row mb-4">
  <label class="col-lg-3 col-form-label fw-bold fs-6 required">Role</label>
  <div class="col-lg-9 fv-row">
    <select name="role_id" id="role_id" data-kt-select2="true" data-placeholder="Pilih..." data-allow-clear="true" class="form-select form-select-md @error('role_id') is-invalid @enderror" required>
      <option></option>
      @foreach ($role as $item)
        <option value="{{ $item->id }}" {{ old('role_id', $user->role_id) == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
      @endforeach
    </select>
    @error('jk') <span class="invalid-feedback">{{ $message }}</span> @enderror
  </div>
</div>
<div class="row mb-4">
  <label class="col-lg-3 col-form-label fw-bold fs-6">
    <span class="required">Email</span>
    <i class="fas fa-exclamation-circle fs-7" data-bs-toggle="tooltip" title="Email users"></i>
  </label>
  <div class="col-lg-9 fv-row">
    <input type="email" name="email" class="form-control form-control-md mb-3 mb-lg-0 @error('email') is-invalid @enderror" placeholder="Ketik Email" value="{{ old('email', $user->email) }}" required>
    @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
  </div>
</div>
<div class="row" data-kt-password-meter="true">
  <label class="col-lg-3 col-form-label fw-bold fs-6">
    Password Baru
    <i class="fas fa-exclamation-circle fs-7" data-bs-toggle="tooltip" title="Opsional"></i>
  </label>
  <div class="col-lg-9 fv-row position-relative">
    <input class="form-control form-control-md @error('password') is-invalid @enderror" type="password" placeholder="Ketik Password Baru" name="password" autocomplete="off">
    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
      <i class="bi bi-eye-slash fs-2"></i>
      <i class="bi bi-eye fs-2 d-none"></i>
    </span>
    @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
  </div>
</div>
