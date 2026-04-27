<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Profil Guru - Isyarat Kita</title>
    
    <!-- CSS External -->
    <link rel="stylesheet" href="{{ asset('css/sections/guru-profile.css') }}">
</head>
<body>
    <div class="profile-container">
        <div class="profile-card">
            <!-- Sidebar Foto Profil -->
            <div class="profile-sidebar">
                <div class="photo-wrapper">
                    <div class="photo-container">
                        <img class="profile-avatar" id="profilePhoto" 
                             src="{{ asset('images/default-avatar.png') }}" 
                             alt="Foto Profil Guru">
                        <div class="camera-icon" onclick="triggerFileUpload()">
                            📷
                        </div>
                    </div>
                    <input type="file" id="photoInput" class="file-input" accept="image/jpeg,image/png,image/jpg">
                    <p class="photo-info">Klik kamera untuk upload foto<br><span>Format: JPG, PNG (Max 2MB)</span></p>
                    <div class="preview-container" id="previewContainer">
                        <img id="previewImage" src="">
                    </div>
                </div>
            </div>

            <!-- Form Profil -->
            <div class="profile-form-wrapper">
                <div class="form-header">
                    <h2 class="form-title">Pengaturan Profil Guru</h2>
                </div>
                
                <div id="notificationAlert" class="notification"></div>

                <form id="guruProfileForm">
                    <div class="input-group">
                        <label class="input-label">Nama Lengkap</label>
                        <input type="text" id="fullName" class="input-field" placeholder="Masukkan nama lengkap" value="Dr. Ahmad Fauzi, M.Pd">
                    </div>

                    <div class="input-group">
                        <label class="input-label">LinkedIn</label>
                        <input type="url" id="linkedinUrl" class="input-field" placeholder="https://linkedin.com/in/..." value="https://linkedin.com/in/ahmad-fauzi">
                    </div>

                    <div class="input-group">
                        <label class="input-label">Email</label>
                        <input type="email" id="emailAddress" class="input-field" placeholder="email@contoh.com" value="ahmad.fauzi@isyaratkita.com">
                    </div>

                    <div class="row-two-columns">
                        <div class="input-group">
                            <label class="input-label">Tanggal Lahir</label>
                            <input type="date" id="birthDate" class="input-field" value="1985-05-15">
                        </div>

                        <div class="input-group">
                            <label class="input-label">Nomor Telepon</label>
                            <input type="tel" id="phoneNumber" class="input-field" placeholder="+62 XXX-XXXXXXX" value="+62 812-3456-7890">
                        </div>
                    </div>

                    <div class="input-group">
                        <label class="input-label">Media Sosial Lainnya</label>
                        <textarea id="otherSocialMedia" class="textarea-field" placeholder="Link media sosial lain (Instagram, Facebook, dll)">https://instagram.com/ahmadfauzi.official</textarea>
                    </div>

                    <button type="submit" class="save-button">
                        💾 SIMPAN PERUBAHAN
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- JS External -->
    <script src="{{ asset('js/sections/guru-profile.js') }}"></script>
</body>
</html>