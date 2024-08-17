<?php if(session('success')): ?>
    <p><?php echo e(session('success')); ?></p>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</head>
<body>
    <header>
        <img src="<?php echo e(asset('images/logo.jpg')); ?>" alt="Logo" class="logo">
        <nav>
            <a href="<?php echo e(route('home')); ?>">Home</a>
            <a href="<?php echo e(route('about')); ?>">About</a>
            <a href="<?php echo e(route('customers')); ?>">Customers</a>
            <a href="<?php echo e(route('services')); ?>">Services</a>
            <a href="<?php echo e(route('contact')); ?>">Contact</a>
        </nav>
    </header>

    <main class="container mt-5">
        <h1>Our Services</h1>

        <div class="services-container">
            <div class="service">
                <img src="images/s1.jpg" alt="Service 1">
                <h3>البرمجة من الصفر</h3>
                <p>نقوم بتحويل فكرتك إلى موقع إلكتروني أو تطبيق جوال مع سكريبت مبرمج من الصفر.</p>
            </div>
            <div class="service">
                <img src="images/s2.jpg" alt="Service 2">
                <h3>سكريبت الجمعيات الخيرية</h3>
                <p>سكريبت متكامل لمواقع الجمعيات الخيرية وفق ضوابط المركز السعودي للحوكمة.</p>
            </div>
            <div class="service">
                <img src="images/s3.jpg" alt="Service 3">
                <h3>برنامج قمة للنداء الآلي</h3>
                <p>هو نظام تبليغ عن الحالات الطارئة للمنشآت الصحية أو غيرها من الأماكن التي تحتاج سرعة استجابة. يتم النداء عن طريق:
                    <ul>
                        <li>السماعات الداخلية للمنشأة</li>
                        <li>الاتصال المباشر بالفريق المناوب</li>
                        <li>الرسائل النصية</li>
                    </ul>
                    مع إمكانية التعديل الكامل في شفرات نداء الطوارئ.
                </p>
            </div>
            <div class="service">
                <img src="images/s4.jpg" alt="Service 4">
                <h3>برنامج قمة لنقاط البيع</h3>
                <p>برنامج نقاط بيع لا يحتاج جهاز بمواصفات عالية ويعمل على الجوال. يشمل:
                    <ul>
                        <li>قاعدة بيانات محمية مرفوعة على الشبكة</li>
                        <li>نسخ احتياطي كل 24 ساعة</li>
                    </ul>
                </p>
            </div>
            <div class="service">
                <img src="images/s5.jpg" alt="Service 5">
                <h3>منصة بانوراما المتكاملة للأندية الرياضية</h3>
                <p>تقدم بانوراما القصيم للبرمجة منصة متكاملة لإدارة الأندية الرياضية، تشمل:
                    <ul>
                        <li>موقع إلكتروني</li>
                        <li>تطبيقين جوال للموقع (آيفون وأندرويد)</li>
                        <li>متجر إلكتروني</li>
                        <li>تطبيقين جوال للمتجر (آيفون وأندرويد)</li>
                        <li>نظام المراسلات الإلكترونية</li>
                        <li>منصة تذاكر</li>
                    </ul>
                </p>
            </div>
            <div class="service">
                <img src="images/s6.jpg" alt="Service 6">
                <h3>نظام قمة للمحاسبة</h3>
                <p>نظام متكامل لمكاتب المحاسبة يشمل:
                    <ul>
                        <li>الحسابات</li>
                        <li>القيود اليومية</li>
                        <li>ميزان المراجعة</li>
                        <li>القوائم المالية</li>
                    </ul>
                </p>
            </div>
            <div class="service">
                <img src="images/s7.jpg" alt="Service 7">
                <h3>نظام قمة للمحاماة</h3>
                <p>نظام متكامل لمكاتب المحاماة يشمل:
                    <ul>
                        <li>تقديم الدعاوي</li>
                        <li>إدارة المحامين وتوكيل القضايا لهم</li>
                        <li>خط سير لمتابعة كل قضية</li>
                    </ul>
                </p>
            </div>
            <div class="service">
                <img src="images/s8.jpg" alt="Service 8">
                <h3>منصة بانوراما لإدارة المشاريع الهندسية</h3>
                <p>تقدم بانوراما القصيم للبرمجة منصة متكاملة لإدارة المكاتب الهندسية الكبيرة، تشمل:
                    <ul>
                        <li>خط سير كامل للمشاريع الهندسية بكامل تفاصيلها</li>
                        <li>إدارة الموظفين وإجازاتهم ورواتبهم وإقاماتهم</li>
                        <li>نظام إشعارات مخصص لكل بند من البنود أعلاه</li>
                        <li>إدارة السجلات وتراخيص المحلات</li>
                        <li>إدارة الموارد البشرية</li>
                        <li>إدارة متكاملة لسيارات المكتب الهندسي</li>
                    </ul>
                </p>
            </div>
        </div>

        
    </main>

    <script src="<?php echo e(asset('js/scripts.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PrB_04\resources\views/servicesIndex.blade.php ENDPATH**/ ?>