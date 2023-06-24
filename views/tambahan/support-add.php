<style>
    #chat-bubble {
        position: fixed;
        bottom: 1rem;
        right: 1rem;
        z-index: 999;
    }

    #chat-popup {
        cursor: pointer;
    }

    @media only screen and (max-width: 575px) {
        #chat-bubble{
            left: 0.5rem;
            right: 0.5rem;
            bottom: 0.5rem;
        }
        #chat-message {
            max-width: 100% !important;
            min-width: 100% !important;
        }
    }
</style>
<div id="chat-bubble">
    <div class="card bg-primary text-white">
        <div class="p-2" id="chat-popup">
            <div class="d-flex flex-row">
                <div class="chat-logo d-flex align-items-center fs-25 me-2">
                    <i class="uil uil-comment-lines"></i>
                </div>
                <div style="line-height: 1;" class="d-flex flex-column justify-content-center">
                    <p class="mb-2 h5">Ada keluhan?</p>
                    <p class="mb-0">Silahkan kirim pesan</p>
                </div>
            </div>
        </div>
        <div id="chat-message" class="d-none" style="max-width: 400px;min-width: 400px;">
            <div class="card border border-primary">
                <div class="card-header d-flex justify-content-between align-items-center p-2 text-dark" style="border-top: 2px solid #5eb9f0;">
                    <h5 class="mb-0">Bantuan Tracer Study</h5>
                    <svg xmlns="http://www.w3.org/2000/svg" id="chatmessage-close-button" style="cursor: pointer;" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg>
                </div>
                <div class="text-dark card-body" style="max-height: 400px; overflow-y: auto;" id="chat-first">
                    <form id="form-send-email" action="<?= ROOT_URL."email-support" ?>" method="POST">
                        <div class="mb-2">
                            <input type="text" class="form-control" name="name" id="name" required placeholder="Nama">
                        </div>
                        <div class="mb-2">
                            <input type="email" class="form-control" name="email" id="email" required placeholder="Email">
                        </div>
                        <div class="mb-2">
                            <textarea name="message" id="message" rows="2" class="form-control" required placeholder="Pesan"></textarea> 
                        </div>
                        <?= submitButton("Kirim Pesan") ?>
                    </form>
                </div>
                <div id="chat-second" class="card-body d-none">
                    <p class="mb-0 fw-bolder text-dark">Pesan terkirim silahkan tunggu balasan dalam 2x24 jam</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const chatPopup = document.querySelector("#chat-bubble #chat-popup");
    const chatMessage = document.querySelector("#chat-bubble #chat-message");
    const chatMessageCloseButton = document.querySelector("#chat-bubble #chatmessage-close-button");
    const formSendEmail = document.querySelector("#form-send-email");

    chatPopup.addEventListener("click", function() {
        this.classList.toggle("d-none");
        chatMessage.classList.toggle("d-none");
    });
    chatMessageCloseButton.addEventListener("click", function() {
        chatMessage.classList.toggle("d-none");
        chatPopup.classList.toggle("d-none");
    });

    window.onload = function(){
        formSendEmail.addEventListener("submit", function(e){
            e.preventDefault();
            const theSubmitButton = this.querySelector(".submit-button");
            submitButtonToggle(theSubmitButton);
            const bodyData = {
                name: this.querySelector("#name").value.trim(),
                email: this.querySelector("#email").value.trim(),
                message: this.querySelector("#message").value.trim(),
            };
            sendData('<?= ROOT_URL."email-support" ?>', bodyData)
            .then(res => {
                if (res.status === "success") {
                    document.querySelector("#chat-first").classList.add("d-none");
                    document.querySelector("#chat-second").classList.remove("d-none");
                }else {
                    console.log(res.message);
                    alert("Pesan gagal terkirim, silahkan coba lagi");
                }
            })
            .finally(() => submitButtonToggle(theSubmitButton));
        });
    }
</script>