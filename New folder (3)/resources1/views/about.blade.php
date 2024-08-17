<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
    <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="logo">
    <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('customers') }}">Customers</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <main class="container mt-5">
        <h1>About Us</h1>
        <section>
            <img src="images/pic03.jpg" alt="About Us" class="about-us-img">
            <h2>من نحن</h2>
            <p>إيمانًا منا بأهمية البرمجة و العالم الرقمي في حياتنا كنا نحن بانوراما القصيم، من الرواد في هذه المجالات التي تسعى للارتقاء بمجال التصميم والبرمجة لتكون من كبرى الصروح بالمملكة والشرق الأوسط في تصميم وبرمجة المواقع وتطبيقات الجوال والبرامج الإدارية والمحاسبية.</p>
            <p>نهدف دائمًا لإرضاء كافة العملاء لدينا من خلال تقديم مجموعة من الخدمات المميزة. نسعى لخلق وتنمية جسور التعاون والشراكة وتبادل الخبرات بين المبرمجين في مختلف تخصصاتهم، ونستهدف إعداد برامج متميزة تلبي الاحتياجات الحقيقية للمجتمع وسوق العمل مع تطويرها المستمر. ندرب المبرمجين حديثي التخرج لنرتقي بـالمستويات المهارية في جميع مجالات البرمجة من الأنشطة الأساسية لخدمة المجتمع المدني.</p>
            <p>رسالتنا هي خلق مجتمع واعِ فكريًا و متطور علميًا، قادرًا على مواكبة العالم الرقمي بأسهل الطرق وأبسطها.</p>
        </section>

    </main>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
