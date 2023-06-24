<section>
    <div class="container">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title mb-0">Feedback Alumni</h4>
            </div>
            <?php if (count($data['allAlumniData']) > 0) : ?>
                <div class="card-body">
                    <form autocomplete="off" id="form-feedback-alumni">
                        <div class="container-fluid">
                            <div class="col-lg-6 mb-3">
                                <div class="mb-3">
                                    <label for="alumni" class="form-label">Alumni</label>
                                    <select name="alumni" id="alumni" class="form-select" required>
                                        <option value="" class="d-none">Pilih alumni</option>
                                        <?php foreach ($data['allAlumniData'] as $alumni_key => $alumni) : ?>
                                            <option value="<?= $alumni['user_id'] ?>" target-posisi="<?= $alumni_key ?>"><?= $alumni['nama_lengkap'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="posisi" class="form-label">Posisi</label>
                                    <select name="posisi" id="posisi" class="form-select" required disabled>
                                        <option value="" class="d-none">Pilih alumni</option>
                                        <?php foreach ($data['allAlumniData'] as $alumni_key => $alumni) : ?>
                                            <option posisi="<?= $alumni_key ?>" value="<?= $alumni['posisi'] ?>"><?= ucfirst($alumni['posisi']) ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Apakah alumni bekerja pada bidang sesuai keahliannya?</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bekerja-sesuai-keahlian" id="bekerja-sesuai-keahlian-1" value="ya">
                                        <label class="form-check-label" for="bekerja-sesuai-keahlian-1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bekerja-sesuai-keahlian" id="bekerja-sesuai-keahlian-2" value="tidak">
                                        <label class="form-check-label" for="bekerja-sesuai-keahlian-2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <p class="fw-bolder">Dalam mengikuti peraturan yang ada di perusahaan apakah alumni sudah memenuhi standard perusahaan dalam hal ini :</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th class="text-center text-nowrap">Tidak Baik Sekali</th>
                                                <th class="text-center text-nowrap">Tidak Baik</th>
                                                <th class="text-center text-nowrap">Cukup</th>
                                                <th class="text-center text-nowrap">Baik</th>
                                                <th class="text-center text-nowrap">Baik Sekali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tingkat Kehadiran/The level of attendance</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="tingkat-kehadian" value="1" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="tingkat-kehadian" value="2" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="tingkat-kehadian" value="3" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="tingkat-kehadian" value="4" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="tingkat-kehadian" value="5" required></td>
                                            </tr>
                                            <tr>
                                                <td>Tingkat Kedisiplinan/The level of disciplane</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="tingkat-kedisiplinan" value="1" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="tingkat-kedisiplinan" value="2" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="tingkat-kedisiplinan" value="3" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="tingkat-kedisiplinan" value="4" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="tingkat-kedisiplinan" value="5" required></td>
                                            </tr>
                                            <tr>
                                                <td>Kemampuan Menyelesaikan Pekerjaan/The ability to get the job</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-menyelesaikan-pekerjaan" value="1" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-menyelesaikan-pekerjaan" value="2" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-menyelesaikan-pekerjaan" value="3" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-menyelesaikan-pekerjaan" value="4" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-menyelesaikan-pekerjaan" value="5" required></td>
                                            </tr>
                                            <tr>
                                                <td>Tingkat Kreatifitas dan Kemampuan Berinisiatif/The level of inisiative,creativity and ability</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="tingkat-kreativitas" value="1" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="tingkat-kreativitas" value="2" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="tingkat-kreativitas" value="3" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="tingkat-kreativitas" value="4" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="tingkat-kreativitas" value="5" required></td>
                                            </tr>
                                            <tr>
                                                <td>Kemampuan Berkomunikasi/The ability to communicate</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-berorganisasi" value="1" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-berorganisasi" value="2" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-berorganisasi" value="3" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-berorganisasi" value="4" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-berorganisasi" value="5" required></td>
                                            </tr>
                                            <tr>
                                                <td>Kemampuan Beradaptasi dengan Lingkungan Kerja/The ability of adapt to the work environment</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-beradaptasi-dengan-lingkungan-kerja" value="1" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-beradaptasi-dengan-lingkungan-kerja" value="2" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-beradaptasi-dengan-lingkungan-kerja" value="3" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-beradaptasi-dengan-lingkungan-kerja" value="4" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-beradaptasi-dengan-lingkungan-kerja" value="5" required></td>
                                            </tr>
                                            <tr>
                                                <td>Kemampuan Bersosialisasi dalam Lingkungan Kerja/The ability to socialize in a work environment</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-bersosialisasi-dalam-lingkungan-kerja" value="1" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-bersosialisasi-dalam-lingkungan-kerja" value="2" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-bersosialisasi-dalam-lingkungan-kerja" value="3" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-bersosialisasi-dalam-lingkungan-kerja" value="4" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kemampuan-bersosialisasi-dalam-lingkungan-kerja" value="5" required></td>
                                            </tr>
                                            <tr>
                                                <td>Sopan Santun/The manners of politeness</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="sopan-santun" value="1" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="sopan-santun" value="2" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="sopan-santun" value="3" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="sopan-santun" value="4" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="sopan-santun" value="5" required></td>
                                            </tr>
                                            <tr>
                                                <td>Kerapian Dalam Berbusana/The neatness in apparels</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kerapian-dalam-berbusana" value="1" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kerapian-dalam-berbusana" value="2" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kerapian-dalam-berbusana" value="3" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kerapian-dalam-berbusana" value="4" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kerapian-dalam-berbusana" value="5" required></td>
                                            </tr>
                                            <tr>
                                                <td>Integritas (etika dan moral)/The integrity(ethical and moral)</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="etika-dan-moral" value="1" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="etika-dan-moral" value="2" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="etika-dan-moral" value="3" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="etika-dan-moral" value="4" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="etika-dan-moral" value="5" required></td>
                                            </tr>
                                            <tr>
                                                <td>Keahlian Berdasarkan Bidang Ilmu (kompetensi utama)/The skill based on the knowledge (core competency)</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="keahlian-berdasarkan-bidang-ilmu" value="1" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="keahlian-berdasarkan-bidang-ilmu" value="2" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="keahlian-berdasarkan-bidang-ilmu" value="3" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="keahlian-berdasarkan-bidang-ilmu" value="4" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="keahlian-berdasarkan-bidang-ilmu" value="5" required></td>
                                            </tr>
                                            <tr>
                                                <td>Bahasa Inggris/English language</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="bhs-inggris" value="1" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="bhs-inggris" value="2" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="bhs-inggris" value="3" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="bhs-inggris" value="4" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="bhs-inggris" value="5" required></td>
                                            </tr>
                                            <tr>
                                                <td>Penggunaan Teknologi Informasi/The use of information technology</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="penggunaan-teknologi" value="1" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="penggunaan-teknologi" value="2" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="penggunaan-teknologi" value="3" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="penggunaan-teknologi" value="4" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="penggunaan-teknologi" value="5" required></td>
                                            </tr>
                                            <tr>
                                                <td>Kerjasama Tim/Team cooperation</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kerjasama-tim" value="1" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kerjasama-tim" value="2" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kerjasama-tim" value="3" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kerjasama-tim" value="4" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="kerjasama-tim" value="5" required></td>
                                            </tr>
                                            <tr>
                                                <td>Pengembangan Diri/Self Development</td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="pengembangan-diri" value="1" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="pengembangan-diri" value="2" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="pengembangan-diri" value="3" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="pengembangan-diri" value="4" required></td>
                                                <td class="text-center"><input class="form-check-input" type="radio" name="pengembangan-diri" value="5" required></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="mb-3">
                                    <label for="kebutuhan-yang-perlu-dikembangkan" class="form-label">Berdasarkan pengamatan Bapak/Ibu terhadap kinerja alumni Politeknik Negeri Batam keterampilan atau ilmu pengetahuan apa yang harus dikembangkan agar relevan dengan kebutuhan perusahaan</label>
                                    <textarea name="kebutuhan-yang-perlu-dikembangkan" id="kebutuhan-yang-perlu-dikembangkan" class="form-control" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="sertifikasi-yang-perlu-dimiliki" class="form-label">Sertifikasi apa yang perlu dimiliki oleh mahasiswa kami agar relavan dengan bidang pekerjaan di perusahaan Bapak/Ibu</label>
                                    <textarea name="sertifikasi-yang-perlu-dimiliki" id="sertifikasi-yang-perlu-dimiliki" class="form-control" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bolder"> Untuk perbaikan pelaksanaan perekrutan terhadap alumni Politeknik Negeri Batam di masa yang akan datang, menurut Bapak/Ibu apa yang perlu dilaksanakan oleh pengelola Politeknik Negeri Batam (jawaban boleh lebih dari satu)</label>
                                    <div class="form-check">
                                        <input class="form-check-input" name="perbaikan-pelaksanaan-perekrutan" type="checkbox" value="poltek-negri-batam" id="perbaikan">
                                        <label class="form-check-label" for="perbaikan">
                                            Diterbitkan oleh Politeknik Negeri Batam
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="perbaikan-pelaksanaan-perekrutan" type="checkbox" value="lembaga-mitra-poltek-batam" id="perbaikan-2">
                                        <label class="form-check-label" for="perbaikan-2">
                                            Diterbitkan oleh lembaga lain yang bermitra dengan Politeknik Negeri Batam
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="perbaikan-pelaksanaan-perekrutan" type="checkbox" value="kegiatan-mandiri" id="perbaikan-3">
                                        <label class="form-check-label" for="perbaikan-3">
                                            Melalui kegiatan dan biaya mandiri
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Dalam setiap tahunnya kami akan mewisuda alumni Politeknik Negeri Batam, bersediakah Perusahaan Bapak/Ibu menerima alumni Politeknik Batam</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bersedia-menerima-alumni-poltek" id="bersedia-menerima-alumni-poltek-1" value="ya">
                                        <label class="form-check-label" for="bersedia-menerima-alumni-poltek-1">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bersedia-menerima-alumni-poltek" id="bersedia-menerima-alumni-poltek-2" value="tidak">
                                        <label class="form-check-label" for="bersedia-menerima-alumni-poltek-2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <?= submitButton("Simpan kuesioner") ?>
                        </div>
                    </form>
                </div>
            <?php else : ?>
                <div class="card-body">
                    <h3 class="mb-0">
                        Maaf tidak ada alumni yang bekerja di perusahaan Anda
                    </h3>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>
<script>
    const elmAlumni = document.querySelector("#alumni").addEventListener("change", function() {
        const posisi = this.querySelector("option:checked").getAttribute("target-posisi");
        document.querySelector(`#posisi option[posisi='${posisi}']`).selected = true;
    });

    document.querySelector("#form-feedback-alumni").addEventListener("submit", function(e) {
        e.preventDefault();
        const allAnswerElm = this.querySelectorAll("input[type='text']:not([value]), textarea, input[type='radio']:checked, input[type='checkbox']:checked");
        const allAnswer = [];
        for (const answerElm of allAnswerElm) {
            if (answerElm.type == "text" || answerElm.tagName.toLowerCase() == "textarea") {
                allAnswer.push({
                    question: answerElm.getAttribute("name"),
                    answer: answerElm.value,
                });
            } else if (answerElm.type == "radio" || answerElm.type == "checkbox") {
                const pos = allAnswer.map(answer => answer.question).indexOf(answerElm.getAttribute("name"));
                // console.log(allAnswer.map(answer => answer.question))
                if (pos < 0) {
                    allAnswer.push({
                        question: answerElm.getAttribute("name"),
                        answer: [answerElm.value]
                    })
                } else {
                    allAnswer[pos].answer.push(answerElm.value);
                }
            }
        };

        const bodyData = {
            'user-id': document.querySelector("#alumni").value.trim(),
            allAnswer
        };
        sendData('<?= ROOT_URL . "kuesioner-perusahaan" ?>', bodyData)
        .then(res => {
            console.log(res);
            if (res.status == "error") alert(res.pesan);
            if (res.status === "success") window.location.replace("<?= ROOT_URL ?>");
        });
    })
</script>