@extends('layouts.app', ['landing' => true])

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100"></div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row about-container">

                    <div class="col-lg-6 content order-lg-1 order-2">
                        <h2 class="title">A.P.G Kristal group je</h2>
                        <p>-društvo za proizvodnju, trgovinu i usluge, osnovano 2008 godine u Beogradu sa osnovnom
                            delatnošću:
                            uvoz, proizvodnja, pakovanje i distribucija svih vrsta kuhinjskih folija kako za upotrebu u
                            domaćinstvima tako i za profesionalnu upotrebu u ugostiteljskim objektima.</p>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="fa fa-home"></i></div>
                            <h4 class="title">O nama</h4>
                            <p class="description">Za 12 godina iskustva i kontinuiranog razvoja stali smo rame uz rame
                                sa
                                liderima u branši pa tako sada robu i proizvode plasiramo širom države uključujući i
                                velike
                                trgovinske lance ali i, uz čvrstu saradnju u zemlje regiona. Konstantnim inovacijama i
                                ulaganjem u razvoj kako kadrova tako i proizvodnih kapaciteta a u isto vreme poštujući
                                principe i interese tržišta timskim radom omogućavamo kreativnu i efikasnu realizaciju
                                poslovnih zadataka a tako nastavljamo da osiguravamo vrhunski kvalitet proizvoda i
                                usluga koje imamo u svom asortimanu.</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="fa fa-cogs"></i></div>
                            <h4 class="title">Upotreba</h4>
                            <p class="description">Aluminijumska folija koristi se za proizvodnju aseptičnih,
                                dugotrajnih
                                pakovanja pića i mlečnih proizvoda, prilikom pečenja, pakovanja i prenošenja hrane.
                                Takođe, alu folija je široko rasporostranjena u procesima toplotne izolacije, a u
                                posebnim
                                legurama se koristi čak i za strukturne komponente aviona. Rasprostranjena je u
                                najrazličitijim segmentima savremenog života. Kritikovana je od strane nekih
                                organizacija
                                za zaštitu životne sredine zbog visoke cene i energije koja se troši u procesu
                                proizodnje,
                                međutim, modernim procesima reciklaže negativne komponente se smanjuju.
                            </p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="fa fa-cutlery"></i></div>
                            <h4 class="title">Nezaobilazna u modernoj kuhinji</h4>
                            <p class="description">Upotreba aluminijumske folije je ipak najrasprostranjenija u
                                domaćinstvu.
                                U modernoj kuhinji danas se gotovo i ne može bez aluminijumske folije, zbog toga što se
                                može koristiti za kuvanje, čuvanje i prenošenje hrane. Idealna je za: kuvanje i
                                podgrevanje
                                hrane u rerni, održavanje toplote hrane, zaštitu hrane od spoljašnjih nečistoća,
                                pripremanje
                                zdravih namirnica – ribe ili mesa koji se umotani u alu foliju kuvaju u svom soku bez
                                dodataka ulja. Takođe se može koristiti i za čuvanje hrane u frižideru ili zamrzivaču,
                                kao i za prenošenje hrane.</p>
                        </div>

                    </div>

                    <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100"></div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Usluge</h3>
                    <p class="section-description">Osiguravamo vrhunski kvalitet proizvoda I usluga koje imamo u svom
                        asortimanu.
                        Najznačajnije mesto u ponudi asortimana zauzimaju: aluminijumska folija, streč – pvc folija,
                        papir za pečenje i aluminijumske posude – kontejneri za pakovanje hrane.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href="/usluge/konfekcija"><i class="fa fa-cube"></i></a></div>
                            <h4 class="title">Konfekcija</h4>
                            <p class="description">Konfekcija su naši verni potrošači manjih metraža, manje
                                potrošnje.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href="/usluge/profesionalni-kupci"><i class="fa fa-cubes"></i></a>
                            </div>
                            <h4 class="title">Profesionalni kupci</h4>
                            <p class="description">Profesionalni kupci su potrošači velikih metraža i pakovanja,
                                specijalna za
                                pekare, restorane, fastfood-ove.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href="/usluge/jambo-rolne"><i class="fa fa-database"></i></a></div>
                            <h4 class="title">Jambo Rolne</h4>
                            <p class="description">Bavimo se naravno prodajom Jumbo Rolni celokupnog programa drugim
                                proizvođačima
                                kako u Srbiji tako i u regionu.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
        </section>
        <!-- End Call To Action Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Proizvodi</h3>
                    <p class="section-description">Iz asortimana proizvoda za domaćinstvo izdvajamo aluminijumsku
                        foliju, streč foliju i papir za pečenje, u pojedinačnim pakovanjima različitih dimenzija u
                        zavisnosti od potreba kupaca…</p>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 offset-lg-4 offset-md-2 portfolio-item">
                        <a href="/proizvodi/aluminijumska-folija">
                            <img src="/assets/img/proizvodi/alufolija/alufolija_sve.webp" class="img-fluid"
                                 alt="Aluminijumska folija">
                            <div class="portfolio-info">
                                <h4>Najprodavanija folija</h4>
                                <p></p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <a href="/proizvodi/aluminijumska-folija">
                            <div class="owl-carousel portfolio-details-carousel-1">
                                <img src="/assets/img/proizvodi/alufolija/alufolija_20m_var1.webp" class="img-fluid"
                                     alt="Aluminijumska folija">
                                <img src="/assets/img/proizvodi/alufolija/alufolija_20m_var2.webp" class="img-fluid"
                                     alt="Aluminijumska folija">
                                <img src="/assets/img/proizvodi/alufolija/alufolija_20m_var3.webp" class="img-fluid"
                                     alt="Aluminijumska folija">
                            </div>
                            <div class="portfolio-info">
                                <h4>Aluminijumska folija</h4>
                                <p></p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <a href="/proizvodi/prijanjajuca-foilja">
                            <div class="owl-carousel portfolio-details-carousel-2">
                                <img src="/assets/img/proizvodi/prijanjajuca/prijanjajuca_folija_20m_var1.webp"
                                     class="img-fluid" alt="Prijanjajuća folija">
                                <img src="/assets/img/proizvodi/prijanjajuca/prijanjajuca_folija_20m_var2.webp"
                                     class="img-fluid" alt="Prijanjajuća folija">
                                <img src="/assets/img/proizvodi/prijanjajuca/prijanjajuca_folija_20m_var3.webp"
                                     class="img-fluid" alt="Prijanjajuća folija">
                            </div>
                            <div class="portfolio-info">
                                <h4>Prijanjajuća folija</h4>
                                <p></p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <a href="/proizvodi/papir-za-pecenje">
                            <div class="owl-carousel portfolio-details-carousel-3">
                                <img src="/assets/img/proizvodi/papir_za_pecenje/papir_za_pecenje_8m_var1.webp"
                                     class="img-fluid" alt="Papir za pecenje">
                                <img src="/assets/img/proizvodi/papir_za_pecenje/papir_za_pecenje_8m_var2.webp"
                                     class="img-fluid" alt="Papir za pecenje">
                                <img src="/assets/img/proizvodi/papir_za_pecenje/papir_za_pecenje_8m_var3.webp"
                                     class="img-fluid" alt="Papir za pecenje">
                            </div>
                            <div class="portfolio-info">
                                <h4>Papir za pečenje</h4>
                                <p></p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <a href="/proizvodi/aluminijumske-posude">
                            <div class="owl-carousel portfolio-details-carousel-4">

                                <img src="/assets/img/proizvodi/aluposude/aluminijumske_posude_var1.webp"
                                     class="img-fluid" alt="Aluminijumske posude">
                                <img src="/assets/img/proizvodi/aluposude/aluminijumske_posude_var2.webp"
                                     class="img-fluid" alt="Aluminijumske posude">
                                <img src="/assets/img/proizvodi/aluposude/aluminijumske_posude_var3.webp"
                                     class="img-fluid" alt="Aluminijumske posude">
                                <img src="/assets/img/proizvodi/aluposude/aluminijumske_posude_var4.webp"
                                     class="img-fluid" alt="Aluminijumske posude">
                            </div>
                            <div class="portfolio-info">
                                <h4>Aluminijumske posude</h4>
                                <p></p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <a href="/proizvodi/papir-u-tabacima">
                            <div class="owl-carousel portfolio-details-carousel-5">
                                <img src="/assets/img/proizvodi/tabaci/papir_1.webp" class="img-fluid"
                                     alt="papir u tabacima">
                                <img src="/assets/img/proizvodi/tabaci/papir_2.webp" class="img-fluid"
                                     alt="papir u tabacima">
                            </div>
                            <div class="portfolio-info">
                                <h4>Papir u tabacima</h4>
                                <p></p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <a href="/proizvodi/pvc-folija">
                            <div class="owl-carousel portfolio-details-carousel-6">
                                <img src="/assets/img/proizvodi/pvc/pvc_folija_var1.webp" class="img-fluid"
                                     alt="pvc folija">
                                <img src="/assets/img/proizvodi/pvc/pvc_folija_var2.webp" class="img-fluid"
                                     alt="pvc folija">
                            </div>
                            <div class="portfolio-info">
                                <h4>PVC folija</h4>
                                <p></p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-4 offset-md-2 portfolio-item">
                        <a href="/proizvodi/zica-za-sudove">
                            <div class="owl-carousel portfolio-details-carousel-7">
                                <img src="/assets/img/proizvodi/zica/zica_za_sudove_mala_alt.webp" class="img-fluid"
                                     alt="Zica za sudove">
                                <img src="/assets/img/proizvodi/zica/zica_za_sudove_velika_alt.webp" class="img-fluid"
                                     alt="Zica za sudove">
                                <img src="/assets/img/proizvodi/zica/zica_za_sudove_gratis_alt.webp" class="img-fluid"
                                     alt="Zica za sudove">
                                <img src="/assets/img/proizvodi/zica/zica_za_sudove_sve_alt.webp" class="img-fluid"
                                     alt="Zica za sudove">
                            </div>
                            <div class="portfolio-info">
                                <h4>Žica za sudove</h4>
                                <p></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">Kontakt</h3>
                    <p class="section-description"></p>
                </div>
            </div>

            <!-- Uncomment below if you wan to use dynamic maps -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.234869541755!2d20.519683815497796!3d44.79640187909881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7a745bd7ed5f%3A0xd0ae6b1b2cd77959!2z0IjQvtCy0LDQvdC60LUg0KDQsNC00LDQutC-0LLQuNGbIDI5LCDQkdC10L7Qs9GA0LDQtA!5e0!3m2!1ssr!2srs!4v1578168178457!5m2!1ssr!2srs"
                width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

            <div class="container mt-5">
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-4">

                        <div class="info">
                            <div>
                                <i class="fa fa-map-marker"></i>
                                <p>Jovanke Radaković 29b,<br>11000 Beograd, Srbija</p>
                            </div>

                            <div>
                                <i class="fa fa-envelope"></i>
                                <p>apgkristalgroup@gmail.com</p>
                            </div>

                            <div>
                                <i class="fa fa-phone"></i>
                                <p>
                                    tel/fax : 011/34-24-145 <br>
                                    direktor : 060/50-65-566 <br>
                                    office : 060/50-65-588 <br>

                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <form action="/" method="post" role="form" class="php-email-form">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="Ime i Prezime" data-rule="minlen:4"
                                           data-msg="Please enter at least 4 chars"/>
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                           data-rule="email" data-msg="Please enter a valid email"/>
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                           placeholder="Tema" data-rule="minlen:4"
                                           data-msg="Please enter at least 8 chars of subject"/>
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                                              data-msg="Poruka" placeholder="Poruka"></textarea>
                                    <div class="validate"></div>
                                </div>
                                <div class="mb-3">
                                    <div class="error-message"></div>
                                    <div class="sent-message">Vaša poruka je poslata!</div>
                                </div>
                                <div class="text-center pb-4">
                                    <button type="submit">Pošalji</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-3 com-md-4">
                        <img src="/assets/img/certifikat_en.png" class="img-fluid" alt="certifikat en">
                        {{--<img src="/assets/img/certifikat_sr.png" class="img-fluid" alt="certifikat sr">--}}
                    </div>

                </div>

            </div>

            <div class="row">
            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

@endsection
