<section id="daftarantrian" class="contact">
<div class="container" data-aos="fade-up">
<div class="section-title">
        <h2>Daftar Antrian</h2>
    </div>
    
    <div class="row">
        
        <div class="col-lg-5 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>

                <div class="form-group col-lg-6">
                <label for="name">Jenis Kelamin</label><br>
                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="jenis_kelamin" style="height:15px" />
                    <label for="jenis_kelamin">Jantan</label> &nbsp
                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="jenis_kelamin" style="height:15px"/>
                    <label for="jenis_kelamin">Betina</label>
                </div>

                <div class="form-group">
                    <label for="name">No. Telp</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                    <label for="name">Alamat</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                    <label for="name">Keluhan</label>
                    <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
            </form>
        </div>
        
        <div class="col-md-3">
            <div class="info">
                <div class="address">
                <i class="bbi bi-person-lines-fill"></i>
                    <h4>Jumlah Antrian</h4>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="info">
                <div class="email">
                    <i class="bi bi-people-fill"></i>
                    <h4>Antrian Saat Ini</h4>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="info">
                <div class="address">
                <i class="bbi bi-person-lines-fill"></i>
                    <h4>No Antrian</h4>
                </div>
            </div>
        </div>
    </div>
    
</div>    
</section><!-- End Daftar Antrian Section -->