@extends('layouts.frontend.master')

@section('content')
    <div class="wrapper">
        <!-- =========================
                        Google Map
                =========================  -->
        <section class="google-map py-0">
            <iframe frameborder="0" height="500" width="100%"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.0354165917247!2d108.22018197552354!3d-7.3499197723104475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5765c64bb1f9%3A0xd8b04746f0f62ad4!2sUniversitas%20Siliwangi!5e0!3m2!1sid!2sid!4v1681510469776!5m2!1sid!2sid&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"></iframe>
        </section><!-- /.GoogleMap -->

        <!-- ==========================
                      contact layout 1
                  =========================== -->
        <section class="contact-layout1 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-panel p-0 box-shadow-none">
                            <div class="contact__panel-info mb-30">
                                <div class="contact-info-box">
                                    <h4 class="contact__info-box-title">Lokasi Kami</h4>
                                    <ul class="contact__info-list list-unstyled">
                                        <li>2307 Apartement Cibuan, Jakarta 11226 Indonesia.</li>
                                    </ul><!-- /.contact__info-list -->
                                </div><!-- /.contact-info-box -->
                                <div class="contact-info-box">
                                    <h4 class="contact__info-box-title">Hubungi Kami</h4>
                                    <ul class="contact__info-list list-unstyled">
                                        <li>Email: <a href="mailto:apps.zaqat@gmail.com">apps.zaqat@gmail.com</a></li>
                                        <li>Support: <a href="mailto:apps.zaqat@gmail.com">apps.zaqat@gmail.com</a></li>
                                    </ul><!-- /.contact__info-list -->
                                </div><!-- /.contact-info-box -->
                                <div class="contact-info-box">
                                    <h4 class="contact__info-box-title">Jam Kerja</h4>
                                    <ul class="contact__info-list list-unstyled">
                                        <li>Dari Senin - Jumat</li>
                                        <li>8.00 sampai 19.00</li>
                                    </ul><!-- /.contact__info-list -->
                                </div><!-- /.contact-info-box -->
                                <a href="https://api.whatsapp.com/send?phone=85156162840&text=Halo%2C%20saya%20ingin%20membayar%20zakat.%20Boleh%20tanya%20jam%20berapa%20bapak%20ada%20di%20masjid%3F"
                                    class="btn btn__primary">
                                    <i class="icon-arrow-right"></i>
                                    <span>Hubungi via Whatsapp</span>
                                </a>
                            </div><!-- /.contact__panel-info -->
                            <form method="post" action="assets/php/contact.php" id="contactForm"
                                class="contact__panel-form mb-30">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="contact__panel-title">Hubungi Kami</h4>
                                        <p class="contact__panel-desc mb-40">Kami selalu sedia melayani dan mendengarkan
                                            pendapat anda, dengan mengisi form dibawah anda menyetujui syarat dan ketentuan
                                            menghubungi kami.</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nama Lengkap"
                                                id="contact-name" name="contact-name" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email"
                                                id="contact-email" name="contact-email" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nomor Telepon"
                                                id="contact-Phone" name="contact-phone" required>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <select>
                                                <option value="0">Pilih Jenis Layanan</option>
                                                <option value="1">Komplain Zakat</option>
                                                <option value="2">Aduan Pungli</option>
                                                <option value="3">Lainnya</option>
                                            </select>
                                        </div>
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Deskripsi Tambahan" placeholder="Message" id="contact-messgae"
                                                name="contact-messgae" required></textarea>
                                        </div>
                                    </div><!-- /.col-lg-12 -->
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn__secondary">
                                            <i class="icon-arrow-right"></i><span>Kirim Ajuan</span>
                                        </button>
                                        <div class="contact-result"></div>
                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->
                            </form>
                        </div><!-- /.contact__panel -->
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact layout 1 -->
    </div>
@endsection
