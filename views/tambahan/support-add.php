<style>
    .chat-bubble {
        position: fixed;
        bottom: 1rem;
        right: 1rem;
        z-index: 999;
    }
</style>
<div class="chat-bubble">
    <div class="card bg-primary text-white">
        <div class="p-2" id="chat-popup" style="cursor: pointer;">
            <div class="d-flex flex-row">
                <div class="chat-logo d-flex align-items-center fs-25 me-2">
                    <i class="uil uil-comment-lines"></i>
                </div>
                <div style="line-height: 1;" class="d-flex flex-column justify-content-center">
                    <p class="mb-0 fs-15">Ada keluhan?</p>
                    <p class="mb-0 fs-15">Silahkan kirim pesan</p>
                </div>
            </div>
        </div>
        <div id="chat-message" class="d-none" style="max-width: 400px;">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center p-2 text-dark" style="border-top: 2px solid #5eb9f0;">
                    <h5 class="mb-0">SMShub</h5>
                    <i class="uil uil-times" id="chatmessage-close-button" style="cursor: pointer;"></i>
                </div>
                <div class="p-2" style="max-height: 400px; overflow-y: auto;">
                    <div id="step-one">
                        <p class="small text-dark mb-2">Please let us know your name and phone number to reach you</p>
                        <div id="step-one-form">
                            <div class="mb-2">
                                <input type="text" name="lname" class="form-control form-control-sm fs-15" placeholder="Last name">
                            </div>
                            <div class="mb-2">
                                <input type="text" name="name" class="form-control form-control-sm fs-15" placeholder="Name">
                            </div>
                            <div class="mb-2">
                                <input type="text" name="phone" class="form-control form-control-sm fs-15" placeholder="Phone">
                            </div>
                            <div class="mb-2">
                                <textarea name="message" class="form-control form-control-sm fs-15" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="mb-0">
                                <button type="button" class="btn btn-primary btn-sm w-100 py-1" id="step-one-submit">Send</button>
                            </div>
                        </div>
                    </div>
                    <div id="step-two" class="d-none">
                        <div class="d-flex flex-row justify-content-start">
                            <div>
                                <p class="small p-2 mb-3 rounded-3 text-dark" style="background-color: #f5f6f7;">Hi <span class="popup-user-name"></span>, thank you for your message. Which of the below you're interested in?</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row flex-wrap justify-content-end mb-4 pt-1" style="column-gap: 0.3rem;row-gap: 0.3rem">
                            <button type="button" class="btn btn-primary btn-sm py-1 px-2 fs-13 question1">Pricing Information</button>
                            <button type="button" class="btn btn-primary btn-sm py-1 px-2 fs-13 question1">Free Consultation</button>
                            <button type="button" class="btn btn-primary btn-sm py-1 px-2 fs-13 question1">Other</button>
                        </div>
                        <div class="d-flex flex-row justify-content-start d-none" id="question2" question-label="email">
                            <div>
                                <p class="small p-2 mb-3 rounded-3 text-dark" style="background-color: #f5f6f7;">Can I have your email address?</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-end d-none" id="answer2">
                            <div>
                                <p class="small p-2 mb-3 text-white rounded-3 bg-primary"></p>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-start d-none" id="question3" question-label="company">
                            <div>
                                <p class="small p-2 mb-3 rounded-3 text-dark" style="background-color: #f5f6f7;">Which company do you represent?</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-end d-none" id="answer3">
                            <div>
                                <p class="small p-2 mb-3 text-white rounded-3 bg-primary"></p>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-start d-none" id="question4" question-label="question">
                            <div>
                                <p class="small p-2 mb-3 rounded-3 text-dark" style="background-color: #f5f6f7;">Is there anything else I can help you with?</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-end d-none" id="answer4">
                            <div>
                                <p class="small p-2 mb-3 text-white rounded-3 bg-primary"></p>
                            </div>
                        </div>
                        <div class="d-flex flex-row justify-content-start d-none" id="final">
                            <div>
                                <p class="small p-2 mb-1 rounded-3 text-dark" style="background-color: #f5f6f7;">We will reach out to you soon.</p>
                                <p class="small p-2 mb-2 rounded-3 text-dark" style="background-color: #f5f6f7;">Thank you!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-0 d-none" id="chatbox-input-wrapper">
                    <input type="text" class="form-control form-control-sm fs-15" style="border-top-left-radius: 0;" placeholder="Type message" answer-target="answer2" question-target="question2" disabled="">
                    <button class="btn btn-sm py-0 btn-primary" style="border-top-right-radius: 0;" type="button" disabled="">
                        Send
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>