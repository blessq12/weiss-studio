<div class="cta-modal-block d-none" id="basic-modal">
    <div class="overlay"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-8">
                <div class="cta-modal-content position-relative">
                    <div class="close-button">X</div>
                    <div class="image d-none d-md-flex d-lg-flex"></div>
                    <div class="content">
                        <div class="row">
                            <div class="col-12"><div class="modal-content"><hr></div></div>
                            <div class="col-12">
                                <form action="{{ route('action.sendreq') }}" method="get">
                                    <div class="form-group mb-3">
                                        <label for="name">Имя:</label>
                                        <input type="text" class="form-control form-input" name="name" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name">Телефон:</label>
                                        <input type="text" class="form-control form-input" name="phone" placeholder="+7(XXX) XXX-XX-XX" required>
                                    </div>
                                    <div class="form-group pt-3">
                                        <button type="submit" class="submit-button">Отправить</button>
                                        <button type="reset" class="reset-button">Очистить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cta-modal-block d-none" id="order-modal">
    <div class="overlay"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-8">
                <div class="cta-modal-content position-relative">
                    <div class="close-button">X</div>
                    <div class="image d-none d-md-flex d-lg-flex"></div>
                    <div class="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal-content"><hr></div>
                            </div>
                            <div class="col-12">
                                <form action="{{ route('action.sendreq') }}" method="get">
                                    <div class="form-group mb-3">
                                        <label for="name">Имя:</label>
                                        <input type="text" class="form-control form-input" name="name" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name">Телефон:</label>
                                        <input type="text" class="form-control form-input" name="phone" placeholder="+7(XXX) XXX-XX-XX" required>
                                    </div>
                                    <div class="form-group pt-3">
                                        <button type="submit" class="submit-button">Отправить</button>
                                        <button type="reset" class="reset-button">Очистить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

