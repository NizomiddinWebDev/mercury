<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-white">
    <header class="bg-white items-center justify-between w-full">
        <div class="border-b border-blue-200">
            <div class="flex justify-between mx-auto max-w-7xl w-1230 h-10 items-center">
                <div class="flex gap-5">
                    <div class="flex gap-5">
                        <img src="/images/call.png" alt="call rasmi" class="h-5 relative top-0.5 left-1">
                        998 90 821 2776
                    </div>
                    <div class="flex gap-5">
                        <div class="">
                            <img src="/images/mail-01.png" alt="sms rasmi" class="h-5 relative top-0.5 left-2">
                        </div>
                        <h1 class="relative left-2">email: help@mercuryedu.uz</h1>
                    </div>
                </div>
                <div class="text-blue-600 font-semibold">
                    Бизнес студентам
                </div>
            </div>
        </div>
        <!-- Menu -->
        <div class="py-4 shadow shadow-blue-100">
            <div class="flex justify-between mx-auto max-w-7xl place-items-center">
                <div>
                    <img src="{{ asset('/images/logo.png') }}" alt="" class="h-10">
                </div>
                <ul class="flex place-items-center space-x-4 font-medium">
                    <li>О нас</li>
                    <li>Тарифы</li>
                    <li>Партнеры</li>
                    <li>Контакты</li>
                    <select name="" id="">
                        <option value="">
                            <li>Ру</li>
                        </option>
                        <option value="">
                            <li>Uzb</li>
                        </option>
                        <option value="">
                            <li>Eng</li>
                        </option>
                    </select>
                    <li>
                        <img src="{{ asset('/images/user-circle.png') }}" alt="">
                    </li>
                    <li>
                        Mansur</br>Usmanov
                    </li>
                </ul>
            </div>
        </div>
    </header>


    <!-- Banner -->
    <div class="bg-gradient-to-r from-violet-500 to-blue-600">
        <div class="flex max-w-7xl mx-auto place-items-center">
            <div class="flex-row grid gap-16 mt-8 py-18">
                <div>
                    <ul
                        class="flex place-items-center text-base font-normal leading-6 tracking-normal text-white space-x-2">
                        <li>Курсы</li>
                        <li>
                            <img src="{{ asset('/images/arrow-right-01-sharp.png') }}" alt="">
                        </li>
                        <li>
                            Трейдинг
                        </li>
                        <li>
                            <img src="{{ asset('/images/arrow-right-01-sharp.png') }}" alt="">
                        </li>
                        <li>Оффлайн курс</li>
                    </ul>
                </div>
                <div class="space-y-4 my-8 mb-10">
                    <div class="font-semibold text-5xl leading-20 tracking-normal text-white text-left">
                        Оффлайн курс по трейдингу
                    </div>
                    <div class="text-base font-normal leading-6 tracking-normal text-white">
                        Обучающая программа, предназначенная для того, чтобы научить людей,</br>как успешно торговать на
                        финансовых рынках.
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </div>

    <!--Features-->
    <div class="flex-row max-w-7xl mx-auto mt-12">
       <div class="flex gap-10">
            <div class="flex-row w-3/4">
                <div class="text-2xl font-medium leading-11 tracking-normal text-left  ">Описание</div>
                <div class="mt-12">Обучающая программа, которая помогает людям научиться торговать на финансовых рынках. Он включает в себя
                    изучение основ рынка, анализа цен, фундаментальных факторов, управления рисками, и психологии трейдинга.
                    Курсы могут быть доступны в разных форматах и помогают студентам развивать навыки для успешной торговли.
                    Следует помнить, что трейдинг связан с финансовыми рисками, и успешный трейдер должен обладать хорошей
                    подготовкой, дисциплиной и умением адаптироваться к изменяющимся рыночным условиям.</div>
                <div class="flex-row ">
                    <div class="flex items-center text-blue-600 font-semibold mt-4">
                        <button>Развернуть</button>
                        <div class="mt-1 mx-2"><img src="{{asset("/images/arrow-down-01-sharp.png")}}" alt=""></div>
                    </div>

                </div>
            </div>
            <div class="rounded-2xl w-1/4 p-10  shadow-xl shadow-gray-200">
                <div>
                    <div class="flex-row space-y-5">
                        <div class="text-lg font-semibold leading-7 tracking-normal text-left">Курс содержит:</div>
                        <ul class="flex-row space-y-4 text-base font-normal leading-6 tracking-normal">
                            <li class="flex gap-4 mt-4">
                                <div>
                                    <img src="{{asset("/images/students/card/elements-1.png")}}" alt="ima">
                                </div>
                                66,5 ч видеоуроков
                            </li>
                            <li class="flex gap-4">
                                <div>
                                    <img src="{{asset("/images/students/card/notebook-01.png")}}" alt="ima">
                                </div>
                                50 домашних заданий
                            </li>
                            <li class="flex gap-4">
                                <div>
                                    <img src="{{asset("/images/students/card/note.png")}}" alt="ima">
                                </div>
                                10 допольнительных уроков
                            </li>
                            <li class="flex gap-4">
                                <div>
                                    <img src="{{asset("/images/students/card/text-firstline-right.png")}}" alt="ima">
                                </div>
                                5 тестов для закрепления
                            </li>
                        </ul>
                        <hr>
                    </div>
                </div>
                <div>

                </div>
            </div>
       </div>
    </div>




    <!--Card-->
    <div class="flex-row max-w-7xl mx-auto  mt-20">
        <div class="text-center font-bold text-3xl">Наши популярные
            <span class="text-blue-700">курсы</span>
        </div>
        <div class="flex ">
            <div class="">
                <div
                    class="text-center font-semibold text-sm relative top-14 left-80  border rounded-full  border-blue-600 px-10 py-1">
                    <ul class="flex place-items-center space-x-4 font-medium text-blue-700 font-medium ">
                        <li
                            class="flex items-center rounded-full w-24 h-12 text-center bg-blue-700 text-white relative right-9">
                            <span class="relative left-9">Все</span>
                        </li>
                        <li>Трейдинг</li>
                        <li>Дизайн</li>
                        <li>Программирование</li>
                        <li>Кулинария</li>
                        <li>Языки</li>
                        <li>Безопастность</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex  max-w-7xl mx-auto gap-4 mt-32">
            <div class="rounded-2xl  p-8 shadow-xl shadow-gray-200">
                <div>
                    <img src="{{ asset('/images/Rectangle20.png') }}" alt="">
                </div>
                <div class="flex justify-between items-center mt-6">
                    <div class="flex items-center gap-2 text-base font-medium ">
                        <img src="{{ asset('/images/image-2.png') }}" alt="rasm">
                        Uranus Invest
                    </div>
                    <div class="text-2xl font-medium text-blue-600"> $100</div>
                </div>
                <div class="mt-6">
                    <h2 class="text-2xl font-medium ">Курс по трейдингу от трейдеров мирового уровня</h2>
                    <div class="flex gap-2 mt-6 text-gray-500">
                        <span class="rounded-full bg-gray-600 w-1 h-1 relative top-3"></span>
                        <span>Трейдинг</span>
                        <img src="{{ asset('/images/line-1.png') }}" alt="rasm">
                        <img src="{{ asset('/images/play-circle.png') }}" alt="rasm">
                        <span>
                            60 видео
                        </span>
                        <img src="{{ asset('/images/user-group.png') }}" alt="">
                        <span>500+ учащихся</span>
                    </div>
                </div>
                <div class="flex gap-2 justify-between mt-8">
                    <div class="flex gap-2 text-gray-500">
                        <div class="flex mt-1">
                            <div>
                                <img src="{{ asset('/images/star.png') }}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('/images/star.png') }}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('/images/star.png') }}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('/images/star.png') }}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('/images/star.png') }}" alt="">
                            </div>
                        </div>

                        <div>5,0 (80)</div>
                    </div>

                    <div class="text-blue-600 font-semibold">Подробнее</div>
                </div>
            </div>
            <div class="rounded-2xl  p-8 shadow-xl shadow-gray-200">
                <div>
                    <img src="{{ asset('/images/Rectangle20.png') }}" alt="">
                </div>
                <div class="flex justify-between items-center mt-6">
                    <div class="flex items-center gap-2 text-base font-medium ">
                        <img src="{{ asset('/images/image-2.png') }}" alt="rasm">
                        Uranus Invest
                    </div>
                    <div class="text-2xl font-medium text-blue-600"> $100</div>
                </div>
                <div class="mt-6">
                    <h2 class="text-2xl font-medium ">Курс по трейдингу от трейдеров мирового уровня</h2>
                    <div class="flex gap-2 mt-6 text-gray-500">
                        <span class="rounded-full bg-gray-600 w-1 h-1 relative top-3"></span>
                        <span>Трейдинг</span>
                        <img src="{{ asset('/images/line-1.png') }}" alt="rasm">
                        <img src="{{ asset('/images/play-circle.png') }}" alt="rasm">
                        <span>
                            60 видео
                        </span>
                        <img src="{{ asset('/images/user-group.png') }}" alt="">
                        <span>500+ учащихся</span>
                    </div>
                </div>
                <div class="flex gap-2 justify-between mt-8">
                    <div class="flex gap-2 text-gray-500">
                        <div class="flex mt-1">
                            <div>
                                <img src="{{ asset('/images/star.png') }}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('/images/star.png') }}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('/images/star.png') }}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('/images/star.png') }}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('/images/star.png') }}" alt="">
                            </div>
                        </div>

                        <div>5,0 (80)</div>
                    </div>

                    <div class="text-blue-600 font-semibold">Подробнее</div>
                </div>
            </div>
            <div class="rounded-2xl  p-8 shadow-xl shadow-gray-200">
                <div>
                    <img src="{{ asset('/images/Rectangle20.png') }}" alt="">
                </div>
                <div class="flex justify-between items-center mt-6">
                    <div class="flex items-center gap-2 text-base font-medium ">
                        <img src="{{ asset('/images/image-2.png') }}" alt="rasm">
                        Uranus Invest
                    </div>
                    <div class="text-2xl font-medium text-blue-600"> $100</div>
                </div>
                <div class="mt-6">
                    <h2 class="text-2xl font-medium ">Курс по трейдингу от трейдеров мирового уровня</h2>
                    <div class="flex gap-2 mt-6 text-gray-500">
                        <span class="rounded-full bg-gray-600 w-1 h-1 relative top-3"></span>
                        <span>Трейдинг</span>
                        <img src="{{ asset('/images/line-1.png') }}" alt="rasm">
                        <img src="{{ asset('/images/play-circle.png') }}" alt="rasm">
                        <span>
                            60 видео
                        </span>
                        <img src="{{ asset('/images/user-group.png') }}" alt="">
                        <span>500+ учащихся</span>
                    </div>
                </div>
                <div class="flex gap-2 justify-between mt-8 justify-center">
                    <div class="flex gap-2 text-gray-500">
                        <div class="flex mt-1">
                            <div>
                                <img src="{{ asset('/images/star.png') }}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('/images/star.png') }}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('/images/star.png') }}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('/images/star.png') }}" alt="">
                            </div>
                            <div>
                                <img src="{{ asset('/images/star.png') }}" alt="">
                            </div>
                        </div>
                        <div>5,0 (80)</div>
                    </div>

                    <div class="text-blue-600 font-semibold">Подробнее</div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button
                class="mt-8 py-4 px-8 w-60  rounded-full text-base font-semibold  gap-10 bg-blue-600 text-white">Все
                курсы</button>
        </div>
    </div>






    <!-- Brands -->
    <div class="max-w-7xl mx-auto mt-8">
        <div class="text-center text-2xl font-bold tracking-normal mb-5">Мы сотрудничаем с ведущими <span
                class="text-blue-700">компаниями</span></div>
        <div class="flex space-x-5">
            <!-- justify text center vertiacaly -->
            <div class="w-64 h-24 border border-dashed ">
                <img src="{{ asset('/images/group-1.png') }}" alt="">
            </div>
            <div class="w-64 h-24 border border-dashed ">
                <img src="{{ asset('/images/group-2.png') }}" alt="">
            </div>
            <div class="w-64 h-24 border border-dashed ">
                <img src="{{ asset('/images/group-3.png') }}" alt="">
            </div>
            <div class="w-64 h-24 border border-dashed ">
                <img src="{{ asset('/images/group-4.png') }}" alt="">
            </div>
            <div class="w-64 h-24 border border-dashed ">
                <img src="{{ asset('/images/group-5.png') }}" alt="">
            </div>
            <div class="w-64 h-24 border border-dashed ">
                <img src="{{ asset('/images/group-1.png') }}" alt="">
            </div>
        </div>
    </div>

    <!-- students -->
    <div class="mt-8 bg-purple-100 mb-16">
        <div class="flex max-w-7xl mx-auto  justify-between items-center">
            <div class="mt-16">
                <div class="flex">
                    <div>
                        <img src="{{ asset('/images/students/ellipce1.png') }}" alt="image">
                    </div>
                    <div class="my-16">
                        <img src="{{ asset('/images/students/student-1.png') }}" alt="image">
                    </div>
                </div>
                <div class="flex ">
                    <div class="my-12">
                        <img src="{{ asset('/images/students/student-2.png') }}" alt="image">
                    </div>
                    <div class="">
                        <img src="{{ asset('/images/students/student-3.png') }}" alt="image">
                    </div>
                </div>
            </div>
            <div class="flex-row items-center justify-between w-1/2 p-16">
                <div class="text-4xl font-semibold tracking-normal text-center mb-4">Более 25 тысяч студентов в одной
                    платформе</div>
                <div class="text-base font-normal leading-6 tracking-normal text-center">Онлайн-образовательная
                    платформа, которая содержит в себе все необходимые курсы для вашего развития</div>
                <button
                    class="mt-8 py-4 px-8 mx-32 w-60 items-center   rounded-full text-base font-semibold bg-white">Присоединиться</button>
            </div>
            <div class="mt-16">
                <div class="flex">
                    <div>
                        <img src="{{ asset('/images/students/ellipce1.png') }}" alt="image">
                    </div>
                    <div class="my-16">
                        <img src="{{ asset('/images/students/student-1.png') }}" alt="image">
                    </div>
                </div>
                <div class="flex ">
                    <div class="my-12">
                        <img src="{{ asset('/images/students/student-2.png') }}" alt="image">
                    </div>
                    <div class="">
                        <img src="{{ asset('/images/students/student-3.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feedbacks -->
    <div class="max-w-7xl mx-auto">
        <div class="text-center text-2xl font-bold tracking-normal mb-5">Мнения клиентов <span class="text-blue-700">о
                нас</span></div>
        <div class="flex space-x-4">
            <div class="rounded-xl shadow-xl shadow-gray-100 py-12 px-6">
                <div class="flex items-center space-x-2">
                    <div class="bg-gray-100 w-16 h-16 rounded-full"></div>
                    <div>
                        <h2 class="font-semibold text-base font-medium leading-6 tracking-normal">Charles Patterson
                        </h2>
                        <div class="text-gray-600">CEO, Mercury Edu</div>
                    </div>
                    <span class="relative left-32">
                        <svg width="32" height="26" viewBox="0 0 32 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M32 3.61111C29.0768 4.09259 26.931 5.29629 25.5627 7.22222C24.1944 9.08796 23.448 11.4051 23.3236 14.1736C23.6346 14.0532 23.9456 13.963 24.2566 13.9028C24.6297 13.7824 25.034 13.7222 25.4694 13.7222C27.2731 13.7222 28.6725 14.294 29.6676 15.4375C30.725 16.581 31.2536 18.0255 31.2536 19.7708C31.2536 21.5764 30.6939 23.081 29.5743 24.2847C28.4548 25.4282 26.8999 26 24.9096 26C23.0437 26 21.4888 25.338 20.2449 24.0139C19.001 22.6898 18.379 20.7338 18.379 18.1458C18.379 13.9931 18.9388 10.6227 20.0583 8.03472C21.1778 5.44675 22.7638 3.52083 24.8163 2.25694C26.8688 0.932867 29.2634 0.180553 32 0V3.61111ZM13.7143 3.61111C10.7911 4.09259 8.64529 5.29629 7.27697 7.22222C5.90865 9.08796 5.16229 11.4051 5.0379 14.1736C5.28669 14.0532 5.56657 13.963 5.87755 13.9028C6.25073 13.7824 6.655 13.7222 7.09038 13.7222C8.89407 13.7222 10.3246 14.294 11.3819 15.4375C12.4393 16.581 12.9679 18.0255 12.9679 19.7708C12.9679 21.5764 12.3771 23.081 11.1953 24.2847C10.0758 25.4282 8.55199 26 6.62391 26C4.69582 26 3.10982 25.338 1.86589 24.0139C0.621963 22.6898 0 20.7338 0 18.1458C0 13.9931 0.559767 10.6227 1.6793 8.03472C2.79883 5.44675 4.38484 3.52083 6.43732 2.25694C8.4898 0.932867 10.9155 0.180553 13.7143 0V3.61111Z"
                                fill="black" />
                        </svg>
                    </span>
                </div>
                <div class="text-sm text-gray-600 mt-6">Платформа проста и удобна в использовании. Отличные
                    возможности, интуитивный интерфейс. Очень доволен!</div>
            </div>
            <div class="rounded-xl shadow-xl shadow-gray-100 py-12 px-6">
                <div class="flex items-center space-x-2">
                    <div class="bg-gray-100 w-16 h-16 rounded-full"></div>
                    <div>
                        <h2 class="font-semibold text-base font-medium leading-6 tracking-normal">Charles Patterson
                        </h2>
                        <div class="text-gray-600">CEO, Mercury Edu</div>
                    </div>
                    <span class="relative left-32">
                        <svg width="32" height="26" viewBox="0 0 32 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M32 3.61111C29.0768 4.09259 26.931 5.29629 25.5627 7.22222C24.1944 9.08796 23.448 11.4051 23.3236 14.1736C23.6346 14.0532 23.9456 13.963 24.2566 13.9028C24.6297 13.7824 25.034 13.7222 25.4694 13.7222C27.2731 13.7222 28.6725 14.294 29.6676 15.4375C30.725 16.581 31.2536 18.0255 31.2536 19.7708C31.2536 21.5764 30.6939 23.081 29.5743 24.2847C28.4548 25.4282 26.8999 26 24.9096 26C23.0437 26 21.4888 25.338 20.2449 24.0139C19.001 22.6898 18.379 20.7338 18.379 18.1458C18.379 13.9931 18.9388 10.6227 20.0583 8.03472C21.1778 5.44675 22.7638 3.52083 24.8163 2.25694C26.8688 0.932867 29.2634 0.180553 32 0V3.61111ZM13.7143 3.61111C10.7911 4.09259 8.64529 5.29629 7.27697 7.22222C5.90865 9.08796 5.16229 11.4051 5.0379 14.1736C5.28669 14.0532 5.56657 13.963 5.87755 13.9028C6.25073 13.7824 6.655 13.7222 7.09038 13.7222C8.89407 13.7222 10.3246 14.294 11.3819 15.4375C12.4393 16.581 12.9679 18.0255 12.9679 19.7708C12.9679 21.5764 12.3771 23.081 11.1953 24.2847C10.0758 25.4282 8.55199 26 6.62391 26C4.69582 26 3.10982 25.338 1.86589 24.0139C0.621963 22.6898 0 20.7338 0 18.1458C0 13.9931 0.559767 10.6227 1.6793 8.03472C2.79883 5.44675 4.38484 3.52083 6.43732 2.25694C8.4898 0.932867 10.9155 0.180553 13.7143 0V3.61111Z"
                                fill="black" />
                        </svg>
                    </span>
                </div>
                <div class="text-sm text-gray-600 mt-6">Платформа проста и удобна в использовании. Отличные
                    возможности, интуитивный интерфейс. Очень доволен!</div>
            </div>
            <div class="rounded-xl shadow-xl shadow-gray-100 py-12 px-6">
                <div class="flex items-center space-x-2">
                    <div class="bg-gray-100 w-16 h-16 rounded-full"></div>
                    <div>
                        <h2 class="font-semibold text-base font-medium leading-6 tracking-normal">Charles Patterson
                        </h2>
                        <div class="text-gray-600">CEO, Mercury Edu</div>
                    </div>
                    <span class="relative left-32">
                        <svg width="32" height="26" viewBox="0 0 32 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M32 3.61111C29.0768 4.09259 26.931 5.29629 25.5627 7.22222C24.1944 9.08796 23.448 11.4051 23.3236 14.1736C23.6346 14.0532 23.9456 13.963 24.2566 13.9028C24.6297 13.7824 25.034 13.7222 25.4694 13.7222C27.2731 13.7222 28.6725 14.294 29.6676 15.4375C30.725 16.581 31.2536 18.0255 31.2536 19.7708C31.2536 21.5764 30.6939 23.081 29.5743 24.2847C28.4548 25.4282 26.8999 26 24.9096 26C23.0437 26 21.4888 25.338 20.2449 24.0139C19.001 22.6898 18.379 20.7338 18.379 18.1458C18.379 13.9931 18.9388 10.6227 20.0583 8.03472C21.1778 5.44675 22.7638 3.52083 24.8163 2.25694C26.8688 0.932867 29.2634 0.180553 32 0V3.61111ZM13.7143 3.61111C10.7911 4.09259 8.64529 5.29629 7.27697 7.22222C5.90865 9.08796 5.16229 11.4051 5.0379 14.1736C5.28669 14.0532 5.56657 13.963 5.87755 13.9028C6.25073 13.7824 6.655 13.7222 7.09038 13.7222C8.89407 13.7222 10.3246 14.294 11.3819 15.4375C12.4393 16.581 12.9679 18.0255 12.9679 19.7708C12.9679 21.5764 12.3771 23.081 11.1953 24.2847C10.0758 25.4282 8.55199 26 6.62391 26C4.69582 26 3.10982 25.338 1.86589 24.0139C0.621963 22.6898 0 20.7338 0 18.1458C0 13.9931 0.559767 10.6227 1.6793 8.03472C2.79883 5.44675 4.38484 3.52083 6.43732 2.25694C8.4898 0.932867 10.9155 0.180553 13.7143 0V3.61111Z"
                                fill="black" />
                        </svg>
                    </span>
                </div>
                <div class="text-sm text-gray-600 mt-6">Платформа проста и удобна в использовании. Отличные
                    возможности, интуитивный интерфейс. Очень доволен!</div>
            </div>
        </div>
    </div>

    <!-- Feedback form -->
    <div class="max-w-7xl mx-auto flex mt-10 grid grid-cols-2 image-mask">
        <div class="flex-row grid gap-y-4 p-16 mt-8">
            <div class="text-2xl font-bold leading-13 tracking-normal ">Форма </br><span
                    class="text-blue-700">обратной связи</span>
            </div>
            <div>Ваше удобное средство для выражения мнения, задания вопросов или предоставления отзывов. Мы готовы
                слушать васи стремимся улучшить наши услуги на основе ваших пожеланий
            </div>
            <div class="flex">
                <div class="flex gap-5">
                    <div class="flex gap-5">
                        <img src="/images/call.png" alt="call rasmi" class="h-5 relative top-0.5 left-1">
                        998 90 821 2776
                    </div>
                    <div class="flex gap-5">
                        <div class="">
                            <img src="/images/mail-01.png" alt="sms rasmi" class="h-5 relative top-0.5 left-2">
                        </div>
                        <h1 class="relative left-2">email: help@mercuryedu.uz</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-row px-16 py-5">
            <form class="flex flex-col justify-center">
                <div class="flex flex-col ">
                    <span>Ваше имя</span>
                    <input type="text" name="price" id="price"
                        class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                </div>
                <div class="flex flex-col mt-2">
                    <span>Email</span>
                    <input type="text" name="price" id="price"
                        class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                </div>
                <div class="flex flex-col mt-2">
                    <span>Телефон</span>
                    <input type="text" name="price" id="price"
                        class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                </div>
                <div class="flex flex-col mt-2">
                    <span>Какой у вас проект?</span>
                    <textarea type="text"
                        class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6"> </textarea>
                </div>
                <button class="rounded-full gap-10 bg-blue-700 mt-5 p-4 text-white">Отправить</button>
            </form>
        </div>
    </div>

    <!-- FAQ -->
    <div class="max-w-7xl mx-auto">
        <div class="text-center text-5xl font-bold leading-14 tracking-normal my-16">Остались <span
                class="text-blue-700">вопросы?</span></div>
        <div class="grid grid-cols-2 gap-4  text-base font-normal leading-6 tracking-normal text-left">
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">
                Сколько курсов одновременно можно запустить в Mercury?
                <img src="{{ asset('/images/plus-sign.png') }}" alt="">
            </div>
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">Сколько курсов одновременно можно
                запустить в Mercury?
                <img src="{{ asset('/images/plus-sign.png') }}" alt="">
            </div>
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">Сколько курсов одновременно можно
                запустить в Mercury?
                <img src="{{ asset('/images/plus-sign.png') }}" alt="">
            </div>
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">Сколько курсов одновременно можно
                запустить в Mercury?
                <img src="{{ asset('/images/plus-sign.png') }}" alt="">
            </div>
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">Сколько курсов одновременно можно
                запустить в Mercury?
                <img src="{{ asset('/images/plus-sign.png') }}" alt="">
            </div>
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">Сколько курсов одновременно можно
                запустить в Mercury?
                <img src="{{ asset('/images/plus-sign.png') }}" alt="">
            </div>
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">Сколько курсов одновременно можно
                запустить в Mercury?
                <img src="{{ asset('/images/plus-sign.png') }}" alt="">
            </div>
            <div class="bg-gray-200 rounded-lg px-4 py-4 flex justify-between">Сколько курсов одновременно можно
                запустить в Mercury?
                <img src="{{ asset('/images/plus-sign.png') }}" alt="">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="bg-slate-950 mt-20 p-6">
        <div class="max-w-7xl mx-auto flex justify-between text-gray-600">
            <div>© 2023 OOO «Mercury Edu». Все права защищены</div>
            <div><img src="{{ asset('/images/mask-2.png') }}" alt="logo"></div>
            <div class="flex">
                <div>Политика конфиденциальности</div>
                <div>Условия использования</div>
            </div>
        </div>
    </div>
</body>

</html>
