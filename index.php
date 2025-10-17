<?php
ob_start();

 $content = '
<form id="surveyForm">
    <div id="part1">
        <div class="section-title">INFORMASI PRIBADI</div>
        
        <div class="question-card">
            <div class="question-title">Nama Lengkap <span class="required">*</span></div>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap Anda" required>
        </div>

        <div class="question-card">
            <div class="question-title">Usia <span class="required">*</span></div>
            <input type="number" id="usia" name="usia" placeholder="Masukkan usia Anda" min="1" max="120" required>
        </div>

        <div class="question-card">
            <div class="question-title">Jenis Kelamin <span class="required">*</span></div>
            <div class="radio-group">
                <div class="radio-option">
                    <input type="radio" id="pria" name="jenisKelamin" value="Pria" required>
                    <label for="pria">Pria</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="wanita" name="jenisKelamin" value="Wanita" required>
                    <label for="wanita">Wanita</label>
                </div>
            </div>
        </div>

        <div class="question-card">
            <div class="question-title">Pendidikan Terakhir <span class="required">*</span></div>
            <select id="pendidikan" name="pendidikan" required>
                <option value="">-- Pilih Pendidikan --</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA/SMK">SMA/SMK</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
        </div>

        <div class="question-card">
            <div class="question-title">Pekerjaan Saat Ini <span class="required">*</span></div>
            <div class="radio-group">
                <div class="radio-option">
                    <input type="radio" id="pekerjaan1" name="pekerjaan" value="Pegawai Negeri/ASN" required>
                    <label for="pekerjaan1">Pegawai Negeri/ASN</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="pekerjaan2" name="pekerjaan" value="Pegawai Swasta" required>
                    <label for="pekerjaan2">Pegawai Swasta</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="pekerjaan3" name="pekerjaan" value="Wiraswasta/Pengusaha" required>
                    <label for="pekerjaan3">Wiraswasta/Pengusaha</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="pekerjaan4" name="pekerjaan" value="Pelajar/Mahasiswa" required>
                    <label for="pekerjaan4">Pelajar/Mahasiswa</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="pekerjaan5" name="pekerjaan" value="Ibu Rumah Tangga" required>
                    <label for="pekerjaan5">Ibu Rumah Tangga</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="pekerjaanLainnya" name="pekerjaan" value="Lainnya" required>
                    <label for="pekerjaanLainnya">Lainnya</label>
                </div>
            </div>
            <input type="text" id="pekerjaanLainnyaText" name="pekerjaanLainnyaText" placeholder="Sebutkan pekerjaan Anda" style="display: none; margin-top: 12px;">
        </div>

        <div class="question-card">
            <div class="question-title">Penghasilan Rata-rata per Bulan <span class="required">*</span></div>
            <div class="radio-group">
                <div class="radio-option">
                    <input type="radio" id="penghasilan1" name="penghasilan" value="< Rp 2.000.000" required>
                    <label for="penghasilan1">< Rp 2.000.000</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="penghasilan2" name="penghasilan" value="Rp 2.000.000 - Rp 5.000.000" required>
                    <label for="penghasilan2">Rp 2.000.000 - Rp 5.000.000</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="penghasilan3" name="penghasilan" value="Rp 5.000.000 - Rp 10.000.000" required>
                    <label for="penghasilan3">Rp 5.000.000 - Rp 10.000.000</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="penghasilan4" name="penghasilan" value="> Rp 10.000.000" required>
                    <label for="penghasilan4">> Rp 10.000.000</label>
                </div>
            </div>
        </div>

        <button type="button" class="submit-btn" id="nextBtn">Lanjutkan</button>
    </div>
</form>

<!-- Part 2 -->
<div id="part2" style="display: none;">
    <div class="section-title">💡 KEPUASAN FASILITAS</div>
    
    <!-- Radio Button -->
    <div class="question-card">
        <div class="question-title">Seberapa puaskah Anda dengan ketersediaan stop kontak listrik di area belajar? <span class="required">*</span></div>
        <div class="emoji-rating">
            <div class="emoji-option" data-value="Sangat Tidak Puas">
                <input type="radio" id="stopkontak1" name="stopkontak" value="Sangat Tidak Puas" required>
                <div class="emoji-icon">😤</div>
                <div class="emoji-text">Sangat Tidak Puas</div>
            </div>
            <div class="emoji-option" data-value="Kurang Puas">
                <input type="radio" id="stopkontak2" name="stopkontak" value="Kurang Puas">
                <div class="emoji-icon">😕</div>
                <div class="emoji-text">Kurang Puas</div>
            </div>
            <div class="emoji-option" data-value="Cukup Puas">
                <input type="radio" id="stopkontak3" name="stopkontak" value="Cukup Puas">
                <div class="emoji-icon">😊</div>
                <div class="emoji-text">Cukup Puas</div>
            </div>
            <div class="emoji-option" data-value="Sangat Puas">
                <input type="radio" id="stopkontak4" name="stopkontak" value="Sangat Puas">
                <div class="emoji-icon">😍</div>
                <div class="emoji-text">Sangat Puas</div>
            </div>
        </div>
    </div>

    <!-- Slider -->
    <div class="question-card">
        <div class="question-title">Bagaimana kualitas kebersihan kamar mandi/toilet perpustakaan? <span class="required">*</span></div>
        <div class="rating-slider-container">
            <!-- Hidden radio buttons for form submission -->
            <div style="display: none;">
                <input type="radio" id="toilet1" name="toilet" value="Sangat Tidak Puas" required>
                <input type="radio" id="toilet2" name="toilet" value="Kurang Puas">
                <input type="radio" id="toilet3" name="toilet" value="Cukup Puas">
                <input type="radio" id="toilet4" name="toilet" value="Sangat Puas">
            </div>
            
            <div class="rating-slider-track">
                <div class="rating-slider-progress" id="sliderProgress"></div>
                
                <div class="rating-points">
                    <div class="rating-point" data-value="1">
                        <div class="rating-point-emoji">😤</div>
                        <div class="rating-point-dot"></div>
                    </div>
                    <div class="rating-point active" data-value="2">
                        <div class="rating-point-emoji">😕</div>
                        <div class="rating-point-dot"></div>
                    </div>
                    <div class="rating-point" data-value="3">
                        <div class="rating-point-emoji">😊</div>
                        <div class="rating-point-dot"></div>
                    </div>
                    <div class="rating-point" data-value="4">
                        <div class="rating-point-emoji">😍</div>
                        <div class="rating-point-dot"></div>
                    </div>
                </div>
                
                <input type="range" id="toiletSlider" name="toiletSlider" min="1" max="4" value="2" step="1" class="rating-slider">
            </div>
            
            <div class="rating-labels">
                <div class="rating-label">Sangat Tidak Puas</div>
                <div class="rating-label">Kurang Puas</div>
                <div class="rating-label">Cukup Puas</div>
                <div class="rating-label">Sangat Puas</div>
            </div>
            <div class="rating-value" id="toiletValue">😕 Kurang Puas</div>
        </div>
    </div>

    <!-- Radio List -->
    <div class="question-card">
        <div class="question-title">Apakah Anda merasa aman meninggalkan barang pribadi (tas, laptop) saat sebentar ke rak buku atau toilet? <span class="required">*</span></div>
        <div class="radio-list">
            <div class="radio-list-option">
                <input type="radio" id="keamanan1" name="keamanan" value="Sangat Tidak Aman" required>
                <label for="keamanan1">Sangat Tidak Aman</label>
            </div>
            <div class="radio-list-option">
                <input type="radio" id="keamanan2" name="keamanan" value="Kurang Aman">
                <label for="keamanan2">Kurang Aman</label>
            </div>
            <div class="radio-list-option">
                <input type="radio" id="keamanan3" name="keamanan" value="Cukup Aman">
                <label for="keamanan3">Cukup Aman</label>
            </div>
            <div class="radio-list-option">
                <input type="radio" id="keamanan4" name="keamanan" value="Sangat Aman">
                <label for="keamanan4">Sangat Aman</label>
            </div>
        </div>
    </div>

    <div class="button-group">
        <button type="button" class="back-btn" id="backToPart1Btn">← Kembali</button>
        <button type="button" class="submit-btn" id="nextPart3Btn">Lanjutkan →</button>
    </div>
</div>

<!-- Part 3 -->
<div id="part3" style="display: none;">
    <div class="section-title">⏱ PENGALAMAN KUNJUNGAN</div>
    
    <div class="question-card">
        <div class="question-title">Berapa lama rata-rata durasi kunjungan Anda ke perpustakaan dalam sekali kedatangan? <span class="required">*</span></div>
        <select id="durasi" name="durasi" required>
            <option value="">-- Pilih Durasi --</option>
            <option value="< 1 Jam">⚡ < 1 Jam</option>
            <option value="1 - 3 Jam">⏰ 1 - 3 Jam</option>
            <option value="3 - 5 Jam">📚 3 - 5 Jam</option>
            <option value="> 5 Jam">🔥 > 5 Jam</option>
        </select>
    </div>

    <div class="question-card">
        <div class="question-title">Tingkat kebisingan apa yang paling sering Anda alami di area tenang perpustakaan? <span class="required">*</span></div>
        <select id="kebisingan" name="kebisingan" required>
            <option value="">-- Pilih Tingkat Kebisingan --</option>
            <option value="Sangat Tenang">🤫 Sangat Tenang</option>
            <option value="Sedikit Obrolan">😌 Sedikit Obrolan</option>
            <option value="Obrolan Sering Terdengar">😬 Obrolan Sering Terdengar</option>
            <option value="Sangat Berisik">😣 Sangat Berisik</option>
        </select>
    </div>

    <div class="question-card">
        <div class="question-title">Bagaimana Anda menilai kemudahan mencari/menemukan staf perpustakaan saat membutuhkan bantuan? <span class="required">*</span></div>
        <select id="staf" name="staf" required>
            <option value="">-- Pilih Penilaian --</option>
            <option value="Sangat Sulit Ditemukan">😞 Sangat Sulit Ditemukan</option>
            <option value="Agak Sulit Ditemukan">😐 Agak Sulit Ditemukan</option>
            <option value="Mudah Ditemukan">😊 Mudah Ditemukan</option>
            <option value="Selalu Siap Membantu">🌟 Selalu Siap Membantu</option>
        </select>
    </div>

    <div class="button-group">
        <button type="button" class="back-btn" id="backToPart2Btn">← Kembali</button>
        <button type="button" class="submit-btn" id="nextPart4Btn">Lanjutkan →</button>
    </div>
</div>

<!-- Part 4 -->
<div id="part4" style="display: none;">
    <div class="section-title">✅ FASILITAS YANG DIGUNAKAN</div>
    
    <div class="question-card">
        <div class="question-title">Fasilitas apa saja yang paling sering Anda gunakan di perpustakaan? <span class="required">*</span></div>
        <small style="display: block; color: #666; margin-bottom: 10px;">Pilih semua yang sesuai</small>
        <div class="checkbox-group">
            <div class="checkbox-option">
                <input type="checkbox" id="fasilitas1" name="fasilitas" value="Area Belajar Tenang">
                <label for="fasilitas1">🤫 Area Belajar Tenang</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="fasilitas2" name="fasilitas" value="Ruang Diskusi Kelompok">
                <label for="fasilitas2">👥 Ruang Diskusi Kelompok</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="fasilitas3" name="fasilitas" value="Komputer & Internet">
                <label for="fasilitas3">💻 Komputer & Internet</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="fasilitas4" name="fasilitas" value="Area Koleksi Buku Fisik">
                <label for="fasilitas4">📚 Area Koleksi Buku Fisik</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="fasilitas5" name="fasilitas" value="Area Koleksi Digital">
                <label for="fasilitas5">📱 Area Koleksi Digital</label>
            </div>
        </div>
    </div>

    <div class="question-card">
        <div class="question-title">Masalah apa saja yang sering Anda temui terkait lingkungan fisik perpustakaan?</div>
        <small style="display: block; color: #666; margin-bottom: 10px;">Pilih semua yang sesuai</small>
        <div class="checkbox-group">
            <div class="checkbox-option">
                <input type="checkbox" id="masalah1" name="masalah" value="Suhu terlalu dingin/panas">
                <label for="masalah1">🌡 Suhu terlalu dingin/panas</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="masalah2" name="masalah" value="Kebisingan dari luar">
                <label for="masalah2">🔊 Kebisingan dari luar</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="masalah3" name="masalah" value="Pencahayaan kurang">
                <label for="masalah3">💡 Pencahayaan kurang</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="masalah4" name="masalah" value="Kursi/meja tidak nyaman">
                <label for="masalah4">🪑 Kursi/meja tidak nyaman</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="masalah5" name="masalah" value="Kebersihan kurang">
                <label for="masalah5">🧹 Kebersihan kurang</label>
            </div>
        </div>
    </div>

    <div class="question-card">
        <div class="question-title">Apa harapan Anda untuk peningkatan layanan di perpustakaan?</div>
        <small style="display: block; color: #666; margin-bottom: 10px;">Pilih semua yang sesuai</small>
        <div class="checkbox-group">
            <div class="checkbox-option">
                <input type="checkbox" id="harapan1" name="harapan" value="Penambahan Stop Kontak">
                <label for="harapan1">🔌 Penambahan Stop Kontak</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="harapan2" name="harapan" value="Peningkatan Kecepatan Wi-Fi">
                <label for="harapan2">📶 Peningkatan Kecepatan Wi-Fi</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="harapan3" name="harapan" value="Perpanjangan Jam Operasional">
                <label for="harapan3">⏰ Perpanjangan Jam Operasional</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="harapan4" name="harapan" value="Penambahan Koleksi Buku Baru">
                <label for="harapan4">📖 Penambahan Koleksi Buku Baru</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="harapan5" name="harapan" value="Pelatihan Penggunaan Digital">
                <label for="harapan5">🎓 Pelatihan Penggunaan Digital</label>
            </div>
        </div>
    </div>

    <div class="button-group">
        <button type="button" class="back-btn" id="backToPart3Btn">← Kembali</button>
        <button type="button" class="submit-btn" id="nextPart5Btn">Lanjutkan →</button>
    </div>
</div>

<!-- Part 5 -->
<div id="part5" style="display: none;">
    <div class="section-title">💬 SUARA ANDA PENTING!</div>
    
    <div class="question-card">
        <div class="question-title">Tuliskan satu kritik atau saran paling mendesak yang harus segera ditangani oleh pengelola perpustakaan <span class="required">*</span></div>
        <small style="display: block; color: #666; margin-bottom: 10px;">Contoh: AC di lantai 2 sering mati, membuat area panas di siang hari.</small>
        <textarea id="kritik" name="kritik" rows="4" placeholder="Tuliskan kritik atau saran Anda..." required></textarea>
    </div>

    <div class="question-card">
        <div class="question-title">Apa yang menjadi nilai plus (keunggulan) utama perpustakaan ini dibandingkan tempat belajar lain? <span class="required">*</span></div>
        <small style="display: block; color: #666; margin-bottom: 10px;">Contoh: Ketersediaan jurnal digital lengkap dan banyak ruang individu.</small>
        <textarea id="nilaiPlus" name="nilaiPlus" rows="4" placeholder="Tuliskan keunggulan yang Anda rasakan..." required></textarea>
    </div>

    <div class="question-card">
        <div class="question-title">Jika ada area di perpustakaan yang perlu direnovasi atau ditata ulang, area manakah itu?</div>
        <small style="display: block; color: #666; margin-bottom: 10px;">Contoh: Area komputer, perlu diganti kursinya yang sudah rusak.</small>
        <textarea id="renovasi" name="renovasi" rows="4" placeholder="Tuliskan area yang perlu direnovasi (opsional)..."></textarea>
    </div>

    <div class="button-group">
        <button type="button" class="back-btn" id="backToPart4Btn">← Kembali</button>
        <button type="button" class="submit-btn" id="submitFinalBtn">🎉 Kirim Survey</button>
    </div>
</div>

<!-- Captcha -->
<div id="captchaSection" class="captcha-container">
    <div class="captcha-card">
        <div class="captcha-title">Verifikasi Captcha</div>
        <p style="margin-bottom: 20px;">Mohon selesaikan captcha berikut untuk mengirimkan survey Anda</p>
        
        <div class="captcha-question" id="captchaQuestion">5 + 3 = ?</div>
        <input type="number" id="captchaInput" class="captcha-input" placeholder="Jawaban">
        
        <button type="button" class="captcha-refresh" id="refreshCaptcha">
            🔄 Refresh Captcha
        </button>
        
        <div class="captcha-error" id="captchaError">
            Jawaban salah, silakan coba lagi
        </div>
        
        <button type="button" class="submit-btn" id="verifyCaptcha">Verifikasi & Kirim</button>
    </div>
</div>

<script>
   
    const form = document.getElementById("surveyForm");
    const part2 = document.getElementById("part2");
    const part3 = document.getElementById("part3");
    const part4 = document.getElementById("part4");
    const part5 = document.getElementById("part5");
    const captchaSection = document.getElementById("captchaSection");
    const nextBtn = document.getElementById("nextBtn");
    const nextPart3Btn = document.getElementById("nextPart3Btn");
    const nextPart4Btn = document.getElementById("nextPart4Btn");
    const nextPart5Btn = document.getElementById("nextPart5Btn");
    const submitFinalBtn = document.getElementById("submitFinalBtn");
    const verifyCaptchaBtn = document.getElementById("verifyCaptcha");
    const pekerjaanLainnyaText = document.getElementById("pekerjaanLainnyaText");
    
   
    const backToPart1Btn = document.getElementById("backToPart1Btn");
    const backToPart2Btn = document.getElementById("backToPart2Btn");
    const backToPart3Btn = document.getElementById("backToPart3Btn");
    const backToPart4Btn = document.getElementById("backToPart4Btn");
    
    // Captcha
    const captchaQuestion = document.getElementById("captchaQuestion");
    const captchaInput = document.getElementById("captchaInput");
    const captchaError = document.getElementById("captchaError");
    const refreshCaptcha = document.getElementById("refreshCaptcha");
    
    let currentPart = 1;
    let captchaAnswer = 8; // Default answer for 5 + 3
    
    // Generate captcha
    function generateCaptcha() {
        const num1 = Math.floor(Math.random() * 10) + 1;
        const num2 = Math.floor(Math.random() * 10) + 1;
        const operators = ["+", "-"];
        const operator = operators[Math.floor(Math.random() * operators.length)];
        
        let question;
        let answer;
        
        switch(operator) {
            case "+":
                question = `${num1} + ${num2} = ?`;
                answer = num1 + num2;
                break;
            case "-":
                // Make sure we don"t get negative numbers
                if (num1 < num2) {
                    [num1, num2] = [num2, num1];
                }
                question = `${num1} - ${num2} = ?`;
                answer = num1 - num2;
                break;
        }
        
        captchaQuestion.textContent = question;
        captchaAnswer = answer;
        captchaInput.value = "";
        captchaError.classList.remove("show");
        
        console.log("Captcha generated:", question, "Answer:", answer); // Debug log
    }
    
    document.addEventListener("DOMContentLoaded", function() {
        generateCaptcha();

        refreshCaptcha.addEventListener("click", function(e) {
            e.preventDefault();
            console.log("Refresh captcha clicked"); // Debug log
            generateCaptcha();
        });
    });

    const pekerjaanRadios = document.querySelectorAll("input[name=\"pekerjaan\"]");
    pekerjaanRadios.forEach(radio => {
        radio.addEventListener("change", function() {
            if (this.value === "Lainnya") {
                pekerjaanLainnyaText.style.display = "block";
                pekerjaanLainnyaText.required = true;
            } else {
                pekerjaanLainnyaText.style.display = "none";
                pekerjaanLainnyaText.required = false;
                pekerjaanLainnyaText.value = "";
            }
        });
    });

    const emojiOptions = document.querySelectorAll(".emoji-option");
    emojiOptions.forEach(option => {
        option.addEventListener("click", function() {
            const radio = this.querySelector("input[type=\"radio\"]");
            radio.checked = true;
         
            const parent = this.parentElement;
            parent.querySelectorAll(".emoji-option").forEach(opt => opt.classList.remove("selected"));
    
            this.classList.add("selected");
        });
    });

    const radioListOptions = document.querySelectorAll(".radio-list-option");
    radioListOptions.forEach(option => {
        option.addEventListener("click", function() {
            const radio = this.querySelector("input[type=\"radio\"]");
            radio.checked = true;
        });
    });

    const toiletSlider = document.getElementById("toiletSlider");
    const toiletValue = document.getElementById("toiletValue");
    const sliderProgress = document.getElementById("sliderProgress");
    const toiletRadios = document.querySelectorAll("input[name=\"toilet\"]");
    const ratingPoints = document.querySelectorAll(".rating-point");
    const sliderLabels = ["Sangat Tidak Puas", "Kurang Puas", "Cukup Puas", "Sangat Puas"];
    const sliderEmojis = ["😤", "😕", "😊", "😍"];
    
    let sliderTimeout;
    
    function updateToiletValue() {
        const value = parseInt(toiletSlider.value);
        const index = value - 1;

        toiletValue.innerHTML = `${sliderEmojis[index]} ${sliderLabels[index]}`;

        const progressPercent = ((value - 1) / 3) * 100;
        sliderProgress.style.width = progressPercent + "%";

        toiletRadios[index].checked = true;
  
        ratingPoints.forEach((point, i) => {
            if (i === index) {
                point.classList.add("active");
            } else {
                point.classList.remove("active");
            }
        });
    }
    
    function hideAllEmojis() {
        ratingPoints.forEach((point) => {
            const emoji = point.querySelector(".rating-point-emoji");
            if (emoji) {
                emoji.classList.remove("show");
            }
        });
    }
    
    function showActiveEmoji() {
        hideAllEmojis();
        const value = parseInt(toiletSlider.value);
        const index = value - 1;
        const activePoint = ratingPoints[index];
        const emoji = activePoint.querySelector(".rating-point-emoji");
        if (emoji) {
            emoji.classList.add("show");
        }
    }

    updateToiletValue();
   
    toiletSlider.addEventListener("input", function() {
        updateToiletValue();
        showActiveEmoji();
        
        clearTimeout(sliderTimeout);
        sliderTimeout = setTimeout(() => {
            hideAllEmojis();
        }, 1500);
    });
    
    toiletSlider.addEventListener("mousedown", function() {
        showActiveEmoji();
    });
    
    toiletSlider.addEventListener("mouseup", function() {
        clearTimeout(sliderTimeout);
        sliderTimeout = setTimeout(() => {
            hideAllEmojis();
        }, 1500);
    });
    
    toiletSlider.addEventListener("touchstart", function() {
        showActiveEmoji();
    });
    
    toiletSlider.addEventListener("touchend", function() {
        clearTimeout(sliderTimeout);
        sliderTimeout = setTimeout(() => {
            hideAllEmojis();
        }, 1500);
    });

    ratingPoints.forEach((point, index) => {
        const dot = point.querySelector(".rating-point-dot");
        
        dot.addEventListener("click", function(e) {
            e.stopPropagation();
            toiletSlider.value = index + 1;
            updateToiletValue();
            showActiveEmoji();
            
            clearTimeout(sliderTimeout);
            sliderTimeout = setTimeout(() => {
                hideAllEmojis();
            }, 1500);
        });
        
        dot.addEventListener("mouseenter", function() {
            showActiveEmoji();
        });
    });

    const inputs = form.querySelectorAll("input, select, textarea");
    inputs.forEach(input => {
        input.addEventListener("change", () => updateProgress(currentPart));
        input.addEventListener("input", () => updateProgress(currentPart));
    });

    nextBtn.addEventListener("click", function() {
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        const pekerjaanChecked = document.querySelector("input[name=\"pekerjaan\"]:checked");
        if (pekerjaanChecked && pekerjaanChecked.value === "Lainnya" && !pekerjaanLainnyaText.value) {
            pekerjaanLainnyaText.focus();
            alert("Mohon sebutkan pekerjaan Anda");
            return;
        }

        form.style.display = "none";
        part2.style.display = "block";
        currentPart = 2;
        updateProgress(currentPart);
        scrollToTop();
    });

    nextPart3Btn.addEventListener("click", function() {
        if (!document.querySelector("input[name=\"stopkontak\"]:checked") ||
            !document.querySelector("input[name=\"toilet\"]:checked") ||
            !document.querySelector("input[name=\"keamanan\"]:checked")) {
            alert("Mohon isi semua pertanyaan yang wajib diisi");
            return;
        }
        
        part2.style.display = "none";
        part3.style.display = "block";
        currentPart = 3;
        updateProgress(currentPart);
        scrollToTop();
    });

    nextPart4Btn.addEventListener("click", function() {
        if (!document.getElementById("durasi").value ||
            !document.getElementById("kebisingan").value ||
            !document.getElementById("staf").value) {
            alert("Mohon isi semua pertanyaan yang wajib diisi");
            return;
        }
        
        part3.style.display = "none";
        part4.style.display = "block";
        currentPart = 4;
        updateProgress(currentPart);
        scrollToTop();
    });

    nextPart5Btn.addEventListener("click", function() {
        const fasilitasChecked = document.querySelectorAll("input[name=\"fasilitas\"]:checked");
        if (fasilitasChecked.length === 0) {
            alert("Mohon pilih minimal satu fasilitas yang Anda gunakan");
            return;
        }
        
        part4.style.display = "none";
        part5.style.display = "block";
        currentPart = 5;
        updateProgress(currentPart);
        scrollToTop();
    });

    submitFinalBtn.addEventListener("click", function() {
        if (!document.getElementById("kritik").value ||
            !document.getElementById("nilaiPlus").value) {
            alert("Mohon isi semua pertanyaan yang wajib diisi");
            return;
        }

        part5.style.display = "none";
        captchaSection.classList.add("show");
        captchaInput.focus();
        scrollToTop();

        generateCaptcha();

        refreshCaptcha.onclick = function(e) {
            e.preventDefault();
            console.log("Refresh captcha clicked"); // Debug log
            generateCaptcha();
        };
    });

    verifyCaptchaBtn.addEventListener("click", function() {
        const userAnswer = parseInt(captchaInput.value);
        
        if (isNaN(userAnswer) || userAnswer !== captchaAnswer) {
            captchaError.classList.add("show");
            captchaInput.focus();
            return;
        }

        const pekerjaanValue = document.querySelector("input[name=\"pekerjaan\"]:checked").value;
        const fasilitasChecked = Array.from(document.querySelectorAll("input[name=\"fasilitas\"]:checked")).map(el => el.value);
        const masalahChecked = Array.from(document.querySelectorAll("input[name=\"masalah\"]:checked")).map(el => el.value);
        const harapanChecked = Array.from(document.querySelectorAll("input[name=\"harapan\"]:checked")).map(el => el.value);
        
        const formData = {
            nama: document.getElementById("nama").value,
            usia: document.getElementById("usia").value,
            jenisKelamin: document.querySelector("input[name=\"jenisKelamin\"]:checked").value,
            pendidikan: document.getElementById("pendidikan").value,
            pekerjaan: pekerjaanValue === "Lainnya" ? pekerjaanLainnyaText.value : pekerjaanValue,
            penghasilan: document.querySelector("input[name=\"penghasilan\"]:checked").value,
            stopkontak: document.querySelector("input[name=\"stopkontak\"]:checked").value,
            toilet: document.querySelector("input[name=\"toilet\"]:checked").value,
            keamanan: document.querySelector("input[name=\"keamanan\"]:checked").value,
            durasi: document.getElementById("durasi").value,
            kebisingan: document.getElementById("kebisingan").value,
            staf: document.getElementById("staf").value,
            fasilitas: fasilitasChecked,
            masalah: masalahChecked,
            harapan: harapanChecked,
            kritik: document.getElementById("kritik").value,
            nilaiPlus: document.getElementById("nilaiPlus").value,
            renovasi: document.getElementById("renovasi").value
        };

        console.log("Data Survey Lengkap:", formData);
  
        captchaSection.classList.remove("show");
        successMessage.classList.add("show");
        progressBar.style.width = "100%";
        
        setTimeout(() => {
            location.reload();
        }, 4000);
    });

    backToPart1Btn.addEventListener("click", function() {
        part2.style.display = "none";
        form.style.display = "block";
        currentPart = 1;
        updateProgress(currentPart);
        scrollToTop();
    });

    backToPart2Btn.addEventListener("click", function() {
        part3.style.display = "none";
        part2.style.display = "block";
        currentPart = 2;
        updateProgress(currentPart);
        scrollToTop();
    });

    backToPart3Btn.addEventListener("click", function() {
        part4.style.display = "none";
        part3.style.display = "block";
        currentPart = 3;
        updateProgress(currentPart);
        scrollToTop();
    });

    backToPart4Btn.addEventListener("click", function() {
        part5.style.display = "none";
        part4.style.display = "block";
        currentPart = 4;
        updateProgress(currentPart);
        scrollToTop();
    });
</script>
';

include 'layout.php';

ob_end_flush();
?>
