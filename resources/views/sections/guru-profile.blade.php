@push('styles')
<link rel="stylesheet" href="{{ asset('css/sections/guru-profile.css') }}">
@endpush

<div class="guru-profile-wrapper">
    <div class="guru-profile-main-card">
        <!-- Header -->
        <div class="guru-profile-header">
            <h1>Profil Guru</h1>
            <p>Informasi profil Anda</p>
        </div>

        <div class="guru-profile-body">
            <!-- Left: Foto -->
            <div class="guru-profile-left">
                <div class="guru-profile-photo-wrapper">
                    <img id="profilePhotoView" class="guru-profile-avatar" 
                         src="{{ asset('images/default-avatar.png') }}" 
                         alt="Foto Profil">
                </div>
                <div class="guru-profile-stats">
                    <div class="guru-profile-stat-item">
                        <div class="guru-profile-stat-number" id="totalMurid">1.234</div>
                        <div class="guru-profile-stat-label">Total Murid</div>
                    </div>
                    <div class="guru-profile-stat-item">
                        <div class="guru-profile-stat-number" id="totalVideo">32</div>
                        <div class="guru-profile-stat-label">Total Video</div>
                    </div>
                    <div class="guru-profile-stat-item">
                        <div class="guru-profile-stat-number" id="totalKuis">28</div>
                        <div class="guru-profile-stat-label">Total Kuis</div>
                    </div>
                    <div class="guru-profile-stat-item">
                        <div class="guru-profile-stat-number" id="totalRating">4.8</div>
                        <div class="guru-profile-stat-label">Rating</div>
                    </div>
                </div>
            </div>

            <!-- Right: Info Profil -->
            <div class="guru-profile-right">
                <div class="guru-profile-info">
                    <h2 id="profileName">Sarah Johnson</h2>
                    <div class="guru-profile-badge">
                        <span class="guru-badge-active">Guru Aktif</span>
                        <span class="guru-badge-subject">Bahasa Isyarat</span>
                    </div>
                    
                    <div class="guru-profile-description" id="profileDescription">
                        Saya adalah pendidik yang berdedikasi untuk membantu siswa belajar 
                        bahasa isyarat dengan cara yang menyenangkan dan mudah dipahami.
                    </div>

                    <div class="guru-info-list">
                        <div class="guru-info-item">
                            <span class="guru-info-icon">📧</span>
                            <span class="guru-info-label">Email</span>
                            <span class="guru-info-value" id="profileEmail">sarah.johnson@guru.com</span>
                        </div>
                        <div class="guru-info-item">
                            <span class="guru-info-icon">📞</span>
                            <span class="guru-info-label">Telepon</span>
                            <span class="guru-info-value" id="profilePhone">+62 812-3456-7890</span>
                        </div>
                        <div class="guru-info-item">
                            <span class="guru-info-icon">🎂</span>
                            <span class="guru-info-label">Tanggal Lahir</span>
                            <span class="guru-info-value" id="profileBirthDate">15 Mei 1995</span>
                        </div>
                        <div class="guru-info-item">
                            <span class="guru-info-icon">🔗</span>
                            <span class="guru-info-label">LinkedIn</span>
                            <span class="guru-info-value" id="profileLinkedin">linkedin.com/in/sarah-johnson</span>
                        </div>
                        <div class="guru-info-item">
                            <span class="guru-info-icon">📱</span>
                            <span class="guru-info-label">Instagram</span>
                            <span class="guru-info-value" id="profileInstagram">@sarah_bisindo</span>
                        </div>
                    </div>

                    <div class="guru-profile-actions">
                        <a href="?menu=edit-profile" class="guru-btn-edit">
                            ✏️ Edit Profil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{ asset('js/sections/guru-profile.js') }}"></script>
@endpush