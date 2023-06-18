<div class="container">
    <div class="card">
        <div class="card-body text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
            </svg>
            <hr>
            <p>Para alumni yang terhormat, saat ini kami sedang mengadakan Tracer Study kepada alumni Polibatam. Studi ini dilakukan dalam rangka
                mengidentifikasi keberadaan alumni setelah lulus kuliah. Tujuan studi ini untuk mengevaluasi proses dan hasil perkuliahan, penyempurnaan
                serta penjaminan kualitas pembelajaran di Polibatam.</p>
            <p>Berkaitan dengan hal tersebut kami mohon partisipasi saudara meluangkan waktu untuk menjawab pertanyaan dalam kuesioner ini, data yang
                telah disampaikan akan dijaga kerahasaiaannya. Atas perhatian dan kerjasama yang baik serta bantuannya, kami mengucapkan terima kasih.</p>
            <hr>
            <?php if(!$data['done-second-survey']) :?>
                <p class="h4 fw-bolder">"Kuesioner Anda belum Selesai"</p>
                <a href="#" class="btn btn-primary mt-4">Lanjutkan</a>
            <?php else : ?>
                <p class="h4 fw-bolder">"Kuesioner Anda sudah Selesai"</p>
            <?php endif ?>
        </div>
    </div>
</div>