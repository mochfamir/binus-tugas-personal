<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script type="text/javascript" src="https://unpkg.com/dangerous-html@0.1.11/dist/default/lib.umd.js"></script>

    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        .home-featured {
            width: 100%;
            display: flex;
            max-width: 1280px;
            align-items: center;
            /* padding: 0px 24px; */
            flex-direction: column;
        }

        .heading {
            color: #151515;
            font-size: 60px;
            font-style: normal;
            font-weight: 500;
            line-height: 54px;
            text-transform: uppercase;
            margin: 20px 0px 10px 20px;
        }

        .work-work {
            gap: 140px;
            width: 100%;
            display: flex;
            position: relative;
            align-items: flex-start;
            padding-top: var(--dl-space-space-twounits);
            border-color: #151515;
            padding-left: var(--dl-space-space-fiveunits);
            flex-direction: row;
            padding-bottom: var(--dl-space-space-twounits);
            border-bottom-width: 1px;
        }

        .work-image {
            width: 417px;
            height: 520px;
            object-fit: cover;
        }

        .work-details {
            flex: 1;
            height: 520px;
            display: flex;
            align-items: flex-start;
            padding-top: 20px;
            flex-direction: column;
            padding-bottom: 20px;
            justify-content: space-between;
        }

        .work-header {
            gap: 20px;
            width: 100%;
            display: flex;
            align-items: flex-start;
            flex-direction: column;
        }

        .work-heading {
            width: 100%;
            display: flex;
            align-items: flex-start;
            flex-direction: row;
            justify-content: space-between;
        }

        .work-text {
            color: rgb(21, 21, 21);
            font-size: 40px;
            font-style: normal;
            font-weight: 500;
            line-height: 36px;
            text-transform: uppercase;
        }

        .work-sub {
            color: rgb(21, 21, 21);
            font-size: 24px;
            line-height: 36px;
        }

        .home-speakers {
            display: flex;
            padding-top: var(--dl-space-space-fiveunits);
            flex-direction: column;
        }

        .home-max-width2 {
            flex-direction: column;
        }

        .home-heading-container {
            flex: 0 0 auto;
            display: flex;
            align-items: center;
            margin-bottom: var(--dl-space-space-fourunits);
            flex-direction: column;
        }

        .home-text11 {
            color: var(--dl-color-scheme-darkgray);
            font-style: normal;
            text-align: center;
            font-weight: 500;
        }

        .home-text12 {
            text-align: center;
        }

        .home-text14 {
            text-align: center;
        }

        .home-speakers-container {
            width: 100%;
            display: grid;
            grid-row-gap: var(--dl-space-space-fourunits);
            grid-column-gap: 30px;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            margin-bottom: 20px;
        }

        .speaker-card-speaker-card {
            display: flex;
            position: relative;
            align-items: flex-start;
            flex-direction: column;
        }

        .speaker-card-image-container {
            width: 100%;
            height: 100%;
            display: flex;
            position: relative;
            min-height: 255px;
            align-items: flex-end;
            margin-bottom: var(--dl-space-space-unit);
            flex-direction: column;
            justify-content: flex-end;
        }

        .speaker-card-image {
            left: 0px;
            width: 100%;
            bottom: 0px;
            filter: grayscale();
            height: 100%;
            position: absolute;
            object-fit: cover;
        }

        .speaker-card-read-more-container {
            flex: 1;
            width: 100%;
            cursor: pointer;
            display: flex;
            opacity: 0;
            z-index: 1;
            transition: 0.3s;
            align-items: flex-end;
            padding-right: 20px;
            flex-direction: row;
            padding-bottom: 18px;
            justify-content: flex-end;
            background-color: rgba(251, 39, 90, 0.6);
        }

        .speaker-card-read-more-container:hover {
            opacity: 1;
        }

        .speaker-card-hint {
            color: var(--dl-color-scheme-white);
            font-style: normal;
            font-weight: 600;
            line-height: 1.3;
            margin-right: 11px;
        }

        .speaker-card-icon {
            fill: var(--dl-color-scheme-white);
            width: 21px;
            height: 21px;
        }

        .speaker-card-first-name {
            font-size: 30px;
            font-style: normal;
            font-weight: 700;
            line-height: 1.1;
        }

        .speaker-card-last-name {
            color: var(--dl-color-scheme-lightblue);
            font-size: 30px;
            font-style: normal;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: var(--dl-space-space-halfunit);
        }

        .speaker-card-text {
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
        }

        .home-pricing {
            width: 100%;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            background-color: #f6f5ed;
        }

        .home-centered-container {
            width: 100%;
            display: flex;
            max-width: 1200px;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        .home-heading {
            width: 100%;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .home-text {
            color: black;
            text-align: center;
            font-size: 35px;
            font-weight: bold;
        }

        .home-text01 {
            font-size: 30px;
            font-weight: bold;
            color: gray;
            width: 600px;
            text-align: center;
            margin-bottom: 20px;
        }

        .home-cards {
            width: 100%;
            display: grid;
            grid-gap: 20px;
            margin-top: 20px;
            align-items: flex-start;
            flex-direction: row;
            justify-content: center;
            grid-template-columns: 1fr 1fr 1fr;
        }

        .home-card {
            flex: 1;
            display: flex;
            position: relative;
            align-items: flex-start;
            border-radius: 50px;
            flex-direction: column;
            justify-content: flex-start;
            background-color: #ffffff;
            padding: 60px 40px;
            margin: 0px 10px 40px 10px;
        }

        .home-text02 {
            font-size: 32px;
            font-style: normal;
            font-weight: 700;
            margin-bottom: 10px
        }

        .home-text03 {
            color: rgb(0, 0, 0);
            line-height: 24px;
            margin-bottom: 5px
        }

        .home-get-started {
            transition: 0.3s;
        }

        .home-text07 {
            font-size: 18px;
            font-style: normal;
            text-align: center;
            font-weight: 600;
        }

        .home-text10 {
            font-size: 15px;
            font-style: normal;
            font-weight: 600;
            line-height: 27px;
            margin-bottom: var(--dl-space-space-oneandhalfunits);
        }

        .home-bullet-points {
            display: flex;
            align-items: flex-start;
            flex-direction: column;
        }

        .home-point {
            display: flex;
            align-items: center;
            margin-bottom: var(--dl-space-space-halfunit);
            flex-direction: row;
        }

        .home-icon {
            fill: #5228F5;
            width: 8px;
            height: 8px;
        }

        .home-text11 {
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            margin-left: var(--dl-space-space-halfunit);
        }

        .footer {
            text-align: center;
            width: 100%;
            margin-top: 30px;
            margin-bottom: 40px;
            display: flex;
        }
        
        .footer-image {
            /* height: 100; */
            width: 300px;
            background-image: url("https://images.unsplash.com/photo-1502767882403-636aee14f873?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80");
        }

        .footer-title {
            text-align: center;
            font-size: 30px;
            font-weight: 800;
            margin: 20px 0px;
        }

        .footer-address {
            padding: 20px 50px;
        }
    </style>
</head>

<body>
    <div>
        <div class="home-container">
            <x-header />
            <div class="home-featured">
                <h2 class="heading">Daftar Mobil</h2>
                <div class="home-list">
                    @foreach ($cars as $car)
                        <div class="work-work">
                            <img id={{ $car->model_name }} alt="image" src={{ $car->image_url }}
                                class="work-image" />
                            <div class="work-details">
                                <div class="work-header">
                                    <div class="work-heading">
                                        <span class="work-text"><span>{{ $car->model_name }}</span></span>
                                    </div>
                                    <span class="work-sub">
                                        <table>
                                            <tr>
                                                <td>Transmisi</td>
                                                <td>:</td>
                                                <td>
                                                    {{ $car->transmission }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tahun Produksi</td>
                                                <td>:</td>
                                                <td>
                                                    {{ $car->production_year }}
                                                </td>
                                            </tr>
                                        </table>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="home-speakers section-container">
                <div class="home-max-width2 max-content-container">
                    <div class="home-heading-container">
                        <h1 class="home-text12 Heading2">
                            <span>Daftar Trainer</span>
                            <span class="home-text14"></span>
                        </h1>
                    </div>
                    <div class="home-speakers-container">
                        @foreach ($trainers as $trainer)
                            <div id={{ $trainer->id }} class="speaker-card-speaker-card">
                                <div class="speaker-card-image-container">
                                    <img alt="image" src={{ $trainer->image_url }} class="speaker-card-image" />
                                    <div class="speaker-card-read-more-container">
                                        <span class="speaker-card-hint">read more</span>
                                        <svg viewBox="0 0 1024 1024" class="speaker-card-icon">
                                            <path
                                                d="M621.254 877.254l320-320c24.994-24.992 24.994-65.516 0-90.51l-320-320c-24.994-24.992-65.516-24.992-90.51 0-24.994 24.994-24.994 65.516 0 90.51l210.746 210.746h-613.49c-35.346 0-64 28.654-64 64s28.654 64 64 64h613.49l-210.746 210.746c-12.496 12.496-18.744 28.876-18.744 45.254s6.248 32.758 18.744 45.254c24.994 24.994 65.516 24.994 90.51 0z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <span class="speaker-card-first-name"><span>{{ $trainer->first_name }}</span></span>
                                <span class="speaker-card-last-name"><span>{{ $trainer->last_name }}</span></span>
                                <span class="speaker-card-text">
                                    <span>Pengalaman {{ $trainer->experience }} tahun</span>
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <section class="home-pricing">
                <div class="home-centered-container">
                    <div class="home-heading">
                        <span class="home-text title">
                            Daftar Jadwal dan Program
                        </span>
                        <span class="home-text01">
                            Program 2 Bulan
                        </span>
                    </div>
                    <div class="home-cards">
                        <div class="home-card">
                            <span class="home-text02">Senin, Kamis, Jum'at</span>
                            <span class="home-text03">
                                <span>Rp. 1.000.000/bulan</span>
                            </span>
                            <span class="home-text10">Termasuk:</span>
                            <div class="home-bullet-points">
                                <div class="home-point">
                                    <svg viewBox="0 0 877.7142857142857 1024" class="home-icon">
                                        <path
                                            d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z">
                                        </path>
                                    </svg>
                                    <span class="home-text11">3 jam/pertemuan</span>
                                </div>
                                <div class="home-point">
                                    <svg viewBox="0 0 877.7142857142857 1024" class="home-icon">
                                        <path
                                            d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z">
                                        </path>
                                    </svg>
                                    <span class="home-text11">4x reschedule/bulan</span>
                                </div>
                            </div>
                        </div>

                        <div class="home-card">
                            <span class="home-text02">Selasa, Rabu, Jum'at</span>
                            <span class="home-text03">
                                <span>Rp. 1.000.000/bulan</span>
                            </span>
                            <span class="home-text10">Termasuk:</span>
                            <div class="home-bullet-points">
                                <div class="home-point">
                                    <svg viewBox="0 0 877.7142857142857 1024" class="home-icon">
                                        <path
                                            d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z">
                                        </path>
                                    </svg>
                                    <span class="home-text11">3 jam/pertemuan</span>
                                </div>
                                <div class="home-point">
                                    <svg viewBox="0 0 877.7142857142857 1024" class="home-icon">
                                        <path
                                            d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z">
                                        </path>
                                    </svg>
                                    <span class="home-text11">4x reschedule/bulan</span>
                                </div>
                            </div>
                        </div>

                        <div class="home-card">
                            <span class="home-text02">Flexible</span>
                            <span class="home-text03">
                                <span>Rp. 2.000.000/bulan</span>
                            </span>
                            <span class="home-text10">Termasuk:</span>
                            <div class="home-bullet-points">
                                <div class="home-point">
                                    <svg viewBox="0 0 877.7142857142857 1024" class="home-icon">
                                        <path
                                            d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z">
                                        </path>
                                    </svg>
                                    <span class="home-text11">3 jam/pertemuan</span>
                                </div>
                                <div class="home-point">
                                    <svg viewBox="0 0 877.7142857142857 1024" class="home-icon">
                                        <path
                                            d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z">
                                        </path>
                                    </svg>
                                    <span class="home-text11">Bebas memilih hari</span>
                                </div>
                                <div class="home-point">
                                    <svg viewBox="0 0 877.7142857142857 1024" class="home-icon">
                                        <path
                                            d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z">
                                        </path>
                                    </svg>
                                    <span class="home-text11">14 pertemuan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-centered-container">
                    <div class="home-heading">
                        <span class="home-text01">
                            Program 4 Bulan
                        </span>
                    </div>
                    <div class="home-cards">
                        <div class="home-card">
                            <span class="home-text02">Senin, Jum'at</span>
                            <span class="home-text03">
                                <span>Rp. 1.800.000/bulan</span>
                            </span>
                            <span class="home-text10">Termasuk:</span>
                            <div class="home-bullet-points">
                                <div class="home-point">
                                    <svg viewBox="0 0 877.7142857142857 1024" class="home-icon">
                                        <path
                                            d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z">
                                        </path>
                                    </svg>
                                    <span class="home-text11">3 jam/pertemuan</span>
                                </div>
                                <div class="home-point">
                                    <svg viewBox="0 0 877.7142857142857 1024" class="home-icon">
                                        <path
                                            d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z">
                                        </path>
                                    </svg>
                                    <span class="home-text11">5x reschedule/bulan</span>
                                </div>
                            </div>
                        </div>

                        <div class="home-card">
                            <span class="home-text02">Selasa, Jum'at</span>
                            <span class="home-text03">
                                <span>Rp. 1.800.000/bulan</span>
                            </span>
                            <span class="home-text10">Termasuk:</span>
                            <div class="home-bullet-points">
                                <div class="home-point">
                                    <svg viewBox="0 0 877.7142857142857 1024" class="home-icon">
                                        <path
                                            d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z">
                                        </path>
                                    </svg>
                                    <span class="home-text11">3 jam/pertemuan</span>
                                </div>
                                <div class="home-point">
                                    <svg viewBox="0 0 877.7142857142857 1024" class="home-icon">
                                        <path
                                            d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z">
                                        </path>
                                    </svg>
                                    <span class="home-text11">5x reschedule/bulan</span>
                                </div>
                            </div>
                        </div>

                        <div class="home-card">
                            <span class="home-text02">Flexible</span>
                            <span class="home-text03">
                                <span>Rp. 3.000.000/bulan</span>
                            </span>
                            <span class="home-text10">Termasuk:</span>
                            <div class="home-bullet-points">
                                <div class="home-point">
                                    <svg viewBox="0 0 877.7142857142857 1024" class="home-icon">
                                        <path
                                            d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z">
                                        </path>
                                    </svg>
                                    <span class="home-text11">3 jam/pertemuan</span>
                                </div>
                                <div class="home-point">
                                    <svg viewBox="0 0 877.7142857142857 1024" class="home-icon">
                                        <path
                                            d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z">
                                        </path>
                                    </svg>
                                    <span class="home-text11">Bebas memilih hari</span>
                                </div>
                                <div class="home-point">
                                    <svg viewBox="0 0 877.7142857142857 1024" class="home-icon">
                                        <path
                                            d="M877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857 438.857 196.571 438.857 438.857z">
                                        </path>
                                    </svg>
                                    <span class="home-text11">28 pertemuan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="footer">
                <div>
                    <div>
                        <span class="footer-title">Kursus Mengemudi Binus</span>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.468502459576!2d106.78006601406337!3d-6.201758495510386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6dcc7d2c4ad%3A0x209cb1eef39be168!2sBINUS%20University%2C%20Anggrek%20Campus!5e0!3m2!1sen!2sid!4v1678554557044!5m2!1sen!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="footer-address">
                        Jl. Raya Kb. Jeruk No.27, RT.1/RW.9, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus
                        Ibukota Jakarta 11530
                    </div>
                    <div>
                        08041696969
                    </div>
                </div>
                <div class="footer-image"></div>
            </section>
        </div>
    </div>
</body>

</html>
