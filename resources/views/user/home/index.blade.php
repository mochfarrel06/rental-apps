@extends('user.layouts.master')

@section('content')
    <!-- Home -->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Temukan dan Jelajahi Destinasi Baru Bersama Wira Tour</h1>
            <h3>Kami menawarkan Jasa Sewa Mobil Kota dan Kabupaten Kediri dengan pelayanan yang aman dan terpercaya bagi
                setiap orang, baik untuk keperluan bisnis, keluarga maupun liburan.</h3>
            <a href="" class="btn" target="_blank"><i class="fab fa-whatsapp"></i> Hubungi Kami</a>
        </div>
        <div class="slider">
            <div class="slides">
                <!-- Radion button start -->
                <input type="radio" name="radio-btn" id="radio1" />
                <input type="radio" name="radio-btn" id="radio2" />
                <input type="radio" name="radio-btn" id="radio3" />
                <input type="radio" name="radio-btn" id="radio4" />
                <!-- Radion button end -->
                <!-- slide image start -->
                <div class="home-img first">
                    <img src="{{ asset('assets/images/mobil1.png') }}" alt="" />
                </div>
                <div class="home-img">
                    <img src="{{ asset('assets/images/mobil2.png') }}" alt="" />
                </div>
                <div class="home-img">
                    <img src="{{ asset('assets/images/mobil3.png') }}" alt="" />
                </div>
                <div class="home-img">
                    <img src="{{ asset('assets/images/mobil4.png') }}" alt="" />
                </div>
                <!-- slide image end -->
                <!-- Auto slide start -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
                <!-- Auto slide end -->
            </div>
            <!-- Manual slide start -->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            <!-- Manual slide end -->
        </div>
    </section>
    <!-- End Home -->

    <!-- About -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="{{ asset('assets/images/mobil2.png') }}" alt="" />
        </div>
        <div class="about-text">
            <h2>Kenali produk & layanan kami</h2>
            <p>Ketahui keunggulan beragam produk serta layanan kami dan temukan solusi transportasi yang sesuai dengan
                kebutuhan Anda.</p>
            <a href="#rent" class="btn">Learn More</a>
        </div>
    </section>
    <!-- End About -->

    <!--Rent-->
    <section class="rent-container" id="rent">
        <div class="rent-text">
            <h2>Armada <span class="green">Sewa</span></h2>
            <p>Di bawah ini merupakan armada <span class="green">Wira Tour</span> yang bisa Anda sewa untuk keperluan
                perjalanan area Kediri atau bahkan keluar kota. Dapatkan pengalaman terbaik saat perjalanan bersama
                kami.</p>
        </div>
        <div class="rent-car">
            <div class="card-rent">
                <div class="card-image-rent car-1"></div>
                <h3>Xpander</h3>
                <p>Rp.375.000/day</p>
                <a href="">Pesan
                    Sekarang</a>
            </div>
            <div class="card-rent">
                <div class="card-image-rent car-2"></div>
                <h3>Innova Reborn</h3>
                <p>Rp.550.000/day</p>
                <a href="">Pesan
                    Sekarang</a>
            </div>
            <div class="card-rent">
                <div class="card-image-rent car-3"></div>
                <h3>Avanza</h3>
                <p>Rp.275.000/day</p>
                <a href="">Pesan
                    Sekarang</a>
            </div>
            <div class="card-rent">
                <div class="card-image-rent car-4"></div>
                <h3>Innove</h3>
                <p>Ro.375.000/day</p>
                <a href="">Pesan
                    Sekarang</a>
            </div>
            <div class="card-rent">
                <div class="card-image-rent car-5"></div>
                <h3>Xenia</h3>
                <p>Rp.275.000/day</p>
                <a href="">Pesan
                    Sekarang</a>
            </div>
            <div class="card-rent">
                <div class="card-image-rent car-6"></div>
                <h3>Sigra</h3>
                <p>Rp.275.000/day</p>
                <a href="">Pesan
                    Sekarang</a>
            </div>
            <div class="card-rent">
                <div class="card-image-rent car-7"></div>
                <h3>Calya</h3>
                <p>Rp.275.000/day</p>
                <a href="">Pesan
                    Sekarang</a>
            </div>
            <div class="card-rent">
                <div class="card-image-rent car-8"></div>
                <h3>Luxio</h3>
                <p>Rp.275.000/day</p>
                <a href="">Pesan
                    Sekarang</a>
            </div>
            <div class="card-rent">
                <div class="card-image-rent car-9"></div>
                <h3>Ayla</h3>
                <p>Rp.250.000/day</p>
                <a href="">Pesan
                    Sekarang</a>
            </div>
            <div class="card-rent">
                <div class="card-image-rent car-10"></div>
                <h3>Agya</h3>
                <p>Rp.250.000/day</p>
                <a href="">Pesan
                    Sekarang</a>
            </div>
        </div>
    </section>
    <!-- End Rent-->

    <!--FAQS-->
    <section class="faqs" id="faqs">
        <div class="faqs-text">
            <h2>FAQ'S</h2>
        </div>
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-item-header">Apasaja ketentuan sewa di Wira Tour?</div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">Anda cukup membawa 2 KTP dan 1 sepeda motor sebagai
                        jaminan.</div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-item-header">Apakah tarif diatas sudah termasuk sopir?</div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">Belum Termasuk, jika ingin menyewa sopir hubungi admin
                        kami.</div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-item-header">Berapa harga sewa mobil 12 jam saja?</div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">Untuk sewa 12 jam, tarif diatas dikurangi Rp.50.000.</div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header">Apakah terdapat peraturan jika keluar kota?</div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">Tidak ada peraturan, hanya saja mobil harus dikembalikan
                        sesuai dengan jam sewa yang telah ditentukan.</div>
                </div>
            </div>
        </div>
    </section>

    <!--pros-->
    <section>
        <div class="heading-pros" id="pros">
            <h1>Benefit</h1>
        </div>
        <div class="pros-container">
            <div class="card-pros">
                <h2>Security</h2>
                <p>Jaminan transaksi aman secara online.</p>
            </div>
            <div class="card-pros">
                <h2>Pembayaran</h2>
                <p>Wira memberikan kenyamanan dalam bertransaksi dengan menyediakan beragam metode pembayaran yang
                    mudah.</p>
            </div>
            <div class="card-pros">
                <h2>Armada Terawat</h2>
                <p>Selalu melakukan perawatan berkala menjamin kendaraan yang anda gunakan berkualitas, aman, nyaman,
                    terawat dan selalu dalam kondisi prima.</p>
            </div>
            <div class="card-pros">
                <h2>Berpengalaman</h2>
                <p>Dengan segudang pengalaman yang dimiliki oleh driver Kami, maka Anda akan menikmati seluruh sudut
                    Kota Kediri dengan sensasi yang berbeda.</p>
            </div>
            <div class="card-pros">
                <h2>Harga Terjangkau</h2>
                <p>Memiliki harga sewa relatif terjangkau untuk setiap jenis kendaraan yang kami sediakan. Tapi kualitas
                    tetap menjadi perhatian kami untuk kepuasan pelanggan.</p>
            </div>
            <div class="card-pros">
                <h2>Terpercaya</h2>
                <p>Wira Tour telah dipercaya konsumen untuk jasa sewa mobil karena sudah banyak konsumen yang memberi
                    review bagus dan kembali menggunakan jasa kita.</p>
            </div>
        </div>
    </section>

    <!--Review-->
    <section class="testi" id="testi">
        <div class="testi-text">
            <h2>Testimoni</h2>
        </div>
        <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": true, "imagesLoaded":true }'>
            <div class="carousel-cell">
                <div class="testimoni-container">
                    <div class="card-tes">
                        <div class="card-image-tes">
                            <img src="{{ asset('assets/images/r1.png') }}" alt="" />
                        </div>
                        <h3>Adi</h3>
                        <p>"Sangat mendukung sekali proses wedding kami, drivernya baik dan komunikatif, mobil bersih,
                            driver tidak ugal-ugalan dan semua berjalan dengan lancar berkat Wira Tour. Recommended Car
                            Rental"</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="card-tes">
                        <div class="card-image-tes">
                            <img src="{{ asset('assets/images/rev6.png') }}" alt="" />
                        </div>
                        <h3>Wahyu</h3>
                        <p>"Recomended dalam memberikan pelayanan yang terbaik dan cepat, dan semua Karyawan ramah.
                            untuk perjalan bisnis dan liburan sy selalu memakai jasa dari Wira Tour smpai sekarang . "
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <div class="card-tes">
                        <div class="card-image-tes">
                            <img src="{{ asset('assets/images/rev5.png') }}" alt="" />
                        </div>
                        <h3>Niniek</h3>
                        <p>"Setiap memakai jasa rental Mobil disini, blm pernah merasa kecewa karena Wira Tour selalu
                            memberikan pelayanan yang terbaik dan cepat, dan untuk semua drivernya sangat ramah."</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-cell">
                <div class="testimoni-container">
                    <div class="card-tes">
                        <div class="card-image-tes">
                            <img src="{{ asset('assets/images/rev4.png') }}" alt="" />
                        </div>
                        <h3>Annisa</h3>
                        <p>"Setiap kali mau rental mobil menurut saya di Wira Tour yang paling tepat untuk membantu
                            disetiap perjalanan bisnis ataupun liburan ditambah lagi petugasnya yang sangat ramah dan
                            banyak."</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="card-tes">
                        <div class="card-image-tes">
                            <img src="{{ asset('assets/images/r2.png') }}" />
                        </div>
                        <h3>Reza</h3>
                        <p>Selama penyewaan mobil di Wira Tour selama 3 hari merasa puas sekali dari pengambilan sampai
                            pengembalian tidak ada kendala, untuk mobil di cek dengan baik dan kondisi mobil saat
                            diterima dalam keadaan baik."</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="card-tes">
                        <div class="card-image-tes">
                            <img src="{{ asset('assets/images/r4.png') }}" alt="" />
                        </div>
                        <h3>Kiki</h3>
                        <p>"Terimakasih Wira Tour sudah menyediakan sewa mobil untuk kebutuhan mendesak"</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="contact-box">
            <h3>Your Connect</h3>
            <span>Connect With us</span>
            <div class="social">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.instagram.com/wiratourandtravel/"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
        <div class="contact-box">
            <h3>Menu Links</h3>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#rent">Rent</a></li>
            <li><a href="#faqs">Faqs</a></li>
            <li><a href="#pros">Benefit</a></li>
            <li><a href="#testi">Testimonials</a></li>
        </div>
        <div class="contact-box">
            <h3>Quick Links</h3>
            <li><a
                    href="https://api.whatsapp.com/send?phone=6285607646639&text=Hai%20Admin,%20mau%20tanya%20seputar%20rental%20mobi%20Wira%20Tour%20dong">Contact</a>
            </li>
            <li><a href="#Privacy Policy">Privacy Policy</a></li>
            <li><a href="#Disclaimer">Desclaimer</a></li>
            <li><a href="#Term Of Use">Term Of Use</a></li>
        </div>
        <div class="contact-box address">
            <h3>Contact</h3>
            <i class="bx bxs-map"><span>Jl Pare Lama, Kandangan, Kediri.</span></i>
            <i class="bx bxs-phone"><span>+6285607646639 </span></i>
            <i class="bx bxs-envelope"><span>wiratour008@email.com</span></i>
        </div>
    </section>
@endsection
