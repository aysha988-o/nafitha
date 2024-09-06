<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('storage/assest/css/main.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light p-4">
        <div class="container">
            <a class="navbar-brand blue-text" href="#">نــــافــــذة</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2 " href="#">اتصل بنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#">خدماتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#">تعرف علينا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#">ابدأ الاختبار</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#">تسجيل الدخول</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner Section -->
    <section class="banner text-center py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image on the Left -->
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('storage/assest/img/pro.png') }}" alt="monitoring">
                </div>
                <!-- Text on the Right -->
                <div class="col-md-6 text-md-right">
                    <h1>
                        <span style="color: #1E255E;">نحو</span> 
                        <span style="color: #52B5E5;">مستقبل</span> 
                        <br>
                        <span style="color: #1E255E;">أكثر وضوحا</span>
                    </h1>
                    <p><strong>قم ببدأ اختبار تحديد الشغف الآن لتكتشف التخصص <br>المثالي الذي يناسب شخصيتك وطموحاتك</strong></p>
                    <a href="#" class="btn text-white px-5 blue-bg rounded-f"> أبدا الان</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Login Form Section -->
    <section class="login-section bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image on the Left -->
                <div class="col-md-6 col-lg-6 d-none d-md-block">
                    <img src="{{ asset('storage/assest/img/login.png') }}" alt="Login Image" class="img-fluid">
                </div>
                <!-- Login Form on the Right -->
                <div class="col-md-6 col-lg-6 d-flex justify-content-end">
                    <div class="login-form">
                        <h2 class="text-center">أهلا بك مجددا</h2>
                        <form>
                            <div class="form-group">
                                <label for="username">تسجيل الدخول</label>
                                <input type="text" class="form-control" id="username" placeholder="الايميل او رقم الهاتف" required>
                            </div>
                            <div class="form-group">
                                <label for="password">كلمة المرور</label>
                                <input type="password" class="form-control" id="password" placeholder="ادخل كلمة المرور" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">تسجيل الدخول</button>
                        </form>
                        <div class="text-center my-3">
                            <p>أو</p>
                            <button class="btn btn-outline-secondary btn-block">Sign in with Google</button>
                        </div>
                        <div class="text-center mt-3">
                            <p>ليس لديك حساب؟ <a href="#">انشئ حساب جديد الآن</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="chat-section">
        <div class="container">
            <div class="row h-100">
                <!-- Chat Container -->
                <div class="col-12 d-flex flex-column h-100">
                    <!-- Chat Header -->
                    <div class="chat-header d-flex align-items-center">
                        <img src="{{ asset('storage/assest/img/chat.png') }}" alt="User Icon" class="chat-icon">
                    </div>
                    
                    <!-- Chat Messages -->
                    <div class="chat-messages">
                        <div class="message">
                            <p>أنا مرشد، مساعدك الشخصي في اكتشاف<br> شغفك واختيار التخصص الأنسب لك. أنا<br> هنا لمساعدتك في معرفة ميولك وإرشادك<br> نحو مستقبلك المهني. دعنا نبدأ الاختبار<br> لتحديد اهتماماتك وشغفك الحقيقي. <br>هل أنت مستعد؟</p>
                            <a href="#" class="btn green">ابدأ الاختبار الآن</a>
                        </div>
                    </div>
                
                    <!-- Chat Input -->
                    <div class="chat-input">
                        <input type="text" class="form-control" placeholder="Type a reply...">
                        <button class="btn">
                            <i class="gray fa-regular fa-paper-plane"></i>
                        </button>
                        <button class="btn">
                            <i class="gray fa-solid fa-upload"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cards Section -->
    <div class="container py-5">
        <div class="row">
            <!-- Repeat card sections as needed -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-unstyled">
                        <li><a href="#">Footer Link</a></li>
                        <li><a href="#">Footer Link</a></li>
                        <li><a href="#">Footer Link</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-unstyled">
                        <li><a href="#">Footer Link</a></li>
                        <li><a href="#">Footer Link</a></li>
                        <li><a href="#">Footer Link</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-unstyled">
                        <li><a href="#">Footer Link</a></li>
                        <li><a href="#">Footer Link</a></li>
                        <li><a href="#">Footer Link</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
