<div class="profil-container">
    <h1>Profil Saya</h1>

    <section class="card" style="padding: 24px;">
        <div class="section-head" style="margin-bottom: 20px;">
            <h3>Data Profil Murid</h3>
        </div>

        @if(session('success'))
            <div style="margin-bottom: 16px; padding: 12px 16px; background: #dcfce7; color: #166534; border-radius: 10px;">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('profil.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="profil-wrapper">

                {{-- KIRI --}}
                <div class="profil-form">
                    <div class="profil-form-grid">
                        <div>
                            <label class="profil-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $user?->nama_lengkap ?? $user?->name ?? '') }}" required class="profil-input">
                        </div>

                        <div>
                            <label class="profil-label">Email</label>
                            <input type="email" name="email" value="{{ old('email', $user?->email ?? '') }}" required class="profil-input">
                        </div>

                        <div>
                            <label class="profil-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $user?->tanggal_lahir ?? '') }}" required class="profil-input">
                        </div>

                        <div>
                            <label class="profil-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" required class="profil-input">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" {{ old('jenis_kelamin', $user?->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin', $user?->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>

                        <div>
                            <label class="profil-label">Nomor Telepon</label>
                            <input type="text" name="nomor_telepon" value="{{ old('nomor_telepon', $user?->nomor_telepon ?? '') }}" required placeholder="08xxxxxxxxxx" class="profil-input">
                        </div>

                        <div style="margin-top: 10px;">
                            <button class="btn" type="submit">Simpan Data</button>
                        </div>
                    </div>
                </div>

                {{-- KANAN --}}
                <div class="profil-photo-side">
                    <h4 class="profil-photo-title">Foto Profil</h4>

                    @if(!empty($user?->foto_profil))
                        <img id="previewFoto" src="{{ asset('storage/' . $user->foto_profil) }}" alt="Foto Profil" class="profil-photo-img">
                    @else
                        <img id="previewFoto" src="https://ui-avatars.com/api/?name={{ urlencode($user?->nama_lengkap ?? $user?->name ?? 'User') }}&background=2e5aa7&color=ffffff&size=220" alt="Foto Profil" class="profil-photo-img">
                    @endif

                    <p class="profil-photo-name">
                        {{ $user?->nama_lengkap ?? $user?->name ?? 'Murid' }}
                    </p>

                    <p class="profil-photo-desc">Upload foto diri untuk profil akun</p>

                    <label for="foto_profil" class="profil-upload-btn">Pilih Foto</label>
                    <input type="file" name="foto_profil" id="foto_profil" accept="image/*" hidden onchange="previewImage(event)">

                    <p class="profil-photo-note">
                        Format: JPG, JPEG, PNG<br>
                        Maksimal 2MB
                    </p>
                </div>

            </div>
        </form>
    </section>
</div>

<script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('previewFoto');
        if (input.files && input.files[0]) {
            preview.src = URL.createObjectURL(input.files[0]);
        }
    }
</script>