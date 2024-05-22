<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.head')
</head>

<body>

    <main>
        <div class="container d-flex flex-lg-row flex-column justify-content-center align-items-center">
            <div
                class="col-8 position-relative d-flex overflow-hidden justify-content-center bg-gray-100 gap-4 py-4 rounded flex-column align-items-center max-w-3xl">
                <div id="carouselExampleIndicators" class="carousel slide d-lg-block d-none" data-bs-ride="carousel">
                    <div class="carousel-inner overflow-hidden h-md-96">
                        <div class="carousel-item overflow-hidden active">
                            <img src="https://i.pinimg.com/1200x/ed/cd/32/edcd32b829a5c6e614a6d6383c562742.jpg"
                                class="d-block rounded w-180 h-92 object-fit-contain border object-fit-cover"
                                alt="" />
                        </div>
                        <div class="carousel-item overflow-hidden">
                            <img src="https://i.pinimg.com/736x/72/db/6b/72db6bb11a1553d416ea79f7b0f9990d.jpg"
                                class="d-block object-fit-cover w-180 h-92 rounded border" alt="" />
                        </div>
                        <div class="carousel-item overflow-hidden">
                            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/hd/d7dfad107187879.5fa16aecd773f.jpg"
                                class="d-block object-fit-contain-cover rounded w-180 h-92 border rounded"
                                alt="" />
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide relative max-w-3xl" data-bs-ride="carousel">
                <ol class="carousel-indicators flex-column">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active w-100-rem h-30 m-0" aria-current="true" aria-label="Slide 1">
                        <img src="https://i.pinimg.com/1200x/ed/cd/32/edcd32b829a5c6e614a6d6383c562742.jpg"
                            alt="" class="border rounded" />
                    </li>
                    <li class="active w-100-rem h-30 m-0" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="1" aria-label="Slide 2">
                        <img src="https://i.pinimg.com/736x/72/db/6b/72db6bb11a1553d416ea79f7b0f9990d.jpg"
                            alt="" class="border rounded" />
                    </li>
                    <li data-bs-target="#carouselExampleIndicators" class="active w-100-rem h-30 m-0"
                        data-bs-slide-to="2" aria-label="Slide 3">
                        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/hd/d7dfad107187879.5fa16aecd773f.jpg"
                            alt="" class="border rounded" />
                    </li>
                </ol>
            </div>
        </div>
        <div class="container d-flex flex-column justify-content-center overflow-hidden py-3 bg-gray-10">
            <div class="d-flex align-items-center gap-3">
                <h3 class="fw-bolder text-gray-900 pl-6 mb-0">Sản phẩm nổi bật</h3>
                <img src="online-shop.png" class="h-16 w-16" alt="Logo" />
            </div>
            <hr class="h-px my-3 bg-gray-200" />
            <div id="hotProduct" class="carousel carousel-dark slide" data-bs-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-group justify-content-evenly">
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <strong class="fw-semibold text-gray-900 text-lg">$xx</strong>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <strong class="fw-semibold text-gray-900 text-lg">$xx</strong>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <strong class="fw-semibold text-gray-900 text-lg">$xx</strong>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-group justify-content-evenly">
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <strong class="fw-semibold text-gray-900 text-lg">$xx</strong>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <strong class="fw-semibold text-gray-900 text-lg">$xx</strong>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <strong class="fw-semibold text-gray-900 text-lg">$xx</strong>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-group justify-content-evenly">
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <strong class="fw-semibold text-gray-900 text-lg">$xx</strong>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <strong class="fw-semibold text-gray-900 text-lg">$xx</strong>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <strong class="fw-semibold text-gray-900 text-lg">$xx</strong>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev z-2 justify-content-start" type="button"
                    data-bs-target="#hotProduct" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next z-2 justify-content-end" type="button"
                    data-bs-target="#hotProduct" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <div class="container d-flex flex-column justify-content-center overflow-hidden py-3 bg-gray-10">
            <div class="d-flex align-items-center gap-3">
                <h3 class="fw-bolder text-gray-900 pl-6 mb-0">Giảm giá sốc</h3>
                <img src="best-price.png" class="h-16 w-16" alt="Logo" />
            </div>
            <hr class="h-px my-3 bg-gray-200" />
            <div id="saleProduct" class="carousel carousel-dark slide" data-bs-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-group justify-content-evenly">
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <span class="text-gray-900 text-lg"><s>20.000đ</s> <strong>
                                                    15.000đ</strong></span>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <span class="text-gray-900 text-lg"><s>20.000đ</s> <strong>
                                                    15.000đ</strong></span>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <span class="text-gray-900 text-lg"><s>20.000đ</s> <strong>
                                                    15.000đ</strong></span>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-group justify-content-evenly">
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <span class="text-gray-900 text-lg"><s>20.000đ</s> <strong>
                                                    15.000đ</strong></span>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <span class="text-gray-900 text-lg"><s>20.000đ</s> <strong>
                                                    15.000đ</strong></span>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <span class="text-gray-900 text-lg"><s>20.000đ</s> <strong>
                                                    15.000đ</strong></span>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-group justify-content-evenly">
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <span class="text-gray-900 text-lg"><s>20.000đ</s> <strong>
                                                    15.000đ</strong></span>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <span class="text-gray-900 text-lg"><s>20.000đ</s> <strong>
                                                    15.000đ</strong></span>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="px-0 col-sm-3 col-xl-4 position-relative d-flex flex-column shadow-md rounded-3 overflow-hidden shadow-lg-hover hover:-translate-y-1 transition-all duration-300 max-w-sm">
                                <a href="" class="position-absolute z-3 top-2 right-0 mt-2 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                </a>
                                <a href="product.html"
                                    class="z-2 position-absolute h-100 w-100 top-0 left-0">&nbsp;</a>
                                <div class="h-auto overflow-hidden">
                                    <div class="h-44 overflow-hidden position-relative">
                                        <img src="https://picsum.photos/400/400" alt=""
                                            class="max-w-full h-auto d-block" />
                                    </div>
                                </div>
                                <div class="bg-white py-4 px-3">
                                    <h3 class="text-xl mb-2 font-medium truncate">
                                        Tên sản phẩm
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-md text-gray-400">
                                            Giá tiền:
                                            <span class="text-gray-900 text-lg"><s>20.000đ</s> <strong>
                                                    15.000đ</strong></span>
                                        </p>
                                        <div class="position-relative z-3 d-flex align-items-center gap-2">
                                            <a href="product.html"
                                                class="text-white bg-red-700 fw-bold rounded-pill text-sm px-3 py-2 text-center me-2 mb-2 text-decoration-none">
                                                Xem thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev z-2 justify-content-start" type="button"
                    data-bs-target="#saleProduct" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next z-2 justify-content-end" type="button"
                    data-bs-target="#saleProduct" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </main>
    <footer class="bg-white">
        <div class="mx-auto w-100 container">
            <div class="row g-3 px-4 py-6 py-lg-5">
                <div class="col-6 col-md-3">
                    <h2 class="mb-6 small fw-bold text-dark text-uppercase">Company</h2>
                    <ul class="fw-bold pl-0">
                        <li class="mb-3 underline-hover">
                            <a href="" class="text-decoration-none text-muted">About</a>
                        </li>
                        <li class="mb-3 underline-hover">
                            <a href="" class="text-decoration-none text-muted">Careers</a>
                        </li>
                        <li class="mb-3 underline-hover">
                            <a href="" class="text-decoration-none text-muted">Brand Center</a>
                        </li>
                        <li class="mb-3 underline-hover">
                            <a href="" class="text-decoration-none text-muted">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <h2 class="mb-6 small fw-bold text-dark text-uppercase">
                        Help center
                    </h2>
                    <ul class="fw-bold pl-0">
                        <li class="mb-3 underline-hover">
                            <a href="" class="text-decoration-none text-muted">Twitter</a>
                        </li>
                        <li class="mb-3 underline-hover">
                            <a href="" class="text-decoration-none text-muted">Facebook</a>
                        </li>
                        <li class="mb-3 underline-hover">
                            <a href="" class="text-decoration-none text-muted">Contact Us</a>
                        </li>
                        <li class="mb-3 underline-hover">
                            <a href="" class="text-decoration-none text-muted">Discord Server</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <h2 class="mb-6 small fw-bold text-dark text-uppercase">Legal</h2>
                    <ul class="fw-bold pl-0">
                        <li class="mb-3 underline-hover">
                            <a href="" class="text-decoration-none text-muted">Privacy Policy</a>
                        </li>
                        <li class="mb-3 underline-hover">
                            <a href="" class="text-decoration-none text-muted">Licensing</a>
                        </li>
                        <li class="mb-3 underline-hover">
                            <a href="" class="text-decoration-none text-muted">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <h2 class="mb-6 small fw-bold text-dark text-uppercase">
                        Download
                    </h2>
                    <ul class="fw-bold pl-0">
                        <li class="mb-3 underline-hover">
                            <a href="" class="text-decoration-none text-muted">iOS</a>
                        </li>
                        <li class="mb-3 underline-hover">
                            <a href="" class="text-decoration-none text-muted">Careers</a>
                        </li>
                        <li class="mb-3 underline-hover">
                            <a href="" class="text-decoration-none text-muted">Windows</a>
                        </li>
                        <li class="mb-3 underline-hover">
                            <a href="" class="text-decoration-none text-muted">MacOS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="px-4 py-6 bg-body-secondary d-md-flex align-items-md-center justify-content-md-between">
                <div class="d-flex mt-4 justify-content-sm-center mt-md-0">
                    <a href="" class="text-body-tertiary space-x-5 text-decoration-none">
                        <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="" class="text-body-tertiary space-x-5 text-decoration-none">
                        <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                    </a>
                    <a href="" class="text-body-tertiary space-x-5 text-decoration-none">
                        <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="" class="text-body-tertiary space-x-5 text-decoration-none">
                        <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="" class="text-body-tertiary space-x-5 text-decoration-none">
                        <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
