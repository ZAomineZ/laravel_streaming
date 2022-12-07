<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Streaming website</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    @vite(['resources/sass/app.scss'])
</head>
<body>
<x-header :animes="$animesHeader"/>
@yield('content')
<x-footer/>
<script>
    let sliderAnimes = document.querySelectorAll('.slider__animes')
    sliderAnimes.forEach(item => {
        let totalSliderAnimes = 9

        let slider = item.querySelector('.slider')
        let valuePerSlide = parseFloat(slider.dataset.valuePerSlide) ?? 6.25

        let buttonPrev = item.querySelector('button[data-controls="prev"]')
        let buttonNext = item.querySelector('button[data-controls="next"]')

        buttonNext?.addEventListener('click', function (e) {
            let transform = getTransform(slider)
            console.log(transform)
            let newTransform = transform - valuePerSlide

            slider.style.transform = `translate3d(${newTransform}%, 0px, 0px)`
        })
        buttonPrev?.addEventListener('click', function (e) {
            let transform = getTransform(slider)
            let newTransform = transform + valuePerSlide

            slider.style.transform = `translate3d(${newTransform}%, 0px, 0px)`
        })
    })

    function getTransform(slider) {
        let transform = slider.style.transform
        let partsTransform = transform.split('translate3d(').filter(s => s.length !== 0)
        transform = partsTransform[0] ?? ""
        transform = transform.replace(", 0px, 0px)", "")
        transform = parseFloat(transform)

        return transform
    }
</script>
@yield('scripts')
</body>
</html>
