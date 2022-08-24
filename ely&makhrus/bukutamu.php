<section class="guestbook" id="guestbook">
    <div class="container" style="margin-top: -150px;">
        <div class="text-center">
            <img src="../images/icon/palmpink3.png" class="" width=100>
            <h2 class="display-4 my-0 mx-5 mb-5">Guest Book</h2>
        </div>
    </div>

    <div class="container">
        <div class="col-lg-9 mx-auto">
            <div class="card border-0">
                <div class="card-body text-left">
                    <form method="POST" id="formAdd">
                        <input type=hidden name=_token value="rWTrj3lyznGVxBts6i0CiUnLlN1RytuEHiAnfo4D">
                        <div class="form-group">
                            <label for="guestName">Nama</label>
                            <input type=text class="form-control" id="guestName" name='nama' value="" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan/Doa</label>
                            <textarea class="form-control" id="message" name='pesan' rows="3" required></textarea>
                        </div>
                    </form>
                    <div class="text-center">
                        <button type="submit" name="Submit" class="btn btn-secondary" id="btn_mamah">Kirim <img src="../images/icon/send-w.png" alt="send icon" style="width:20px;margin-left:5px"></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="wish_mamah"></div>


</section>