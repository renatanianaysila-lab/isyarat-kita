<div class="monitor-page-title">
  <h1>Monitoring Murid</h1>
  <p>Pantau aktivitas, progres, dan perkembangan murid Anda</p>
</div>

<div class="monitor-stats-row">
  <div class="monitor-stat-card">
    <div class="monitor-stat-icon soft-blue">👥</div>
    <div>
      <div class="monitor-stat-value">1.200</div>
      <div class="monitor-stat-label">Total Murid</div>
    </div>
  </div>

  <div class="monitor-stat-card">
    <div class="monitor-stat-icon soft-green">✓</div>
    <div>
      <div class="monitor-stat-value">960</div>
      <div class="monitor-stat-label">Murid Aktif</div>
      <div class="monitor-stat-sub">80% dari total</div>
    </div>
  </div>

  <div class="monitor-stat-card">
    <div class="monitor-stat-icon soft-yellow">◷</div>
    <div>
      <div class="monitor-stat-value">180</div>
      <div class="monitor-stat-label">Murid Tidak Aktif</div>
      <div class="monitor-stat-sub warning">15% dari total</div>
    </div>
  </div>

  <div class="monitor-stat-card">
    <div class="monitor-stat-icon soft-red">👤</div>
    <div>
      <div class="monitor-stat-value">60</div>
      <div class="monitor-stat-label">Murid Baru</div>
      <div class="monitor-stat-sub">Bulan ini</div>
    </div>
  </div>
</div>

<div class="monitor-main-grid">
  <section class="monitor-card">
    <div class="monitor-card-head">
      <h2>Daftar Murid</h2>
    </div>

    <div class="monitor-filter-row">
      <div class="monitor-search-box">
        <span>🔍</span>
        <input type="text" placeholder="Cari murid...">
      </div>

      <div class="monitor-select-box">
        <select>
          <option>Semua Paket</option>
          <option>Salam & Sapa</option>
          <option>Mengenal Huruf A-Z</option>
          <option>Angka 1-10</option>
          <option>Kata Sehari-hari</option>
        </select>
      </div>

      <div class="monitor-select-box">
        <select>
          <option>Semua Status</option>
          <option>Aktif</option>
          <option>Tidak Aktif</option>
        </select>
      </div>

      <button class="monitor-secondary-btn">Export</button>
      <button class="monitor-btn">Filter</button>
    </div>

    <table class="monitor-table">
      <thead>
        <tr>
          <th>Murid</th>
          <th>Paket Aktif</th>
          <th>Progres Belajar</th>
          <th>Video Ditonton</th>
          <th>Kuis Dikerjakan</th>
          <th>Terakhir Aktif</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="monitor-user">
              <div class="monitor-avatar avatar-yellow">A</div>
              <div>
                <div class="monitor-user-name">Andi Saputra</div>
                <div class="monitor-user-class">Kelas 5</div>
              </div>
            </div>
          </td>
          <td>Salam & Sapa</td>
          <td>
            <div class="monitor-progress-wrap">
              <span>75%</span>
              <div class="monitor-progress"><span style="width:75%"></span></div>
            </div>
          </td>
          <td>24/30</td>
          <td>18/20</td>
          <td>2 jam lalu</td>
          <td><span class="monitor-badge active">Aktif</span></td>
          <td><button class="monitor-action-btn">👁</button></td>
        </tr>

        <tr>
          <td>
            <div class="monitor-user">
              <div class="monitor-avatar avatar-pink">S</div>
              <div>
                <div class="monitor-user-name">Siti Nurhaliza</div>
                <div class="monitor-user-class">Kelas 4</div>
              </div>
            </div>
          </td>
          <td>Mengenal Huruf A-Z</td>
          <td>
            <div class="monitor-progress-wrap">
              <span>60%</span>
              <div class="monitor-progress"><span style="width:60%"></span></div>
            </div>
          </td>
          <td>16/28</td>
          <td>12/18</td>
          <td>5 jam lalu</td>
          <td><span class="monitor-badge active">Aktif</span></td>
          <td><button class="monitor-action-btn">👁</button></td>
        </tr>

        <tr>
          <td>
            <div class="monitor-user">
              <div class="monitor-avatar avatar-blue">B</div>
              <div>
                <div class="monitor-user-name">Budi Santoso</div>
                <div class="monitor-user-class">Kelas 6</div>
              </div>
            </div>
          </td>
          <td>Angka 1-10</td>
          <td>
            <div class="monitor-progress-wrap">
              <span>45%</span>
              <div class="monitor-progress"><span style="width:45%"></span></div>
            </div>
          </td>
          <td>10/26</td>
          <td>8/15</td>
          <td>1 hari lalu</td>
          <td><span class="monitor-badge active">Aktif</span></td>
          <td><button class="monitor-action-btn">👁</button></td>
        </tr>

        <tr>
          <td>
            <div class="monitor-user">
              <div class="monitor-avatar avatar-gray">D</div>
              <div>
                <div class="monitor-user-name">Dewi Lestari</div>
                <div class="monitor-user-class">Kelas 5</div>
              </div>
            </div>
          </td>
          <td>Kata Sehari-hari</td>
          <td>
            <div class="monitor-progress-wrap">
              <span>30%</span>
              <div class="monitor-progress"><span style="width:30%"></span></div>
            </div>
          </td>
          <td>8/20</td>
          <td>6/12</td>
          <td>2 hari lalu</td>
          <td><span class="monitor-badge inactive">Tidak Aktif</span></td>
          <td><button class="monitor-action-btn">👁</button></td>
        </tr>

        <tr>
          <td>
            <div class="monitor-user">
              <div class="monitor-avatar avatar-cyan">R</div>
              <div>
                <div class="monitor-user-name">Rizky Pratama</div>
                <div class="monitor-user-class">Kelas 4</div>
              </div>
            </div>
          </td>
          <td>Salam & Sapa</td>
          <td>
            <div class="monitor-progress-wrap">
              <span>20%</span>
              <div class="monitor-progress"><span style="width:20%"></span></div>
            </div>
          </td>
          <td>5/30</td>
          <td>4/20</td>
          <td>3 hari lalu</td>
          <td><span class="monitor-badge inactive">Tidak Aktif</span></td>
          <td><button class="monitor-action-btn">👁</button></td>
        </tr>

        <tr>
          <td>
            <div class="monitor-user">
              <div class="monitor-avatar avatar-pink">A</div>
              <div>
                <div class="monitor-user-name">Aisyah Putri</div>
                <div class="monitor-user-class">Kelas 5</div>
              </div>
            </div>
          </td>
          <td>Angka 1-10</td>
          <td>
            <div class="monitor-progress-wrap">
              <span>80%</span>
              <div class="monitor-progress"><span style="width:80%"></span></div>
            </div>
          </td>
          <td>28/30</td>
          <td>19/20</td>
          <td>30 menit lalu</td>
          <td><span class="monitor-badge active">Aktif</span></td>
          <td><button class="monitor-action-btn">👁</button></td>
        </tr>

        <tr>
          <td>
            <div class="monitor-user">
              <div class="monitor-avatar avatar-blue">F</div>
              <div>
                <div class="monitor-user-name">Fajar Romadhon</div>
                <div class="monitor-user-class">Kelas 6</div>
              </div>
            </div>
          </td>
          <td>Mengenal Huruf A-Z</td>
          <td>
            <div class="monitor-progress-wrap">
              <span>55%</span>
              <div class="monitor-progress"><span style="width:55%"></span></div>
            </div>
          </td>
          <td>14/25</td>
          <td>10/18</td>
          <td>6 jam lalu</td>
          <td><span class="monitor-badge active">Aktif</span></td>
          <td><button class="monitor-action-btn">👁</button></td>
        </tr>

        <tr>
          <td>
            <div class="monitor-user">
              <div class="monitor-avatar avatar-gray">N</div>
              <div>
                <div class="monitor-user-name">Nadia Aulia</div>
                <div class="monitor-user-class">Kelas 4</div>
              </div>
            </div>
          </td>
          <td>Kata Sehari-hari</td>
          <td>
            <div class="monitor-progress-wrap">
              <span>40%</span>
              <div class="monitor-progress"><span style="width:40%"></span></div>
            </div>
          </td>
          <td>9/22</td>
          <td>7/14</td>
          <td>1 hari lalu</td>
          <td><span class="monitor-badge inactive">Tidak Aktif</span></td>
          <td><button class="monitor-action-btn">👁</button></td>
        </tr>
      </tbody>
    </table>

    <div class="monitor-table-foot">
      <div>Menampilkan 1 sampai 8 dari 1.200 murid</div>
      <div class="monitor-pagination">
        <div class="monitor-page-btn">Previous</div>
        <div class="monitor-page-btn active">1</div>
        <div class="monitor-page-btn">2</div>
        <div class="monitor-page-btn">3</div>
        <div class="monitor-page-btn">150</div>
        <div class="monitor-page-btn">Next</div>
      </div>
    </div>
  </section>

  <div class="monitor-side-wrap">
    <section class="monitor-side-card">
      <div class="monitor-side-head">
        <h3>Ringkasan Aktivitas</h3>
        <span class="monitor-range">7 Hari Terakhir</span>
      </div>

      <div class="monitor-chart-box">
        <div class="monitor-chart-title">Aktivitas Murid</div>
        <div class="monitor-line-chart"></div>
      </div>

      <div class="monitor-legend">
        <div class="monitor-legend-item">
          <span class="dot blue"></span>
          <span>Murid Aktif</span>
          <strong>960 (80%)</strong>
        </div>
        <div class="monitor-legend-item">
          <span class="dot yellow"></span>
          <span>Murid Tidak Aktif</span>
          <strong>180 (15%)</strong>
        </div>
        <div class="monitor-legend-item">
          <span class="dot green"></span>
          <span>Murid Baru</span>
          <strong>60 (5%)</strong>
        </div>
      </div>
    </section>

    <section class="monitor-side-card">
      <h3>Statistik Progres</h3>
      <div class="monitor-side-list">
        <div class="monitor-side-line"><span>Rata-rata Progres Belajar</span><strong>58%</strong></div>
        <div class="monitor-side-line"><span>Rata-rata Video Ditonton</span><strong>16.5</strong></div>
        <div class="monitor-side-line"><span>Rata-rata Kuis Dikerjakan</span><strong>12.1</strong></div>
      </div>
    </section>

    <section class="monitor-side-card">
      <h3>Tingkat Engagement</h3>
      <div class="monitor-engagement-wrap">
        <div class="monitor-ring">
          <div class="monitor-ring-center">
            <strong>1.200</strong>
            <span>Total Murid</span>
          </div>
        </div>
        <div class="monitor-engagement-list">
          <div class="engage-item"><span class="dot green"></span><span>Tinggi</span><strong>720 (60%)</strong></div>
          <div class="engage-item"><span class="dot yellow"></span><span>Sedang</span><strong>300 (25%)</strong></div>
          <div class="engage-item"><span class="dot red"></span><span>Rendah</span><strong>180 (15%)</strong></div>
        </div>
      </div>
    </section>
  </div>
</div>

<div class="monitor-bottom-grid">
  <section class="monitor-card">
    <div class="monitor-sub-head">
      <h2>🏆 Progres Belajar Murid</h2>
      <a class="monitor-link" href="#">Lihat Semua ›</a>
    </div>

    <table class="monitor-mini-table">
      <thead>
        <tr>
          <th>#</th>
          <th>Murid</th>
          <th>Progres Rata-rata</th>
          <th>Paket Aktif</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Aisyah Putri</td>
          <td><div class="mini-progress-wrap"><span>80%</span><div class="mini-progress"><span style="width:80%"></span></div></div></td>
          <td>2 Paket</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Andi Saputra</td>
          <td><div class="mini-progress-wrap"><span>75%</span><div class="mini-progress"><span style="width:75%"></span></div></div></td>
          <td>2 Paket</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Siti Nurhaliza</td>
          <td><div class="mini-progress-wrap"><span>60%</span><div class="mini-progress"><span style="width:60%"></span></div></div></td>
          <td>2 Paket</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Fajar Romadhon</td>
          <td><div class="mini-progress-wrap"><span>55%</span><div class="mini-progress"><span style="width:55%"></span></div></div></td>
          <td>2 Paket</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Budi Santoso</td>
          <td><div class="mini-progress-wrap"><span>45%</span><div class="mini-progress"><span style="width:45%"></span></div></div></td>
          <td>2 Paket</td>
        </tr>
      </tbody>
    </table>

    <div class="monitor-bottom-note">Lihat Semua Ranking ›</div>
  </section>

  <section class="monitor-card">
    <div class="monitor-sub-head">
      <h2>👥 Aktivitas Terbaru Murid</h2>
      <a class="monitor-link" href="#">Lihat Semua ›</a>
    </div>

    <div class="monitor-activity-list">
      <div class="monitor-activity-item">
        <div class="monitor-activity-left">
          <div class="monitor-activity-avatar avatar-yellow">A</div>
          <div>
            <div class="monitor-activity-title">Andi Saputra menyelesaikan kuis “Pecahan Dasar”</div>
            <div class="monitor-activity-desc">Salam & Sapa</div>
          </div>
        </div>
        <div class="monitor-activity-time">1 jam yang lalu</div>
      </div>

      <div class="monitor-activity-item">
        <div class="monitor-activity-left">
          <div class="monitor-activity-avatar avatar-pink">S</div>
          <div>
            <div class="monitor-activity-title">Siti Nurhaliza menonton video “Hukum Newton”</div>
            <div class="monitor-activity-desc">Mengenal Huruf A-Z</div>
          </div>
        </div>
        <div class="monitor-activity-time">2 jam yang lalu</div>
      </div>

      <div class="monitor-activity-item">
        <div class="monitor-activity-left">
          <div class="monitor-activity-avatar avatar-blue">B</div>
          <div>
            <div class="monitor-activity-title">Budi Santoso mengerjakan kuis “Angka 1-10”</div>
            <div class="monitor-activity-desc">Angka 1-10</div>
          </div>
        </div>
        <div class="monitor-activity-time">3 jam yang lalu</div>
      </div>

      <div class="monitor-activity-item">
        <div class="monitor-activity-left">
          <div class="monitor-activity-avatar avatar-pink">A</div>
          <div>
            <div class="monitor-activity-title">Aisyah Putri menyelesaikan video “Vocabulary Daily Activity”</div>
            <div class="monitor-activity-desc">Angka 1-10</div>
          </div>
        </div>
        <div class="monitor-activity-time">4 jam yang lalu</div>
      </div>

      <div class="monitor-activity-item">
        <div class="monitor-activity-left">
          <div class="monitor-activity-avatar avatar-gray">D</div>
          <div>
            <div class="monitor-activity-title">Dewi Lestari login ke platform</div>
            <div class="monitor-activity-desc">Kata Sehari-hari</div>
          </div>
        </div>
        <div class="monitor-activity-time">5 jam yang lalu</div>
      </div>
    </div>

    <div class="monitor-bottom-note">Lihat Semua Aktivitas ›</div>
  </section>
</div>