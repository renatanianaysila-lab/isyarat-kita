@push('styles')
<link rel="stylesheet" href="{{ asset('css/sections/edit-profile-guru.css') }}">
@endpush

<div class="guru-edit-wrapper">
    <div class="guru-edit-main-card">
        <!-- Header -->
        <div class="guru-edit-header">
            <a href="{{ url('/dashboard-guru?menu=profile') }}" class="guru-edit-back-link">← Kembali ke Profil</a>
            <h1>Edit Profil</h1>
            <p>Perbarui informasi profil Anda</p>
        </div>

        <div class="guru-edit-body">
            <!-- Left: Foto -->
            <div class="guru-edit-left">
                <div class="guru-edit-photo-wrapper">
                    <img id="editProfilePhoto" class="guru-edit-avatar" 
                         src="{{ asset('images/default-avatar.png') }}" 
                         alt="Foto Profil">
                    <button type="button" class="guru-edit-photo-btn" id="uploadPhotoBtn">
                        📷
                    </button>
                </div>
                <input type="file" id="photoFileInput" class="guru-edit-file-input" accept="image/jpeg,image/png,image/jpg">
                <p class="guru-edit-photo-hint">Klik ikon kamera untuk ganti foto<br><span>JPG, PNG (Max 2MB)</span></p>
            </div>

            <!-- Right: Form -->
            <div class="guru-edit-right">
                <form id="editProfileForm">
                    <div class="guru-edit-form-row">
                        <div class="guru-edit-form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" id="editName" class="guru-edit-form-input" placeholder="Nama lengkap">
                        </div>
                    </div>

                    <div class="guru-edit-form-row">
                        <div class="guru-edit-form-group">
                            <label>Deskripsi / Pengalaman</label>
                            <textarea id="editDescription" class="guru-edit-form-textarea" rows="4" 
                                      placeholder="Ceritakan tentang diri Anda, pengalaman mengajar, dll..."></textarea>
                        </div>
                    </div>

                    <div class="guru-edit-form-row">
                        <div class="guru-edit-form-group">
                            <label>Email</label>
                            <input type="email" id="editEmail" class="guru-edit-form-input" placeholder="email@contoh.com">
                        </div>
                    </div>

                    <div class="guru-edit-form-row">
                        <div class="guru-edit-form-group">
                            <label>Nomor Telepon</label>
                            <input type="tel" id="editPhone" class="guru-edit-form-input" placeholder="+62 XXX-XXXXXXX">
                        </div>
                    </div>

                    <div class="guru-edit-form-row">
                        <div class="guru-edit-form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" id="editBirthDate" class="guru-edit-form-input">
                        </div>
                    </div>

                    <div class="guru-edit-form-row">
                        <div class="guru-edit-form-group">
                            <label>LinkedIn</label>
                            <input type="url" id="editLinkedin" class="guru-edit-form-input" placeholder="https://linkedin.com/in/...">
                        </div>
                    </div>

                    <div class="guru-edit-form-row">
                        <div class="guru-edit-form-group">
                            <label>Instagram</label>
                            <input type="text" id="editInstagram" class="guru-edit-form-input" placeholder="@username">
                        </div>
                    </div>

                    <div class="guru-edit-form-actions">
                        <a href="{{ url('/dashboard-guru?menu=profile') }}" class="guru-edit-btn-cancel">Batal</a>
                        <button type="submit" class="guru-edit-btn-save">💾 Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="toastNotification" class="guru-edit-toast"></div>

@push('scripts')
<script src="{{ asset('js/sections/edit-profile-guru.js') }}"></script>
@endpush